<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{

  public function index() {

    $products = Product::all();

    return view('product_home', compact('products'));

  }

  public function show($id) {

    $product = Product::findOrFail($id);

    return view('product_show', compact('product'));
    
  }
}
