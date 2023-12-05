<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
	{{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
	<span class="brand-text font-weight-light">Admin Panel</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<x-toaha-admin-myaccount />

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
			<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-sidebar">
				<i class="fas fa-search fa-fw"></i>
				</button>
			</div>
			</div>
		</div>

		@if (env("SIDEBAR_TYPE", "dynamic") == "basic")
			<x-toaha-admin-navigation />
		@else
			<x-toaha-admin-pl-navigation />	
		@endif
	</div>
	<!-- /.sidebar -->
</aside>