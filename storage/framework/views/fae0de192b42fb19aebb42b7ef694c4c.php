<?php $__env->startSection('title', 'Dashboard | Store'); ?>

<?php $__env->startSection('body'); ?>

<div class="mt-4 p-5 bg-dark text-white rounded">
    <h2 class="h3">Welcome to Store Product Management!</h2>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-outline-secondary center mt-3">
        Manage Your Own Product Here
    </a>
</div>

<section class="container mt-5">
    <h1 class="h2">Dashboard</h1>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card text-black bg-outline-secondary mb-3">
                <div class="card-header">Total Quantity of Products</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item"><?php echo e($product->product_name); ?>: <?php echo e($product->quantity); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-black  bg-outline-secondary mb-3">
                <div class="card-header">Most Expensive Product</div>
                <div class="card-body">
                    <p><?php echo e($mostExpensiveProduct->product_name); ?>: <?php echo e($mostExpensiveProduct->retail_price); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-black bg-outline-secondary mb-3">
                <div class="card-header">Highest Quantity Product</div>
                <div class="card-body">
                    <p><?php echo e($highestQuantityProduct->product_name); ?>: <?php echo e($highestQuantityProduct->quantity); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\t1-2021110055\resources\views/home.blade.php ENDPATH**/ ?>