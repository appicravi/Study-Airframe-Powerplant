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
                                    <div class="card-header">
                                        <strong>Edit</strong> Room
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="room" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title" name="title" name="Enter Product name..." class="form-control" value="<?php if($roomdata): ?><?php echo e($roomdata->title); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Room Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="6" placeholder="Description..." class="form-control"><?php if($roomdata): ?><?php echo e($roomdata->description); ?><?php endif; ?></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="file-input" class="form-control-label">Room Image</label>
												 </div>
												<div class="col-12 col-md-9">
													<input type="file" id="image" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file">
													<?php if($roomdata): ?>
														<?php if($roomdata->image): ?>
															<img width="100" src="<?php echo e(url('public\system\room_images')); ?>/<?php echo e($roomdata->image); ?>">
														<?php endif; ?>
													<?php endif; ?>
												</div>
											</div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Capacity</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select name="capacity" id="capacity" class="form-control">
														<option value="1" <?php if($roomdata): ?> <?php if($roomdata->capacity==1): ?> selected <?php endif; ?> <?php endif; ?>>1</option>
														<option value="2" <?php if($roomdata): ?> <?php if($roomdata->capacity==2): ?> selected <?php endif; ?> <?php endif; ?>>2</option>
														<option value="3" <?php if($roomdata): ?> <?php if($roomdata->capacity==3): ?> selected <?php endif; ?> <?php endif; ?>>3</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Room Type</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="room_type" id="room_type" class="form-control">
													<option value="">Choose Type</option>
													<?php if($types): ?>
													<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($type['id']); ?>" <?php if($roomdata): ?> <?php if($roomdata->room_type==$type['id']): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($type['name']); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endif; ?>
													</select>
												</div>
											</div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Quantity</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="qty" name="qty" placeholder="Enter Quantity..." class="form-control" value="<?php if($roomdata): ?><?php echo e($roomdata->qty); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="price" name="price" placeholder="Enter Price..." class="form-control" value="<?php if($roomdata): ?><?php echo e($roomdata->price); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Amenities</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="amenities" id="amenities" rows="6" placeholder="Comma seprated..." class="form-control"><?php if($roomdata): ?><?php echo e($roomdata->amenities); ?><?php endif; ?></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Activate Room</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="status" id="status" class="form-control">
													<option value="1" <?php if($roomdata): ?> <?php if($roomdata->status==1): ?> selected <?php endif; ?> <?php endif; ?>>Yes</option>
													<option value="0" <?php if($roomdata): ?> <?php if($roomdata->status==0): ?> selected <?php endif; ?> <?php endif; ?>>No</option>
													</select>
												</div>
											</div>
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="type" id="type" value="edit_room">
												<input type="hidden" name="id" id="id" value="<?php echo e($roomdata->id); ?>">
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
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/roomManage/editRoom.blade.php ENDPATH**/ ?>