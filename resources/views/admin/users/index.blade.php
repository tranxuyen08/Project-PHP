<h1>Hello user page</h1>
<a href="<?php echo route('admin.users.create') ?>">Create</a>
<table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Pasword</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
  </tr>
  <?php foreach($users as $user) : ?>
  <tr>
    <td><?php echo $user->id ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo md5($user->password) ?></td>
    <td><?php echo $user->created_at ?></td>
    <td><?php echo $user->updated_at ?></td>
    <td>
      <a href="<?php echo route('admin.users.edit', $user->id) ?>">Edit</a>
    </td>
    <td>
      <form action="<?php echo route('admin.users.delete', $user->id) ?>" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  <?php endforeach ?>
</table>
<ul>
  <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
  <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php endfor ?>
</ul>
<a href="">Admin page</a>