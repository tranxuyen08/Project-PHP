@extends('admin.layouts.app')
@section('title')
Edit Page Products
@endsection
@section('content')
<h1 class="font-italic text-center">Edit Page Products</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
@foreach($product->photos as $photo)
<?php
$src = !empty($photo) ? $photo->src : '';
?>
<img width="100" src="<?php echo '/images/' . $src ?>" alt="">
@endforeach
<form action="<?php echo route('admin.products.update', $product->id)?>" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <input type="text" name="name" id="" value="<?php echo $product->name ?>">
  <select name="category_id" id="">
    <option value=""></option>
    <?php foreach ($categories as $category): ?>
        <option <?php echo $product->id == $category->id ? 'selected' : '';  ?> value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
    <?php endforeach ?>
  </select>
  <input type="text" name="amount" id="" value="<?php echo $product->amount ?>">
  <input class="mb-4" type="file" name="photos[]" class="form-control-file" multiple required>
  <button class="btn btn-secondary" type="submit">Update</button>
</form>
<a class="btn btn-primary" href="<?php echo route('admin.products.index') ?>">Back Products Page</a>
@endsection