<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class HomeController extends Controller
{
  public function home()
  {
    $news = News::orderByDesc('id')
      ->limit(4)->get();
    $products = Product::where('isPopular', 1)->get();
    $testimonials = Testimonial::all();
    return view('home.home', ['news' => $news, 'products' => $products, 'testimonials' => $testimonials]);
  }

  public function products()
  {
    $products = Product::paginate(6);
    return view('home.products', ['products' => $products]);
  }

  public function where()
  {
    return view('home.where');
  }

  public function gallery()
  {
    $galleries = Gallery::orderByDesc('id')->paginate(8);
    return view('home.gallery', ['galleries' => $galleries]);
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

  public function product(Request $request, $id)
  {
    $product = Product::find($id);
    return view('home.product', ['product' => $product]);
  }

  public function contacts()
  {
    return view('home.contacts');
  }
}
