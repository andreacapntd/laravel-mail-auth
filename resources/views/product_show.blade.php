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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
