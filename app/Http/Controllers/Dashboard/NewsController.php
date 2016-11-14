<?php

namespace App\Http\Controllers\Dashboard;

use App\Dashboard\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NewsController extends Controller
{
    private function bold($text){
        return '<strong>' . $text .'</strong>';
    }
    public function index()
    {
        return view('dashboard.news.index')->with(['News' => News::paginate(5)]);
    }


    public function getCreate()
    {
        return view('dashboard.news.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);


        $article = new News();
        $article->title = $request['title'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];

        $article->save();


        return redirect()->route('dashboard.news.index')->with([
            'status' => 'success',
            'msg' => $this->bold($article->title) . ' has been created'
        ]);
    }

    public function getUpdate($article_id)
    {
        $article = News::find($article_id);
        if(!$article)
            return view('errors.404');
        return view('dashboard.news.create')->with(['Item' => $article]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:news',
            'title' => 'required'
        ]);


        $article = News::find($request['id']);
        $article->title = $request['title'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];

        $article->save();


        return redirect()->route('dashboard.news.index')->with([
            'status' => 'info',
            'msg' => $this->bold($article->title) . ' has been updated'
        ]);
    }

    public function delete(Request $request)
    {

        $this->validate($request, [
            'id' => 'required|exists:news'
        ]);

        $article = News::find($request['id']);
        $title = $article->title;
        $status = 'warning';

        if(!$article->delete()){
            $status = 'danger';
        }

        return redirect()->route('dashboard.news.index')->with([
            'status' => $status,
            'msg' => $this->bold($title) . ' has been deleted'
        ]);




    }
}
