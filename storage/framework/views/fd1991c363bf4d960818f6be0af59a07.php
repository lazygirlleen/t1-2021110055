<?php $__env->startSection('title', "Product: $product->product_name"); ?>

<?php $__env->startSection('body'); ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
    </div>
    
    <div class="card-body">
        <?php if($product->image): ?>
            <img src="<?php echo e($product->image_url); ?>" class="img-fluid rounded mx-auto d-block mb-3" alt="<?php echo e($product->name); ?>">
        <?php endif; ?>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Product Name</th>
                    <td><?php echo e($product->product_name); ?></td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td><?php echo e($product->description); ?></td>
                </tr>
                <tr>
                    <th scope="row">Retail Price</th>
                    <td>Rp. <?php echo e(number_format($product->retail_price, 2)); ?></td>
                </tr>
                <tr>
                    <th scope="row">Wholesale Price</th>
                    <td>Rp. <?php echo e(number_format($product->wholesale_price, 2)); ?></td>
                </tr>
                <tr>
                    <th scope="row">Origin</th>
                    <td><?php echo e($product->origin); ?></td>
                </tr>
                <tr>
                    <th scope="row">Quantity</th>
                    <td><?php echo e($product->quantity); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="small">
            Created at: <?php echo e($product->created_at); ?><br>
            <?php if($product->updated_at): ?>
                Updated at: <?php echo e($product->updated_at); ?>

            <?php endif; ?>
        </div>

        <div class="mt-3">
            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">
                Back to Products List
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\t1-2021110055\resources\views/products/show.blade.php ENDPATH**/ ?>