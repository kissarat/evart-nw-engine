<?php

namespace App\Http\Controllers\Front;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

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
            ->paginate(3);
        return view('public.news')->with([
            'Publications' => $lastNews
        ]);
    }

    public function news_single($id){
        $item = Publication::find($id);

        $view = 'public.publications.publication';
        if($item->type === 'news')
            $view = 'public.publications.news';

        return view($view)->with([
            'Publication' => $item
        ]);
    }
}
