<h1>Create Page</h1>

<form action="<?php echo route('admin.product_orders.store') ?>" method="POST">
  @csrf
  <input type="text" name="order_id" id="" placeholder="Enter Order Id">
  <input type="text" name="product_id" id="" placeholder="Enter Product Id">
  <button type="submit">Submit</button>
</form>