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
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <a href="#"  class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add Item</a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2><?php echo e($customers); ?></h2>
                                                <span>Happy Customers</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2><?php echo e($room_booking); ?></h2>
                                                <span>Room Bookings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2><?php echo e($hall_booking); ?></h2>
                                                <span>Hall Bookings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2><?php echo e($orders); ?></h2>
                                                <span>Food Orders</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Recent Food Order</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Order ID</th>
                                                <th style="color: #000;">Total Amount</th>
                                                <th style="color: #000;">Customer</th>
												<th style="color: #000;">Phone</th>
												<th style="color: #000;">Address</th>
                                                <th style="color: #000;">Status</th>
												<th style="color: #000;">Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        <?php if($orderList): ?>
                                            <?php $__currentLoopData = $orderList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($order['id']); ?>" style="border-top: 1px solid #ebe8f8;">
												<td>#<?php echo e($order['order_id']); ?></td>
                                                <td>$<?php echo e($order['total']); ?></td>
                                                <td><?php echo e($order['cust_name']); ?></td>
												<td><?php echo e($order['cust_phone']); ?></td>
												<td><?php echo e($order['address']); ?></td>
                                                <td><?php echo e($order['status']); ?></td>
												<td><?php echo e($order['creaetd_at']); ?></td>
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
                                </div>
                            </div>
							<div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Recent Room Bookings</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Order ID</th>
                                                <th style="color: #000;">Total Amount</th>
                                                <th style="color: #000;">Customer</th>
												<th style="color: #000;">Phone</th>
												<th style="color: #000;">Address</th>
                                                <th style="color: #000;">Status</th>
												<th style="color: #000;">Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        <?php if($roomList): ?>
                                            <?php $__currentLoopData = $roomList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($order['id']); ?>" style="border-top: 1px solid #ebe8f8;">
												<td>#<?php echo e($order['order_id']); ?></td>
                                                <td>$<?php echo e($order['total']); ?></td>
                                                <td><?php echo e($order['cust_name']); ?></td>
												<td><?php echo e($order['cust_phone']); ?></td>
												<td><?php echo e($order['address']); ?></td>
                                                <td><?php echo e($order['status']); ?></td>
												<td><?php echo e($order['creaetd_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/view-booking/<?php echo e($order['id']); ?>"><i class="zmdi zmdi-view-list"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Recent Hall Bookings</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Order ID</th>
                                                <th style="color: #000;">Total Amount</th>
                                                <th style="color: #000;">Customer</th>
												<th style="color: #000;">Phone</th>
												<th style="color: #000;">Address</th>
                                                <th style="color: #000;">Status</th>
												<th style="color: #000;">Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        <?php if($hallList): ?>
                                            <?php $__currentLoopData = $hallList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_<?php echo e($order['id']); ?>" style="border-top: 1px solid #ebe8f8;">
												<td>#<?php echo e($order['order_id']); ?></td>
                                                <td>$<?php echo e($order['total']); ?></td>
                                                <td><?php echo e($order['cust_name']); ?></td>
												<td><?php echo e($order['cust_phone']); ?></td>
												<td><?php echo e($order['address']); ?></td>
                                                <td><?php echo e($order['status']); ?></td>
												<td><?php echo e($order['creaetd_at']); ?></td>
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
                                </div>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/suparAdmin/suparadmindash.blade.php ENDPATH**/ ?>