@extends('home.layouts.app')
@section('content')
    <p>Danh muc san pham</p>
    <div class="row mb-4">

        @foreach ($categories as $category)
            <div class="col-3 mb-4">
                <a href="{{ route('categories.show', ['id' => $category->id]) }}">

                    <div class="card">
                        <img src="<?php echo '/images/' . $category->image ?>" class="card-img-top" alt="...">
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
                        <?php
                            $src = !empty($product->photo) ? $product->photo->src : '';
                        ?>
                        <img id="{{ $product->id }}" src="<?php echo '/images/' . $src ?>" class="card-img-top" alt="...">
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
