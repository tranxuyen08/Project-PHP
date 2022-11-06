<h1>Create Coupons Page</h1>

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
  <button type="submit">Submit</button>
</form>
<a href="<?php echo route('admin.coupons.index') ?>">Back Coupons Page</a>
