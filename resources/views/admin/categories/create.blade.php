<h1>Category Page Create</h1>

<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>

<form action="<?php echo route('admin.categories.store') ?>" method="POST">
  @csrf
  <input type="text" name="name" id="">
  <button type="submit">Submit</button>
</form>
<a href="<?php echo route('admin.categories.index') ?>">List Categories Page</a>