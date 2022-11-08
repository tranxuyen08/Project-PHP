<h1>Show list Orders</h1>

<a href="<?php echo route('admin.orders.create') ?>">Create</a>

<table>
  <tr>
    <th>ID</th>
    <th>User ID</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Coupons ID</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
  </tr>
  <?php foreach($orders as $order) :?>
  <tr>
    <tr>
      <td><?php echo $order->id ?></td>
      <td><?php echo $order->user_id ?></td>
      <td><?php echo $order->amount ?></td>
      <td><?php echo $order->status ?></td>
      <td><?php echo $order->coupons_id ?></td>
      <td><?php echo $order->created_at ?></td>
      <td><?php echo $order->updated_at ?></td>
      <td>
        <a href="<?php echo route('admin.orders.edit', $order->id)?>">Edit</a>
      </td>
      <td>
        <form action="<?php echo route('admin.orders.delete', $order->id) ?> " method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
  </tr>
  <?php endforeach ?>
</table>



<a href="<?php echo route('admin.index') ?>">Home Orders</a>
