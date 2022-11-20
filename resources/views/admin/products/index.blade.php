@extends('admin.layouts.app')
@section('title')
    Products Page
@endsection
@section('content')
    <h1 class="font-italic text-center">Show list Product</h1>
    <p>Total : <?php echo $total; ?></p>
    <a class="btn btn-primary" href="<?php echo route('admin.products.create'); ?>">Create</a>
    <table class="container table table-striped table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Categoriy Id</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
            <th scope="col">Image</th>
        </tr>
        <?php foreach($products as $product) :?>
        <tr>
            <td>
                <?php echo $product->id; ?>
            </td>
            <td>
                <?php echo $product->name; ?>
            </td>
            <td>
                <?php echo $product->amount; ?>
            </td>
            <td>
                <?php echo $product->category->name; ?>
            </td>
            <td>
                <?php echo $product->created_at; ?>
            </td>
            <td>
                <?php echo $product->updated_at; ?>
            </td>
            <td class="d-flex justify-content-around">
                <a class="btn btn-secondary" href="<?php echo route('admin.products.edit', $product->id); ?>">Edit</a>
                <form action="<?php echo route('admin.products.delete', $product->id); ?>" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <?php
                    $src = !empty($product->photo) ? $product->photo->src : '';
                ?>
                <img width="100" src="<?php echo '/images/' . $src ?>" alt="">
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <div class="container">

        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                    <li class="page-item {{ $page == $i ? 'disabled' : '' }}">
                        <a class="page-link" href="?page={{ $i }}" tabindex="-1">{{ $i }}</a>
                    </li>
                <?php endfor ?>
            </ul>
        </nav>
    </div>
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Admin Home Page</a>
@endsection
