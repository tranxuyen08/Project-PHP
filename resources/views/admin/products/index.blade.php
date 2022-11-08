<h1>Show list Product</h1>
<p>Total : <?php echo $total ?></p>
<a href="<?php echo route('admin.products.create') ?>">Create</a>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Amount</th>
    <th>Categoriy Id</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
  </tr>
  <?php foreach($products as $product) :?>
  <tr>
    <td>
      <?php echo $product->id ?>
    </td>
    <td>
      <?php echo $product->name ?>
    </td>
    <td>
      <?php echo $product->amount ?>
    </td>
    <td>
      <?php echo $product->category->name ?>
    </td>
    <td>
      <?php echo $product->created_at ?>
    </td>
    <td>
      <?php echo $product->updated_at ?>
    </td>
    <td>
      <a href="<?php echo route('admin.products.edit', $product->id) ?>">Edit</a>
    </td>
    <td>
      <form action="<?php echo route('admin.products.delete', $product->id) ?>" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  <?php endforeach ?>
</table>
<a href="<?php echo route('admin.index') ?>">Admin Home Page</a>