<h1>Create User Page</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.users.store') ?>" method="POST">
  @csrf
  <input type="text" name="email" placeholder="Enter your email">
  <input type="password" name="password" placeholder="Enter your password">
  <button type="submit">Submit</button>
</form>
<a href="<?php echo route('admin.users.index') ?>">List Users Page</a>