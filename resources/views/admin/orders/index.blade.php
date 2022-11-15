@extends('admin.layouts.app')
@section('title')
    Orders Page
@endsection
@section('content')
    <h1 class="font-italic text-center">Show list Orders</h1>

    <a class="btn btn-primary" href="<?php echo route('admin.orders.create'); ?>">Create</a>

    <table class="container table table-striped table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Coupons ID</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        <?php foreach($orders as $order) :?>
        <tr>
        <tr>
            <td scope="row"><?php echo $order->id; ?></td>
            <td><?php echo $order->user_id; ?></td>
            <td><?php echo $order->amount; ?></td>
            <td><?php echo $order->status; ?></td>
            <td><?php echo $order->coupons_id; ?></td>
            <td><?php echo $order->created_at; ?></td>
            <td><?php echo $order->updated_at; ?></td>
            <td class="d-flex justify-content-around">
                <a class="btn btn-secondary" href="<?php echo route('admin.orders.edit', $order->id); ?>">Edit</a>
                <form action="<?php echo route('admin.orders.delete', $order->id); ?> " method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            {{-- <td>
                <form action="<?php echo route('admin.orders.delete', $order->id); ?> " method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> --}}
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
    <a class="btn btn-primary" href="<?php echo route('admin.index'); ?>">Admin Page</a>
@endsection
