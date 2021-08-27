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
					<h3 class="title-5 m-b-35">Item Detail</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="card">
								  <div class="card-header">
									<strong class="card-title" v-if="headerText">Additional Detail</strong>
								  </div>
								  <div class="card-body p-0">
									<table class="table table-hover table-striped table-align-middle mb-0">
									  <tbody>
										<tr>
										  <td>#ID</td>
										  <td><?php echo e($getItem->id); ?></td>
										</tr>
										<tr>
										  <td>Item Name</td>
										  <td><?php echo e($getItem->item_name); ?></td>
										</tr>
										<tr>
										  <td>Type</td>
										  <td><?php echo e($getItem->item_type); ?></td>
										</tr>
										
										<tr>
										  <td>SKU</td>
										  <td><?php echo e($getItem->sku); ?></td>
										</tr>
										<tr>
										  <td>Tags</td>
										  <td><?php echo e($getItem->tags); ?></td>
										</tr>
										<tr>
										  <td>Purchase Unit</td>
										  <td><?php echo e($getItem->purchase_unite); ?></td>
										</tr>
										<tr>
										  <td>Storage Unit</td>
										  <td><?php echo e($getItem->storage_unite); ?></td>
										</tr>
										<tr>
										  <td>Ingredient Unit</td>
										  <td><?php echo e($getItem->ingredient_unite); ?></td>
										</tr>
										<tr>
										  <td>Purchase To Storage Factor</td>
										  <td><?php echo e($getItem->p_to_s_fector); ?></td>
										</tr><tr>
										  <td>Storage To Ingredient Factor</td>
										  <td><?php echo e($getItem->s_to_p_fector); ?></td>
										</tr>
										<tr>
										  <td>Cost Type</td>
										  <td><?php echo e($getItem->cost_type); ?></td>
										</tr>										
										<tr>
										  <td>Created Date</td>
										  <td><?php echo e($getItem->created_at); ?></td>
										</tr>
									  </tbody>
									</table>
								  </div>
								</div>
								
							  </div>
							  <div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<strong>Item Settings</strong>
										</div>
										<div class="card-body">
											<a href="<?php echo e(url('')); ?>/supar-admin/add-item" class="btn btn-primary">
											<i class="fa fa-magic"></i>&nbsp; Add Item</a>
											<a href="<?php echo e(url('')); ?>/supar-admin/items" class="btn btn-primary">
											<i class="fa fa-magic"></i>&nbsp; View Items</a>
											<br>
											
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/items/viewItem.blade.php ENDPATH**/ ?>