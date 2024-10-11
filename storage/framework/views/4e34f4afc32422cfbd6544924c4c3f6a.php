<?php $__env->startSection('title', 'Update Product'); ?>

<?php $__env->startSection('body'); ?>

<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>Update Existing Product</h1>
</div>

<div class="row my-5">
    <div class="col-12 px-5">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger mt-4">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('products.update', $product)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>

            <div class="form-group mt-3">
                <label for="ID">ID</label>
                <input type="number" class="form-control" id="ID" placeholder="Enter ID" name="id" required value="<?php echo e(old('id', $product->id)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name" required value="<?php echo e(old('product_name', $product->product_name)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Description" name="description"><?php echo e(old('description', $product->description)); ?></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="retail_price">Retail Price</label>
                <input type="number" class="form-control" id="retail_price" placeholder="Retail Price" name="retail_price" required value="<?php echo e(old('retail_price', $product->retail_price)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="wholesale_price">Wholesale Price</label>
                <input type="number" class="form-control" id="wholesale_price" placeholder="Wholesale Price" name="wholesale_price" required value="<?php echo e(old('wholesale_price', $product->wholesale_price)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" id="origin" placeholder="Origin" name="origin" required value="<?php echo e(old('origin', $product->origin)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity" required value="<?php echo e(old('quantity', $product->quantity)); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image">
                <?php if($product->product_image): ?>
                    <img src="<?php echo e(Storage::url($product->product_image)); ?>" class="mt-3" style="max-width: 400px;"/>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">Save</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\t1-2021110055\resources\views/products/edit.blade.php ENDPATH**/ ?>