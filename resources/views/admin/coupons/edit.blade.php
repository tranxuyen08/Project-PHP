<h1>Edit Page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.coupons.update', $coupon->id)?>" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="code" id="" value="<?php echo $coupon->code ?>">
  <button type="submit">Update</button>
</form>
<a href="<?php echo route('admin.coupons.index') ?>">Back Coupons Page</a>
