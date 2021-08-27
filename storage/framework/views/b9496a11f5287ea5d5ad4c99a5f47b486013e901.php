<?php echo $__env->make('inc.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Bootstrap CSS-->
    <link href="<?php echo e(url('public/system/admin/vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(url('public/system/admin/css/theme.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(url('public/system/admin/css/developer.css')); ?>" rel="stylesheet" media="all">

</head>
<body>
<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>" style="width:220px;" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form" style="text-align: center;">
							<div class="status">
								<h1 class="error">Your PayPal Transaction has been Canceled</h1>
							</div>
							<a href="<?php echo e(url('')); ?>" class="btn-link">Back to System</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- Jquery JS-->
<script src="<?php echo e(url('public/system/admin/vendor/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(url('public/system/admin/js/jquery.validate.js')); ?>"></script>
<script src="<?php echo e(url('public/system/admin/js/userArea.js')); ?>"></script>
<script src="<?php echo e(url('public/system/admin/js/jquery-ui.js')); ?>"></script>
<?php echo $__env->make('inc.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/orders/paypalError.blade.php ENDPATH**/ ?>