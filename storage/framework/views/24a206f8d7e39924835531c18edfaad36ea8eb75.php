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
										<select name="option" id="option" class="form-control" 
										<?php if($order->status=='Cancelled' || $order->status=='Delivered'): ?> disabled <?php endif; ?>>
											
											<option value="Pending" <?php if($order->status=='Pending'): ?> selected <?php endif; ?>>Pending</option>
											<option value="In progress" <?php if($order->status=='In progress'): ?> selected <?php endif; ?>>In progress</option>
											<option value="On the Way" <?php if($order->status=='On the Way'): ?> selected <?php endif; ?>>On the Way</option>
											<option value="Delivered" <?php if($order->status=='Delivered'): ?> selected <?php endif; ?>>Delivered</option>
											<option value="Cancelled" <?php if($order->status=='Cancelled'): ?> selected <?php endif; ?>>Cancelled</option>
										</select> &nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" id="metype" value="item">
										<input type="hidden" id="makehidden" value="<?php echo e($order->id); ?>">
										<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
										<button onclick="printDiv('printme')" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print</button>
									</div>
								</div>
								<div id="printme">
								
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Order Number</strong>  <span><?php echo e($order->order_id); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Phone</strong>  <span><?php echo e($order->cust_phone); ?></span>
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
											<div class="d-flex justify-content-between"><strong>Customer Name</strong>  <span><?php if($order->cust_name): ?><?php echo e($order->cust_name); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
									
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Payment Mode</strong>  <span><?php echo e($order->payment_method); ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Transaction Name</strong>  <span><?php if($order->transaction_name): ?><?php echo e($order->transaction_name); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Transaction ID</strong>  <span><?php if($order->transaction_id): ?><?php echo e($order->transaction_id); ?><?php endif; ?></span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<?php if($order->payment_method=='paypal'): ?>
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
											<th class="text-right">Price/Item</th>
											<th class="text-right">Quantity</th>
											<th class="text-right">Price</th>
										</tr>
									</thead>
									<tbody>
										<?php if($orderInner): ?>
										<?php $i=1; ?>
										<?php $__currentLoopData = $orderInner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
										<tr>
											<td><?php echo $i; ?></td>
											<td><strong><?php echo e($product['product_name']); ?></strong> (<?php echo e($product['qty']); ?>)
												
											</td>
											<td class="text-right"><?php echo e($product['price']); ?></td>
											<td class="text-right"><?php echo e($product['qty']); ?></td>
											<td class="text-right"><?php echo e($product['subtot']); ?></td>
										</tr>
										<?php $i++; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Subtotal</strong>
											</td>
											<td class="text-right"><?php if($order->total): ?><?php echo e($order->total); ?><?php endif; ?></td>
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
											<td class="text-right"><?php if($order->total): ?><?php echo e($order->total); ?> <?php endif; ?></td>
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
											<td class="text-right "><?php if($order->total): ?><?php echo e($order->total); ?> <?php endif; ?></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td class="text-center">
											<img src="<?php echo e(url('')); ?>/public/system/admin/images/icon/logs.png">
											</td>
											<td class="text-right"> 
											</td>
											<td class="text-right "> </td>
										</tr>
									</tbody>
								</table>
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
<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/orders/viewOrder.blade.php ENDPATH**/ ?>