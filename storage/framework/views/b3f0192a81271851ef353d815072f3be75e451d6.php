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
                        <div class="login-form">
                            <form action="" method="post" name="login" id="login">
                                <div class="form-group">
                                    <label>Phone Number*</label>
                                   <input class="au-input au-input--full" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                </div>
								<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                <button id="signin" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
								<span id="msz"></span>
                            </form>
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
<?php echo $__env->make('inc.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/suparAdmin/suparadminlogin.blade.php ENDPATH**/ ?>