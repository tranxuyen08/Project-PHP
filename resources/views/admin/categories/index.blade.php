@extends('admin.layouts.app')
@section('title')
    Categories Page
@endsection

@section('content')
    <h1 class="font-italic text-center">Show List Category Page</h1>
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Admin Page</a>
    <p>Total : <?php echo $total; ?></p>
    <table class="container">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>

        </tr>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td class="font-weight-bold">
                <?php echo $category->id; ?>
            </td>
            <td class="font-italic">
                <?php echo $category->name; ?>
            </td>
            <td class="font-weight-normal">
                <?php echo $category->created_at; ?>
            </td>
            <td class="font-weight-normal">
                <?php echo $category->updated_at; ?>
            </td>
            <td>
                <a class="btn btn-secondary" href="<?php echo route('admin.categories.edit', $category->id); ?>">Edit</a>
            </td>
            <td>
                <form method="POST" action="<?php echo route('admin.categories.delete', $category->id); ?>">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
        <a class="btn btn-primary" href="<?php echo route('admin.categories.create'); ?>">Create</a>
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
@endsection
