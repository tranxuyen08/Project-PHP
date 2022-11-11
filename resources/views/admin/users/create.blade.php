@extends('admin.layouts.app')
@section('title')
    Users Create Page
@endsection
@section('content')
<h1 class="font-italic text-center">Create User Page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.users.store') ?>" method="POST">
  @csrf
  <input type="text" name="email" placeholder="Enter your email">
  <input type="password" name="password" placeholder="Enter your password">
  <button class="btn btn-secondary" type="submit">Submit</button>
</form>
<a class="btn btn-primary" href="<?php echo route('admin.users.index') ?>">List Users Page</a>
@endsection