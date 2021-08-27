<!-- HEADER DESKTOP-->

<header class="main py-4 bg-white mb-5">
   <div class="container">
      <div class="d-flex align-content-center">
         <a href="<?php echo e(url('')); ?>/super-admin/dashboard" class="logo mr-3"><img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>" class="custom-logo"/></a> 
         <p class="m-0" style="font-size: 16px;"><span class="text-primary"></span></p>
         <div id="mainMenu" class="ml-auto d-flex">
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Sales">Sales</div>
               <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">
				 <a href="<?php echo e(url('super-admin/orderlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Food Orders</a>
				 <a href="<?php echo e(url('super-admin/roombooking-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Rooms Bookings</a>
				 <a href="<?php echo e(url('super-admin/hallbooking-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Halls Bookings</a>
                  <a href="<?php echo e(url('super-admin/customerlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Customers</a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Menu">Menu</div>
               <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">     
                   <li><a href="<?php echo e(url('super-admin/all-categories')); ?>" class="dropdown-item"><i class="fa fa-fw fa-check-square"></i> Categories</a></li>
                   <li><a href="<?php echo e(url('super-admin/all-products')); ?>" class="dropdown-item"><i class="fa fa-fw fa-check-square"></i> Item Management</a></li>
                </ul>     
                  </div>
               </div>
			</div> 
			<div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory">Rooms/Halls</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					<a href="<?php echo e(url('super-admin/typelist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-list"></i>Room Types</a> 
					<a href="<?php echo e(url('super-admin/halltypelist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-list"></i>Hall Types</a> 
					<a href="<?php echo e(url('super-admin/room-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-truck"></i> Room Management</a> 
					<a href="<?php echo e(url('super-admin/hall-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-building"></i> Halls Management</a>
                  </div>
               </div>
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Settings">Settings</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					<a href="<?php echo e(url('super-admin/adminreport')); ?>" class="dropdown-item"><i class="fa fa-fw fa-address-card"></i> Reports Management</a>
					<a href="<?php echo e(url('super-admin/profile')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> My Profile</a> 
					<a href="#" class="dropdown-item"><i class="fa fa-fw fa-address-card"></i> Payments</a> 
					<a href="<?php echo e(url('super-admin/reports')); ?>" class="dropdown-item"><i class="fas fa-question"></i> Inquiry</a>
					<a href="javascript:void(0);" data-csrf="<?php echo e(csrf_token()); ?>" class="dropdown-item logout"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                  </div>
               </div>
            </div>
            <button id="mainMenuSmall" data-toggle="modal" data-target="#mainMenuModal" class="btn btn-primary" style="display: none;"><i class="fa fa-bars"></i></button>
         </div>
      </div>
   </div>
</header><?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/inc/adminHeader.blade.php ENDPATH**/ ?>