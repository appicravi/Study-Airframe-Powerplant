<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">       

        <!-- PAGE CONTAINER-->
        <div class="page-container">
             <?php echo $__env->make('inc.restaurentHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Branches List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #fff;">#</th>
                                                <th style="color: #fff;">Branch Name</th>
												<th style="color: #fff;">Unique ID</th>
                                                <th style="color: #fff;">Location</th>
                                                <th style="color: #fff;">Hardware</th>
												 <th style="color: #fff;">stsatus</th>
                                                <th style="color: #fff;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($branches): ?>
											<?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_<?php echo e($branch['id']); ?>">
                                                <td>
                                                    #<?php echo e($branch['id']); ?>

                                                </td>
                                                <td><?php echo e($branch['branch_name']); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo e($branch['unique_id']); ?></span>
                                                </td>
                                                <td class="desc"><?php echo e($branch['location']); ?></td>
                                                <td><?php echo e($branch['hardware']); ?></td>
												<td><span class="<?php echo e($branch['class']); ?>"><?php echo e($branch['status']); ?></span></td>
                                                <td>
                                                    <?php echo e($branch['created_at']); ?>

                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/restaurant/edit-branch/<?php echo e($branch['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($branch['id']); ?>" data-type="branch" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer" id="space_<?php echo e($branch['id']); ?>"></tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/restaurantAdmin/AllBranches.blade.php ENDPATH**/ ?>