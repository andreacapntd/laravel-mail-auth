@extends('layouts.app')

@section('content')

  <form action=" {{ route('product_update', $product -> id) }}" method="post">

    @csrf
    @method('POST')

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">NAME</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $product -> name }}">
      </div>
      <div class="form-group col-md-6">
        <label for="category">CATEGORY</label>
        <input type="text" name="category" class="form-control" id="category" value="{{ $product -> category }}">
      </div>
    </div>
    <div class="form-group">
      <label for="price">PRICE</label>
      <input type="number" name="price" class="form-control" id="price" value="{{ $product -> price }}">
    </div>

    <button type="submit" class="btn btn-primary">SAVE</button>

</form>
@endsection
