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
                                        <strong>Branch</strong> Settings
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="branchsetting" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">English Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="english_name" name="english_name" placeholder="Enter english name..." class="form-control"  value="<?php if($mybranch->english_name): ?><?php echo e($mybranch->english_name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Arabic Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="arabic_name" name="arabic_name" placeholder="Enter arabic name..." class="form-control" value="<?php if($mybranch->arabic_name): ?><?php echo e($mybranch->arabic_name); ?><?php endif; ?>">
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Latitude</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="lat" name="lat" placeholder="Enter Latitude..." class="form-control" value="<?php if($mybranch->lat): ?><?php echo e($mybranch->lat); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Longitude</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="long" name="long" placeholder="Enter Longitude..." class="form-control" value="<?php if($mybranch->long): ?><?php echo e($mybranch->long); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Opens from</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="open_from" name="open_from" class="form-control">
														<option value="0" <?php if($mybranch->open_from=='0'): ?> selected <?php endif; ?>>0</option>
														<option value="1" <?php if($mybranch->open_from=='1'): ?> selected <?php endif; ?>>1</option>
														<option value="2" <?php if($mybranch->open_from=='2'): ?> selected <?php endif; ?>>2</option> 
														<option value="3" <?php if($mybranch->open_from=='3'): ?> selected <?php endif; ?>>3</option> 
														<option value="4" <?php if($mybranch->open_from=='4'): ?> selected <?php endif; ?>>4</option> 
														<option value="5" <?php if($mybranch->open_from=='5'): ?> selected <?php endif; ?>>5</option> 
														<option value="6" <?php if($mybranch->open_from=='6'): ?> selected <?php endif; ?>>6</option> 
														<option value="7" <?php if($mybranch->open_from=='7'): ?> selected <?php endif; ?>>7</option> 
														<option value="8" <?php if($mybranch->open_from=='8'): ?> selected <?php endif; ?>>8</option> 
														<option value="9" <?php if($mybranch->open_from=='9'): ?> selected <?php endif; ?>>9</option> 
														<option value="10" <?php if($mybranch->open_from=='10'): ?> selected <?php endif; ?>>10</option> 
														<option value="11" <?php if($mybranch->open_from=='11'): ?> selected <?php endif; ?>>11</option> 
														<option value="12" <?php if($mybranch->open_from=='12'): ?> selected <?php endif; ?>>12</option> 
														<option value="13" <?php if($mybranch->open_from=='13'): ?> selected <?php endif; ?>>13</option> 
														<option value="14" <?php if($mybranch->open_from=='14'): ?> selected <?php endif; ?>>14</option> 
														<option value="15" <?php if($mybranch->open_from=='15'): ?> selected <?php endif; ?>>15</option> 
														<option value="16" <?php if($mybranch->open_from=='16'): ?> selected <?php endif; ?>>16</option> 
														<option value="17" <?php if($mybranch->open_from=='17'): ?> selected <?php endif; ?>>17</option> 
														<option value="18" <?php if($mybranch->open_from=='18'): ?> selected <?php endif; ?>>18</option> 
														<option value="19" <?php if($mybranch->open_from=='19'): ?> selected <?php endif; ?>>19</option> 
														<option value="20" <?php if($mybranch->open_from=='20'): ?> selected <?php endif; ?>>20</option> 
														<option value="21" <?php if($mybranch->open_from=='21'): ?> selected <?php endif; ?>>21</option> 
														<option value="22" <?php if($mybranch->open_from=='22'): ?> selected <?php endif; ?>>22</option> 
														<option value="23" <?php if($mybranch->open_from=='23'): ?> selected <?php endif; ?>>23</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Opens to</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="open_to" name="open_to" class="form-control">
														<option value="0" <?php if($mybranch->open_to=='0'): ?> selected <?php endif; ?>>0</option>
														<option value="1" <?php if($mybranch->open_to=='1'): ?> selected <?php endif; ?>>1</option>
														<option value="2" <?php if($mybranch->open_to=='2'): ?> selected <?php endif; ?>>2</option> 
														<option value="3" <?php if($mybranch->open_to=='3'): ?> selected <?php endif; ?>>3</option> 
														<option value="4" <?php if($mybranch->open_to=='4'): ?> selected <?php endif; ?>>4</option> 
														<option value="5" <?php if($mybranch->open_to=='5'): ?> selected <?php endif; ?>>5</option> 
														<option value="6" <?php if($mybranch->open_to=='6'): ?> selected <?php endif; ?>>6</option> 
														<option value="7" <?php if($mybranch->open_to=='7'): ?> selected <?php endif; ?>>7</option> 
														<option value="8" <?php if($mybranch->open_to=='8'): ?> selected <?php endif; ?>>8</option> 
														<option value="9" <?php if($mybranch->open_to=='9'): ?> selected <?php endif; ?>>9</option> 
														<option value="10" <?php if($mybranch->open_to=='10'): ?> selected <?php endif; ?>>10</option> 
														<option value="11" <?php if($mybranch->open_to=='11'): ?> selected <?php endif; ?>>11</option> 
														<option value="12" <?php if($mybranch->open_to=='12'): ?> selected <?php endif; ?>>12</option> 
														<option value="13" <?php if($mybranch->open_to=='13'): ?> selected <?php endif; ?>>13</option> 
														<option value="14" <?php if($mybranch->open_to=='14'): ?> selected <?php endif; ?>>14</option> 
														<option value="15" <?php if($mybranch->open_to=='15'): ?> selected <?php endif; ?>>15</option> 
														<option value="16" <?php if($mybranch->open_to=='16'): ?> selected <?php endif; ?>>16</option> 
														<option value="17" <?php if($mybranch->open_to=='17'): ?> selected <?php endif; ?>>17</option> 
														<option value="18" <?php if($mybranch->open_to=='18'): ?> selected <?php endif; ?>>18</option> 
														<option value="19" <?php if($mybranch->open_to=='19'): ?> selected <?php endif; ?>>19</option> 
														<option value="20" <?php if($mybranch->open_to=='20'): ?> selected <?php endif; ?>>20</option> 
														<option value="21" <?php if($mybranch->open_to=='21'): ?> selected <?php endif; ?>>21</option> 
														<option value="22" <?php if($mybranch->open_to=='22'): ?> selected <?php endif; ?>>22</option> 
														<option value="23" <?php if($mybranch->open_to=='23'): ?> selected <?php endif; ?>>23</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mobile number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile..." class="form-control" value="<?php if($mybranch->mobile): ?><?php echo e($mybranch->mobile); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Time to prepare receiving requests</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="receive_time" name="receive_time" placeholder="Enter Time to prepare receiving requests..." class="form-control" value="<?php if($mybranch->receive_time): ?><?php echo e($mybranch->receive_time); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Time to prepare delivery requests</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="delivery_time" name="delivery_time" placeholder="Enter Time to prepare delivery requests..." class="form-control" value="<?php if($mybranch->delivery_time): ?><?php echo e($mybranch->delivery_time); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Service fee</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="service_fee" name="service_fee" placeholder="Enter Service fee..." class="form-control" value="<?php if($mybranch->service_fee): ?><?php echo e($mybranch->service_fee); ?><?php endif; ?>">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Unavailable order types</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="order_type" name="order_type" class="form-control">
														<option value="All" <?php if($mybranch->order_type=='All'): ?> selected <?php endif; ?>>All</option>
														<option value="Sweetened" <?php if($mybranch->order_type=='Sweetened'): ?> selected <?php endif; ?>>Sweetened</option>
														<option value="Foreign" <?php if($mybranch->order_type=='Foreign'): ?> selected <?php endif; ?>>Foreign</option> 
														<option value="Receipt" <?php if($mybranch->order_type=='Receipt'): ?> selected <?php endif; ?>>Receipt</option> 
														<option value="Delivery" <?php if($mybranch->order_type=='Delivery'): ?> selected <?php endif; ?>>Delivery</option> 
														<option value="Car" <?php if($mybranch->order_type=='Car'): ?> selected <?php endif; ?>>Car</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Delivery areas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="devliery_area" name="devliery_area" class="form-control">
														<?php if($zones): ?>
														<?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$zon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($zon->id); ?>" <?php if($mybranch->devliery_area==$zon->id): ?> selected <?php endif; ?>><?php echo e($zon->area_name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Temporary events</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="temp_event" name="temp_event" class="form-control">
														<?php if($events): ?>
														<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($event->id); ?>" <?php if($mybranch->temp_event==$event->id): ?> selected <?php endif; ?>><?php echo e($event->english_name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Taxes</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="tax" name="tax" class="form-control">
														<?php if($taxes): ?>
														<?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($tax->id); ?>" <?php if($mybranch->tax==$tax->id): ?> selected <?php endif; ?>><?php echo e($tax->amount); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tags</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select  id="tags" name="tags" class="form-control">
														<?php if($tags): ?>
														<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($tag->id); ?>" <?php if($mybranch->tags==$tag->id): ?> selected <?php endif; ?>><?php echo e($tag->name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">On top of the bill</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<textarea id="top_bill" name="top_bill" class="form-control"><?php if($mybranch->top_bill): ?><?php echo e($mybranch->top_bill); ?><?php endif; ?></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Below the bill</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<textarea id="below_bill" name="below_bill" class="form-control"><?php if($mybranch->below_bill): ?><?php echo e($mybranch->below_bill); ?><?php endif; ?></textarea>
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
																Receive call center requests and API requests 
																<input type="checkbox" id="api_reqest" name="api_reqest" value="Yes" class="form-check-input" style="margin-left: 10px;" <?php if($mybranch->api_reqest=='Yes'): ?> checked <?php endif; ?>>
															</label>
														</div>
													</div>
                                                </div>
                                            </div>
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="id" id="id" value="<?php if($mybranch->id): ?><?php echo e($mybranch->id); ?><?php endif; ?>">
												<input type="hidden" name="type" id="type" value="edit_method">
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
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/branchesUser/editBranch.blade.php ENDPATH**/ ?>