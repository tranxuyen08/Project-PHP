<h1>Edit Users page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.users.update', $users->id) ?>" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="email" placeholder="Update your email" value="<?php echo $users->email ?>">
  <input type="password" name="password" placeholder="Update your password" value="<?php echo $users->password ?>">
  <button type="submit">Submit</button>
</form>
<a href="<?php echo route('admin.users.index') ?>">List Users Page</a>