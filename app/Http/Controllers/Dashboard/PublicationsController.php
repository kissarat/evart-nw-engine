<?php

namespace App\Http\Controllers\Dashboard;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PublicationsController extends Controller
{
    private function bold($text){
        return '<strong>' . $text .'</strong>';
    }
    public function index()
    {
        return view('dashboard.publications.index')->with(['Publications' => Publication::paginate(5)]);
    }


    public function getCreate()
    {
        return view('dashboard.publications.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg|max:400'
        ]);


        $article = new Publication();
        $article->title = $request['title'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(storage_path('app/public/publications'), $imageName);
        $article->image_path = '/storage/publications/' . $imageName;

        $article->save();


        return redirect()->route('dashboard.publications.index')->with([
            'status' => 'success',
            'msg' => $this->bold($article->title) . ' has been created'
        ]);
    }

    public function getUpdate($article_id)
    {
        $article = Publication::find($article_id);
        if(!$article)
            return view('errors.404');
        return view('dashboard.publications.create')->with(['Item' => $article]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:news',
            'title' => 'required'
        ]);


        $article = Publication::find($request['id']);
        $article->title = $request['title'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];

        $request->image->move(storage_path('app/public/publications'), basename($article->image_path));

        $article->save();


        return redirect()->route('dashboard.publications.index')->with([
            'status' => 'info',
            'msg' => $this->bold($article->title) . ' has been updated'
        ]);
    }

    public function delete(Request $request)
    {

        $this->validate($request, [
            'id' => 'required|exists:publications'
        ]);

        $article = Publication::find($request['id']);
        $title = $article->title;
        $image = basename($article->image_path);
        $status = 'warning';

        if(!$article->delete()){
            $status = 'danger';
        }else{
            Storage::delete('public/publications/' . $image);
        }

        return redirect()->route('dashboard.publications.index')->with([
            'status' => $status,
            'msg' => $this->bold($title) . ' has been deleted'
        ]);
    }

    public function publish(Request $request){
        $this->validate($request, [
            'id' => 'required|exists:news'
        ]);

        $article = Publication::find($request['id']);
        $article->published = !$article->published;
        $article->save();

        return redirect()->route('dashboard.news.index')->with([
            'status' => 'info',
            'msg' => $this->bold($article->title) . ' has been ' . $article->published ? 'published' : 'unpublished'
        ]);
    }
}
