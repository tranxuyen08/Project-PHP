@extends('admin.layouts.app')
@section('title')
    Orders Page
@endsection
@section('content')
    <h1 class="font-italic text-center">Show list Orders</h1>

    <a class="btn btn-primary" href="<?php echo route('admin.orders.create'); ?>">Create</a>

    <table class="container">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Coupons ID</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        <?php foreach($orders as $order) :?>
        <tr>
        <tr>
            <td><?php echo $order->id; ?></td>
            <td><?php echo $order->user_id; ?></td>
            <td><?php echo $order->amount; ?></td>
            <td><?php echo $order->status; ?></td>
            <td><?php echo $order->coupons_id; ?></td>
            <td><?php echo $order->created_at; ?></td>
            <td><?php echo $order->updated_at; ?></td>
            <td>
                <a class="btn btn-secondary" href="<?php echo route('admin.orders.edit', $order->id); ?>">Edit</a>
            </td>
            <td>
                <form action="<?php echo route('admin.orders.delete', $order->id); ?> " method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
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
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Home Orders</a>
@endsection
