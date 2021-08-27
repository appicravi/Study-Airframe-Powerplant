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
                                     <h5 class="title-5">Device List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                </div>
								</div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
												<th style="color: #000;">Sync</th>
												<th style="color: #000;">Application</th>
												<th style="color: #000;">Code</th>
												<th style="color: #000;">License</th>
												<th style="color: #000;">Branch</th>
												<th style="color: #000;">Branch reference</th>
												<th style="color: #000;">Name</th>
												<th style="color: #000;">Reference Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($deviceList): ?>
											<?php $__currentLoopData = $deviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($device->id); ?></td>
                                                <td><?php echo e($device->updated_at); ?></td>
												<td><?php echo e($device->application); ?></td>
												<td><?php echo e($device->code); ?></td>
												<td><?php echo e($device->license); ?></td>
												<td><?php echo e($device->branch); ?></td>
												<td><?php echo e($device->branch_ref); ?></td>
												<td><?php echo e($device->name); ?></td>
												<td><?php echo e($device->ref_number); ?></td>
                                            </tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/deviceList/deviceList.blade.php ENDPATH**/ ?>