<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
       

        <!-- PAGE CONTAINER-->
        <div class="page-container">
              <?php echo $__env->make('inc.restaurentHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
								<div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Employees List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="<?php echo e(url('restaurant/add-employee')); ?>" class="btn btn-sm btn-secondary">Add Employee</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#EmpID</th>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Dial Code</th>
												<th style="color: #000;">Phone</th>
												<th style="color: #000;">Email</th>
												<th style="color: #000;">Role</th>
												<th style="color: #000;">Language</th>
												<th style="color: #000;">status</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($allEmployees): ?>
											<?php $__currentLoopData = $allEmployees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($employee['emp_id']); ?></td>
                                                <td><?php echo e($employee['employee_name']); ?></td>
												<td><?php echo e($employee['code']); ?></td>
												<td><?php echo e($employee['phone']); ?></td>
												<td><?php echo e($employee['email']); ?></td>
												<td><?php echo e($employee['role']); ?></td>
												<td><?php echo e($employee['language']); ?></td>
												<td><span class="<?php echo e($employee['class']); ?>"><?php echo e($employee['status']); ?></span></td>
                                                <td><?php echo e($employee['created_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/restaurant/edit-employee/<?php echo e($employee['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
														<a class="item deleteme" data-id="<?php echo e($employee['id']); ?>" data-type="employee" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/restaurantAdmin/employees/allEmployee.blade.php ENDPATH**/ ?>