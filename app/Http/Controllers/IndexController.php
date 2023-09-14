<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
  public function index()
  {
    $news = News::all();
    $products = Product::all();
    return view('index.index', ['news' => $news, 'products' => $products]);
  }
}
