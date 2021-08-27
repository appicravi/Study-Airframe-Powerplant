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
                                        <strong>Edit</strong> Branch
                                    </div>
                                    
                                    <div class="card-body card-block">
                                        <form action="" id="edit_branch" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Branch Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="branch_name" name="branch_name" placeholder="Enter branch name..." class="form-control" value="<?php echo e($getBranch->branch_name); ?>">
                                                </div>
                                            </div>
                                            <input type="hidden"  name="restaurant_id"  value="<?php echo e($getBranch->restaurant_id); ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Branch Location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="location" name="location" placeholder="Enter branch location..." class="form-control" value="<?php echo e($getBranch->location); ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"><?php echo e($getBranch->description); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Activate Branch</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="status" class="form-control">
                                                    <option value="1" <?php if($getBranch->status==1): ?> selected <?php endif; ?> >Yes</option>
                                                    <option value="0" <?php if($getBranch->status==0): ?> selected <?php endif; ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row card-footer">
                                                <div class="col col-md-3">
                                                   &nbsp;
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" id="id" name="id" value="<?php echo e($getBranch->id); ?>">
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
                        
                    </div><?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/editBranch.blade.php ENDPATH**/ ?>