<h1>Create Orders</h1>

<form action="<?php echo route('admin.orders.store') ?>" method="POST">
  @csrf
  <input type="text" name="user_id" id="" placeholder="Enter your user id">
  <input type="text" name="amount" id="" placeholder="Enter your amount">
  <input type="text" name="coupon_id" id="" placeholder="Enter your coupn id">
  <input type="text" name="status" id="" placeholder="Enter your status">
  <button type="submit">Submit</button>
</form>


<a href="<?php echo route('admin.orders.index') ?>">Home Orders</a>