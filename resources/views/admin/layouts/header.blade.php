<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">WIW Mart</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    <?php if (Auth::user()): ?>
        <p>{{ Auth::user()->email }}</p>
        <a class="btn btn-danger" href="<?php echo route('admin.logout') ?>">Logout</a>
    <?php else: ?>
        <a class="btn btn-outline-primary" href="<?php echo route('admin.login.index') ?>">Sign up</a>
    <?php endif ?>

</div>