@extends('layouts.app')

@section('content')

  <ul>

    <li>

      USER: {{ $user -> name}}

    </li>

    <li>

      ACTION: {{ $action }}

    </li>

    <li>

      CATEGORY: {{ $product -> category}}

    </li>

    <br>
    
    <li>

      PRICE: {{ $product -> price}}

    </li>
  </ul>
@endsection
