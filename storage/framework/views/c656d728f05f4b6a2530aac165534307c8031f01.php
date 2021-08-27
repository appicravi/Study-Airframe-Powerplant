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
									<h5>Order #<?php echo e($order->id); ?></h5> 
									<div role="group" class="btn-group btn-group-sm">
										<button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-envelope-o"></i> Send Invoice</button>
										<button onclick="window.print();" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print</button>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Order Number</strong>  <span><?php echo e($order->id); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Branch</strong>  <span><?php echo e($branchname); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Source</strong>  <span><?php if($order->source): ?><?php echo e($order->source); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Type</strong>  <span><?php if($order->type): ?><?php echo e($order->type); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Table</strong>  <span>-</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Persons</strong>  <span><?php if($order->person): ?><?php echo e($order->person); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Rounding</strong>  <span>0</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Tips</strong>  <span><?php if($order->tip): ?><?php echo e($order->tip); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Tags</strong>  <span>-</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Cashier</strong>  <span><?php if($order->cashier): ?><?php echo e($order->cashier); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Waiter</strong>  <span>-</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Device</strong>  <span><?php if($order->device): ?><?php echo e($order->device); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Agent</strong>  <span>-</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Driver</strong>  <span>-</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Business Date</strong>  <span><?php if($order->business_date): ?><?php echo e($order->business_date); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Opened at</strong>  <span><?php if($order->open_at): ?><?php echo e($order->open_at); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Closed at</strong>  <span><?php if($order->close_at): ?><?php echo e($order->close_at); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Kitchen Received</strong>  <span><?php if($order->kitchen_recieve): ?><?php echo e($order->kitchen_recieve); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Kitchen Done</strong>  <span><?php if($order->kitchen_done): ?><?php echo e($order->kitchen_done); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Preparation Time</strong>  <span><?php if($order->preparation_time): ?><?php echo e($order->preparation_time); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Name</strong>  <span><?php if($order->cust_name): ?><?php echo e($order->cust_name); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Phone</strong>  <span><?php if($order->cust_phone): ?><?php echo e($order->cust_phone); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
									</div>
								</div>
								<table class="table bg-white">
									<thead>
										<tr>
											<th class="table-fit">#</th>
											<th>Description</th>
											<th></th>
											<th class="text-right">Quantity</th>
											<th class="text-right">Price</th>
										</tr>
									</thead>
									<tbody>
										<?php if($orderInner): ?>
										<?php $__currentLoopData = $orderInner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
										<tr>
											<td><?php echo e($product['product_id']); ?></td>
											<td><strong><?php echo e($product['product_name']); ?></strong> (<?php echo e($product['qty']); ?>)
												<br> <small><strong>Received</strong>: <?php if($order->kitchen_recieve): ?><?php echo e($order->kitchen_recieve); ?><?php endif; ?>
																				|
																				<strong>Done</strong>: <?php if($order->kitchen_done): ?><?php echo e($order->kitchen_done); ?><?php endif; ?>
																				|
																				<strong>Preparation Time</strong>: <?php if($order->preparation_time): ?><?php echo e($order->preparation_time); ?><?php endif; ?>
																			</small>
											</td>
											<td class="text-right"><?php echo e($product['price']); ?></td>
											<td class="text-right"><?php echo e($product['qty']); ?></td>
											<td class="text-right"><?php echo e($product['subtot']); ?></td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Subtotal</strong>
											</td>
											<td class="text-right"><?php if($order->total): ?><?php echo e($order->total); ?>.00 <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Service Fees</strong>
											</td>
											<td class="text-right"><?php if($order->service_fee): ?><?php echo e($order->service_fee); ?> <?php else: ?> 0 <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td colspan="2" class="text-right"><strong>TAX</strong>
											</td>
											<td class="text-right"><?php if($order->tax): ?><?php echo e($order->tax); ?> <?php else: ?> 0 <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td colspan="2" class="text-right"><strong>Discount</strong>
											</td>
											<td class="text-right"><?php if($order->discount): ?><?php echo e($order->discount); ?> <?php else: ?> 0 <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Total</strong>
											</td>
											<td class="text-right"><?php if($order->total): ?><?php echo e($order->total); ?>.00 <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right">## Payments ##</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td class="text-right"><?php if($order->creaetd_at): ?><?php echo e($order->creaetd_at); ?><?php endif; ?></td>
											<td class="text-right"><strong>Shabaka</strong>
											</td>
											<td class="text-right "><?php if($order->total): ?><?php echo e($order->total); ?>.00 <?php endif; ?></td>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/orders/viewOrder.blade.php ENDPATH**/ ?>