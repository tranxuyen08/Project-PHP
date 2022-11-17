@extends('home.layouts.app')
@section('content')
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="https://picsum.photos/id/237/200/300" alt="">
        </div>
        <div class="col-6">
            <p>Name Product : {{ $product->name }}</p>
            <p>Category Name : {{ $product->category->name }}</p>
            <p>Amount : {{ number_format($product->amount) }}</p>
        </div>
    </div>
@endsection
