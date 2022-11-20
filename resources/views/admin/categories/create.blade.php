@extends('admin.layouts.app')
@section('title')
    Create Page Categories
@endsection
@section('content')
    <h1 class="font-italic text-center">Category Page Create</h1>

    <?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <?php endif ?>

    <form action="<?php echo route('admin.categories.store'); ?>" method="POST"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="">
        <input class="mb-4" type="file" name="image" class="form-control-file">
        <button class="btn btn-secondary" type="submit">Submit</button>
    </form>
    <a class="btn btn-primary" href="<?php echo route('admin.categories.index'); ?>">List Categories Page</a>
@endsection
