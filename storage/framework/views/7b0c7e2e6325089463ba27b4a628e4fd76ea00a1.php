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
							<div class="col-lg-3">
								<div class="list-group side-bar">
									<button data-id="basic" type="button" class="list-group-item list-group-item-action citem active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Basic Information </font></font><i class="fa fa-chevron-right"></i>
									</button>
									<button data-id="item" type="button" class="list-group-item list-group-item-action citem">Combo Items <i class="fa fa-chevron-right"></i>
									</button>
									<button data-id="unit" type="button" class="list-group-item list-group-item-action citem"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Units options </font></font><i class="fa fa-chevron-right"></i>
									</button>
									<button data-id="price" type="button" class="list-group-item list-group-item-action citem"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prices and sizes </font></font><i class="fa fa-chevron-right"></i>
									</button>
								</div>
							</div>
                            <div class="col-lg-9" id="basic">
                                <div class="card">
									<div class="card-header cards" style="background-color: white;">
                                        <strong>Add</strong> Combo
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="combo" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name (English)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="english_name" name="english_name" placeholder="Enter English name..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name (Arabic)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="arabic_name" name="arabic_name" placeholder="Enter Arabic name..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Description (English)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<textarea id="english_desc" name="english_desc" class="form-control"></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Description (Arabic)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea id="arabic_desc" name="arabic_desc" class="form-control"></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="category" name="category" class="form-control">
														<option value="">-- Select Category --</option>
														<?php if($categories): ?>
														<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tag</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<select id="tag" name="tag" class="form-control">
														<option value="">-- Select Tag --</option>
														<?php if($tags): ?>
														<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
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
													<select id="event" name="event" class="form-control">
														<option value="">-- Select Event --</option>
														<?php if($events): ?>
														<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($event->id); ?>"><?php echo e($event->english_name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<?php endif; ?>
													</select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Identification Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="i_code" name="i_code" placeholder="Enter Identification Code..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Barcode</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="bar_code" name="bar_code" placeholder="Enter Barcode..." class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Picture</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control">
                                                </div>
                                            </div>
											
											<div class="row card-footer">
												<div class="col col-md-3">
                                                   &nbsp;
                                                </div>
												<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
												<input type="hidden" name="type" id="type" value="add_combo">
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
							<div class="col-lg-9" id="item" style="display:none;">
								<div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Combo Items</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="#" class="btn btn-sm btn-secondary cmitema" data-toggle="modal" data-target="#comboItem">Add New</a>
										</div>
                                </div>
								<div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">Name</th>
												<th style="color: #000;">Upgradable</th>
												<th style="color: #000;">Options</th>
												<th style="color: #000;"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="comboTable">
											
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<div class="col-lg-9" id="unit" style="display:none;">
								<div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Units options</h5>
                                </div>
								<div class="table-responsive table-responsive-data2 suparMaxUnit">
                                    
                                </div>
                            </div>
							<div class="col-lg-9" id="price" style="display:none;">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Prices and sizes</h5>
                                      <div role="group" class="btn-group btn-group-sm">
                                          <button class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-search"></i></button> 
                                          <a href="#" class="btn btn-sm btn-secondary cpm" data-toggle="modal" data-target="#comboPrice">Add New</a>
										</div>
                                </div>
								<div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="priceSizeTable">
											
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
                        <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
			<div class="modal fade" id="comboItem" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="" id="dmitem" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (English)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="english_name1" name="english_name" placeholder="Enter English name..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (Arabic)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="arabic_name1" name="arabic_name" placeholder="Enter Arabic name..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Possibly</label>
									</div>
									<div class="col-12 col-md-9">
										<div>
											<div class="checkbox act">
												<label for="checkbox2" class="form-check-label ">
													Yes, it is upgradeable
													<input type="checkbox" id="upgrade" name="upgrade" value="Yes" class="form-check-input" style="margin-left: 10px;">
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
									<input type="hidden" name="type" id="type1" value="add_combo_item">
									<input type="hidden" name="id" id="id1" value="">
									<div class="col-12 col-md-9">
										<button type="submit" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i> Submit
										</button>
										<button type="reset" class="reset" style="display:none;">reset </button>
										<button type="button" class="btn btn-danger btn-sm bcd"  data-dismiss="modal">
											<i class="fa fa-ban"></i> Cancel
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
			<div class="modal fade" id="comboUnit" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="" id="dmunit" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (English)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="english_name2" name="english_name" placeholder="Enter English name..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (Arabic)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="arabic_name2" name="arabic_name" placeholder="Enter Arabic name..." class="form-control">
									</div>
								</div>
								<div class="row card-footer">
									<div class="col col-md-3">
									   &nbsp;
									</div>
									<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
									<input type="hidden" name="id" id="id2" value="">
									<input type="hidden" name="draft_id" id="draft_id" value="">
									<input type="hidden" name="type" id="type2" value="add_combo_unit">
									<div class="col-12 col-md-9">
										<button type="submit" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i> Submit
										</button>
										<button type="reset" class="reset1" style="display:none;">reset </button>
										<button type="button" class="btn btn-danger btn-sm bcd1"  data-dismiss="modal">
											<i class="fa fa-ban"></i> Cancel
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
			<div class="modal fade" id="comboPrice" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="" id="dmprice" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (English)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="english_name3" name="english_name" placeholder="Enter English name..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name (Arabic)</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="arabic_name3" name="arabic_name" placeholder="Enter Arabic name..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Barcode</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="bar_code3" name="bar_code" placeholder="Enter Barcode..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">SKU</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="sku" name="sku" placeholder="Enter SKU..." class="form-control">
									</div>
								</div>
								
								<div class="row card-footer">
									<div class="col col-md-3">
									   &nbsp;
									</div>
									<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
									<input type="hidden" name="type" id="type3" value="add_combo_price">
									<input type="hidden" name="id" id="id3" value="">
									<div class="col-12 col-md-9">
										<button type="submit" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i> Submit
										</button>
										<button type="reset" class="reset3" style="display:none;">reset </button>
										<button type="button" class="btn btn-danger btn-sm bcd3"  data-dismiss="modal">
											<i class="fa fa-ban"></i> Cancel
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
			<div class="modal fade" id="sizePriceOptionMo" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="" id="sizeOption" method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name</label>
									</div>
									<div class="col-12 col-md-9">
										<span id="sizename"></span>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Product Size</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="product_size" name="product_size" placeholder="Enter size..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Price</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="price" name="price" placeholder="Enter price..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Branch</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="branch" name="branch" placeholder="Enter branch..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Price</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="b_price" name="b_price" class="form-control">
									</div>
								</div>
								<div class="row card-footer">
									<div class="col col-md-3">
									   &nbsp;
									</div>
									<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
									<input type="hidden" name="id" id="id4" value="">
									<input type="hidden" name="size_id" id="size_id" value="">
									<input type="hidden" name="type" id="type4" value="add_poption">
									<div class="col-12 col-md-9">
										<button type="submit" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i> Submit
										</button>
										<button type="reset" class="reset4" style="display:none;">reset </button>
										<button type="button" class="btn btn-danger btn-sm bcd4"  data-dismiss="modal">
											<i class="fa fa-ban"></i> Cancel
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <?php echo $__env->make('inc.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/combo/addCombo.blade.php ENDPATH**/ ?>