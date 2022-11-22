@extends('home.layouts.app')
@section('content')
    <div>
        <h1 class="text-center">User Profile</h1>
        <a class="btn btn-primary text-center" href="{{ route('user_profile.edit') }}">Edit</a>
    </div>

    <div class="row">
        <div class="col-8">
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Email :</b> {{ $user->email }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Phone :</b>{{ isset($user->profile) ? $user->profile->phone : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Country :</b>{{ isset($user->profile) ? $user->profile->country : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">City :</b> {{ isset($user->profile) ? $user->profile->city : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Address :</b> {{ isset($user->profile) ? $user->profile->address : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Day Of Birth :</b> {{ isset($user->profile) ? $user->profile->day_of_birth : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Gender :</b> {{ isset($user->profile) ? $user->profile->gender : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Status :</b> {{ isset($user->profile) ? $user->profile->status : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Created At :</b> {{ isset($user->profile) ? $user->profile->created_at : null }}</p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Updated At :</b> {{ isset($user->profile) ? $user->profile->updated_at : null }}</p>
        </div>
        <div class="col-4">
            {{-- @foreach ($product->photos as $photo)
                <?php
                    $photo = $product->photo;
                    $src = !empty($photo) ? '/images/' . $photo->src : 'https://macmall.vn/uploads/pro-m1-13inch-2020-gray_1605757126.png';

                    $alt = !empty($photo) ? $photo->alt : '';
                ?>
                <img src="<?php echo $src; ?>" class="card-img-top" alt="<?php echo $alt; ?>">
            @endforeach --}}
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4zK_V8ysvyJ9ZNpa2gzdq2sovk5CSq-S2dg&usqp=CAU"
                alt="">
        </div>
    </div>
@endsection
