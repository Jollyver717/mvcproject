<?php

namespace App\Http\Controllers;
use App\Models\ModelName;

class PagesController extends Controller
{

  public function index()
  {
    $ModelName = new ModelName();
    return view('index')-> with('content', $ModelName-> index());

  }
  public function about(){
    $ModelName = new ModelName();
    return view('pages.about')->with('AboutUs', $ModelName-> about());

  }
  public function products(){
    $ModelName = new ModelName();
    return view('pages.products')->with('Products', $ModelName-> products());

  }
  public function store(){
    $ModelName = new ModelName();
    return view('pages.store')->with('Store', $ModelName-> store());

  }
}