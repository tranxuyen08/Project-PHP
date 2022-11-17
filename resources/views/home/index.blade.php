@extends('home.layouts.app')
@section('content')
    <p>Danh muc san pham</p>
    <div class="row mb-4">

        @foreach ($categories as $category)
            <div class="col-3 mb-4">
                <a href="{{ route('categories.show', ['id' => $category->id]) }}">

                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $category->name }}</p>
                        </div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
    <p>San pham noi bac</p>
    <div class="row mb-4">
        @foreach ($products as $product)
            <div class="col-3 mb-4">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">
                    <div class="card">
                        <img id="{{ $product->id }}" src="https://ngocnguyen.vn/images/202210/goods_img/12642-p2-1665743447.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $product->name }}</p>
                            <p class="card-text">{{ number_format($product->amount) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
