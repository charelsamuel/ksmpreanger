<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'link' => 'required|url',
            'image' => 'required|image'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->link = $request->input('link');
        $product->isPopular = $request->input('isPopular');
        $product->imageExtension = $request->image->extension();
        $product->save();

        // Simpan img_preview
        $image = $request->file('image');
        $image_preview = Image::make($image->getRealPath());
        $image_preview->resize(170, 170);
        $image_preview->save(public_path('images/product/' . "{$product->id}_preview.{$request->image->extension()}"));

        // Simpan img_content
        $image_content = Image::make($image->getRealPath());
        $image_content->resize(400, 400);
        $image_content->save(public_path('images/product/' . "{$product->id}_content.{$request->image->extension()}"));

        return redirect('/admin/product/create')->with('success', 'Data created!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function view(Request $request, $id)
    {
        $product = Product::find($id);
        return view('product.view', ['product' => $product]);
    }
    public function updateForm(Request $request, $id)
    {
        $product = Product::find($id);
        return view('product.update', ['product' => $product]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'link' => 'required|url',
            'image' => 'nullable'
        ]);

        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->link = $request->input('link');
        $product->isPopular = $request->input('isPopular');
        if ($request->hasFile('image')) {
            $product->imageExtension = $request->image->extension();
        }
        $product->save();

        if ($request->hasFile('image')) {
            // Simpan img_preview
            $image = $request->file('image');
            $image_preview = Image::make($image->getRealPath());
            $image_preview->resize(170, 170);
            $image_preview->save(public_path('images/product/' . "{$product->id}_preview.{$request->image->extension()}"));

            // Simpan img_content
            $image_content = Image::make($image->getRealPath());
            $image_content->resize(400, 400);
            $image_content->save(public_path('images/product/' . "{$product->id}_content.{$request->image->extension()}"));
        }
        return redirect("/admin/product/update-form/{$product->id}")->with('success', 'Data updated!');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $product = Product::find($id);
        if (File::exists(public_path("/images/product/{$product->id}_content.{$product->imageExtension}"))) {
            File::delete(public_path("/images/product/{$product->id}_content.{$product->imageExtension}"));
        }
        if (File::exists(public_path("/images/product/{$product->id}_preview.{$product->imageExtension}"))) {
            File::delete(public_path("/images/product/{$product->id}_preview.{$product->imageExtension}"));
        }
        Product::destroy($request->input('id'));
    }
}
