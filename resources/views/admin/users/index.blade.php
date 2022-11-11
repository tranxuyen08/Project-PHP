@extends('admin.layouts.app')
@section('title')
    Users Page
@endsection
@section('content')
    <h1 class="font-italic text-center" >List Users Page</h1>
    <a class="btn btn-primary" href="<?php echo route('admin.users.create'); ?>">Create</a>
    <p>Total : <?php echo $total; ?></p>
    <table class="container">
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
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo md5($user->password); ?></td>
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
    <ul>
        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
        <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor ?>
    </ul>
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Admin page</a>
@endsection
