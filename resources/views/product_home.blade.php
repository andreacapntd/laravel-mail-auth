@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PRODUCTS</div>

                <a class="btn btn-primary" href="{{route('product_create')}}">NEW PRODUCT</a>

                <div class="card-body">

                  <ul>

                    @foreach ($products as $product)

                      <li>

                        <a href="{{ route('product_show', $product -> id) }}">

                          {{ $product -> name}}

                        </a>

                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
