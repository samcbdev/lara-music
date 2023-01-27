<!doctype html>
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
    <!-- toaser CDN -->
    
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-6 col-sm-12 col-12 align-self-center">
                    <div class="sign-user_card ">
                        <div class="d-flex justify-content-center">
                            <div class="sign-user_logo">
                                <img src="<?php echo e(asset('images/login/user.png')); ?>" class=" img-fluid" alt="Logo">
                            </div>
                        </div>
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 pt-5 m-auto">
                                <h1 class="mb-3 text-center">Sign in</h1>
                                
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <form class="mt-4 needs-validation <?php if($errors->any()): ?> was-validated <?php endif; ?>" action="<?php echo e(route('admin.loginSubmit')); ?>" method="POST" novalidate>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" name="email" class="form-control mb-0" id="email" placeholder="Enter email" value="<?php echo e(old('email')); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control mb-0" id="password" placeholder="Password" required>
                                        
                                        <?php if($errors->has('password')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('password')); ?>

                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="sign-info">
                                        <button type="submit" class="btn btn-primary mb-2">Sign in</button>
                                        <span class="dark-color d-block line-height-2">Don't have an account? <a
                                                href="sign-up.html">Sign up</a></span>
                                    </div>
                                    <div class="d-inline-block w-100">
                                        <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                            <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
                                            <label class="custom-control-label" for="rememberme">Remember Me</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-2">
                            
                            <div class="d-flex justify-content-center links">
                                <a href="pages-recoverpw.html">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sign in END -->
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- Appear JavaScript -->
    <script src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
    <!-- Countdown JavaScript -->
    <script src="<?php echo e(asset('js/countdown.min.js')); ?>"></script>
    <!-- Counterup JavaScript -->
    <script src="<?php echo e(asset('js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
    <!-- Wow JavaScript -->
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <!-- Apexcharts JavaScript -->
    <script src="<?php echo e(asset('js/apexcharts.js')); ?>"></script>
    <!-- Slick JavaScript -->
    <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
    <!-- Select2 JavaScript -->
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="<?php echo e(asset('js/smooth-scrollbar.js')); ?>"></script>
    <!-- Style Customizer -->
    <script src="<?php echo e(asset('js/style-customizer.js')); ?>"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo e(asset('js/chart-custom.js')); ?>"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\xampp8.1\htdocs\sam\kanban\LaraMusicAdmin\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>