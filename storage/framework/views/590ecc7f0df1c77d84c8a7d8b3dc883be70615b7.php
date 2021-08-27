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
                                                <h2><?php echo e($bookings_complete); ?></h2>
                                                <span>Bookings completed</span>
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
                                                <h2><?php echo e($cleaners); ?></h2>
                                                <span>Cleaners</span>
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
                                                <h2><?php echo e($locations); ?></h2>
                                                <span> Location</span>
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
                                <h2 class="title-1 m-b-25">Recent Bookings</h2>
                                <div class="table-responsive table--no-card m-b-40">
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
<?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/suparAdmin/suparadmindash.blade.php ENDPATH**/ ?>