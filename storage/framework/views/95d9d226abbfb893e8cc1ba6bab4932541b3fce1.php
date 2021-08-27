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
                                        <strong>Edit</strong> Employee
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="employee" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="employee_name" name="employee_name" placeholder="Enter Employee name..." class="form-control" value="<?php if($getEmployee->employee_name): ?><?php echo e($getEmployee->employee_name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Dial Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="code" name="code" placeholder="Enter Code..." class="form-control" value="<?php if($getEmployee->code): ?><?php echo e($getEmployee->code); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone" name="phone" placeholder="Enter Phone..." class="form-control" value="<?php if($getEmployee->phone): ?><?php echo e($getEmployee->phone); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email" name="email" placeholder="Enter Email..." class="form-control" value="<?php if($getEmployee->email): ?><?php echo e($getEmployee->email); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Enter Password..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Choose Role</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="role" id="role" class="form-control">
													<option value="">Choose Role</option>
													<?php if($roles): ?>
													<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<?php if($role->id!=1 && $role->id!=2 && $role->id!=3 && $role->id!=4): ?>
													<option value="<?php echo e($role->id); ?>" <?php if($getEmployee->role==$role->id): ?> selected <?php endif; ?>><?php echo e($role->role_name); ?></option>
													<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endif; ?>
													</select>
												</div>
											</div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Language</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="language" name="language" class="form-control">
														<option value="en" <?php if($getEmployee->language=="en"): ?> selected <?php endif; ?>>En</option>
														<option value="ar" <?php if($getEmployee->language=="ar"): ?> selected <?php endif; ?>>Ar</option>
														<option value="tr" <?php if($getEmployee->language=="tr"): ?> selected <?php endif; ?>>Tr</option>
														<option value="fr" <?php if($getEmployee->language=="fr"): ?> selected <?php endif; ?>>Fr</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Activate
													</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="status" id="status" class="form-control">
													<option value="1" <?php if($getEmployee->status==1): ?> selected <?php endif; ?>>Yes</option>
													<option value="0" <?php if($getEmployee->status==0): ?> selected <?php endif; ?>>No</option>
													</select>
												</div>
											</div>
											
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="type" id="type" value="edit_emp">
												<input type="hidden" name="id" id="id" value="<?php if($getEmployee->id): ?><?php echo e($getEmployee->id); ?><?php endif; ?>">
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/employees/editEmployee.blade.php ENDPATH**/ ?>