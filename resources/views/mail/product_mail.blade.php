@extends('mail.layouts.app')

@section('content')

  <ul>

    <li>

      USER: {{ $user -> name}}

    </li>

    <br>

    <li>

      ACTION: {{ $action }}

    </li>

  </ul>

  <h2> PRODUCT </h2>

  <ul>

    <li>

      NAME: {{ $product -> name }}

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
