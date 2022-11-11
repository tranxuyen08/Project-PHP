@extends('admin.layouts.app')
@section('title')
Dashboard Admin
@endsection
@section('content')
<ul class="">
  <li><a class="btn btn-primary" href="<?php echo route('admin.categories.index') ?>">List Categories</a></li>
  <li><a class="btn btn-primary" href="<?php echo route('admin.coupons.index') ?>">List Coupons</a></li>
  <li><a class="btn btn-primary" href="<?php echo route('admin.products.index') ?>">List Products</a></li>
  <li><a class="btn btn-primary" href="<?php echo route('admin.orders.index') ?>">List Orders</a></li>
  <li><a class="btn btn-primary" href="{{ route('admin.users.index') }}">List Users</a></li>
</ul>
@endsection
@section('js')
<script>
  console.log(123);
</script>
@endsection