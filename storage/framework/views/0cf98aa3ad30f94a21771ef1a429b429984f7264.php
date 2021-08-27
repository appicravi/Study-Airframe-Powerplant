<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
	<div class="header-mobile__bar">
		<div class="container-fluid">
			<div class="header-mobile-inner">
				<a class="logo" href="#">
					<img src="<?php echo e(url('public/system/admin/images/icon/roccabox-logo.svg')); ?>"/>
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
					<a href="<?php echo e(url('/super-admin/bookings')); ?>">
						<i class="fas fa-table"></i>Bookings</a>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Cleaners</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-cleaner')); ?>">Add Cleaner</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/cleanerlist')); ?>">All Cleaner</a>
							</li>
							
						</ul>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="javascript:void(0);">
						<i class="fas fa-chart-bar"></i>Customers</a>
						<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
								<a href="<?php echo e(url('super-admin/add-customer')); ?>">Add Customer</a>
							</li>
							<li>
								<a href="<?php echo e(url('super-admin/customerlist')); ?>">All Customer</a>
							</li>
							
						</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
<!-- END HEADER MOBILE-->

<?php /**PATH /home/u175865466/domains/appicsoftwares.in/public_html/development/roccabox/resources/views/inc/adminSidebar.blade.php ENDPATH**/ ?>