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
                                 <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Edit Restaurant</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <a href="http://appicsoftwares.in/rcontrol/super-admin/all-restaurant" class="btn btn-sm btn-secondary">back</a></div>
                                     </div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong> Restaurant
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="edit_restaurant" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Restaurant Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Enter Restaurant name..." class="form-control" value="<?php echo e($getRestaurant->name); ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="Enter Restaurant email..." class="form-control" value="<?php echo e($getRestaurant->email); ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Restaurant Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone" name="phone" placeholder="Enter Restaurant phone..." class="form-control" value="<?php echo e($getRestaurant->phone); ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class="form-control-label">Restaurant Image</label>
                                                 </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file">
                                                        <div style="width: 150px;">
                                                            <?php if($getRestaurant->image): ?>
                                                                <img src="<?php echo e(url('public/system/restaurant_images/')); ?>/<?php echo e($getRestaurant->image); ?>">
                                                            <?php endif; ?>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Restaurant location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="location" name="location" placeholder="Enter location..." class="form-control" value="<?php echo e($getRestaurant->location); ?>">
                                                </div>
                                            </div>
                                            <!----<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class="form-control-label">Choose Branch</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <select name="branch_id" id="branch_id" class="form-control">
                                                    <option value="">Please select</option>
                                                    <?php if($branchest): ?>
                                                    <?php $__currentLoopData = $branchest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($branch['id']); ?>" <?php if($getRestaurant->branch_id==$branch['id']): ?> selected <?php endif; ?>><?php echo e($branch['branch_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>----->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class="form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"><?php echo e($getRestaurant->description); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Activate Restaurant</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="status" class="form-control">
                                                    <option value="1" <?php if($getRestaurant->status==1): ?> selected <?php endif; ?> >Yes</option>
                                                    <option value="0" <?php if($getRestaurant->status==0): ?> selected <?php endif; ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row card-footer">
                                                <div class="col col-md-3">
                                                   &nbsp;
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" id="id" name="id" value="<?php echo e($getRestaurant->id); ?>">
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/editRestaurant.blade.php ENDPATH**/ ?>