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
                                        <strong>Add</strong> Warehouse
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="warehouse" method="post" enctype="multipart/form-data" class="form-horizontal">
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">City</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="city" name="city" class="form-control">
														<option value="Khobar" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Khobar'): ?> selected <?php endif; ?> <?php endif; ?>>Khobar</option>
														<option value="Qatif" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Qatif'): ?> selected <?php endif; ?> <?php endif; ?>>Qatif</option>
														<option value="Dammam" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Dammam'): ?> selected <?php endif; ?> <?php endif; ?>>Dammam</option>
														<option value="Dhahran" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Dhahran'): ?> selected <?php endif; ?> <?php endif; ?>>Dhahran</option>
														<option value="Riyadh" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Riyadh'): ?> selected <?php endif; ?> <?php endif; ?>>Riyadh</option>
														<option value="Jeddah" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Jeddah'): ?> selected <?php endif; ?> <?php endif; ?>>Jeddah</option>
														<option value="Bahrain" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Bahrain'): ?> selected <?php endif; ?> <?php endif; ?>>Bahrain</option>
														<option value="Jubail" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Jubail'): ?> selected <?php endif; ?> <?php endif; ?>>Jubail</option>
														<option value="Al Ahsa" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Al Ahsa'): ?> selected <?php endif; ?> <?php endif; ?>>Al Ahsa</option>
														<option value="Abha" <?php if($getWarehouse): ?> <?php if($getWarehouse->city=='Abha'): ?> selected <?php endif; ?> <?php endif; ?>>Abha</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Enter Name..." class="form-control" value="<?php if($getWarehouse->name): ?><?php echo e($getWarehouse->name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="id" id="id" value="<?php if($getWarehouse->id): ?><?php echo e($getWarehouse->id); ?><?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_warehouse">
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
						
                        <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/warehouse/editWarehouse.blade.php ENDPATH**/ ?>