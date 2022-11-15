<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h1 class="my-0 mr-md-auto font-weight-normal">PHP Projects</h1>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark font-weight-bold" href="#">Features</a>
        <a class="p-2 text-dark font-weight-bold" href="#">Enterprise</a>
        <a class="p-2 text-dark font-weight-bold" href="#">Support</a>
        <a class="p-2 text-dark font-weight-bold" href="#">Pricing</a>
    </nav>
    <?php if (Auth::user()): ?>
        <p class="my-2 my-md-0 mr-md-3 p-2 text-dark font-weight-bold">{{ Auth::user()->email }}</p>
        <a class="btn btn-danger" href="<?php echo route('admin.logout') ?>">Logout</a>
    <?php else: ?>
        <a class="btn btn-outline-primary" href="<?php echo route('admin.login.index') ?>">Sign up</a>
    <?php endif ?>

</div>
