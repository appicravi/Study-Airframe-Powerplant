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
								<div class="card-header d-flex justify-content-between align-items-center">
									<h5>Order #<?php echo e($order->order_id); ?></h5> 
									<div role="group" class="btn-group btn-group-sm">
										<select name="option" id="option" class="form-control" <?php if($order->status=='Cancelled' || $order->status=='Confirmed'): ?> disabled <?php endif; ?>>
											<option value="Pending" <?php if($order->status=='Pending'): ?> selected <?php endif; ?>>Pending</option>
											<option value="In progress" <?php if($order->status=='In progress'): ?> selected <?php endif; ?>>In progress</option>
											<option value="Confirmed" <?php if($order->status=='Confirmed'): ?> selected <?php endif; ?>>Confirmed</option>
											<option value="Cancelled" <?php if($order->status=='Cancelled'): ?> selected <?php endif; ?>>Cancelled</option>
											
											
										</select> &nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" id="makehidden" value="<?php echo e($order->id); ?>">
										<input type="hidden" id="metype" value="hall">
										<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
										<button onclick="window.print();" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print</button>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Order Number</strong>  <span><?php echo e($order->order_id); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Phone</strong>  <span><?php echo e($order->phone); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Address</strong>  <span><?php echo e($order->address); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Email</strong>  <span><?php echo e($order->email); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Name</strong>  <span><?php if($order->customer_name): ?><?php echo e($order->customer_name); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<!--<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Phone</strong>  <span><?php if($order->phone): ?><?php echo e($order->phone); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>-->
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Payment Mode</strong>  <span><?php echo e($order->pay_mode); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Transaction ID</strong>  <span>#####</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Created Date</strong>  <span><?php if($order->created_at): ?><?php echo e($order->created_at); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Check In Date</strong>  <span><?php if($order->checkin_date): ?><?php echo e($order->checkin_date); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Check Out Date</strong>  <span><?php if($order->checkout_date): ?><?php echo e($order->checkout_date); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
										<?php if($order->pay_mode=='paypal'): ?>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Payment Status</strong>  <span><?php if($order->payment_status): ?><?php echo e($order->payment_status); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<?php endif; ?>
									</div>
								</div>
								<table class="table bg-white">
									<thead>
										<tr>
											<th class="table-fit">#</th>
											<th>Description</th>
											<th class="text-right">Price/Hall</th>
											<th class="text-right">Quantity</th>
											<th class="text-right">Price</th>
										</tr>
									</thead>
									<tbody>
										<?php if($rooms): ?>
										<?php $i=1; ?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><strong><?php echo e($rooms->title); ?></strong> (<?php echo e($order->total_guest); ?>)
												
											</td>
											<td class="text-right"><?php echo e($rooms->price); ?></td>
											<td class="text-right"><?php echo e($order->total_guest); ?></td>
											<td class="text-right"><?php echo e($order->total_amount); ?></td>
										</tr>
										<?php $i++; ?>
										<?php endif; ?>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Total</strong>
											</td>
											<td class="text-right"><?php if($order->total_amount): ?><?php echo e($order->total_amount); ?>.00 <?php endif; ?></td>
										</tr>
									</tbody>
								</table>
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
<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/orders/viewHallBooking.blade.php ENDPATH**/ ?>