<?php

namespace App\Http\Controllers;

use App\Product;
use App\Mail\UserAction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoggedController extends Controller
{

  public function __construct() {

    $this->middleware('auth');

  }

  public function destroy($id) {

    $product = Product::findOrFail($id);
    $product -> delete();

    $user = Auth::user();
    $action = "DELETE";

    Mail::to("admin@boolean.it")
       -> send(new UserAction($user, $product, $action));

    return redirect() -> route('product_home');

  }
}
