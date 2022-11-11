@extends('admin.layouts.app')
@section('title')
Edit Orders Page
@endsection
@section('content')
<h1 class="font-italic text-center">Edit Orders Page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.orders.update', $order->id)?>" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="user_id" id="" value="<?php echo $order->user_id ?>">
  <input type="text" name="amount" id="" value="<?php echo $order->amount ?>">
  <input type="text" name="status" id="" value="<?php echo $order->status ?>">
  <input type="text" name="coupon_id" id="" value="<?php echo $order->coupon_id ?>">
  <button class="btn btn-secondary" type="submit">Update</button>
</form>

<a class="btn btn-primary" href="<?php echo route('admin.orders.index') ?>">Back Orders Page</a>
@endsection