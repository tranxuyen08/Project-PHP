@extends('admin.layouts.app')
@section('title')
    Edit Page Categories
@endsection
@section('content')
    <h1 class="font-italic text-center">Show Edit Page</h1>
    <?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <?php endif ?>
    <?php
        $src = !empty($category->image) ? $category->image : '';
    ?>
    <img width="100" src="<?php echo '/images/' . $src; ?>" alt="">
</td>
    <form action="<?php echo route('admin.categories.update', $category->id); ?>" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="" placeholder="Enter your Name" value="<?php echo $category->name; ?>">
        <input class="mb-4" type="file" name="image" class="form-control-file">
        <button class="btn btn-secondary" type="submit">Submit</button>
    </form>
    <a class="btn btn-primary" href="<?php echo route('admin.categories.index'); ?>">List Categories Page</a>
@endsection
