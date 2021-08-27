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
					<h3 class="title-5 m-b-35">Product Detail</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="card">
								  <div class="card-body p-0">
									<table class="table table-hover table-striped table-align-middle mb-0">
									  <tbody>
										<tr>
										  <td>Product Name</td>
										  <td><?php echo e($productDetail->name); ?></td>
										</tr>
										<tr>
										  <td>Product slug</td>
										  <td><?php echo e($productDetail->slug); ?></td>
										</tr>
										<tr>
										  <td>Product Description</td>
										  <td><?php echo e($productDetail->description); ?></td>
										</tr>
										
										<tr>
										  <td>Category</td>
										  <td><?php echo e($categoryname); ?></td>
										</tr>
										<tr>
										  <td>Product Tags</td>
										  <td><?php echo e($productDetail->tags); ?></td>
										</tr>
										<tr>
										  <td>Sell Price</td>
										  <td><?php echo e($productDetail->sell_price); ?></td>
										</tr>
										<tr>
										  <td>Offer Price</td>
										  <td><?php echo e($productDetail->offer_price); ?></td>
										</tr>
										<tr>
										  <td>SKU</td>
										  <td><?php echo e($productDetail->sku); ?></td>
										</tr>
										<tr>
										  <td>Product Modifiers</td>
										  <td><?php echo e($modifiername); ?></td>
										</tr>
										<tr>
										  <td>Product Image</td>
										  <td><img width="100" src="<?php echo e(url('public\system\products_images')); ?>/<?php echo e($productDetail->image); ?>"></td>
										</tr>
										<tr>
										  <td>Status</td>
										  <td> 
										    <?php if($productDetail->status==1): ?>
											<span class="badge badge-success mt-1">Active</span>
											<?php else: ?> if($productDetail->status==0)
											<span class="badge badge-danger mt-1">Deactive</span>
											<?php endif; ?>
											</td>
										</tr>
										<tr>
										  <td>Created Date</td>
										  <td><?php echo e($productDetail->created_at); ?></td>
										</tr>
									  </tbody>
									</table>
								  </div>
								</div>
							  </div>
							  <div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<strong>Product Settings</strong>
										</div>
										<div class="card-body">
											<a href="<?php echo e(url('')); ?>/supar-admin/add-product" class="btn btn-primary">
											<i class="fa fa-magic"></i>&nbsp; Add Product</a>
											<a href="<?php echo e(url('')); ?>/supar-admin/edit-product/<?php echo e($productDetail->id); ?>" class="btn btn-primary">
											<i class="fa fa-magic"></i>&nbsp; Edit Product</a>
											<br>
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/suparAdmin/viewProduct.blade.php ENDPATH**/ ?>