<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
  <meta name="description" content="FindHouse - Real Estate HTML Template">
  <meta name="CreativeLayers" content="ATFN">
  <title><?php echo $__env->yieldContent('title', 'FindHouse - Real Estate'); ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.ico')); ?>" sizes="128x128" />
  <!-- css file -->
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
  <?php echo $__env->yieldPushContent('styles'); ?>
  <style>
    /* Custom spacing adjustments for home search section and the cities section */
    .home-three .home_adv_srch_opt { margin-bottom: 60px; }
    #property-city { margin-top: 100px; clear: both; }
  </style>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="maxw1600 m0a">
<div class="wrapper">
  <div class="preloader"></div>

  <!-- Header -->
  <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Flash Messages -->
  <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
      <div class="container">
        <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  <?php endif; ?>

  <?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
      <div class="container">
        <?php echo e(session('error')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  <?php endif; ?>

  <!-- Page Content -->
  <?php echo $__env->yieldContent('content'); ?>

  <!-- Footer -->
  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
<!-- Scripts -->
<script type="text/javascript" src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-migrate-3.0.0.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.mmenu.all.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/ace-responsive-menu.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap-select.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/isotop.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/snackbar.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/simplebar.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/parallax.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/scrollto.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-scrolltofixed-min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.counterup.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/slider.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/pricing-slider.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/timepicker.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/script.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH E:\msc-it sem1\real estate project\real_estate\resources\views/layouts/app.blade.php ENDPATH**/ ?>