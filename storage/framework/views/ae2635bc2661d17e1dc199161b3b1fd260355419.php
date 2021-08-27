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
						
								<input type="hidden" name="booking_id" id="id" value="<?php echo e($bookList->booking_id); ?>">
								<input type="hidden" name="date" id="id" value="<?php echo e($bookList->date); ?>">
								<input type="hidden" name="time" id="id" value="<?php echo e($bookList->time); ?>">	
								<input type="hidden" name="type"  value="assign">							
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
								<div class="card-header d-flex justify-content-between align-items-center">
									<h5>Booking</h5> #<?php echo e($bookList->booking_id); ?><p>Remaining Cleaning : <?php if($bookList->clean==1): ?> 0 <?php else: ?><?php echo e($bookList->clean); ?> <?php endif; ?></p><p>Next Cleaning :  <?php echo e($bookList->date); ?></p>
									<div role="group" class="btn-group btn-group-sm">
										<select name="option" id="option" class="form-control" 
										<?php if($bookList->status=='Cancelled' || $bookList->status=='Completed'): ?> disabled <?php endif; ?>>
											<option value="Pending" <?php if($bookList->status=='Pending'): ?> selected <?php endif; ?>>Pending</option>
											<a href="#" data-toggle="modal" data-target="#exampleModal" > <option value="Assign" id="assign"  <?php if($bookList->status=='Assign'): ?> selected <?php endif; ?>>Assign</option></a>
											
											<option value="Completed" <?php if($bookList->status=='Completed'): ?> selected <?php endif; ?>>Completed</option>
											<option value="Cancelled" <?php if($bookList->status=='Cancelled'): ?> selected <?php endif; ?>>Cancelled</option>
										</select> &nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" id="metype" value="item">
										<input type="hidden" id="makehidden" value="<?php echo e($bookList->booking_id); ?>">
										<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
										<button onclick="printDiv('printme')" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print</button>
									</div>
								</div>
								<div id="printme">
								
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Booking Id</strong>  <span><?php echo e($bookList->booking_id); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Schedule date</strong>  <span><?php echo e($bookList->date); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Schedule time</strong>  <span><?php echo e($bookList->time); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Total Amount</strong>  <span>$<?php echo e($bookList->Amount); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Name</strong>  <span><?php if($bookList->fname): ?><?php echo e($bookList->fname." ".$bookList->lname); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Address</strong>  <span><?php echo e($bookList->apartment."  ".$bookList->street." ".$bookList->city); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>State</strong>  <span><?php echo e($bookList->state); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
									
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Zip Code</strong>  <span><?php echo e($bookList->code); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Special Request</strong>  <span><?php if($bookList->sp_request): ?><?php echo e($bookList->sp_request); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Cleaner Request</strong>  <span><?php if($bookList->cleaner_rq): ?><?php echo e($bookList->cleaner_rq); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Bedrooms</strong>  <span><?php if($bookList->bedroom): ?><?php echo e($bookList->bedroom); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Bathrooms</strong>  <span><?php if($bookList->bath): ?><?php echo e($bookList->bath); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>How Often </strong>  <span><?php if($bookList->how_often): ?><?php echo e($bookList->how_often); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Subsciption</strong>  <span><?php if($bookList->subs): ?><?php echo e($bookList->subs); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Need Extra</strong>  <span><?php if($bookList->extra): ?><?php echo e($bookList->extra); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>ow Supply</strong>  <span><?php if($bookList->supplie): ?><?php echo e($bookList->supplie); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Supply Description</strong>  <span><?php if($bookList->supply_msg): ?><?php echo e($bookList->supply_msg); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
									</div>
								</div>
								
								</div>
							  </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
<script> 
        function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
    </script> 

    </div>
    <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/development/roccabox/resources/views/bookings/viewBookings.blade.php ENDPATH**/ ?>