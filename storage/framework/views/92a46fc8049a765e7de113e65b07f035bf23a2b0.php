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
                                        <strong>Edit</strong> Payment Method
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="method" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Enter method name..." class="form-control" value="<?php if($getMethod->name): ?><?php echo e($getMethod->name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="code" name="code" placeholder="Enter Code..." class="form-control" value="<?php if($getMethod->code): ?><?php echo e($getMethod->code); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="method_type" name="method_type" class="form-control">
														<option value="Card" <?php if($getMethod->method_type=='Card'): ?> selected <?php endif; ?>>Card</option>
														<option value="Other" <?php if($getMethod->method_type=='Other'): ?> selected <?php endif; ?>>Other</option>
														<option value="Foreign" <?php if($getMethod->method_type=='Foreign'): ?> selected <?php endif; ?>>Foreign</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    &nbsp;
                                                </div>
                                                <div class="col-12 col-md-9">
													<div>
														<div class="checkbox aut">
															<label for="checkbox1" class="form-check-label ">
																The tray opens automatically 
																<input type="checkbox" id="auto" name="auto" value="The tray opens automatically" class="form-check-input" style="margin-left: 10px;" <?php if($getMethod->auto=='The tray opens automatically'): ?> checked <?php endif; ?>>
															</label>
														</div>
														<div class="checkbox act">
															<label for="checkbox2" class="form-check-label ">
																Active 
																<input type="checkbox" id="active" name="active" value="Active" class="form-check-input" style="margin-left: 10px;" <?php if($getMethod->active=='Active'): ?> checked <?php endif; ?>>
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
												<input type="hidden" name="id" id="id" value="<?php if($getMethod->id): ?><?php echo e($getMethod->id); ?><?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_method">
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/paymentMethod/editMethod.blade.php ENDPATH**/ ?>