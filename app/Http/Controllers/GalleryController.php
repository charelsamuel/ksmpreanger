<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index', ['gallery' => $gallery]);
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required'
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->input('title');
        $gallery->imageExtension = $request->image->extension();
        $gallery->save();

        // Save Image;
        $image       = $request->file('image');
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1200, 800);
        $image_resize->save(public_path('images/gallery/' . "{$gallery->id}.{$request->image->extension()}"));

        return redirect('/admin/gallery/create')->with('success', 'Data created!');
    }

    public function view(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.view', ['gallery' => $gallery]);
    }

    public function updateForm(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.update', ['gallery' => $gallery]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'image' => 'required'
        ]);

        $gallery = Gallery::find($request->input('id'));
        $gallery->title = $request->input('title');
        $gallery->imageExtension = $request->image->extension();
        $gallery->save();

        // Save Image;
        $request->image->move('images/gallery', "{$gallery->id}.{$request->image->extension()}");

        return redirect("/admin/gallery/update-form/{$gallery->id}")->with('success', 'Data updated!');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $gallery = Gallery::find($id);
        if (File::exists(public_path("/images/gallery/{$gallery->id}.{$gallery->imageExtension}"))) {
            File::delete(public_path("/images/gallery/{$gallery->id}.{$gallery->imageExtension}"));
        }
        Gallery::destroy($request->input('id'));
    }
}
