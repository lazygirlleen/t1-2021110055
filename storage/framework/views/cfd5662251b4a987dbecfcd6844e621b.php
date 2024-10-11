<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Products'); ?></title>
    <link href="<?php echo e(asset('resources/css/app.css')); ?>" rel="stylesheet" type="text/css" >

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/css/app.css']); ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Dashboard</a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="<?php echo e(route('products.index')); ?>" class="nav-link">
                        Products
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\t1-2021110055\resources\views/layouts/template.blade.php ENDPATH**/ ?>