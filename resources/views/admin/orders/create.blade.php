@extends('admin.layouts.app')
@section('title')
    Create Orders Page
@endsection
@section('content')
    <h1 class="font-italic text-center">Create Orders</h1>

    <form action="<?php echo route('admin.orders.store'); ?>" method="POST">
        @csrf
        <input type="text" name="user_id" id="" placeholder="Enter your user id">
        <input type="text" name="amount" id="" placeholder="Enter your amount">
        <input type="text" name="coupon_id" id="" placeholder="Enter your coupn id">
        <input type="text" name="status" id="" placeholder="Enter your status">
        <button class="btn btn-secondary" type="submit">Submit</button>
    </form>

    <a class="btn btn-primary" href="<?php echo route('admin.orders.index'); ?>">Home Orders</a>
@endsection
