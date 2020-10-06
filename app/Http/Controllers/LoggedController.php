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

  public function create() {

    return view('product_create');

  }

  public function store(Request $request) {

    $data = $request -> all();
    $product = Product::create($data);

    $user = Auth::user();
    $action = "CREATE";

    Mail::to("admin@boolean.it")
       -> send(new UserAction($user, $product, $action));

    return redirect() -> route('product_home');

  }

  public function edit($id) {

    $product = Product::findOrFail($id);

    return view('product_edit', compact('product'));

  }

  public function update(Request $request, $id) {

   $data = $request -> all();
   $product = Product::findOrFail($id);
   $product -> update($data);

   $user = Auth::user();
   $action = "UPDATE";

   Mail::to("admin@boolean.it")
      -> send(new UserAction($user, $product, $action));

   return redirect() -> route('product_home');

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
