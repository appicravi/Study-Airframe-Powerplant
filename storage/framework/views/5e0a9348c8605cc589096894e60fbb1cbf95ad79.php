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
                                     <h5 class="title-5">All Restaurant</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <button data-toggle="modal" data-target="#bulkManage" class="btn btn-sm btn-secondary">Import</button> 
                                          <a href="<?php echo e(url('supar-admin/add-restaurant')); ?>" class="btn btn-sm btn-secondary">Add new</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Unique ID</th>
												<th style="color: #000;">Phone</th>
                                                <th style="color: #000;">Total Branch</th>
												<th style="color: #000;">Status</th>
												<th style="color: #000;">Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($restaurants): ?>
											<?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_<?php echo e($restaurant['id']); ?>"><tr class="tr-shadow" id="row_9" style="border-top: 1px solid #ebe8f8;
">
                                                <td>
                                                    #<?php echo e($restaurant['id']); ?>

                                                </td>
                                                <td><?php echo e($restaurant['name']); ?></td>
                                                
                                                <td class="desc"><?php echo e($restaurant['email']); ?></td>
												<td><?php echo e($restaurant['phone']); ?></td>
                                                <td><?php echo e($restaurant['totalBranches']); ?></td>
												<td><span class="<?php echo e($restaurant['class']); ?>"><?php echo e($restaurant['status']); ?></span></td>
                                                <td>
                                                    <?php echo e($restaurant['created_at']); ?>

                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/view-restaurant/<?php echo e($restaurant['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
														<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/edit-restaurant/<?php echo e($restaurant['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($restaurant['id']); ?>" data-type="restaurant" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                          <!--  <tr class="spacer" id="space_<?php echo e($restaurant['id']); ?>"></tr>-->
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/suparAdmin/allRestaurant.blade.php ENDPATH**/ ?>