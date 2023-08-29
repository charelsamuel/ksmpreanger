<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
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
        $news->save();

        // Save Image;
        $request->image->move('images/news', "{$news->id}.{$request->image->extension()}");

        return redirect('/news/create')->with('success', 'Data created!');
    }
}
