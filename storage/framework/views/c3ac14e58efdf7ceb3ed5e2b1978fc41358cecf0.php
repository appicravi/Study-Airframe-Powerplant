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
                                        <strong>Add</strong> Product
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="productedit" method="post" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id" value="<?php if($productDetail): ?><?php echo e($productDetail->id); ?><?php endif; ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" name="Enter Product name..." class="form-control" value="<?php if($productDetail): ?><?php echo e($productDetail->name); ?><?php endif; ?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Product slug</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="slug" name="slug" placeholder="Enter Product slug..." class="form-control" value="<?php if($productDetail): ?><?php echo e($productDetail->slug); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Product Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="6" placeholder="Description..." class="form-control"><?php if($productDetail): ?><?php echo e($productDetail->description); ?><?php endif; ?></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Category</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="category" id="category" class="form-control">
													<option value="">Choose category</option>
													<?php if($getcategory): ?>
													<?php $__currentLoopData = $getcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($cat->id); ?>" <?php if($productDetail): ?> <?php if($productDetail->category==$cat->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($cat->name); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endif; ?>
													</select>
												</div>
											</div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Product Tags</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="tags" id="tags" rows="3" placeholder="Description..." class="form-control"><?php if($productDetail): ?><?php echo e($productDetail->tags); ?><?php endif; ?></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Sell Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sell_price" name="sell_price" placeholder="Enter Product Sell Price..." class="form-control" value="<?php if($productDetail): ?><?php echo e($productDetail->sell_price); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Offer Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="offer_price" name="offer_price" placeholder="Enter Product offer price..." class="form-control" value="<?php if($productDetail): ?><?php echo e($productDetail->offer_price); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">SKU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sku" name="sku" placeholder="Enter Product sku..." class="form-control" value="<?php if($productDetail): ?><?php echo e($productDetail->sku); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Product Modifiers</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="modifier" id="modifier" class="form-control">
													<option value="">Choose modifier</option>
													<?php if($getcategory): ?>
													<?php $__currentLoopData = $getcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($cat->id); ?>" <?php if($productDetail): ?> <?php if($productDetail->modifier==$cat->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($cat->name); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endif; ?>
													</select>
												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="file-input" class="form-control-label">Product Image</label>
												 </div>
												<div class="col-12 col-md-9">
													<input type="file" id="image" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file">
													<?php if($productDetail): ?>
														<?php if($productDetail->image): ?>
															<img width="100" src="<?php echo e(url('public\system\products_images')); ?>/<?php echo e($productDetail->image); ?>">
														<?php endif; ?>
													<?php endif; ?>
													
												</div>
											</div>
											
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="select" class=" form-control-label">Activate Product</label>
												</div>
												<div class="col-12 col-md-9">
													<select name="status" id="status" class="form-control">
													<option value="1" <?php if($productDetail): ?> <?php if($productDetail->status==1): ?> selected <?php endif; ?> <?php endif; ?>>Yes</option>
													<option value="0" <?php if($productDetail): ?> <?php if($productDetail->status==0): ?> selected <?php endif; ?> <?php endif; ?>>No</option>
													</select>
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
						
                       
                    </div> <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/editProduct.blade.php ENDPATH**/ ?>