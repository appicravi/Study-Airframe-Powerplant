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
                                     <h5 class="title-5">Booking List</h5>
                                    <div class="table-data__tool">
                                    <div class="table-data__tool-left">
										<form action="" id="filter" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="rs-select2--light rs-select2--md" style="width: 200px;">
											<input type="text" id="date" name="date" class="form-control" placeholder="Filter by date">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="status" id="status">
                                                <option value="" selected="selected">Filter by status</option>
												<option value="Pending">Pending</option>
												<option value="Assign">Assign</option>
												<option value="Completed">Completed</option>
												<option value="Cancelled">Cancelled</option>	
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
										<input type="hidden" name="search_type" value="filter_item">
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" id="sub" class="au-btn-filter filterdata">
                                            <i class="zmdi zmdi-filter-list"></i>filter
										</button>
										<button type="button" id="clear" class="au-btn-filter" style="background:red; color:#fff;">
                                            <i class="zmdi zmdi-format-clear-all"></i>Clear Data
										</button>
										
										</form>
                                    </div>
                                </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Booking ID</th>
                                                <th style="color: #000;">Total Amount</th>
                                                <th style="color: #000;">Customer</th>
												<th style="color: #000;">Address</th>
                                                <th style="color: #000;">Zip Code</th>
                                                <th style="color: #000;">Status</th>
												<th style="color: #000;">Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        <?php if($bookList): ?>
                                            <?php $__currentLoopData = $bookList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($book['id']); ?>" style="border-top: 1px solid #ebe8f8;">
												<td>#<?php echo e($book['id']); ?></td>
                                                <td>$<?php echo e($book['Amount']); ?></td>
                                                <td><?php echo e($book['fname']."  ".$book['lname']); ?></td>
												<td><?php echo e($book['street']); ?></td>
                                                <td><?php echo e($book['code']); ?></td>												
                                                <td><?php echo e($book['status']); ?></td>
												<td><?php echo e($book['creaetd_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-booking/<?php echo e($book['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
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
<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/bookings/allBookings.blade.php ENDPATH**/ ?>