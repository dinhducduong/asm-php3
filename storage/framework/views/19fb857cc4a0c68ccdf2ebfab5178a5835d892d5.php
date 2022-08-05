<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="pt-3">Checkout</h2>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Checkout</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">

        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2020 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/frontend/checkout/checkout_view.blade.php ENDPATH**/ ?>