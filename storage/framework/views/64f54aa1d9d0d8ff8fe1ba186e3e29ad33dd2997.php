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
                            <div class="col-lg-12">
                                <div class="card">
									<div class="card-header cards" style="background-color: white;">
                                        <strong>Add</strong> Event
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="event" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">English Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="english_name" name="english_name" placeholder="Enter English name..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Arabic Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="arabic_name" name="arabic_name" placeholder="Enter Arabic name..." class="form-control">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Event Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" id="event_type" name="event_type">
														<option value="Fixed Price">Fixed Price</option> <option value="Reduce price by Amount">Reduce price by Amount</option> 
														<option value="Reduce price by Percentage">Reduce price by Percentage</option> 
														<option value="Increase price by Amount">Increase price by Amount</option> 
														<option value="Increase price by Percentage">Increase price by Percentage</option> 
														<option value="Activation">Activation</option> 
														<option value="Deactivation">Deactivation</option></select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Value</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="value" name="value" placeholder="Enter Value..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    &nbsp;
                                                </div>
                                                <div class="col-12 col-md-9">
													<div>
														<div class="checkbox act">
															<label for="checkbox2" class="form-check-label ">
																Effective
																<input type="checkbox" id="effective" name="effective" value="Yes" class="form-check-input" style="margin-left: 10px;">
															</label>
														</div>
													</div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Types of requests</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" id="request_type" name="request_type">
														<option value="All">All</option> 
														<option value="Sweetened">Sweetened</option> 
														<option value="External">External</option> 
														<option value="Receipt">Receipt</option> 
														<option value="Delivery">Delivery</option> 
														<option value="Car">Car</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From the date of</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<div class="row form-group">
														<div class="col-12 col-md-6">
															<input type="text" id="from_date1" name="from_date1" class="form-control" placeholder="Enter data from...">
														</div>
														<div class="col-12 col-md-6">
														<input type="text" id="from_date2" name="from_date2" class="form-control" placeholder="Enter data to...">
														</div>
													</div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<div class="row form-group">
														<div class="col-12 col-md-6">
															<select class="form-control" id="from_time1" name="from_time1">
																<option value="">-- Choose time from --</option> 
																<option value="00">12 AM</option>
																<option value="01">01 AM</option>
																<option value="02">02 AM</option>
																<option value="03">03 AM</option>
																<option value="04">04 AM</option>
																<option value="05">05 AM</option>
																<option value="06">06 AM</option>
																<option value="07">07 AM</option>
																<option value="08">08 AM</option>
																<option value="09">09 AM</option>
																<option value="10">10 AM</option>
																<option value="11">11 AM</option>
																<option value="12">12 PM</option>
																<option value="13">01 PM</option>
																<option value="14">02 PM</option>
																<option value="15">03 PM</option>
																<option value="16">04 PM</option>
																<option value="17">05 PM</option>
																<option value="18">06 PM</option>
																<option value="19">07 PM</option>
																<option value="20">08 PM</option>
																<option value="21">09 PM</option>
																<option value="22">10 PM</option>
																<option value="23">11 PM</option>
															</select>
														</div>
														<div class="col-12 col-md-6">
															<select class="form-control" id="from_time2" name="from_time2">
																<option value="">-- Choose time to --</option> 
																<option value="00">12 AM</option>
																<option value="01">01 AM</option>
																<option value="02">02 AM</option>
																<option value="03">03 AM</option>
																<option value="04">04 AM</option>
																<option value="05">05 AM</option>
																<option value="06">06 AM</option>
																<option value="07">07 AM</option>
																<option value="08">08 AM</option>
																<option value="09">09 AM</option>
																<option value="10">10 AM</option>
																<option value="11">11 AM</option>
																<option value="12">12 PM</option>
																<option value="13">01 PM</option>
																<option value="14">02 PM</option>
																<option value="15">03 PM</option>
																<option value="16">04 PM</option>
																<option value="17">05 PM</option>
																<option value="18">06 PM</option>
																<option value="19">07 PM</option>
																<option value="20">08 PM</option>
																<option value="21">09 PM</option>
																<option value="22">10 PM</option>
																<option value="23">11 PM</option>
															</select>
														</div>
													</div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                   <label for="text-input" class=" form-control-label">Choose days</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<div class="wep">
														<div class="checkbox">
															<label for="checkbox1" class="form-check-label ">
																Monday
																<input type="checkbox" id="day" name="days[]" value="Monday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Tuesday 
																<input type="checkbox" id="day" name="days[]" value="Tuesday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Wednesday 
																<input type="checkbox" id="day" name="days[]" value="Wednesday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Thursday 
																<input type="checkbox" id="day" name="days[]" value="Thursday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Friday 
																<input type="checkbox" id="day" name="days[]" value="Friday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Saturday 
																<input type="checkbox" id="day" name="days[]" value="Saturday" class="form-check-input" style="margin-left: 10px;">
															</label>
															<label for="checkbox2" class="form-check-label ">
																Sunday 
																<input type="checkbox" id="day" name="days[]" value="Sunday" class="form-check-input" style="margin-left: 10px;">
															</label>
															
														</div>
														<!--<div class="checkbox">
															<label for="checkbox2" class="form-check-label ">
																Thursday 
																<input type="checkbox" id="day" name="days[]" value="Thursday" class="form-check-input" style="margin-left: 10px;">
															</label>
														</div>-->
													</div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="category" name="category" class="form-control">
														<?php if($allcats): ?>
														<?php $__currentLoopData = $allcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Products</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="product" name="product" class="form-control">
														<?php if($products): ?>
														<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Branches</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="branch" name="branch" class="form-control">
														<?php if($branches): ?>
														<?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($branch->id); ?>"><?php echo e($branch->english_name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="type" id="type" value="add_event">
                                                <div class="col-12 col-md-9">
                                                    <button type="submit" class="btn btn-primary btn-sm">
														<i class="fa fa-dot-circle-o"></i> Submit
													</button>
													<button id="reset" type="reset" class="btn btn-danger btn-sm">
														<i class="fa fa-ban"></i> Reset
													</button>
                                                </div>
											</div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    &nbsp;
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="result"></div>
                                                </div>
                                            </div>
                                        </form>
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/Events/addEvent.blade.php ENDPATH**/ ?>