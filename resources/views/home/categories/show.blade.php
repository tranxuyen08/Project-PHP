@extends('home.layouts.app')
@section('content')

    <h3>San pham noi bac</h3>
    <div class="row mb-4">
        @foreach ($category->products as $product)
            <?php
                $src = !empty($product->photo) ? $product->photo->src : '';
            ?>
            <div class="col-3 mb-4">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">
                    <div class="card">
                        <img src="<?php echo '/images/' . $src ?>" class="card-img-top" alt="...">
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
