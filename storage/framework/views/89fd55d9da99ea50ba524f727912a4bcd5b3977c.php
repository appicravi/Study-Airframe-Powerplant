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
                                     <h5 class="title-5">Admin Reports
										<span class="shortti">Recent Transaction</span>
									 </h5>
									 
									<div class="table-data__tool">
										<div class="table-data__tool-left">
											<div role="group" class="btn-group btn-group-sm" style="width: 100%;">
												<select name="shorts" id="shorts" class="form-control" style="width: 200px;">
													<option value="">Short by Duration</option>
													<option value="Weekly">Weekly</option>
													<option value="Monthaly">Monthaly</option>
													<option value="Yearly">Yearly</option>	
												</select>
												<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
												&nbsp;&nbsp;&nbsp;&nbsp;
												<select name="shortype" id="shortype" class="form-control">
													<option value="">Short by Type</option>
													<option value="Items">Items</option>
													<option value="Rooms">Rooms</option>
													<option value="Halls">Halls</option>	
												</select>
												<input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
												&nbsp;&nbsp;&nbsp;&nbsp;
												<button onclick="printDiv('printme')" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print/Download</button>
											</div>
											<br>
											<div role="group" class="btn-group btn-group-sm" style="width: 100%;margin-top: 15px;">
												<form action="" id="dateShort" method="post" enctype="multipart/form-data" class="form-horizontal">
												<div class="row form-group" style="margin: 0 -15px;">
													<div class="col col-md-4" style="padding-right: 0;">
														<input type="text" id="datefrom" name="datefrom" placeholder="Date From..." class="form-control">
													</div>
													<div class="col col-md-4" style="padding-right: 0;">
														<input type="text" id="dateto" name="dateto" placeholder="Date To..." class="form-control">
													</div>
													<div class="col col-md-4" style="padding-right: 0;">
														<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
														<button id="usb" type="submit" class="btn btn-sm btn-secondary" style="padding: 7px 40px;">
															Filter
														</button>
													</div>
												</div>
												</form>
											</div>
										</div>
									</div> 
                                </div>
								<div id="printme">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">S.No.</th>
												<th style="color: #000;">Order ID</th>
                                                <th style="color: #000;">Amount</th>
                                                <th style="color: #000;">Status</th>
                                                <th style="color: #000;">Type</th>
												<th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="reportdata">
                                        <?php if($lists): ?>
											<?php $i=1; ?>
                                            <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr class="tr-shadow" id="row_<?php echo e($list['id']); ?>" style="border-top: 1px solid #ebe8f8;">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo e($list['order_id']); ?></td>
                                                <td><?php echo e($list['amount']); ?></td>
                                                <td><?php echo e($list['status']); ?></td>
												<td><?php echo e($list['type']); ?></td>
												<td><?php echo e($list['created_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
														<?php if($list['type']=='items'): ?>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-order/<?php echo e($list['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
														<?php elseif($list['type']=='rooms'): ?>
														<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-booking/<?php echo e($list['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
														<?php else: ?>
														<a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-hallbooking/<?php echo e($list['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>	
														<?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
											<?php $i++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
											
											
                                        </tbody>
										<tr class="tr-shadow" id="row_80" style="border-top: 1px solid #ebe8f8;">
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td style="color: #fff; background: #676464;">Orders Total:</td>
											   <td style="color: #fff; background: #676464;">
												  <span class="orders">$<?php echo number_format((float)$itemTotal, 2, '.', '') ?></span>
											   </td>
											</tr>
											<tr class="tr-shadow" id="row_80" style="border-top: 1px solid #ebe8f8;">
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td style="color: #fff; background: #676464;">Room Booking Total:</td>
											   <td style="color: #fff; background: #676464;">
												  <span class="roms">$<?php echo number_format((float)$roomTotal, 2, '.', '') ?></span>
											   </td>
											</tr>
											<tr class="tr-shadow" id="row_80" style="border-top: 1px solid #ebe8f8;">
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td>&nbsp;</td>
											   <td style="color: #fff; background: #676464;">Hall Booking Total:</td>
											   <td style="color: #fff; background: #676464;">
												  <span class="hals">$<?php echo number_format((float)$hallTotal, 2, '.', '') ?></span>
											   </td>
											</tr>
                                    </table>
                                </div>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/report/AdminReports.blade.php ENDPATH**/ ?>