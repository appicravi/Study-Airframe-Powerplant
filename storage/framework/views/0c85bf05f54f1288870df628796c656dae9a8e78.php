<!-- HEADER DESKTOP-->

<header class="main py-4 bg-white mb-5">
   <div class="container">
      <div class="d-flex align-content-center">
         <a href="<?php echo e(url('')); ?>/super-admin/dashboard" class="logo mr-3"><img src="<?php echo e(url('public/system/admin/images/icon/roccabox-logo.svg')); ?>" class="custom-logo"/></a> 
         <p class="m-0" style="font-size: 16px;"><span class="text-primary"></span></p>
         <div id="mainMenu" class="ml-auto d-flex">
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Sales">Enquiries</div>
               <!-- <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">
				 <a href="<?php echo e(url('super-admin/bookings')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Bookings</a>
				 <a href="<?php echo e(url('super-admin/reshedule-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Reschedule Bookings Request</a>
				 <a href="<?php echo e(url('super-admin/change-list')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Change Cleaner Request</a>
                  
                  </div>
               </div> -->
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Sales">Property Listing</div>
               <!-- <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">
				 <a href="<?php echo e(url('super-admin/locationlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Location</a>
				 <a href="<?php echo e(url('super-admin/servicelist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Services</a>
				 <a href="<?php echo e(url('super-admin/subscription')); ?>" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Subscription</a>
                 <a href="<?php echo e(url('super-admin/taxlist')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Tax</a> 
                  </div>
               </div> -->
            </div>
            
         <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Assign this lead</a></div>
         </div> 
         <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Content</a></div>
         </div> 
         <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Mortgage</a></div>
         </div> 
         <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="<?php echo e(url('super-admin/userlist')); ?>">Users</a></div>
         </div> 
			<div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9"  href="<?php echo e(url('super-admin/agentlist')); ?>">Agents</a></div>
               
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Settings">Settings</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					
					<a href="<?php echo e(url('super-admin/profile')); ?>" class="dropdown-item"><i class="fa fa-fw fa-users"></i> My Profile</a> 
					
					<!-- <a href="<?php echo e(url('/super-admin/contacts')); ?>" class="dropdown-item"><i class="fas fa-question"></i> Inquiry</a> -->
					<a href="javascript:void(0);" data-csrf="<?php echo e(csrf_token()); ?>" class="dropdown-item logout"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                  </div>
               </div>
            </div>
            <button id="mainMenuSmall" data-toggle="modal" data-target="#mainMenuModal" class="btn btn-primary" style="display: none;"><i class="fa fa-bars"></i></button>
         </div>
      </div>
   </div>
</header><?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/development/roccabox/resources/views/inc/adminHeader.blade.php ENDPATH**/ ?>