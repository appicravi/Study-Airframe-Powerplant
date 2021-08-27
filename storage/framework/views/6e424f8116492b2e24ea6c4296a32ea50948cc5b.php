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
                                     <h5 class="title-5">Taxes List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="<?php echo e(url('supar-admin/add-tax')); ?>" class="btn btn-sm btn-secondary">Add Tax</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Amount</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($allTaxes): ?>
											<?php $__currentLoopData = $allTaxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($tax->id); ?></td>
                                                <td><?php echo e($tax->name); ?></td>
												<td><?php echo e($tax->amount); ?></td>
                                                <td><?php echo e($tax->created_at); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/supar-admin/edit-tax/<?php echo e($tax->id); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($tax->id); ?>" data-type="tax" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
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
						
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/taxes/allTax.blade.php ENDPATH**/ ?>