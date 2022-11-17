@extends('home.layouts.app')
@section('content')

    <p>San pham noi bac</p>
    <div class="row mb-4">
        @foreach ($category->products as $product)
            <div class="col-3 mb-4">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">
                    <div class="card">
                        <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{$product->name}}</p>
                            <p class="card-text">{{ number_format($product->amount) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
