@extends('home.layouts.app')
@section('content')
    <div class="row">
        <div class="col-6">
            @foreach ($product->photos as $photo)
                <?php
                    $photo = $product->photo;
                    $src = !empty($photo) ? '/images/' . $photo->src : 'https://macmall.vn/uploads/pro-m1-13inch-2020-gray_1605757126.png';

                    $alt = !empty($photo) ? $photo->alt : '';
                ?>
                <img src="<?php echo $src; ?>" class="card-img-top" alt="<?php echo $alt; ?>">
            @endforeach
        </div>
        <div class="col-6">
            <p>Name Product : {{ $product->name }}</p>
            <p>Category Name : {{ $product->category->name }}</p>
            <p>Amount : {{ number_format($product->amount) }}</p>
        </div>
    </div>
@endsection
