<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chillz</title>

    <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('css/typography.css')); ?>">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
</head>
<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
   
    <!-- Wrapper Start -->
    <div class="wrapper">
       <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('layouts.admin.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    
    <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.admin.footerScripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH E:\xampp8.1\htdocs\sam\kanban\LaraMusicAdmin\resources\views/layouts/admin/main.blade.php ENDPATH**/ ?>