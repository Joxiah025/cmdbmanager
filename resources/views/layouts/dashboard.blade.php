<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>CM Manager Portal</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:300,400,500,600" rel="stylesheet">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('css/vendor.bundle.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.bundle.css')}}">
	<link rel="stylesheet" href="{{asset('css/theme.a.css')}}">
</head>

<body>
	<div id="app_wrapper">
		<header id="app_topnavbar-wrapper">
			<nav role="navigation" class="navbar topnavbar">
				<div class="nav-wrapper">
					<div id="logo_wrapper" class="nav navbar-nav">
						<ul>
							<li class="logo-icon">
								<a href="index.html">
									<div class="logo">
										<img src="assets/img/logo/logo-icon.png" alt="Logo">
									</div>
									<h1 class="brand-text">MaterialLab</h1>
								</a>
							</li>
						</ul>
					</div>
					<ul class="nav navbar-nav left-menu ">
						<li class="menu-icon">
							<a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
								<i class="mdi mdi-backburger"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav left-menu">
						<li>
							<a href="javascript:void(0)" class="nav-link" data-toggle-profile="profile-open">
								<i class="zmdi zmdi-account"></i>
							</a>
						</li>
						<li class="dropdown dropdown-lg app_menu_launcher">
							<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false">
								<i class="zmdi zmdi-apps"></i>
							</a>
							<ul class="dropdown-menu dropdown-lg-menu dropdown-menu-left btn-primary p-15 text-center">
								<li>
									<ul>
										<li><a href="app-mail.html"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
										<li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
										<li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
									</ul>
								</li>
								<li>
									<ul>
										<li><a href="app-notes.html"><i class="mdi mdi-lightbulb"></i><span>Notes</span></a></li>
										<li><a href="app-taskboard.html"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
										<li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown mega">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link" aria-expanded="false">
								<span>Mega</span>
								<span class="caret"></span>
							</a>
							<div class="dropdown-menu full-width p-l-10 p-b-20">
								<div class="row">
									<div class="col-sm-4 col-md-4">
										<h3>Application Views <span class="badge status info">10</span></h3>
										<ul class="col-xs-6">
											<li>
												<a href="app-mail.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i> Mail</a>
											</li>
											<li>
												<a href="ecommerce-dashboard.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  E-commerce Dashboard</a>
											</li>
											<li>
												<a href="ecommerce-products.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Products</a>
											</li>
											<li>
												<a href="ecommerce-customers.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Customers</a>
											</li>
											<li>
												<a href="ecommerce-settings.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Settings</a>
											</li>
										</ul>
										<ul class="col-xs-6">
											<li>
												<a href="app-chat.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Chat</a>
											</li>
											<li>
												<a href="app-calendar.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Calendar</a>
											</li>
											<li>
												<a href="app-contacts.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Contacts</a>
											</li>
											<li>
												<a href="app-locations.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Office Locations</a>
											</li>
											<li>
												<a href="app-notes.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Notes</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-4 col-md-4">
										<h3>Pages <span class="badge status info">10</span></h3>
										<ul class="col-xs-6">
											<li>
												<a href="page-profile.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i> Profile</a>
											</li>
											<li>
												<a href="page-invoice.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Invoice</a>
											</li>
											<li>
												<a href="page-contact.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Contact Us</a>
											</li>
											<li>
												<a href="page-pricing-tables.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Pricing Tables</a>
											</li>
											<li>
												<a href="page-gallery.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>Photo Gallery</a>
											</li>
										</ul>
										<ul class="col-xs-6">
											<li>
												<a href="page-locations.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Locations</a>
											</li>
											<li>
												<a href="page-400.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i> 400 Error</a>
											</li>
											<li>
												<a href="page-maintenance.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>500 Error</a>
											</li>
											<li>
												<a href="page-maintenance.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Maintenance</a>
											</li>
											<li>
												<a href="login.html" class="btn-primary-hover"><i class="zmdi zmdi-chevron-right m-r-5"></i>  Login</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-12 col-md-4">
										<h3 class="p-t-15 p-b-15">New Arrivals</h3>
										<div id="new_arrivals_megamenu" class="row">
											<div class="col-xs-12">
												<img src="assets/img/ecom/products/39_Ie8T.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/39_8wMD.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/39_JnFC.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/2830_S4ql.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/4107_PPxC.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/5764_YK7g.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/420_dEPl.jpeg" class="max-h-100" alt="">
												<img src="assets/img/ecom/products/1850_N6ck.jpeg" class="max-h-100" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li>
							<a href="javascript:void(0)" data-navsearch-open>
								<i class="zmdi zmdi-search"></i>
							</a>
						</li>
						<li class="select-menu hidden-xs hidden-sm">
							<select class="select form-control country" style="display:none">
								<option option="EN">English</option>
								<option option="ES">Español</option>
								<option option="FN"> Français</option>
								<option option="IT">Italiano</option>
							</select>
						</li>
						<li class="dropdown hidden-xs hidden-sm">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<span class="badge mini status danger"></span>
								<i class="zmdi zmdi-notifications"></i>
							</a>
							<ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
								<li class="dropdown-menu-header">
									<ul class="card-actions icons  left-top">
										<li class="withoutripple">
											<a href="javascript:void(0)" class="withoutripple">
												<i class="zmdi zmdi-settings"></i>
											</a>
										</li>
									</ul>
									<h5>NOTIFICATIONS</h5>
									<ul class="card-actions icons right-top">
										<li>
											<a href="javascript:void(0)">
												<i class="zmdi zmdi-check-all"></i>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Dakota Johnson</div>
														<div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Todd Cook</div>
														<div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="card">
										<a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
											<i class="zmdi zmdi-close"></i>
										</a>
										<div class="card-body">
											<ul class="list-group ">
												<li class="list-group-item ">
													<span class="pull-left"><img src="assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
													<div class="list-group-item-body">
														<div class="list-group-item-heading">Jennifer Ross</div>
														<div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown-menu-footer">
									<a href="javascript:void(0)">
										All notifications
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown hidden-xs hidden-sm">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								<i class="zmdi zmdi-invert-colors"></i>
							</a>
							<ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
								<li class="dropdown-menu-header">
									<h5>Preset Color Options</h5>
								</li>
								<li>
									<div class="color-container">
										<div class="row">
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-a.css">
														<input type="radio" name="setting-theme" checked="checked">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-a"></span>
															<span class="color bg-shade-theme-a"></span>
														</span>
														<span class="color bg-menu-white"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-b.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-b"></span>
															<span class="color bg-shade-theme-b"></span>
														</span>
														<span class="color bg-menu-white"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-c.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-c"></span>
															<span class="color bg-shade-theme-c"></span>
														</span>
														<span class="color bg-menu-white"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-d.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-d"></span>
															<span class="color bg-shade-theme-d"></span>
														</span>
														<span class="color bg-menu-white"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row m-t-20">
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-e.css">
														<input type="radio" name="setting-theme" checked="checked">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-e"></span>
															<span class="color bg-shade-theme-e"></span>
														</span>
														<span class="color bg-menu-darkBlue"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-f.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-f"></span>
															<span class="color bg-shade-theme-f"></span>
														</span>
														<span class="color bg-menu-darkBlue"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-g.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-g"></span>
															<span class="color bg-shade-theme-g"></span>
														</span>
														<span class="color bg-menu-darkBlue"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-3 p-0">
												<div class="color-option-check">
													<label data-load-css="assets/css/theme-h.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-primary-theme-h"></span>
															<span class="color bg-shade-theme-h"></span>
														</span>
														<span class="color bg-menu-darkBlue"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="last">
							<a href="javascript:void(0)" data-toggle-state="sidebar-overlay-open" data-key="rightSideBar">
								<i class="mdi mdi-playlist-plus"></i>
							</a>
						</li>
					</ul>
				</div>
				<form role="search" action="" class="navbar-form" id="navbar_form">
					<div class="form-group">
						<input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
						<i data-navsearch-close class="zmdi zmdi-close close-search"></i>
					</div>
					<button type="submit" class="hidden btn btn-default">Submit</button>
				</form>
			</nav>
		</header>
		<aside id="app_sidebar-left">
			<nav id="app_main-menu-wrapper" class="scrollbar">
				<div class="sidebar-inner sidebar-push">
					<div class="card profile-menu" id="profile-menu">
						<header class="card-heading card-img alt-heading">
							<div class="profile">
								<header class="card-heading card-background" id="card_img_02">
									<img src="assets/img/profiles/18.jpg" alt="" class="img-circle max-w-75 mCS_img_loaded">
								</header>
								<a href="javascript:void(0)" class="info" data-profile="open-menu"><span>admin@materiallab.pro</span></a>
							</div>
						</header>
						<ul class="submenu">
							<li>
								<a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
							</li>
							<li>
								<a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
							</li>
							<li>
								<a href="login.html"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
							</li>
						</ul>
					</div>
					<ul class="nav nav-pills nav-stacked">
						<li class="sidebar-header">NAVIGATION</li>
						<li class="active"><a href="index.html"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-widgets"></i>Cards</a>
							<ul class="nav-sub">
								<li><a href="card-templates.html">Card Templates</a></li>
								<li><a href="card-demos.html">Card Demos</a></li>
							</ul>
						</li>
						<li class="nav-dropdown">
							<a href="#"><i class="zmdi zmdi-view-quilt"></i>App Views</a>
							<ul class="nav-sub">
								<li><a href="app-mail.html">Mail</a></li>
								<li class="nav-dropdown">
									<a href="#">E-Commerce</a>
									<ul class="nav-sub">
										<li><a href="ecommerce-dashboard.html">Dashboard</a></li>
										<li><a href="ecommerce-products.html">Products</a></li>
										<li><a href="ecommerce-customers.html">Customers</a></li>
										<li><a href="ecommerce-settings.html">Settings</a></li>
									</ul>
								</li>
								<li><a href="app-chat.html">Chat</a></li>
								<li><a href="app-calendar.html">Calendar</a></li>
								<li><a href="app-contacts.html">Contacts</a></li>
								<li><a href="app-locations.html">Office Locations</a></li>
								<li><a href="app-notes.html">Notes</a></li>
							</ul>
						</li>
						<li class="nav-dropdown">
							<a href="#"><i class="zmdi zmdi-google-pages"></i>Page Views</a>
							<ul class="nav-sub">
								<li><a href="page-profile.html">Profile</a></li>
								<li><a href="page-invoice.html">Invoice</a></li>
								<li><a href="page-timeline.html">Timeline</a></li>
								<li><a href="page-contact.html">Contact Us</a></li>
								<li><a href="page-pricing-tables.html">Pricing Tables</a></li>
								<li><a href="page-photo-gallery.html">Photo Gallery</a></li>
								<li><a href="page-400.html">400</a></li>
								<li><a href="page-500.html">500</a></li>
								<li><a href="page-maintenance.html">Maintenance</a></li>
								<li class="nav-dropdown"><a href="#">Authentication</a>
									<ul class="nav-sub">
										<li><a href="login.html">Login &amp; Register</a></li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-dropdown">
							<a href="#"><span></span><i class="zmdi zmdi-view-carousel"></i>Layouts</a>
							<ul class="nav-sub">
								<li class="nav-dropdown">
									<a href="#"><span></span>App Layouts</a>
									<ul class="nav-sub">
										<li>
											<div class="radio block"><label><input type="radio" name="layoutMode" value="" checked>Full Width</label></div>
										</li>
										<li>
											<div class="radio block"><label><input type="radio" name="layoutMode" value="boxed-layout">Boxed Layout</label></div>
										</li>
									</ul>
								</li>
								<li class="nav-dropdown">
									<a href="#"><span></span>Page Layouts</a>
									<ul class="nav-sub">
										<li><a href="layout-fullwidth-v1.html">Full Width v1</a></li>
										<li><a href="layout-fullwidth-v2.html">Full Width v2</a></li>
										<li><a href="layout-boxed-v1.html">Boxed Layout v1</a></li>
										<li><a href="layout-boxed-v2.html">Boxed Layout v2</a></li>
										<li><a href="layout-left-sidenav-v1.html">Left Side Nav v1</a></li>
										<li><a href="layout-left-sidenav-v2.html">Left Side Nav v2</a></li>
										<li><a href="layout-right-sidenav-v1.html">Right Side Nav v1</a></li>
										<li><a href="layout-right-sidenav-v2.html">Right Side Nav v2</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-palette"></i>User Interface</a>
							<ul class="nav-sub">
								<li><a href="ui-alerts.html">Alerts</a></li>
								<li><a href="ui-animations.html">Animations</a></li>
								<li><a href="ui-badges-labels.html">Badges &amp; Labels</a></li>
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li><a href="ui-colors.html">Colors</a></li>
								<li><a href="ui-grid.html">Grid System</a></li>
								<li><a href="ui-icons.html">Icons</a></li>
								<li><a href="ui-list.html">List</a></li>
								<li><a href="ui-preloaders.html">Preloaders</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-ungroup"></i>Components</a>
							<ul class="nav-sub">
								<li><a href="component-collapsible.html">Collapsible</a></li>
								<li><a href="component-chips.html">Chips</a></li>
								<li><a href="component-drawers.html">Drawers</a></li>
								<li><a href="component-dropdowns.html">Dropdowns</a></li>
								<li><a href="component-modals.html">Modals</a></li>
								<li><a href="component-notifications-dialogs.html">Notifications &amp; Dialogs</a></li>
								<li><a href="component-scrollable.html">Scrollable</a></li>
								<li><a href="component-progressbars-sliders.html">Sliders &amp; Progressbars</a></li>
								<li><a href="component-tabs.html">Tabs &amp; Pills</a></li>
								<li><a href="component-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
								<li><a href="component-toolbars.html">Toolbars</a></li>
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-chart"></i>Charts</a>
							<ul class="nav-sub">
								<li><a href="charts-chartist.html">Chartist</a></li>
								<li><a href="charts-c3.html">C3 Charts</a></li>
								<li><a href="charts-chartjs.html">Chartjs</a></li>
								<li><a href="charts-morrisjs.html">Morris.js Charts</a></li>
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-subtitles"></i>Forms</a>
							<ul class="nav-sub">
								<li><a href="form-elements.html">Form Elements</a></li>
								<li><a href="form-components.html">Form Components</a></li>
								<li><a href="form-layouts.html">Form Layouts</a></li>
								<li><a href="form-validation.html">Form Validation</a></li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
							</ul>
						</li>
						<li class="nav-dropdown"><a href="#"><i class="zmdi zmdi-view-headline"></i>Tables</a>
							<ul class="nav-sub">
								<li><a href="tables.html">Basic Tables</a></li>
								<li><a href="tables-datatables.html">Data Tables</a></li>
							</ul>
						</li>
						<li class="sidebar-header">EXTRAS</li>
						<li class="nav-dropdown">
							<a href="#" title="Menu Levels">
								<i class="zmdi zmdi-folder"></i>Menu Levels</a>
								<ul class="nav-sub">
									<li>
										<a href="javascript:;" title="Level 2.1">
											<i class="fa fa-fw fa-file"></i> Level 1.1
										</a>
									</li>
									<li>
										<a href="javascript:;" title="Level 2.2">
											<i class="fa fa-fw fa-file"></i> Level 1.2
										</a>
									</li>
									<li class="nav-dropdown">
										<a href="#" title="Level 2.3">
											<i class="fa fa-fw fa-folder-open"></i> Level 1.3
										</a>
										<ul class="nav-sub">
											<li>
												<a href="javascript:;" title="Level 3.1">
													<i class="fa fa-fw fa-file"></i> Level 2.1
												</a>
											</li>
											<li class="nav-dropdown">
												<a href="#" title="Level 3.2">
													<i class="fa fa-fw fa-folder-open"></i> Level 2.2
												</a>
												<ul class="nav-sub">
													<li>
														<a href="javascript:;" title="Level 4.1">
															<i class="fa fa-fw fa-file"></i> Level 3.1
														</a>
													</li>
													<li class="nav-dropdown">
														<a href="#" title="Level 4.2">
															<i class="fa fa-fw fa-folder-open"></i> Level 3.2
														</a>
														<ul class="nav-sub">
															<li class="nav-dropdown">
																<a href="#" title="Level 5.1">
																	<i class="fa fa-fw fa-folder-open"></i> Level 4.1
																</a>
																<ul class="nav-sub">
																	<li>
																		<a href="javascript:;" title="Level 6.1">
																			<i class="fa fa-fw fa-file"></i> Level 5.1
																		</a>
																	</li>
																	<li>
																		<a href="javascript:;" title="Level 6.2">
																			<i class="fa fa-fw fa-file"></i> Level 5.2
																		</a>
																	</li>
																</ul>
															</li>
															<li>
																<a href="javascript:;" title="Level 5.2">
																	<i class="fa fa-fw fa-file"></i> Level 4.2
																</a>
															</li>
															<li>
																<a href="javascript:;" title="Level 5.3">
																	<i class="fa fa-fw fa-file"></i> Level 4.3
																</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							
							<li><a href="helper-classes.html"><i class="zmdi zmdi-info"></i>Helper Classes</a></li>
						</ul>
					</div>
				</nav>
			</aside>
			<section id="content_outer_wrapper">
				<div id="content_wrapper">
					<div id="header_wrapper" class="header-sm">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<header id="header">
										<h1>Dashboard</h1>
									</header>
								</div>
							</div>
						</div>
					</div>
					<div id="content" class="container-fluid">
						<div class="content-body">
							<div class="row">
							@yield('content')
							</div>
						</div>
					</div>
				</div>
				<footer id="footer_wrapper">
				  <div class="footer-content">
				      <div class="row copy-wrapper">
				        <div class="col-xs-12">
				          <p class="copy">&copy; Copyright <time class="year"></time> MaterialLab - All Rights Reserved</p>
				        </div>
				      </div>
				    </div>
				  </footer>
			</section>
            
		
		<script src="{{asset('js/vendor.bundle.js')}}"></script>
		<script src="{{asset('js/app.bundle.js')}}"></script>
		<script>
		
        </script>
	</body>
	</html>
