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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Cashier List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #fff;">#</th>
                                                <th style="color: #fff;">Name</th>
                                                <th style="color: #fff;">Unique ID</th>
                                                <th style="color: #fff;">Email</th>
                                                <th style="color: #fff;">Phone</th>
                                                <th style="color: #fff;">Status</th>
                                                <th style="color: #fff;">Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($cashierlist): ?>
                                            <?php $__currentLoopData = $cashierlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cashier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow" id="row_<?php echo e($cashier['id']); ?>">
                                                <td>
                                                    #<?php echo e($cashier['id']); ?>

                                                </td>
                                                <td><?php echo e($cashier['name']); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo e($cashier['unique_id']); ?></span>
                                                </td>
                                                <td class="desc"><?php echo e($cashier['email']); ?></td>
                                                <td><?php echo e($cashier['phone']); ?></td>
                                               
                                                <td><span class="<?php echo e($cashier['class']); ?>"><?php echo e($cashier['status']); ?></span></td>
                                                <td>
                                                    <?php echo e($cashier['created_at']); ?>

                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" href="<?php echo e(url('')); ?>/super-admin/edit-cashier/<?php echo e($cashier['id']); ?>"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="<?php echo e($cashier['id']); ?>" data-type="cashier" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer" id="space_<?php echo e($cashier['id']); ?>"></tr>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/suparAdmin/allCashier.blade.php ENDPATH**/ ?>