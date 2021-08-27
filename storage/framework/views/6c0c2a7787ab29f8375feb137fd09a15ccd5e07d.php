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
                                        <strong>Add</strong> Item
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="item" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Item Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="item_name" name="item_name" placeholder="Enter Item name..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->item_name): ?><?php echo e($getItem->item_name); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="item_type" name="item_type" class="form-control">
														<option value="Raw" <?php if($getItem): ?> <?php if($getItem->item_type=='Raw'): ?> selected <?php endif; ?> <?php endif; ?>>Raw</option>
														<option value="Semi-Furnished" <?php if($getItem): ?> <?php if($getItem->item_type=='Semi-Furnished'): ?> selected <?php endif; ?> <?php endif; ?>>Semi-Furnished</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">SKU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sku" name="sku" placeholder="Enter SKU..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->sku): ?><?php echo e($getItem->sku); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tags</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="tags" name="tags" placeholder="Enter tags, Comma separated..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->tags): ?><?php echo e($getItem->tags); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Purchase Unit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="purchase_unite" name="purchase_unite" placeholder="Enter Purchase Unit..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->purchase_unite): ?><?php echo e($getItem->purchase_unite); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Storage Unit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="storage_unite" name="storage_unite" placeholder="Enter Storage Unit..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->storage_unite): ?><?php echo e($getItem->storage_unite); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Ingredient Unit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="ingredient_unite" name="ingredient_unite" placeholder="Enter Ingredient Unit..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->ingredient_unite): ?><?php echo e($getItem->ingredient_unite); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Purchase To Storage Factor</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="p_to_s_fector" name="p_to_s_fector" placeholder="Purchase To Storage Factor..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->p_to_s_fector): ?><?php echo e($getItem->p_to_s_fector); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Storage To Ingredient Factor</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="s_to_p_fector" name="s_to_p_fector" placeholder="Storage To Ingredient Factor..." class="form-control" value="<?php if($getItem): ?> <?php if($getItem->s_to_p_fector): ?><?php echo e($getItem->s_to_p_fector); ?><?php endif; ?> <?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Cost Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="cost_type" name="cost_type" class="form-control">
														<option value="Fixed Cost Per" <?php if($getItem): ?> <?php if($getItem->cost_type=='Fixed Cost Per'): ?> selected <?php endif; ?> <?php endif; ?>>Fixed Cost Per</option>
														<option value="Variable" <?php if($getItem): ?> <?php if($getItem->cost_type=='Variable'): ?> selected <?php endif; ?> <?php endif; ?>>Variable</option>
													</select>
                                                </div>
                                            </div>
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="id" id="id" value="<?php if($getItem): ?> <?php if($getItem->id): ?><?php echo e($getItem->id); ?><?php endif; ?> <?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_item">
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/items/editItem.blade.php ENDPATH**/ ?>