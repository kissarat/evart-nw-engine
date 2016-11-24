<?php

namespace App\Http\Controllers\Front;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{

    private function generateCases(){
        return collect([
            createCase('Econom', 90, '#', ["office", 'count:176']),
            createCase('Short', 900, '#', ["box", "tv:0", 'count:12']),
            createCase('Start', 750, '#', ["box", "tv:1", 'count:122']),
            createCase('Smart', 1500, '#', ["box", "tv:2", 'count:47']),
            createCase('Business', 4500, '#', ["box", "tv:3", 'count:45']),
            createCase('Premium ', 9000, '#', ["box", "tv:5", 'count:29']),
            createCase('VIP', 21000, '/', ["box", "tv:6", 'count:12']),
            createCase('Pragmatic ', 500, '#', ["box", "tv:1", 'count:200']),
            createCase('Priority', 1000, '#', ["box", "tv:1", 'count:100']),
        ]);
    }

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
            'Publications' => $collection,
            'cases' => $this->generateCases()
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
        return view('public.articles.network.philosophy');
    }

    public function network_slogan(){
        return view('public.articles.network.slogan');
    }

    public function network_management(){
        return view('public.articles.network.management');
    }
    public function network_box(){
        return view('public.articles.network.box');
    }
    public function network_globalTv(){
        return view('public.articles.network.globaltv');
    }
    public function network_legalAspects(){
        return view('public.articles.network.legalaspects');
    }
    public function network_representatives(){
        return view('public.articles.network.representatives');
    }

    //Evart Career


    public function career_marketing(){
        return view('public.articles.career.marketing');
    }

    public function career_cases(){
        return view('public.articles.career.cases')->with([
            'cases' => $this->generateCases()
        ]);
    }

    public function career_affiliateProgram(){
        return view('public.articles.career.affiliateprogram');
    }

    public function career_statuses(){
        return view('public.articles.career.statuses');
    }

    public function career_financialSafety(){
        return view('public.articles.career.safety');
    }
}
