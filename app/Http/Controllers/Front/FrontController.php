<?php

namespace App\Http\Controllers\Front;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{

    protected $path_network = 'network';
    protected $path_career = 'career';

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

    public function network_philosophy(){
        $name = 'philosophy';

        return view_localized($this->path_network, $name);
    }

    public function network_slogan(){
        $name = 'slogan';

        return view_localized($this->path_network, $name);
    }

    public function network_management(){
        $name = 'management';

        return view_localized($this->path_network, $name);
    }
    public function network_box(){
        $name = 'box';

        return view_localized($this->path_network, $name);
    }
    public function network_globalTv(){
        $name = 'globaltv';

        return view_localized($this->path_network, $name);
    }
    public function network_legalAspects(){
        $name = 'legalaspects';

        return view_localized($this->path_network, $name);
    }
    public function network_representatives(){
        $name = 'representatives';

        return view_localized($this->path_network, $name);
    }

    //Evart Career


    public function career_marketing(){
        $name = 'marketing';

        return view_localized($this->path_career, $name);
    }

    /*TODO:Cases*/
    public function career_cases(){
        $name = 'marketing';

        return view_localized($this->path_career, $name);
    }

    public function career_affiliateProgram(){
        $name = 'affiliateprogram';

        return view_localized($this->path_career, $name);
    }

    public function career_statuses(){
        $name = 'statuses';

        return view_localized($this->path_career, $name);
    }

    public function career_financialSafety(){
        $name = 'safety';

        return view_localized($this->path_career, $name);
    }
}
