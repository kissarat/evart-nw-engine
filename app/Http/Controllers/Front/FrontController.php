<?php

namespace App\Http\Controllers\Front;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index()
    {
        $lastNews = Publication::where('published', true)
            ->where('type', 'news')
            ->get()
            ->sortBy('updated_at')
            ->take(3);

        $lastPublications = Publication::where('published', true)
            ->where('type', 'publication')
            ->get()
            ->sortBy('updated_at')
            ->take(3);

        $collection = $lastNews
            ->merge($lastPublications)
            ->shuffle();

        return view('public.index')->with([
            'Publications' => $collection
        ]);
    }
    public function news(){
        $lastNews = Publication::where('published', true)
            ->orderBy('updated_at')
            ->paginate(6);
        return view('public.news')->with([
            'Publications' => $lastNews
        ]);
    }

    public function news_single($id){
        $item = Publication::find($id);

        return view('public.publications.publication')->with([
            'Publication' => $item
        ]);
    }

    public function login(){
        return view('public.login');
    }

    //Evart Network

    protected $path_network = 'network';

    public function network_philosophy(){
        $name = 'philosophy';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }

    public function network_slogan(){
        $name = 'slogan';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }

    public function network_management(){
        $name = 'management';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }
    public function network_box(){
        $name = 'box';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }
    public function network_globalTv(){
        $name = 'globaltv';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }
    public function network_legalAspects(){
        $name = 'legalaspects';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }
    public function network_representatives(){
        $name = 'representatives';
        $lang = getLangRU_EN();

        return view_localized($lang, $this->path_network, $name);
    }
}
