<a href="<?php echo route('admin.index') ?>">Admin Page</a>

<h1>List Coupons page</h1>
<p>Total : <?php echo $total?></p>
<a href="<?php echo route('admin.coupons.create') ?>">Create</a>
<table>
  <tr>
    <th>ID</th>
    <th>Code</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
  </tr>
  <?php foreach($coupons as $coupon) :?>
  <tr>
    <td>
      <?php echo $coupon->id?>
    </td>
    <td>
      <?php echo $coupon->code?>
    </td>
    <td>
      <?php echo $coupon->created_at?>
    </td>
    <td>
      <?php echo $coupon->updated_at?>
    </td>
    <td>
      <a href="<?php echo route('admin.coupons.edit', $coupon->id) ?>">Edit</a>
    </td>
    <td>
      <form action="<?php echo route('admin.coupons.delete', $coupon->id) ?>" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  <?php endforeach ?>
</table>
<ul>
  <?php for($i = 1; $i <= $totalPage; $i++): ?>
    <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php endfor ?>
</ul>