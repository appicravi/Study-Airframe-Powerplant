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
					<h3 class="title-5 m-b-35">Branch Detail</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="card">
								  <div class="card-header">
									<strong class="card-title" v-if="headerText">Additional Detail</strong>
								  </div>
								  <div class="card-body p-0">
									<table class="table table-hover table-striped table-align-middle mb-0">
									  <tbody>
										<tr>
										  <td>Branch Name</td>
										  <td><?php echo e($branchDetail->branch_name); ?></td>
										</tr>
										<tr>
										  <td>Unique ID</td>
										  <td><?php echo e($branchDetail->unique_id); ?></td>
										</tr>
										<tr>
										  <td>Description</td>
										  <td><?php echo e($branchDetail->description); ?></td>
										</tr>
										
										<tr>
										  <td>Location</td>
										  <td><?php echo e($branchDetail->location); ?></td>
										</tr>
										<tr>
										  <td>Hardware</td>
										  <td><?php echo e($branchDetail->hardware); ?></td>
										</tr>
										<tr>
										  <td>Status</td>
										  <td> 
										    <?php if($branchDetail->status==1): ?>
											<span class="badge badge-success mt-1">Active</span>
											<?php else: ?> if($branchDetail->status==0)
											<span class="badge badge-danger mt-1">Deactive</span>
											<?php endif; ?>
											</td>
										</tr>
										<tr>
										  <td>Created Date</td>
										  <td><?php echo e($branchDetail->created_at); ?></td>
										</tr>
									  </tbody>
									</table>
								  </div>
								</div>
								
							  </div>
                        </div>
                        
                    </div><?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\rcontrol\resources\views/suparAdmin/viewBranch.blade.php ENDPATH**/ ?>