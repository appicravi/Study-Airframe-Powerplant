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
                    <div class="login-content" style="border-radius: 20px;">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>" style="width:220px;" alt="CoolAdmin">
                            </a>
                        </div>
	 
	
                        <div class="login-form" style="text-align: center;">
                                <div class="form-group">
                                    <label>Order Number : <?php if($order): ?> <?php echo e($order['order_id']); ?> <?php endif; ?></label>
									<label>Order Type : <?php echo e($order['typed']); ?></label>
									<label>Order Total : <?php if($order): ?> $<?php echo e($order['total']); ?> <?php endif; ?></label>
                                </div>
                                <div class="form-group">
								<!-- https://www.paypal.com/cgi-bin/webscr -->
                                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
										<!-- Identify your business so that you can collect the payments. -->
										<input type="hidden" name="business" value="daallohotel@gmail.com">
										
										<!-- Specify a Buy Now button. -->
										<input type="hidden" name="cmd" value="_xclick">
										
										<!-- Specify details about the item that buyers will purchase. -->
										<input type="hidden" name="item_name" value="<?php echo e($order['order_id']); ?>">
										<input type="hidden" name="item_number" value="<?php echo e($order['id']); ?>">
										<input type="hidden" name="amount" value="<?php echo e($order['total']); ?>">
										<input type="hidden" name="currency_code" value="USD">
										
										<!-- Specify URLs --> 
										<input type="hidden" name="return" value="<?php echo e(url('')); ?>/pay-sucess/<?php echo e($order['typed']); ?>/<?php echo e($order['id']); ?>">
										<input type="hidden" name="cancel_return" value="<?php echo e(url('')); ?>/pay-cancel/<?php echo e($order['typed']); ?>/<?php echo e($order['id']); ?>">
										
										<!-- Display the payment button. -->
										<input type="submit" name="submit" border="0" value="Pay Now" class="btn btn-success">
										<a href="<?php echo e(url('')); ?>/pay-cancel/<?php echo e($order['typed']); ?>/<?php echo e($order['id']); ?>" class="btn btn-danger">Cancel</a>
									</form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- Jquery JS-->
<?php echo $__env->make('inc.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/orders/paypal.blade.php ENDPATH**/ ?>