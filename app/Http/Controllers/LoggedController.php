<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LoggedController extends Controller
{

  public function __construct() {

    $this->middleware('auth');

  }

  public function destroy($id) {

    $product = Product::findOrFail($id);
    $product -> delete();

    return redirect() -> route('product_home');

  }
}
