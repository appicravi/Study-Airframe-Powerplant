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
                                     <h5 class="title-5">Event List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="<?php echo e(url('super-admin/add-event')); ?>" class="btn btn-sm btn-secondary">Add Event</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">English Name</th>
                                                <th style="color: #000;">Arabic Name</th>
                                                <th style="color: #000;">Event Type</th>
                                                <th style="color: #000;">Value</th>
                                                <th style="color: #000;">Request Type</th>
                                                <th style="color: #000;">From Date</th>
                                                <th style="color: #000;">From time</th>
                                                <th style="color: #000;">Days</th>
                                                <th style="color: #000;">Category</th>
                                                <th style="color: #000;">Product</th>
                                                <th style="color: #000;">Branch</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($eventList): ?>
                                            <?php $__currentLoopData = $eventList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($event['id']); ?></td>
                                                <td><?php echo e($event['english_name']); ?></td>
                                                <td><?php echo e($event['arabic_name']); ?></td>
                                                <td><?php echo e($event['event_type']); ?></td>
                                                <td><?php echo e($event['value']); ?></td>
                                                <td><?php echo e($event['request_type']); ?></td>
                                                <td><?php echo e($event['date']); ?></td>
                                                <td><?php echo e($event['time']); ?></td>
                                                <td><?php echo e($event['days']); ?></td>
                                                <td><?php echo e($event['category']); ?></td>
                                                <td><?php echo e($event['product']); ?></td>
                                                <td><?php echo e($event['branch']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-event/<?php echo e($event['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="$event['id']}}" data-type="event" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/Events/allEvents.blade.php ENDPATH**/ ?>