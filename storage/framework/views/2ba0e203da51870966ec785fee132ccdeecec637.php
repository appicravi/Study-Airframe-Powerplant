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
                                     <h5 class="title-5">Roles List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="<?php echo e(url('supar-admin/add-role')); ?>" class="btn btn-sm btn-secondary">Add Role</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Role Name</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($allRoles): ?>
											<?php $__currentLoopData = $allRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="
    border-top: 1px solid #ebe8f8;
">
                                                <td>#<?php echo e($role->id); ?></td>
                                                <td><?php echo e($role->role_name); ?></td>
                                                <td><?php echo e($role->created_at); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
														<?php if($role->id!=1 && $role->id!=2 && $role->id!=3 && $role->id!=4): ?>
															<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/edit-role/<?php echo e($role->id); ?>"><i class="zmdi zmdi-edit"></i></a>
															<a class="item deleteme" data-id="<?php echo e($role->id); ?>" data-type="role" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
														<?php else: ?>
															<a class="item" data-toggle="tooltip" data-placement="top" href="javascript:void(0)" data-original-title="" title=""><i class="zmdi zmdi-view-list"></i></a>
														<?php endif; ?>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                           <!-- <tr class="spacer" id="space_<?php echo e($role->id); ?>"></tr>-->
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
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/roles/allRoles.blade.php ENDPATH**/ ?>