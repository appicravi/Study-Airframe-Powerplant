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
                                     <h5 class="title-5">Room List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <a href="<?php echo e(url('super-admin/add-room')); ?>" class="btn btn-sm btn-secondary">Add Room</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Title</th>
                                                <th style="color: #000;">Image</th>
												<th style="color: #000;">Capacity</th>
                                                <th style="color: #000;">Room Type</th>
                                                <th style="color: #000;">Price</th>
												<th style="color: #000;">Amenities</th>
                                                <th style="color: #000;">status</th>
                                                <th style="color: #000;">date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($rooms): ?>
                                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr class="tr-shadow" id="row_<?php echo e($room['id']); ?>" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($room['id']); ?></td>
                                                <td><?php echo e($room['title']); ?></td>
                                                <td><?php if($room['image']): ?> <img src="<?php echo e($room['image']); ?>" width="100"> <?php endif; ?></td>
                                                <td><?php echo e($room['capacity']); ?></td>
                                                <td><?php echo e($room['room_type']); ?></td>
                                                <td><?php echo e($room['price']); ?></td>
												<td><?php echo e($room['amenities']); ?></td>
                                                <td><span class="<?php echo e($room['class']); ?>"><?php echo e($room['status']); ?></span></td>
                                                <td><?php echo e($room['created_at']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-room/<?php echo e($room['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="<?php echo e($room['id']); ?>" data-type="room" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
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
<?php /**PATH C:\xampp\htdocs\dalohotel\resources\views/roomManage/allRooms.blade.php ENDPATH**/ ?>