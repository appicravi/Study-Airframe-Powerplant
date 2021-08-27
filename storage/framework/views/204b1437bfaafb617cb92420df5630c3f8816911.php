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
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
								<div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Category List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="<?php echo e(url('supar-admin/add-category')); ?>" class="btn btn-sm btn-secondary">Add Category</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Unique ID</th>
                                                <th style="color: #000;">Parent Category</th>
                                                <th style="color: #000;">SKU</th>
												<th style="color: #000;">Icon</th>
												<th style="color: #000;">status</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($categories): ?>
											<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_<?php echo e($category['id']); ?>">
                                                <td>
                                                    #<?php echo e($category['id']); ?>

                                                </td>
                                                <td><?php echo e($category['name']); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo e($category['unique_id']); ?></span>
                                                </td>
                                                <td class="desc"><?php echo e($category['parentcat']); ?></td>
                                                <td><?php echo e($category['sku']); ?></td>
												<td>
												<?php if($category['icon']): ?>
												<img class="card-img-top" src="<?php echo e(url('public/system/category_images/')); ?>/<?php echo e($category['icon']); ?>" alt="Card image cap">
												<?php endif; ?>
												&nbsp;
												</td>
												<td><span class="<?php echo e($category['class']); ?>"><?php echo e($category['status']); ?></span></td>
                                                <td>
                                                    <?php echo e($category['created_at']); ?>

                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/edit-category/<?php echo e($category['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($category['id']); ?>" data-type="category" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer" id="space_<?php echo e($category['id']); ?>"></tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/suparAdmin/AllCategories.blade.php ENDPATH**/ ?>