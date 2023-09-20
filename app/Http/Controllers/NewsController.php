<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'preview' => 'required|max:255',
            'content' => 'required',
            'image' => 'required'
        ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->preview = $request->input('preview');
        $news->content = $request->input('content');
        $news->imageExtension = $request->image->extension();
        $news->save();

        // Save Image;
        $image       = $request->file('image');
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1200, 800);
        $image_resize->save(public_path('images/news/' . "{$news->id}.{$request->image->extension()}"));

        return redirect('/admin/news/create')->with('success', 'Data created!');
    }

    public function view(Request $request, $id)
    {
        $news = News::find($id);
        return view('news.view', ['news' => $news]);
    }

    public function updateForm(Request $request, $id)
    {
        $news = News::find($id);
        return view('news.update', ['news' => $news]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'preview' => 'required|max:255',
            'content' => 'required',
            'image' => 'required'
        ]);

        $news = News::find($request->input('id'));
        $news->title = $request->input('title');
        $news->preview = $request->input('preview');
        $news->content = $request->input('content');
        $news->imageExtension = $request->image->extension();
        $news->save();

        // Save Image;
        $request->image->move('images/news', "{$news->id}.{$request->image->extension()}");

        return redirect("/admin/news/update-form/{$news->id}")->with('success', 'Data updated!');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $news = News::find($id);
        if (File::exists(public_path("/images/news/{$news->id}.{$news->imageExtension}"))) {
            File::delete(public_path("/images/news/{$news->id}.{$news->imageExtension}"));
        }
        News::destroy($request->input('id'));
    }
}
