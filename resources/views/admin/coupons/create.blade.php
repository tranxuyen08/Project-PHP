@extends('admin.layouts.app')
@section('title')
    Create Page Coupons
@endsection
@section('content')

<h1 class="font-italic text-center">Create Coupons Page</h1>

<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.coupons.store') ?>"method="POST">
  @csrf
  <input type="text" name="code" id="" placeholder="Enter Your Code">
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
<a class="btn btn-primary" href="<?php echo route('admin.coupons.index') ?>">Back Coupons Page</a>
@endsection
