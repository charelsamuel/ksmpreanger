<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class homeController extends Controller
{
  public function home()
  {
    $news = News::all();
    $products = Product::all();
    return view('home.home', ['news' => $news, 'products' => $products]);
  }

  public function about()
  {
    return view('home.about');
  }

  public function gallery()
  {
    return view('home.gallery');
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
    return view('home.testimonials');
  }

  public function blog()
  {
    $news = News::all();
    return view('home.blog', ['news' => $news]);
  }

  public function contacts()
  {
    return view('home.contacts');
  }
}
