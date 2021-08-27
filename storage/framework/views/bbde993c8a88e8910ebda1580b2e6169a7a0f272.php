<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
        <?php echo $__env->make('inc.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php echo $__env->make('inc.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <button type="button" id="modal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" hidden='hidden'>
				Launch demo modal
			  </button>
			  
			  <!-- Modal -->
			  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
						<form action="" id="assign_cl" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Cleaners</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="cleaner" id="cleaner" class="form-control" required>
										<option value="">Choose Cleaner</option>
										<?php if($cleaners): ?>
										<?php $__currentLoopData = $cleaners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cleaner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($cleaner->id); ?>"><?php echo e($cleaner->first_name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</select>
								</div>
							</div>
						
							<div class="row card-footer">
								<div class="col col-md-3">
								   &nbsp;
								</div>
								<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
						
								<input type="hidden" name="booking_id" id="id" value="<?php echo e($changeList[0]['booking_id']); ?>">
								
								<input type="hidden" name="type"  value="change">								
								<div class="col-12 col-md-9">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-dot-circle-o"></i> Assign
									</button>
									<button type="reset" class="reset" style="display:none;">reset </button>
									<button type="button" id="close" class="btn btn-secondary"  data-dismiss="modal">
										<i class="fa fa-ban"></i> Close
									</button>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									&nbsp;
								</div>
								<div class="col-12 col-md-9">
									<div class="result"></div>
								</div>
							</div>
						</form>
					</div>
					
				  </div>
				</div>
			  </div>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Change Cleaner Requests List</h5>
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
												<option value="Changed">Changed</option>	
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
										<input type="hidden" name="search_type" value="filter_change">
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
                                                
												<th style="color: #000;">Cleaner Name</th>
                                                <th style="color: #000;">Status</th>	
                                                <th style="color: #000;">Time</th>							
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        <?php if($changeList): ?>
                                            <?php $__currentLoopData = $changeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $change): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($change['id']); ?>" style="border-top: 1px solid #ebe8f8;">
												<td>#<?php echo e($change['booking_id']); ?></td>
                                                <td><?php echo e($change['cleaner']); ?></td>
                                                
                                                <td><?php echo e($change['status']); ?></td>
												<td><?php echo e($change['creaetd_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <input type="hidden" id="book" name="book" value="<?php echo e($change['booking_id']); ?>">
                                                        <input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>">                                            
                                                       <?php if($change['status']=='Changed'): ?> <button type="button" id="change" class="btn btn-primary small" disabled>Changed</button><?php else: ?><button type="button" id="change" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary small">Change</button><?php endif; ?>
                                                        
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
<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/bookings/allChange.blade.php ENDPATH**/ ?>