<?php $__env->startSection('title', 'Product List'); ?>

<?php $__env->startSection('body'); ?>
<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>All Products</h1>

    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-outline-secondary center mt-3">
        Create New Product
    </a>
</div>

<?php if(session()->has('success')): ?>
<div class="alert alert-success mt-4">
    <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>

<div class="container mt-5">
    <table class="table table-bordered mb-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Retail Price</th>
                <th scope="col">Wholesale Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Origin</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($product->id); ?></th>
                <td>
                    <a href="<?php echo e(route('products.show', $product)); ?>">
                        <?php echo e($product->product_name); ?>

                    </a>
                </td>
                <td><?php echo e(Str::limit($product->description, 50, '...')); ?></td>
                <td><?php echo e($product->retail_price); ?></td>
                <td><?php echo e($product->wholesale_price); ?></td>
                <td><?php echo e($product->quantity); ?></td>
                <td><?php echo e($product->origin); ?></td>
                <td><?php echo e($product->created_at); ?></td>
                <td><?php echo e($product->updated_at); ?></td>
                <td>


                        <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-light btn-sm">Edit</a>
                    </div>
                </td>
                <td>
                <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" class="d-inline">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-light btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="10">No products found.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <?php echo $products->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\t1-2021110055\resources\views/products/index.blade.php ENDPATH**/ ?>