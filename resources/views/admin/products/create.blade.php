<h1>create page Products</h1>
<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
<?php endif ?>
<form action="<?php echo route('admin.products.store') ?>"method="POST">
  @csrf
  <input type="text" name="name" id="" placeholder="Enter your name">
  <select name="category_id" id="">
        <option value=""></option>
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
        <?php endforeach ?>
  </select>
  <input type="text" name="amount" id="" placeholder="Enter your amount">
  <button type="submit">Submit</button>
</form>
<a href="<?php echo route('admin.products.index') ?>">Home Products</a>
