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
                                     <h5 class="title-5">Branches</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">#</th>
                                                <th style="color: #000;">Delivery areas</th>
                                                <th style="color: #000;">Sync</th>
                                                <th style="color: #000;">City</th>
                                                <th style="color: #000;">The Work</th>
                                                <th style="color: #000;">Reference number</th>
                                                <th style="color: #000;">Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($getBranch): ?>
                                            <?php $__currentLoopData = $getBranch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr class="tr-shadow" id="row_4" style="border-top: 1px solid #ebe8f8;">
                                                <td>#<?php echo e($branch['id']); ?></td>
                                                <td><?php echo e($branch['delivery']); ?></td>
                                                <td><?php echo e($branch['sync']); ?></td>
                                                <td><?php echo e($branch['city']); ?></td>
                                                <td><?php echo e($branch['work']); ?></td>
                                                <td><?php echo e($branch['ref_number']); ?></td>
                                                <td><?php echo e($branch['name']); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-ubranch/<?php echo e($branch['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/branchesUser/branchList.blade.php ENDPATH**/ ?>