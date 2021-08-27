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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> Branch
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="branch" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Branch Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="branch_name" name="branch_name" placeholder="Enter branch name..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Branch Location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="location" name="location" placeholder="Enter branch location..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="franchise_name" class=" form-control-label">Franchise Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="franchise_name" name="franchise_name" placeholder="Enter franchise name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="conf_password" class=" form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="conf_password" name="conf_password" placeholder="Enter Conform password" class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Hardware</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hardware" name="hardware" placeholder="Enter hardware..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Restaurant</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="restaurant_name" name="restaurant_name" class="form-control" value="<?php echo e($restaurant->name); ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="4" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Activate Branch</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="status" id="status" class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
													</select>
												</div>
											</div>
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" id="restaurant_id" name="restaurant_id" value="<?php echo e($restaurant->id); ?>">
												<input type="hidden" id="latitude" name="latitude" value="">
												<input type="hidden" id="longitude" name="longitude" value="">
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                <div class="col-12 col-md-7">
                                                    <button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
													</button>
													<button id="reset" type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
                                                </div>
												<div class="col-12 col-md-2">
                                                    <a href="<?php echo e(url('')); ?>/supar-admin/view-restaurant/<?php echo e($restaurant->id); ?>" class="btn btn-primary">
													<i class="fa fa-magic"></i>&nbsp; Go to Restaurant	</a>
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
						
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/addBranches.blade.php ENDPATH**/ ?>