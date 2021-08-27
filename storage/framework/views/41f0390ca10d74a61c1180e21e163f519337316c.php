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
                                     <h5 class="title-5">Order List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button>
                                       </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">Time</th>
                                                <th style="color: #000;">Reference</th>
                                                <th style="color: #000;">Branch</th>
                                                <th style="color: #000;">Type</th>
                                                <th style="color: #000;">Customer</th>
                                                <th style="color: #000;">Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($orderList): ?>
                                            <?php $__currentLoopData = $orderList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($order['id']); ?>" style="border-top: 1px solid #ebe8f8;">
                                                <td><?php echo e($order['creaetd_at']); ?></td>
                                                <td><?php echo e($order['ref_number']); ?></td>
                                                <td><?php echo e($order['branch']); ?></td>
                                                <td><?php echo e($order['type']); ?></td>
                                                <td><?php echo e($order['cust_name']); ?></td>
                                                <td><?php echo e($order['status']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-order/<?php echo e($order['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/orders/allOrders.blade.php ENDPATH**/ ?>