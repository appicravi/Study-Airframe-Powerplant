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
                                     <h5 class="title-5">Modifier List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <button data-toggle="modal" data-target="#bulkManage" class="btn btn-sm btn-secondary">Import</button> 
                                          <a href="<?php echo e(url('supar-admin/add-modifier')); ?>" class="btn btn-sm btn-secondary">Add new</a></div>
                                </div>
								
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Minimum Option</th>
                                                <th style="color: #000;">Maximum Option</th>
													<th style="color: #000;">Excluded Options</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($modifier): ?>
											<?php $__currentLoopData = $modifier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $modify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_3" style="border-top:1px solid #0909092b"> <?php echo e($modify->id); ?>">
                                                <td>
                                                    #<?php echo e($modify->id); ?>

                                                </td>
                                                <td><?php echo e($modify->name); ?></td>
                                               
                                                <td><?php echo e($modify->minimum_option); ?></td>
												 <td><?php echo e($modify->maximum_option); ?></td>
												  <td><?php echo e($modify->exclude); ?></td>
                                                <td>
                                                    <?php echo e($modify->created); ?>

                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/edit-modifier/<?php echo e($modify->id); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($modify->id); ?>" data-type="modifier" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                           <!-- <tr class="spacer" id="space_<?php echo e($modify->id); ?>"></tr>-->
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
								
							
                                <!-- END DATA TABLE -->
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/allModifier.blade.php ENDPATH**/ ?>