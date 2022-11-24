@extends('home.layouts.app')
@section('content')
    <?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <?php endif ?>
    <form class="row" action="{{ route('user_profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-8">
          <p>
            <b>Email :<?php echo $user->email ?></b>
        </p>
            <p>
                <b>Phone Number :</b>
                <input class="form-control" type="text" name="phone" placeholder="Phone Number" value="{{ isset($user->profile) ? $user->profile->phone : null }}"
                    wire:model="phone">
            </p>
            <p>
                <b>City :</b>
                <input class="form-control" type="text" name="city" placeholder="City" value="{{ isset($user->profile) ? $user->profile->city : null }}"
                    wire:model="city">
            </p>
            <p>
                <b>Country :</b>
                <input class="form-control" type="text" name="country" placeholder="Country" value="{{ isset($user->profile) ? $user->profile->country : null }}"
                    wire:model="country">
            </p>
            <p>
                <b>Address :</b>
                <input class="form-control" type="text" name="address" placeholder="Address" value="{{ isset($user->profile) ? $user->profile->address : null }}"
                    wire:model="address">
            </p>
            <select class="form-control" name="gender" value="{{ isset($user->profile) ? $user->profile->gender : null }}">
                <option value="0">Nam</option>
                <option value="1">Nu</option>
            </select>
            <p>
                <b>Day Of birth :</b>
                <input class="form-control" type="date" name="day_of_birth" placeholder="Day Of birth" value="{{ isset($user->profile) ? $user->profile->day_of_birth : null }}"
                    wire:model="day_of_birth">
            </p>
        </div>
        <div class="col-4">
            <?php
            $src = !empty($profile->image) ? $profile->image : '';
            ?>
            <img width="100%" src="<?php echo '/images/' . $src; ?>" alt="">
            <input name="image" type="file" class="form-control" value="{{ isset($user->profile) ? $user->profile->image : null }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection

