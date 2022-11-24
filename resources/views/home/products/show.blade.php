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
            <p><b>Name Product :</b> {{ $product->name }}</p>
            <p><b>Category Name :</b> {{ $product->category->name }}</p>
            <p><b>Amount :</b> {{ number_format($product->amount) }}</p>
                   <div class="col-sm-4"></div>
                   <div class="col-sm-4 col-sm-offset-4">
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i>-</button>
                           </div>
                           <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                           <div class="input-group-prepend">
                               <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i>+</button>
                           </div>
                       </div>
                   </div>
            <a href="#" class="btn btn-primary">Click Buy</a>
        </div>
    </div>
@endsection
