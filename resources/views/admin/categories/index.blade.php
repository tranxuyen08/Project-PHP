<h1>Show List Category Page</h1>
<a href="<?php echo route('admin.index') ?>">Admin Page</a>
<p>Total : <?php echo $total ?></p>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>

  </tr>
  <?php foreach ($categories as $category) : ?>
  <tr>
    <td>
      <?php echo $category->id; ?>
    </td>
    <td>
      <?php echo $category->name; ?>
    </td>
    <td>
      <?php echo $category->created_at; ?>
    </td>
    <td>
      <?php echo $category->updated_at; ?>
    </td>
    <td>
      <a href="<?php echo route('admin.categories.edit', $category->id) ?>">Edit</a>
    </td>
    <td>
      <form method="POST" action="<?php echo route('admin.categories.delete', $category->id) ?>">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  <?php endforeach ?>
  <a href="<?php echo route('admin.categories.create') ?>">Create</a>
</table>
<ul>
  <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
  <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php endfor ?>
</ul>
