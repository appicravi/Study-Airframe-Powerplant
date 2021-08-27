<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
        <?php echo $__env->make('inc.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php echo $__env->make('inc.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header cards" style="background-color: white;">
                                        <strong>Add</strong> User
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="customer" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone" name="phone" class="form-control" value="">
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Image </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="address" name="image" class="form-control">
                                                </div>
                                            </div>

                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="conf_password" name="conf_password" class="form-control">
                                                </div>
                                            </div> -->

 
                                          <div class="row card-footer">
                                                <div class="col col-md-3">
                                                   &nbsp;
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" name="type" id="type" value="add_customer">
                                                <div class="col-12 col-md-9">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button id="reset" type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    &nbsp;
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="result"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <a href="<?php echo e(url('super-admin/userlist')); ?>"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
      <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php /**PATH C:\xampp\htdocs\education\resources\views/customer/addCustomer.blade.php ENDPATH**/ ?>