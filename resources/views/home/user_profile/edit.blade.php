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
<form action="{{ route('user_profile.update') }}" method="POST">
  @csrf
  @method("PUT")
  <input type="text" name="phone" placeholder="Phone Number" value="">
  <input type="text" name="city" placeholder="City" value="">
  <input type="text" name="country" placeholder="Country" value="">
  <input type="text" name="address" placeholder="Address" value="">
  <select name="gender">
    <option value="0">Nam</option>
    <option value="1">Nu</option>
  </select>
  <input type="date" name="day_of_birth" placeholder="Day Of Birth" value="">
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection

