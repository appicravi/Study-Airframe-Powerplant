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
                                        <strong>Edit</strong> Event
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="event" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">English Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="english_name" name="english_name" placeholder="Enter English name..." class="form-control" value="<?php if($getEvent->english_name): ?><?php echo e($getEvent->english_name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Arabic Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="arabic_name" name="arabic_name" placeholder="Enter Arabic name..." class="form-control" value="<?php if($getEvent->arabic_name): ?><?php echo e($getEvent->arabic_name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Event Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" id="event_type" name="event_type">
														<option value="Fixed Price" <?php if($getEvent->event_type=='Fixed Price'): ?> selected <?php endif; ?>>Fixed Price</option> 
														<option value="Reduce price by Amount" <?php if($getEvent->event_type=='Reduce price by Amount'): ?> selected <?php endif; ?>>Reduce price by Amount</option> 
														<option value="Reduce price by Percentage" <?php if($getEvent->event_type=='Reduce price by Percentage'): ?> selected <?php endif; ?>>Reduce price by Percentage</option> 
														<option value="Increase price by Amount" <?php if($getEvent->event_type=='Increase price by Amount'): ?> selected <?php endif; ?>>Increase price by Amount</option> 
														<option value="Increase price by Percentage" <?php if($getEvent->event_type=='Increase price by Percentage'): ?> selected <?php endif; ?>>Increase price by Percentage</option> 
														<option value="Activation" <?php if($getEvent->event_type=='Activation'): ?> selected <?php endif; ?>>Activation</option> 
														<option value="Deactivation" <?php if($getEvent->event_type=='Deactivation'): ?> selected <?php endif; ?>>Deactivation</option></select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Value</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="value" name="value" placeholder="Enter Value..." class="form-control" value="<?php if($getEvent->value): ?><?php echo e($getEvent->value); ?><?php endif; ?>">
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
																<input type="checkbox" id="effective" name="effective" value="Yes" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->effective=='Yes'): ?> checked <?php endif; ?>>
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
														<option value="All" <?php if($getEvent->request_type=='All'): ?> selected <?php endif; ?>>All</option> 
														<option value="Sweetened" <?php if($getEvent->request_type=='Sweetened'): ?> selected <?php endif; ?>>Sweetened</option> 
														<option value="External" <?php if($getEvent->request_type=='External'): ?> selected <?php endif; ?>>External</option> 
														<option value="Receipt" <?php if($getEvent->request_type=='Receipt'): ?> selected <?php endif; ?>>Receipt</option> 
														<option value="Delivery" <?php if($getEvent->request_type=='Delivery'): ?> selected <?php endif; ?>>Delivery</option> 
														<option value="Car" <?php if($getEvent->request_type=='Car'): ?> selected <?php endif; ?>>Car</option>
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
															<input type="text" id="from_date1" name="from_date1" class="form-control" placeholder="Enter data from..." value="<?php if($getEvent->from_date1): ?><?php echo e($getEvent->from_date1); ?><?php endif; ?>">
														</div>
														<div class="col-12 col-md-6">
														<input type="text" id="from_date2" name="from_date2" class="form-control" placeholder="Enter data to..." value="<?php if($getEvent->from_date2): ?><?php echo e($getEvent->from_date2); ?><?php endif; ?>">
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
																<option value="00" <?php if($getEvent->from_time1=='00'): ?> selected <?php endif; ?>>12 AM</option>
																<option value="01" <?php if($getEvent->from_time1=='01'): ?> selected <?php endif; ?>>01 AM</option>
																<option value="02" <?php if($getEvent->from_time1=='02'): ?> selected <?php endif; ?>>02 AM</option>
																<option value="03" <?php if($getEvent->from_time1=='03'): ?> selected <?php endif; ?>>03 AM</option>
																<option value="04" <?php if($getEvent->from_time1=='04'): ?> selected <?php endif; ?>>04 AM</option>
																<option value="05" <?php if($getEvent->from_time1=='05'): ?> selected <?php endif; ?>>05 AM</option>
																<option value="06" <?php if($getEvent->from_time1=='06'): ?> selected <?php endif; ?>>06 AM</option>
																<option value="07" <?php if($getEvent->from_time1=='07'): ?> selected <?php endif; ?>>07 AM</option>
																<option value="08" <?php if($getEvent->from_time1=='08'): ?> selected <?php endif; ?>>08 AM</option>
																<option value="09" <?php if($getEvent->from_time1=='09'): ?> selected <?php endif; ?>>09 AM</option>
																<option value="10" <?php if($getEvent->from_time1=='10'): ?> selected <?php endif; ?>>10 AM</option>
																<option value="11" <?php if($getEvent->from_time1=='11'): ?> selected <?php endif; ?>>11 AM</option>
																<option value="12" <?php if($getEvent->from_time1=='12'): ?> selected <?php endif; ?>>12 PM</option>
																<option value="13" <?php if($getEvent->from_time1=='13'): ?> selected <?php endif; ?>>01 PM</option>
																<option value="14" <?php if($getEvent->from_time1=='14'): ?> selected <?php endif; ?>>02 PM</option>
																<option value="15" <?php if($getEvent->from_time1=='15'): ?> selected <?php endif; ?>>03 PM</option>
																<option value="16" <?php if($getEvent->from_time1=='16'): ?> selected <?php endif; ?>>04 PM</option>
																<option value="17" <?php if($getEvent->from_time1=='17'): ?> selected <?php endif; ?>>05 PM</option>
																<option value="18" <?php if($getEvent->from_time1=='18'): ?> selected <?php endif; ?>>06 PM</option>
																<option value="19" <?php if($getEvent->from_time1=='19'): ?> selected <?php endif; ?>>07 PM</option>
																<option value="20" <?php if($getEvent->from_time1=='20'): ?> selected <?php endif; ?>>08 PM</option>
																<option value="21" <?php if($getEvent->from_time1=='21'): ?> selected <?php endif; ?>>09 PM</option>
																<option value="22" <?php if($getEvent->from_time1=='22'): ?> selected <?php endif; ?>>10 PM</option>
																<option value="23" <?php if($getEvent->from_time1=='23'): ?> selected <?php endif; ?>>11 PM</option>
															</select>
														</div>
														<div class="col-12 col-md-6">
															<select class="form-control" id="from_time2" name="from_time2">
																<option value="">-- Choose time to --</option> 
																<option value="00" <?php if($getEvent->from_time2=='00'): ?> selected <?php endif; ?>>12 AM</option>
																<option value="01" <?php if($getEvent->from_time2=='01'): ?> selected <?php endif; ?>>01 AM</option>
																<option value="02" <?php if($getEvent->from_time2=='02'): ?> selected <?php endif; ?>>02 AM</option>
																<option value="03" <?php if($getEvent->from_time2=='03'): ?> selected <?php endif; ?>>03 AM</option>
																<option value="04" <?php if($getEvent->from_time2=='04'): ?> selected <?php endif; ?>>04 AM</option>
																<option value="05" <?php if($getEvent->from_time2=='05'): ?> selected <?php endif; ?>>05 AM</option>
																<option value="06" <?php if($getEvent->from_time2=='06'): ?> selected <?php endif; ?>>06 AM</option>
																<option value="07" <?php if($getEvent->from_time2=='07'): ?> selected <?php endif; ?>>07 AM</option>
																<option value="08" <?php if($getEvent->from_time2=='08'): ?> selected <?php endif; ?>>08 AM</option>
																<option value="09" <?php if($getEvent->from_time2=='09'): ?> selected <?php endif; ?>>09 AM</option>
																<option value="10" <?php if($getEvent->from_time2=='10'): ?> selected <?php endif; ?>>10 AM</option>
																<option value="11" <?php if($getEvent->from_time2=='11'): ?> selected <?php endif; ?>>11 AM</option>
																<option value="12" <?php if($getEvent->from_time2=='12'): ?> selected <?php endif; ?>>12 PM</option>
																<option value="13" <?php if($getEvent->from_time2=='13'): ?> selected <?php endif; ?>>01 PM</option>
																<option value="14" <?php if($getEvent->from_time2=='14'): ?> selected <?php endif; ?>>02 PM</option>
																<option value="15" <?php if($getEvent->from_time2=='15'): ?> selected <?php endif; ?>>03 PM</option>
																<option value="16" <?php if($getEvent->from_time2=='16'): ?> selected <?php endif; ?>>04 PM</option>
																<option value="17" <?php if($getEvent->from_time2=='17'): ?> selected <?php endif; ?>>05 PM</option>
																<option value="18" <?php if($getEvent->from_time2=='18'): ?> selected <?php endif; ?>>06 PM</option>
																<option value="19" <?php if($getEvent->from_time2=='19'): ?> selected <?php endif; ?>>07 PM</option>
																<option value="20" <?php if($getEvent->from_time2=='20'): ?> selected <?php endif; ?>>08 PM</option>
																<option value="21" <?php if($getEvent->from_time2=='21'): ?> selected <?php endif; ?>>09 PM</option>
																<option value="22" <?php if($getEvent->from_time2=='22'): ?> selected <?php endif; ?>>10 PM</option>
																<option value="23" <?php if($getEvent->from_time2=='23'): ?> selected <?php endif; ?>>11 PM</option>
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
																<input type="checkbox" id="day" name="days[]" value="Monday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Monday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Tuesday 
																<input type="checkbox" id="day" name="days[]" value="Tuesday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Tuesday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Wednesday 
																<input type="checkbox" id="day" name="days[]" value="Wednesday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Wednesday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Thursday 
																<input type="checkbox" id="day" name="days[]" value="Thursday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Thursday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Friday 
																<input type="checkbox" id="day" name="days[]" value="Friday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Friday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Saturday 
																<input type="checkbox" id="day" name="days[]" value="Saturday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Saturday'): ?> checked <?php endif; ?>>
															</label>
															<label for="checkbox2" class="form-check-label ">
																Sunday 
																<input type="checkbox" id="day" name="days[]" value="Sunday" class="form-check-input" style="margin-left: 10px;" <?php if($getEvent->days=='Sunday'): ?> checked <?php endif; ?>>
															</label>
															
														</div>
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
														<option value="<?php echo e($cat->id); ?>" <?php if($getEvent->category==$cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
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
														<option value="<?php echo e($product->id); ?>" <?php if($getEvent->product==$product->id): ?> selected <?php endif; ?>><?php echo e($product->name); ?></option>
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
														<option value="<?php echo e($branch->id); ?>" <?php if($getEvent->branch==$branch->id): ?> selected <?php endif; ?>><?php echo e($branch->english_name); ?></option>
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
												<input type="hidden" name="id" id="id" value="<?php if($getEvent->id): ?><?php echo e($getEvent->id); ?><?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_event">
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
						
                        <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/Events/editEvent.blade.php ENDPATH**/ ?>