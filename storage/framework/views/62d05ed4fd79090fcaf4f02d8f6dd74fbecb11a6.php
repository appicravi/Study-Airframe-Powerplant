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
					<h3 class="title-6 m-b-35">Restaurant Detail</h3>
						<div class="row">
                            <div class="col-md-4">
                                <div class="card">
									<div class="card-header">
                                        <strong class="card-title"><?php echo e($getRestaurant->name); ?>

                                            <small>
                                                <span class="badge badge-success float-right mt-1">
												<?php if($getRestaurant->status==1): ?> Active <?php endif; ?>
												</span>
                                            </small>
                                        </strong>
                                    </div>
                                    <img class="card-img-top" src="<?php echo e(url('public/system/restaurant_images/')); ?>/<?php echo e($getRestaurant->image); ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo e($getRestaurant->description); ?></p>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-8">
								<div class="card">
								  <div class="card-header">
									<strong class="card-title" v-if="headerText">Additional Detail</strong>
								  </div>
								  <div class="card-body p-0">
									<table class="table table-hover table-striped table-align-middle mb-0">
									  <tbody>
										<tr>
										  <td>Unique ID</td>
										  <td><?php echo e($getRestaurant->unique_id); ?></td>
										</tr>
										<tr>
										  <td>Email Address</td>
										  <td><?php echo e($getRestaurant->email); ?></td>
										</tr>
										<tr>
										  <td>Phone Number</td>
										  <td><?php echo e($getRestaurant->phone); ?></td>
										</tr>
										<tr>
										  <td>Location</td>
										  <td><?php echo e($getRestaurant->location); ?></td>
										</tr>
										<tr>
										  <td>Total Branches</td>
										  <td><?php echo e($totalBranches); ?></td>
										</tr>
										<tr>
										  <td>Created Date</td>
										  <td><?php echo e($getRestaurant->created_at); ?></td>
										</tr>
									  </tbody>
									</table>
								  </div>
								</div>
								<div class="card">
									<div class="card-header">
										<strong>Restaurant Settings</strong>
									</div>
									<div class="card-body">
										<a href="<?php echo e(url('')); ?>/supar-admin/add-branch/<?php echo e($getRestaurant->id); ?>" class="btn btn-primary">
										<i class="fa fa-magic"></i>&nbsp; Add Branch</a>
										<a href="<?php echo e(url('')); ?>/supar-admin/all-branches/<?php echo e($getRestaurant->id); ?>" class="btn btn-secondary">
										<i class="fa fa-magic"></i>&nbsp; Branch List</a>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/suparAdmin/restaurantDetail.blade.php ENDPATH**/ ?>