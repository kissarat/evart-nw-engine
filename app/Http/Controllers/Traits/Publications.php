<?php
namespace App\Http\Controllers\Traits;

use App\Dashboard\Publication;
use Illuminate\Http\Request;
use File;

trait Publications{
    public function index()
    {
        return view('dashboard.publications.index')
            ->with([
                'Publications' => Publication::where('type', $this->type)->paginate($this->paginate),
                'type' => str_plural($this->type)
            ]);
    }


    public function getCreate()
    {
        return view('dashboard.publications.create')->with(['type' => str_plural($this->type)]);
    }

    public function postCreate(Request $request)
    {

        $this->validate($request, [
            'title_ru' => 'required',
            'title_en' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg|max:400'
        ]);


        $article = new Publication();
        $article->type = $this->type;
        $article->title_ru = $request['title_ru'];
        $article->title_en = $request['title_en'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];
        $article->posted_by = $request['user_id'];

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(storage_path('app/public/publications'), $imageName);
        $article->image_path = '/storage/publications/' . $imageName;

        $article->save();


        return redirect()->route('dashboard.' . str_plural($this->type) . '.index')->with([
            'status' => 'success',
            'msg' => html_strong($article['title_' . getLangRU_EN('locale_back')]) . ' ' . trans('dashboard.state.created')
        ]);
    }

    public function getUpdate($article_id)
    {
        $article = Publication::find($article_id);
        if(!$article)
            return view('errors.404');
        return view('dashboard.publications.create')->with([
            'type' => $this->type,
            'Item' => $article
        ]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:publications',
            'title_ru' => 'required',
            'title_en' => 'required'
        ]);


        $article = Publication::find($request['id']);
        $article->title_ru = $request['title_ru'];
        $article->title_en = $request['title_en'];
        $article->keywords = $request['tags'];
        $article->article_ru = $request['article_ru'];
        $article->article_en = $request['article_en'];



        if($request->image){
            File::delete(storage_path('app/public/publications/'.basename($article->image_path)));
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(storage_path('app/public/publications'), $imageName);
            $article->image_path = '/storage/publications/' . $imageName;
        }

        $article->save();


        return redirect()->route('dashboard.' . str_plural($this->type)  . '.index')->with([
            'status' => 'info',
            'msg' => html_strong($article['title_' . getLangRU_EN('locale_back')]) . ' ' . trans('dashboard.state.updated')
        ]);
    }

    public function delete(Request $request)
    {

        $this->validate($request, [
            'id' => 'required|exists:publications'
        ]);

        $article = Publication::find($request['id']);
        $title = $article['title_' . getLangRU_EN('locale_back')];
        $image = basename($article->image_path);
        $status = 'warning';

        if(!$article->delete()){
            $status = 'danger';
        }else{
            Storage::delete('public/publications/' . $image);
        }

        return redirect()->route('dashboard.'. str_plural($this->type)  .'.index')->with([
            'status' => $status,
            'msg' => html_strong($title) . ' ' . trans('dashboard.state.deleted')
        ]);
    }

    public function publish(Request $request){
        $this->validate($request, [
            'id' => 'required|exists:publications'
        ]);

        $article = Publication::find($request['id']);
        $article->published = !$article->published;
        $article->save();

        return redirect()->route('dashboard.' . str_plural($this->type) . '.index')->with([
            'status' => 'info',
            'msg' => html_strong($article['title_' . getLangRU_EN('locale_back')]) .' '. ($article->published ? trans('dashboard.state.published') : trans('dashboard.state.unpublished'))
        ]);
    }
}