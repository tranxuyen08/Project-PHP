<h1>list product orders</h1>
<a href="<?php echo route('admin.product_orders.create') ?>">Create</a>
<table>
  <tr>
    <th>ID</th>
    <th>Order ID</th>
    <th>Product ID</th>
    <th>Created At</th>
    <th>Updated At</th>
  </tr>
  <?php foreach($productOders as $productOrder) :?>
  <tr>
    <td><?php echo $productOrder->id ?></td>
    <td><?php echo $productOrder->order_id ?></td>
    <td><?php echo $productOrder->product_id ?></td>
    <td><?php echo $productOrder->created_at ?></td>
    <td><?php echo $productOrder->updated_at ?></td>
  </tr>
  <?php endforeach ?>

</table>
<a href="<?php echo route('admin.index') ?>">Home Page</a>
