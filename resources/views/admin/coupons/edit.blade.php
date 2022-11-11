@extends('admin.layouts.app')
@section('title')
    Edit Page Coupons
@endsection
@section('content')
<h1 class="font-italic text-center">Edit Page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.coupons.update', $coupon->id)?>" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="code" id="" value="<?php echo $coupon->code ?>">
  <button class="btn btn-secondary" type="submit">Update</button>
</form>
<a class="btn btn-primary" href="<?php echo route('admin.coupons.index') ?>">Back Coupons Page</a>
@endsection
