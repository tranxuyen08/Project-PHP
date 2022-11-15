@extends('admin.layouts.app')
@section('title')
    Coupons Page
@endsection

@section('content')
    <a class="btn btn-primary text-center" href="<?php echo route('admin.index'); ?>">Admin Page</a>

    <h1 class="font-italic text-center">List Coupons page</h1>
    <p>Total : <?php echo $total; ?></p>
    <a class="btn btn-primary" href="<?php echo route('admin.coupons.create'); ?>">Create</a>
    <table class="container table table-striped table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Code</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        <?php foreach($coupons as $coupon) :?>
        <tr>
            <td >
                <?php echo $coupon->id; ?>
            </td>
            <td>
                <?php echo $coupon->code; ?>
            </td>
            <td>
                <?php echo $coupon->created_at; ?>
            </td>
            <td>
                <?php echo $coupon->updated_at; ?>
            </td>
            <td class="d-flex justify-content-around">
                <a class="btn btn-secondary" href="<?php echo route('admin.coupons.edit', $coupon->id); ?>">Edit</a>
                <form action="<?php echo route('admin.coupons.delete', $coupon->id); ?>" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            {{-- <td>
                <form action="<?php echo route('admin.coupons.delete', $coupon->id); ?>" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> --}}
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
@endsection
