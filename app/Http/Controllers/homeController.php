<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class homeController extends Controller
{
  public function home()
  {
    $news = News::orderByDesc('id')
      ->limit(4)->get();
    $products = Product::all();
    return view('home.home', ['news' => $news, 'products' => $products]);
  }

  public function about()
  {
    return view('home.about');
  }

  public function gallery()
  {
    $galleries = Gallery::orderByDesc('id')->paginate(8);
    return view('home.gallery', ['galleries' => $galleries]);
  }

  public function products()
  {
    $products = Product::all();
    return view('home.product', ['products' => $products]);
  }

  public function where()
  {
    return view('home.where');
  }

  public function testimonials()
  {
      $testimonials = Testimonial::orderByDesc('id')->paginate(3);
      return view('home.testimonials', ['testimonials' => $testimonials]);
  }


  public function blogs()
  {
    $news = News::orderByDesc('id')->paginate(3);
    return view('home.blogs', ['news' => $news]);
  }

  public function blog(Request $request, $id)
  {
    $news = News::find($id);
    return view('home.blog', ['news' => $news]);
  }

  public function contacts()
  {
    return view('home.contacts');
  }
}
