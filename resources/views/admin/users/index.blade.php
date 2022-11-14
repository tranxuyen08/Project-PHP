@extends('admin.layouts.app')
@section('title')
    Users Page
@endsection
@section('content')
    <h1 class="font-italic text-center">List Users Page</h1>
    <a class="btn btn-primary" href="<?php echo route('admin.users.create'); ?>">Create</a>
    <p>Total : <?php echo $total; ?></p>
    <table class="container table table-striped table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Pasword</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        <?php foreach($users as $user) : ?>
        <tr>
            <td scope="row"><?php echo $user->id; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo bcrypt($user->password); ?></td>
            <td><?php echo $user->created_at; ?></td>
            <td><?php echo $user->updated_at; ?></td>
            <td>
                <a class="btn btn-secondary" href="<?php echo route('admin.users.edit', $user->id); ?>">Edit</a>
            </td>
            <td>
                <form action="<?php echo route('admin.users.delete', $user->id); ?>" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <div class="container">
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                <li class="page-item disabled">
                    <a class="page-link" href="?page={{ $i }}" tabindex="-1">{{ $i }}</a>
                </li>
                <?php endfor ?>
            </ul>
        </nav>
    </div>
    <ul>
        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
        <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor ?>
    </ul>
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Admin page</a>
@endsection
