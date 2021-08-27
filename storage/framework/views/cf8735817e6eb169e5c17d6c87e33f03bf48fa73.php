<!-- HEADER DESKTOP-->

<header class="main py-4 bg-white mb-5">
   <div class="container">
      <div class="d-flex align-content-center">
         <a href="<?php echo e(url('')); ?>/supar-admin/dashboard" class="logo mr-3"><img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>" class="custom-logo"/></a> 
         <p class="m-0" style="font-size: 16px;"><span class="text-primary"></span></p>
         <div id="mainMenu" class="ml-auto d-flex">
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Sales">Sales</div>
               <div class="dropdown-menu dropdown-menu-right">
				  <div class="p-4">
					  <a href="<?php echo e(url('supar-admin/orderlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i> Orders</a> 
				      <a href="<?php echo e(url('supar-admin/customerlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Customers</a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Promotions">Promotions</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					  <a href="<?php echo e(url('supar-admin/combolist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-list"></i> Combos </a> 
					  <a href="<?php echo e(url('supar-admin/couponlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-gift"></i> Coupons</a> 
					  <a href="<?php echo e(url('supar-admin/discountlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-thumbs-up"></i> Discounts</a> 
					  <a href="<?php echo e(url('supar-admin/eventlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-clock-o"></i> Timed Events</a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Reports">Reports</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4"><a href="#" class="dropdown-item"><i class="fa fa-fw fa-bar-chart"></i> Sales
                     </a> <a href="#" class="dropdown-item"><i class="fa fa-fw fa-list-ol"></i> Inventory
                     </a> <a href="#" class="dropdown-item"><i class="fa fa-fw fa-th-large"></i> Miscellaneous
                     </a> <a href="#" class="dropdown-item"><i class="fa fa-fw fa-download"></i> Exporting
                     </a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Menu">Menu</div>
               <div class="dropdown-menu dropdown-menu-right">
				  <div class="p-4">		
						 <li><a href="<?php echo e(url('supar-admin/all-modifiers')); ?>" class="dropdown-item"><i class="fa fa-fw fa-list"></i> Modifiers Management</a></li>
						 <li><a href="<?php echo e(url('supar-admin/all-categories')); ?>" class="dropdown-item"><i class="fa fa-fw fa-check-square"></i> Category</a></li>
						 <li><a href="<?php echo e(url('supar-admin/all-products')); ?>" class="dropdown-item"><i class="fa fa-fw fa-check-square"></i> Product Managemet</a></li>
						 
						 <li><a href="<?php echo e(url('supar-admin/all-roles')); ?>" class="dropdown-item"><i class="fa fa-fw fa-check-square"></i> Role Mananger </a></li>
					 </ul>	  
                  </div>
               </div>
			</div> 

            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory">Cashier</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4"><a href="<?php echo e(url('supar-admin/items')); ?>" class="dropdown-item"><i class="fa fa-fw fa-list"></i> Items
                     </a> <a href="<?php echo e(url('supar-admin/suppliers')); ?>" class="dropdown-item"><i class="fa fa-fw fa-truck"></i> Suppliers
                     </a> <a href="<?php echo e(url('supar-admin/warehouses')); ?>" class="dropdown-item"><i class="fa fa-fw fa-building"></i> Warehouses
                     </a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Settings">Settings</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					<a href="<?php echo e(url('supar-admin/all-roles')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Roles</a> 
					<a href="<?php echo e(url('supar-admin/employees')); ?>" class="dropdown-item"><i class="fa fa-fw fa-address-card"></i> Employees
                     </a> <a href="<?php echo e(url('supar-admin/taxes')); ?>" class="dropdown-item"><i class="fa fa-fw fa-file-text-o"></i> Taxes
                     </a> <a href="<?php echo e(url('supar-admin/floors')); ?>" class="dropdown-item"><i class="fa fa-fw fa-table"></i> Floors
                     </a> <a href="<?php echo e(url('supar-admin/methods')); ?>" class="dropdown-item"><i class="fa fa-fw fa-credit-card"></i> Payment Methods
                     </a> <a href="<?php echo e(url('supar-admin/zones')); ?>" class="dropdown-item"><i class="fa fa-fw fa-truck"></i> Delivery Zones
                     </a> <a href="<?php echo e(url('supar-admin/tags')); ?>" class="dropdown-item"><i class="fa fa-fw fa-tags"></i> Tags
                     </a> <a href="<?php echo e(url('supar-admin/branchlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-sitemap"></i> Branches
                     </a> <a href="<?php echo e(url('supar-admin/devicelist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-tablet"></i> Devices
                     </a>
					 <a href="#" class="dropdown-item"><i class="fa fa-fw fa-cogs"></i> Business Settings
                     </a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Account" class="pl-5 pr-0"><i class="fa fa-fw fa-user-circle"></i></div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4"><a href="#" class="dropdown-item"><i class="fa fa-fw fa-user"></i> <?php echo session('user_name');?></a> 
				  <a href="mailto:support@foodics.com" target="_blank" class="dropdown-item"><i class="fa fa-fw fa-envelope"></i> <?php echo session('user_email');?>         </a>
					 <a href="javascript:void(0);" data-csrf="<?php echo e(csrf_token()); ?>" class="dropdown-item logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></div>
                  
               </div>
            </div>
            <button id="mainMenuSmall" data-toggle="modal" data-target="#mainMenuModal" class="btn btn-primary" style="display: none;"><i class="fa fa-bars"></i></button>
         </div>
      </div>
   </div>
</header><?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/rcontrol/resources/views/inc/restaurentHeader.blade.php ENDPATH**/ ?>