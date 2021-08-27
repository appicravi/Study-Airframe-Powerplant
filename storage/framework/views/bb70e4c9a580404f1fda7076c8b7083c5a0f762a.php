<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
	<div class="header-mobile__bar">
		<div class="container-fluid">
			<div class="header-mobile-inner">
				<a class="logo" href="#">
					<img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>"/>
				</a>
				<button class="hamburger hamburger--slider" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
	</div>
	<nav class="navbar-mobile">
		<div class="container-fluid">
			<ul class="navbar-mobile__list list-unstyled">
				<li class="active has-sub">
					<a class="js-arrow" href="<?php echo e(url('super-admin/dashboard')); ?>">
						<i class="fas fa-tachometer-alt"></i>Dashboard</a>
				</li>
				<li>
					<a href="<?php echo e(url('super-admin/branches')); ?>">
						<i class="fas fa-table"></i>Branches</a>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Restaurant</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-restaurant')); ?>">Add Restaurant</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/all-restaurant')); ?>">All Restaurant</a>
							</li>
							
						</ul>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Cashier</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-cashier')); ?>">Add Cashier</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/all-cashier')); ?>">All Cashier</a>
							</li>
							
						</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<!-- <aside class="menu-sidebar d-none d-lg-block">
	<div class="logo">
		<a href="#">
			<img src="<?php echo e(url('public/system/admin/images/icon/logs.png')); ?>" alt="Cool Admin" />
		</a>
	</div>
	<div class="menu-sidebar__content js-scrollbar1">
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
				<li class="active has-sub">
					<a class="js-arrow" href="<?php echo e(url('super-admin/dashboard')); ?>">
						<i class="fas fa-tachometer-alt"></i>Dashboard</a>
				</li>
				
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Restaurant</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-restaurant')); ?>">Add Restaurant</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/all-restaurant')); ?>">All Restaurant</a>
							</li>
							  <li>
								<a href="<?php echo e(url('super-admin/branches')); ?>">Branches</a>
							</li>
						 </ul>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Modifiers Management</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/all-modifiers')); ?>">All Modifiers</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/add-modifier')); ?>">Add Modifier</a>
							</li>
							
						</ul>
				</li> 
				 <li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Product Management</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/all-products')); ?>">All Product</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/add-product')); ?>">Add Product</a>
							</li>
							
						</ul>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Role Mananger</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/all-roles')); ?>">All Roles</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/add-role')); ?>">Add Role</a>
							</li>
							
						</ul>
				</li>
				  <li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Cashier</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-cashier')); ?>">Add Cashier</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/all-cashier')); ?>">All Cashier</a>
							</li>
							
						</ul>
				</li>-->
			<!-- </ul>
		 </nav> -->
	<!-- </div>
</aside>  --> 
<!-- END MENU SIDEBAR--><?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/dalohotel/resources/views/inc/adminSidebar.blade.php ENDPATH**/ ?>