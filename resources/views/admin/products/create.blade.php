@extends('admin.layouts.app')
@section('title')
    Create Cage Products
@endsection
@section('content')
    <h1 class="font-italic text-center">create page Products</h1>
    <?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <?php endif ?>
    <form action="<?php echo route('admin.products.store'); ?>"method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter your name">
        <select name="category_id" id="">
            <option value=""></option>
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach ?>
        </select>
        <input type="text" name="amount" id="" placeholder="Enter your amount">
        <input class="mb-4" type="file" name="photos[]" class="form-control-file" multiple required>
        <button class="btn btn-secondary" type="submit">Submit</button>
    </form>
    <a class="btn btn-primary" href="<?php echo route('admin.products.index'); ?>">Home Products</a>
@endsection
