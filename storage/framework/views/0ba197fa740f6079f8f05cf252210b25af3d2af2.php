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
                                     <h5 class="title-5">Subscription List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
									  <input type="text" class="form-control" id="1search_service1" placeholder="Search by NAME">
											<input type="hidden" class="form-control" id="crf" value="<?php echo e(csrf_token()); ?>">
                                          <a href="<?php echo e(url('super-admin/add-service')); ?>" class="btn btn-sm btn-secondary">Add Subscription</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">ID</th>
                                                <th style="color: #000;">Name</th>                                                
                                                <th style="color: #000;">Charge</th>
                                                <th style="color: #000;">Count</th> 
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        <?php if($serviceList): ?>
	<?php $__currentLoopData = $serviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="tr-shadow" id="row_<?php echo e($service->id); ?>" style="border-top: 1px solid #ebe8f8;">
        <td><?php echo e($service->id); ?></td>
        <td><?php echo e($service->ser_name); ?></td>
		
		<td><?php echo e($service->charge); ?>%</td>
		 <td><?php echo e($service->quantity); ?></td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-service/<?php echo e($service->id); ?>"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="<?php echo e($service->id); ?>" data-type="service" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>

   
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                         <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />


   
                        
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>











<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/service/allSub.blade.php ENDPATH**/ ?>