<!-- HEADER DESKTOP-->

<header class="main py-4 bg-white mb-2">
   <div class="container">
      <div class="d-flex align-content-center">
         <a href="{{url('')}}/super-admin/dashboard" class="logo mr-3"><img src="{{url('public/system/admin/images/icon/Education.svg')}}" class="custom-logo"/></a> 
         <p class="m-0" style="  line-height: 56px; font-size:22px; font-weight:600; "><span class="text-primary"></span><a style = "color: #0c2670;" href="{{url('')}}/super-admin/dashboard">Study+ Airframe & Powerplant</a></p>
         <div id="mainMenu" class="ml-auto d-flex">
            <div class="dropdown dropdown-hover">
               <!-- <div role="button" data-title="Sales">Enquiries</div> -->
               <!-- <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">
				 <a href="{{url('super-admin/bookings')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Bookings</a>
				 <a href="{{url('super-admin/reshedule-list')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Reschedule Bookings Request</a>
				 <a href="{{url('super-admin/change-list')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Change Cleaner Request</a>
                  {{--  <a href="{{url('super-admin/userlist')}}" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Chancle Bookings</a>  --}}
                  </div>
               </div> -->
            </div>
            <!-- <div class="dropdown dropdown-hover"> -->
               <!-- <div role="button" data-title="Sales">Property Listing</div> -->
               <!-- <div class="dropdown-menu dropdown-menu-right">
              <div class="p-4">
				 <a href="{{url('super-admin/locationlist')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Location</a>
				 <a href="{{url('super-admin/servicelist')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Services</a>
				 <a href="{{url('super-admin/subscription')}}" class="dropdown-item"><i class="fa fa-fw fa-bullseye"></i>Subscription</a>
                 <a href="{{url('super-admin/taxlist')}}" class="dropdown-item"><i class="fa fa-fw fa-users"></i> Tax</a> 
                  </div>
               </div> -->
            <!-- </div> -->
            
         <!-- <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Assign this lead</a></div>
         </div>  -->
         <!-- <div class="dropdown dropdown-hover">
   
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Cource</a></div>
          </div>  -->

          <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="#">Transaction </a></div>
         </div> 
         <div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9" href="{{url('super-admin/userlist')}}">Users</a></div>
         </div> 
			<div class="dropdown dropdown-hover">
               <div role="button" data-title="Inventory"><a style="color:#573bc9"  href="{{url('question/questionlist')}}">Questions</a></div>
               
            </div>
            <div class="dropdown dropdown-hover">
               <div role="button" data-title="Settings">Settings</div>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="p-4">
					{{--  <a href="{{url('super-admin/adminreport')}}" class="dropdown-item"><i class="fa fa-fw fa-address-card"></i> Reports Management</a>  --}}
					<a href="{{url('super-admin/profile')}}" class="dropdown-item"><i class="fa fa-fw fa-users"></i> My Profile</a> 
					{{--  <a href="#" class="dropdown-item"><i class="fa fa-fw fa-address-card"></i> Payments</a>   --}}
					<!-- <a href="{{url('/super-admin/contacts')}}" class="dropdown-item"><i class="fas fa-question"></i> Inquiry</a> -->
					<a href="javascript:void(0);" data-csrf="{{ csrf_token() }}" class="dropdown-item logout"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                  </div>
               </div>
            </div>
            <button id="mainMenuSmall" data-toggle="modal" data-target="#mainMenuModal" class="btn btn-primary" style="display: none;"><i class="fa fa-bars"></i></button>
         </div>
      </div>
   </div>
</header>