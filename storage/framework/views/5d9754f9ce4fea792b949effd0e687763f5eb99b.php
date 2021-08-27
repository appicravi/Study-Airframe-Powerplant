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
                                    <div class=" card bg-secondary-light">
                                 <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Edit Modifier</h5>
                                      <div role="group" class="btn-group btn-group-sm">    
                                          <a href="<?php echo e(url('supar-admin/all-modifiers')); ?>" class="btn btn-sm btn-secondary">Back</a></div>
                                 </div>
                                    <div class="card-body card-block ">
                                        <form action="" id="editmodifier" method="post" enctype="multipart/form-data" class="form-horizontal">
										<input type="hidden" name="id" value="<?php if($modifier): ?><?php echo e($modifier->id); ?><?php endif; ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Enter name..." class="form-control" value="<?php if($modifier): ?><?php echo e($modifier->name); ?><?php endif; ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Minimum Option</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="minimum_option" name="minimum_option" placeholder="Enter minimum option..." class="form-control" value="<?php if($modifier): ?><?php echo e($modifier->minimum_option); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Maximum Option</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="maximum_option" name="maximum_option" placeholder="Enter Maximum option..." class="form-control" value="<?php if($modifier): ?><?php echo e($modifier->maximum_option); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Excluded Options</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="exclude" name="exclude" placeholder="Enter Excluded Options..." class="form-control" value="<?php if($modifier): ?><?php echo e($modifier->exclude); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                <div class="col-12 col-md-7">
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
						
                        
                    </div><?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/editModifier.blade.php ENDPATH**/ ?>