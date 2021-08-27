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
                                        <strong>Edit</strong> Coupon
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="coupon" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Enter Coupon name..." class="form-control" value="<?php if($getCoupon->name): ?><?php echo e($getCoupon->name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Value</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="value" name="value" placeholder="Enter value..." class="form-control" value="<?php if($getCoupon->value): ?><?php echo e($getCoupon->value); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Valid From</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="valid_from" name="valid_from"   class="form-control" value="<?php if($getCoupon->valid_from): ?><?php echo e($getCoupon->valid_from); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Valid To</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="valid_to" name="valid_to" class="form-control" value="<?php if($getCoupon->valid_to): ?><?php echo e($getCoupon->valid_to); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                   <label for="text-input" class=" form-control-label">Days</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<div class="wep">
														<div class="checkbox">
															<label for="checkbox1" class="form-check-label ">
																Monday
																<input type="checkbox" id="day" name="days[]" value="Monday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Tuesday 
																<input type="checkbox" id="day" name="days[]" value="Tuesday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Wednesday 
																<input type="checkbox" id="day" name="days[]" value="Wednesday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Thursday 
																<input type="checkbox" id="day" name="days[]" value="Thursday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Friday 
																<input type="checkbox" id="day" name="days[]" value="Friday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Saturday 
																<input type="checkbox" id="day" name="days[]" value="Saturday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Sunday 
																<input type="checkbox" id="day" name="days[]" value="Sunday" class="form-check-input" style="margin-left: 10px;">
															</label>
															
														</div>
													</div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">No. of Coupons</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="coupon_qty" name="coupon_qty" class="form-control" value="<?php if($getCoupon->coupon_qty): ?><?php echo e($getCoupon->coupon_qty); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Is Percentage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="col-12 col-md-9">
														<div class="checkbox">
															<label for="checkbox1" class="form-check-label ">
															Is Percentage
																<input type="checkbox" id="is_percent" name="is_percent" value="Yes" class="form-check-input" style="margin-left: 10px;" <?php if($getCoupon->coupon_qty): ?> checked <?php endif; ?>>
																
															</label>
														</div>
                                                </div>
                                                </div>
                                            </div>
											
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="id" id="id" value="<?php if($getCoupon->id): ?><?php echo e($getCoupon->id); ?><?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_coupon">
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
						
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/coupons/editCoupon.blade.php ENDPATH**/ ?>