@extends('home.layouts.app')
@section('content')
    <div>
        <h1 class="text-center">User Profile</h1>
        <a class="btn btn-primary text-center" href="{{ route('user_profile.edit') }}">Edit</a>
    </div>

    <div class="row">
        <div class="col-8">
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Email :</b>
                {{ $user->email }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Phone
                    :</b>{{ isset($user->profile->phone) ? $user->profile->phone : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Country
                    :</b>{{ isset($user->profile->country) ? $user->profile->country : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">City :</b>
                {{ isset($user->profile->city) ? $user->profile->city : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Address :</b>
                {{ isset($user->profile->address) ? $user->profile->address : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Day Of Birth :</b>
                {{ isset($user->profile->day_of_birth) ? $user->profile->day_of_birth : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Gender :</b>
                {{ isset($user->profile->gender) ? $user->profile->gender : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Status :</b>
                {{ isset($user->profile->status) ? $user->profile->status : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Created At :</b>
                {{ isset($user->profile->created_at) ? $user->profile->created_at : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Updated At :</b>
                {{ isset($user->profile->updated_at) ? $user->profile->updated_at : null }}
            </p>
        </div>
        <div class="col-4">
            @if(!empty($user->profile->image))
                <img width="100%" src="<?php echo '/images/' . $user->profile->image; ?>" alt="">
            @else
                <img width="100%" src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
            @endif
        </div>
    </div>
@endsection
