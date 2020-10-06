@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                  {{ $product -> name}}

                </div>

                <div class="card-body">

                  <ul>

                    <li>

                      CATEGORY: {{ $product -> category}}

                    </li>
                    <br>
                    <li>

                      PRICE: {{ $product -> price}}

                    </li>
                  </ul>
                  <br><br>

                  @auth

                    <a class="btn btn-primary" href="">EDIT</a>
                    <a class="btn btn-danger" href="{{route('product_destroy', $product -> id)}}">DELETE</a>

                  @else

                    <span>If you want to edit or delete, you have to log in</span>

                  @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
