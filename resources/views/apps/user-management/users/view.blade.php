
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.2.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../../" />
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
						<!--begin::Sidebar toggle-->
						<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
							<!--begin::Logo image-->
							<a href="index.html">
								<img alt="Logo" src="assets/media/logos/demo38-small.svg" class="h-30px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Sidebar toggle-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
							<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-200px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
									<!--begin::Tablet and mobile search toggle-->
									<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
										<div class="d-flex">
											<i class="ki-outline ki-magnifier fs-1"></i>
										</div>
									</div>
									<!--end::Tablet and mobile search toggle-->
									<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
									<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
										<!--begin::Hidden input(Added to disable form autocomplete)-->
										<input type="hidden" />
										<!--end::Hidden input-->
										<!--begin::Icon-->
										<i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
										<!--end::Icon-->
										<!--begin::Input-->
										<input type="text" class="search-input form-control form-control rounded-1 ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
										<!--end::Input-->
										<!--begin::Spinner-->
										<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
										</span>
										<!--end::Spinner-->
										<!--begin::Reset-->
										<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
										</span>
										<!--end::Reset-->
									</form>
									<!--end::Form-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-6.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-2.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-9.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-14.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-11.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-notepad fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-frame fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-profile-circle fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
													<!--begin::Toolbar-->
													<div class="d-flex" data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
															<i class="ki-outline ki-setting-2 fs-2"></i>
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
															<i class="ki-outline ki-down fs-2"></i>
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-laptop fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-sms fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-bank fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="users" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="orders" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="projects" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="any" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
							</div>
							<!--begin::Notifications-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-calendar fs-1"></i>
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
									<!--begin::Heading-->
									<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications 
										<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
										<!--end::Title-->
										<!--begin::Tabs-->
										<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
											</li>
										</ul>
										<!--end::Tabs-->
									</div>
									<!--end::Heading-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
															<div class="text-gray-500 fs-7">Phase 1 development</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 hr</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<i class="ki-outline ki-information fs-2 text-danger"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
															<div class="text-gray-500 fs-7">Confidential staff documents</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-outline ki-briefcase fs-2 text-warning"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
															<div class="text-gray-500 fs-7">Corporeate staff profiles</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
															<div class="text-gray-500 fs-7">New frontend admin theme</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<i class="ki-outline ki-colors-square fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
															<div class="text-gray-500 fs-7">Product launch status update</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<i class="ki-outline ki-picture fs-2 text-info"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
															<div class="text-gray-500 fs-7">Collection of banner images</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
															<div class="text-gray-500 fs-7">Collection of SVG icons</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">20 March</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
												<i class="ki-outline ki-arrow-right fs-5"></i></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column px-9">
												<!--begin::Section-->
												<div class="pt-10 pb-0">
													<!--begin::Title-->
													<h3 class="text-gray-900 text-center fw-bold">Get Pro Access</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
													<!--end::Text-->
													<!--begin::Action-->
													<div class="text-center mt-5 mb-9">
														<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Section-->
												<!--begin::Illustration-->
												<div class="text-center px-4">
													<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Just now</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 week</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200 OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Mar 5</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">May 15</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Apr 3</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jun 30</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jul 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Sep 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Dec 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
												<i class="ki-outline ki-arrow-right fs-5"></i></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Notifications-->
							<!--begin::Quick links-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-abstract-26 fs-1"></i>
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold mb-3">Quick Links</h3>
										<!--end::Title-->
										<!--begin::Status-->
										<span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
										<!--end::Status-->
									</div>
									<!--end::Heading-->
									<!--begin:Nav-->
									<div class="row g-0">
										<!--begin:Item-->
										<div class="col-6">
											<a href="apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
												<i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
												<span class="fs-7 text-gray-500">eCommerce</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
												<i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
												<span class="fs-7 text-gray-500">Console</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
												<i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
												<span class="fs-7 text-gray-500">Pending Tasks</span>
											</a>
										</div>
										<!--end:Item-->
										<!--begin:Item-->
										<div class="col-6">
											<a href="apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
												<i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>
												<span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
												<span class="fs-7 text-gray-500">Latest cases</span>
											</a>
										</div>
										<!--end:Item-->
									</div>
									<!--end:Nav-->
									<!--begin::View more-->
									<div class="py-2 text-center border-top">
										<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
										<i class="ki-outline ki-arrow-right fs-5"></i></a>
									</div>
									<!--end::View more-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Quick links-->
							<!--begin::Chat-->
							<div class="app-navbar-item ms-1 ms-md-3">
								<!--begin::Menu wrapper-->
								<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
									<i class="ki-outline ki-notification-on fs-1"></i>
									<span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::User menu-->
							<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<img src="assets/media/avatars/300-2.jpg" alt="user" />
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="assets/media/avatars/300-2.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">Max Smith 
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="apps/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title">My Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/billing.html" class="menu-link px-5">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/statements.html" class="menu-link px-5">Payments</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
												<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
													<i class="ki-outline ki-information-5 fs-5"></i>
												</span></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="account/statements.html" class="menu-link px-5">My Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Mode 
											<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
												<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
												<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
											</span></span>
										</a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-night-day fs-2"></i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-moon fs-2"></i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-outline ki-screen fs-2"></i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language 
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
											<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
												</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
												</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
												</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
												</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->
						</div>
						<!--end::Navbar-->
						<!--begin::Separator-->
						<div class="app-navbar-separator separator d-none d-lg-flex"></div>
						<!--end::Separator-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
							<!--begin::Logo-->
							<a href="index.html" class="app-sidebar-logo">
								<img alt="Logo" src="assets/media/logos/demo38.svg" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
								<img alt="Logo" src="assets/media/logos/demo38-dark.svg" class="h-20px h-lg-25px theme-dark-show" />
							</a>
							<!--end::Logo-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-outline ki-text-align-right rotate-180 fs-1"></i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--begin::Navs-->
						<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
							<div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
								<!--begin::Teams-->
								<div class="app-sidebar-menu-secondary menu menu-rounded menu-column mb-6">
									<!--begin::Heading-->
									<div class="menu-item mb-2">
										<div class="menu-heading text-uppercase fs-7 fw-bold">Teams</div>
										<!--begin::Separator-->
										<div class="app-sidebar-separator separator"></div>
										<!--end::Separator-->
									</div>
									<!--end::Heading-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link active" href="apps/projects/project.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<span class="bullet bullet-dot bg-success"></span>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title">AudioEngine</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="apps/projects/activity.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<span class="bullet bullet-dot bg-danger"></span>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title">Schipol Extranet</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="apps/projects/files.html">
											<!--begin::Icon-->
											<span class="menu-icon">
												<i class="ki-outline ki-lock-2 fs-2"></i>
											</span>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="menu-title">ABN AMBRO</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="apps/projects/settings.html">
											<!--begin::Icon-->
											<span class="menu-icon">
												<i class="ki-outline ki-lock-2 fs-2"></i>
											</span>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="menu-title">NS Mobile App</span>
											<!--end::Title-->
										</a>
										<!--end::Menu link-->
									</div>
									<!--end::Menu Item-->
								</div>
								<!--end::Teams-->
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
									<!--begin::Heading-->
									<div class="menu-item mb-2">
										<div class="menu-heading text-uppercase fs-7 fw-bold">Menu</div>
										<!--begin::Separator-->
										<div class="app-sidebar-separator separator"></div>
										<!--end::Separator-->
									</div>
									<!--end::Heading-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
											</span>
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="index.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Default</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="dashboards/ecommerce.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">eCommerce</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="dashboards/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="dashboards/online-courses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Online Courses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="dashboards/marketing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Marketing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/bidding.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Bidding</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/pos.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">POS System</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/call-center.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Call Center</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/logistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Logistics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/website-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Website Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/finance-performance.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Finance Performance</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/store-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Store Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/social.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Social</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/delivery.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Delivery</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/crypto.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Crypto</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/school.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">School</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/podcast.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Podcast</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="landing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Landing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<div class="menu-item">
												<div class="menu-content">
													<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
														<span data-kt-toggle-text-target="true">Show 12 More</span>
														<i class="ki-outline ki-minus-square toggle-on fs-2 me-0"></i>
														<i class="ki-outline ki-plus-square toggle-off fs-2 me-0"></i>
													</a>
												</div>
											</div>
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-gift fs-2"></i>
											</span>
											<span class="menu-title">Pages</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Profile</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/projects.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Projects</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/campaigns.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Campaigns</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/documents.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Documents</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/followers.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Followers</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/user-profile/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Account</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/security.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Security</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/billing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Billing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/statements.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Statements</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/referrals.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Referrals</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/api-keys.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">API Keys</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="account/logs.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Logs</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Authentication</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Corporate Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/corporate/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/corporate/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/corporate/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/corporate/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/corporate/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overlay Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/overlay/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/overlay/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/overlay/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/overlay/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/overlay/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Creative Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/creative/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/creative/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/creative/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/creative/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/creative/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Fancy Layout</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/fancy/sign-in.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-in</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/fancy/sign-up.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sign-up</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/fancy/two-factor.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two-Factor</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/fancy/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/layouts/fancy/new-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Email Templates</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/welcome-message.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Welcome Message</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/reset-password.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reset Password</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/subscription-confirmed.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Subscription Confirmed</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/card-declined.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Credit Card Declined</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/promo-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 1</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/promo-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 2</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="authentication/email/promo-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Promo 3</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/extended/multi-steps-sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Multi-steps Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/welcome.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Welcome Message</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/verify-email.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Verify Email</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/coming-soon.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Coming Soon</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/password-confirmation.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Password Confirmation</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/account-deactivated.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Account Deactivation</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/error-404.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Error 404</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="authentication/general/error-500.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Error 500</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Corporate</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/about.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">About</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/team.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Our Team</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Contact Us</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Licenses</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/sitemap.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sitemap</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Social</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/social/feeds.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Feeds</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/social/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activty</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/social/followers.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Followers</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/social/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blog</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/blog/home.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blog Home</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/blog/post.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blog Post</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/faq/classic.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ Classic</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/faq/extended.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ Extended</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Pricing</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/pricing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Column Pricing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/pricing/table.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Table Pricing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/careers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Careers List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="pages/careers/apply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Careers Apply</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Widgets</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/lists.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Lists</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/statistics.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Statistics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/charts.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Charts</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/mixed.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Mixed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/tables.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tables</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="widgets/feeds.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Feeds</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-26 fs-2"></i>
											</span>
											<span class="menu-title">Apps</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">My Projects</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/targets.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Targets</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/budget.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Budget</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Files</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Activity</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/projects/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">eCommerce</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Catalog</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Products</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Categories</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Product</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Product</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Category</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Category</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Orders Listing</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Order Details</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Order</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Order</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Listing</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Details</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reports</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Products Viewed</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sales</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Returns</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Orders</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Shipping</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contacts</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/contacts/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/contacts/add-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/contacts/edit-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/contacts/view-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Contact</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Support Center</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/support-center/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Overview</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/tickets/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tickets List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/tickets/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Ticket</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/tutorials/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tutorials List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/tutorials/post.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tutorial Post</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/support-center/faq.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">FAQ</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/support-center/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Licenses</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/support-center/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Contact Us</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link active" href="apps/user-management/users/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View User</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/user-management/roles/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Roles List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/user-management/roles/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Role</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/user-management/permissions.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Permissions</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/customers/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/customers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/customers/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/subscriptions/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Getting Started</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/subscriptions/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Subscription List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/subscriptions/add.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Subscription</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/subscriptions/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Subscription</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Invoice Manager</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Invoices</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/invoices/view/invoice-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 1</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/invoices/view/invoice-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 2</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/invoices/view/invoice-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invoice 3</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/invoices/create.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Invoice</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">File Manager</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/file-manager/folders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Folders</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/file-manager/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Files</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/file-manager/blank.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Blank Directory</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/file-manager/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Settings</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Inbox</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/inbox/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Messages</span>
															<span class="menu-badge">
																<span class="badge badge-success">3</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/inbox/compose.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Compose</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/inbox/reply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View & Reply</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Chat</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/chat/private.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Private Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/chat/group.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Group Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/chat/drawer.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Drawer Chat</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/calendar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Calendar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<span class="menu-title">Utilities</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Modals</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">General</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/general/invite-friends.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invite Friends</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/general/view-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/general/select-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/general/upgrade-plan.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Upgrade Plan</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/general/share-earn.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Share & Earn</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Forms</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/forms/new-target.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Target</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/forms/new-card.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Card</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/forms/new-address.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Address</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/forms/create-api-key.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create API Key</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/forms/bidding.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Bidding</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Wizards</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/create-app.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create App</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/create-campaign.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Campaign</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/create-account.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Business Acc</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/create-project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Project</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Top Up Wallet</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/offer-a-deal.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Offer a Deal</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/wizards/two-factor-authentication.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two Factor Auth</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Search</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/search/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="utilities/modals/search/select-location.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Location</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Wizards</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/two-factor-authentication.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two Factor Auth</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/create-app.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create App</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/create-campaign.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Campaign</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/create-account.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Account</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/create-project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/modals/wizards/top-up-wallet.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Top Up Wallet</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/wizards/offer-a-deal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Offer a Deal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Search</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/search/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/search/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/search/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="utilities/search/select-location.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Location</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-briefcase fs-2"></i>
											</span>
											<span class="menu-title">Help</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Components</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Documentation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo38/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Layout Builder</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Changelog v8.2.1</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Navs-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">View User Details</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Home</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Apps</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">User Management</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Users</li>
												<!--end::Item-->
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										<div class="d-flex align-items-center gap-2 gap-lg-3">
											<a href="#" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">Add Member</a>
											<a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">New Campaign</a>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
											<!--begin::Card-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Summary-->
													<!--begin::User Info-->
													<div class="d-flex flex-center flex-column py-5">
														<!--begin::Avatar-->
														<div class="symbol symbol-100px symbol-circle mb-7">
															<img src="assets/media/avatars/300-6.jpg" alt="image" />
														</div>
														<!--end::Avatar-->
														<!--begin::Name-->
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">Emma Smith</a>
														<!--end::Name-->
														<!--begin::Position-->
														<div class="mb-9">
															<!--begin::Badge-->
															<div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
															<!--begin::Badge-->
														</div>
														<!--end::Position-->
														<!--begin::Info-->
														<!--begin::Info heading-->
														<div class="fw-bold mb-3">Assigned Tickets 
														<span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week.">
															<i class="ki-outline ki-information fs-7"></i>
														</span></div>
														<!--end::Info heading-->
														<div class="d-flex flex-wrap flex-center">
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-75px">243</span>
																	<i class="ki-outline ki-arrow-up fs-3 text-success"></i>
																</div>
																<div class="fw-semibold text-muted">Total</div>
															</div>
															<!--end::Stats-->
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">56</span>
																	<i class="ki-outline ki-arrow-down fs-3 text-danger"></i>
																</div>
																<div class="fw-semibold text-muted">Solved</div>
															</div>
															<!--end::Stats-->
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">188</span>
																	<i class="ki-outline ki-arrow-up fs-3 text-success"></i>
																</div>
																<div class="fw-semibold text-muted">Open</div>
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Info-->
													</div>
													<!--end::User Info-->
													<!--end::Summary-->
													<!--begin::Details toggle-->
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details 
														<span class="ms-2 rotate-180">
															<i class="ki-outline ki-down fs-3"></i>
														</span></div>
														<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
														</span>
													</div>
													<!--end::Details toggle-->
													<div class="separator"></div>
													<!--begin::Details content-->
													<div id="kt_user_view_details" class="collapse show">
														<div class="pb-5 fs-6">
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Account ID</div>
															<div class="text-gray-600">ID-45453423</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Email</div>
															<div class="text-gray-600">
																<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
															</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Address</div>
															<div class="text-gray-600">101 Collin Street, 
															<br />Melbourne 3000 VIC
															<br />Australia</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Language</div>
															<div class="text-gray-600">English</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Last Login</div>
															<div class="text-gray-600">25 Jul 2023, 5:20 pm</div>
															<!--begin::Details item-->
														</div>
													</div>
													<!--end::Details content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Connected Accounts-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<div class="card-title">
														<h3 class="fw-bold m-0">Connected Accounts</h3>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<i class="ki-outline ki-design-1 fs-2tx text-primary me-4"></i>
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our 
																<a href="#" class="me-1">privacy policy</a>and 
																<a href="#">terms of use</a>.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--begin::Items-->
													<div class="py-2">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
																	<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
																	<div class="fs-6 fw-semibold text-muted">Keep eye on on your Repositories</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
																	<div class="fs-6 fw-semibold text-muted">Integrate Projects Discussions</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer border-0 d-flex justify-content-center pt-0">
													<button class="btn btn-sm btn-light-primary">Save Changes</button>
												</div>
												<!--end::Card footer-->
											</div>
											<!--end::Connected Accounts-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-15">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events & Logs</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item ms-auto">
													<!--begin::Action menu-->
													<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions 
													<i class="ki-outline ki-down fs-2 me-0"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Create invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link flex-stack px-5">Create payments 
															<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																<i class="ki-outline ki-information fs-7"></i>
															</span></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
															<a href="#" class="menu-link px-5">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Apps</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																			<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
																		</label>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-3"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Reports</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5 my-1">
															<a href="#" class="menu-link px-5">Account Settings</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link text-danger px-5">Delete customer</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::Menu-->
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card card-flush mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header mt-6">
															<!--begin::Card title-->
															<div class="card-title flex-column">
																<h2 class="mb-1">User's Schedule</h2>
																<div class="fs-6 fw-semibold text-muted">2 upcoming meetings</div>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
																<i class="ki-outline ki-brush fs-3"></i>Add Schedule</button>
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body p-9 pt-4">
															<!--begin::Dates-->
															<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
																		<span class="opacity-50 fs-7 fw-semibold">Su</span>
																		<span class="fs-6 fw-bolder">21</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
																		<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																		<span class="fs-6 fw-bolder">22</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
																		<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																		<span class="fs-6 fw-bolder">23</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
																		<span class="opacity-50 fs-7 fw-semibold">We</span>
																		<span class="fs-6 fw-bolder">24</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
																		<span class="opacity-50 fs-7 fw-semibold">Th</span>
																		<span class="fs-6 fw-bolder">25</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
																		<span class="opacity-50 fs-7 fw-semibold">Fr</span>
																		<span class="fs-6 fw-bolder">26</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
																		<span class="opacity-50 fs-7 fw-semibold">Sa</span>
																		<span class="fs-6 fw-bolder">27</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
																		<span class="opacity-50 fs-7 fw-semibold">Su</span>
																		<span class="fs-6 fw-bolder">28</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
																		<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																		<span class="fs-6 fw-bolder">29</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
																		<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																		<span class="fs-6 fw-bolder">30</span>
																	</a>
																</li>
																<!--end::Date-->
																<!--begin::Date-->
																<li class="nav-item me-1">
																	<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">
																		<span class="opacity-50 fs-7 fw-semibold">We</span>
																		<span class="fs-6 fw-bolder">31</span>
																	</a>
																</li>
																<!--end::Date-->
															</ul>
															<!--end::Dates-->
															<!--begin::Tab Content-->
															<div class="tab-content">
																<!--begin::Day-->
																<div id="kt_schedule_day_0" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">12:00 - 13:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Yannis Gloverson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Naomi Hayabusa</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Development Team Capacity Review</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Sean Bean</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_1" class="tab-pane fade show active">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Walter White</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Yannis Gloverson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_2" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Kendell Trevor</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">12:00 - 13:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Karina Clarke</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_3" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Caleb Donaldson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">12:00 - 13:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Karina Clarke</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Caleb Donaldson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Michael Walters</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_4" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Karina Clarke</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Naomi Hayabusa</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">12:00 - 13:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Karina Clarke</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Caleb Donaldson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_5" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">14:30 - 15:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Michael Walters</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_6" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">10:00 - 11:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Walter White</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">14:30 - 15:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Caleb Donaldson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_7" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Walter White</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Development Team Capacity Review</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Caleb Donaldson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Sean Bean</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Kendell Trevor</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_8" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Yannis Gloverson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Development Team Capacity Review</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Sean Bean</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">14:30 - 15:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_9" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Yannis Gloverson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">David Stevenson</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Kendell Trevor</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">11:00 - 11:45 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Walter White</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
																<!--begin::Day-->
																<div id="kt_schedule_day_10" class="tab-pane fade show">
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">9:00 - 10:00 
																			<span class="fs-7 text-muted text-uppercase">am</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Mark Randall</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">13:00 - 14:00 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Kendell Trevor</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Karina Clarke</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																	<!--begin::Time-->
																	<div class="d-flex flex-stack position-relative mt-6">
																		<!--begin::Bar-->
																		<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																		<!--end::Bar-->
																		<!--begin::Info-->
																		<div class="fw-semibold ms-5">
																			<!--begin::Time-->
																			<div class="fs-7 mb-1">16:30 - 17:30 
																			<span class="fs-7 text-muted text-uppercase">pm</span></div>
																			<!--end::Time-->
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>
																			<!--end::Title-->
																			<!--begin::User-->
																			<div class="fs-7 text-muted">Lead by 
																			<a href="#">Bob Harris</a></div>
																			<!--end::User-->
																		</div>
																		<!--end::Info-->
																		<!--begin::Action-->
																		<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																		<!--end::Action-->
																	</div>
																	<!--end::Time-->
																</div>
																<!--end::Day-->
															</div>
															<!--end::Tab Content-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Tasks-->
													<div class="card card-flush mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header mt-6">
															<!--begin::Card title-->
															<div class="card-title flex-column">
																<h2 class="mb-1">User's Tasks</h2>
																<div class="fs-6 fw-semibold text-muted">Total 25 tasks in backlog</div>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
																<i class="ki-outline ki-add-files fs-3"></i>Add Task</button>
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body d-flex flex-column">
															<!--begin::Item-->
															<div class="d-flex align-items-center position-relative mb-7">
																<!--begin::Label-->
																<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
																<!--end::Label-->
																<!--begin::Details-->
																<div class="fw-semibold ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
																	<!--begin::Info-->
																	<div class="fs-7 text-muted">Due in 1 day 
																	<a href="#">Karina Clark</a></div>
																	<!--end::Info-->
																</div>
																<!--end::Details-->
																<!--begin::Menu-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-outline ki-setting-3 fs-3"></i>
																</button>
																<!--begin::Task menu-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-gray-900 fw-bold">Update Status</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																		<!--begin::Input group-->
																		<div class="fv-row mb-10">
																			<!--begin::Label-->
																			<label class="form-label fs-6 fw-semibold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="3">In Process</option>
																				<option value="4">Rejected</option>
																			</select>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																			<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																				<span class="indicator-label">Apply</span>
																				<span class="indicator-progress">Please wait... 
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																		</div>
																		<!--end::Actions-->
																	</form>
																	<!--end::Form-->
																</div>
																<!--end::Task menu-->
																<!--end::Menu-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center position-relative mb-7">
																<!--begin::Label-->
																<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
																<!--end::Label-->
																<!--begin::Details-->
																<div class="fw-semibold ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
																	<!--begin::Info-->
																	<div class="fs-7 text-muted">Due in 3 days 
																	<a href="#">Rober Doe</a></div>
																	<!--end::Info-->
																</div>
																<!--end::Details-->
																<!--begin::Menu-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-outline ki-setting-3 fs-3"></i>
																</button>
																<!--begin::Task menu-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-gray-900 fw-bold">Update Status</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																		<!--begin::Input group-->
																		<div class="fv-row mb-10">
																			<!--begin::Label-->
																			<label class="form-label fs-6 fw-semibold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="3">In Process</option>
																				<option value="4">Rejected</option>
																			</select>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																			<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																				<span class="indicator-label">Apply</span>
																				<span class="indicator-progress">Please wait... 
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																		</div>
																		<!--end::Actions-->
																	</form>
																	<!--end::Form-->
																</div>
																<!--end::Task menu-->
																<!--end::Menu-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center position-relative mb-7">
																<!--begin::Label-->
																<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
																<!--end::Label-->
																<!--begin::Details-->
																<div class="fw-semibold ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">9 Degree Project Estimation</a>
																	<!--begin::Info-->
																	<div class="fs-7 text-muted">Due in 1 week 
																	<a href="#">Neil Owen</a></div>
																	<!--end::Info-->
																</div>
																<!--end::Details-->
																<!--begin::Menu-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-outline ki-setting-3 fs-3"></i>
																</button>
																<!--begin::Task menu-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-gray-900 fw-bold">Update Status</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																		<!--begin::Input group-->
																		<div class="fv-row mb-10">
																			<!--begin::Label-->
																			<label class="form-label fs-6 fw-semibold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="3">In Process</option>
																				<option value="4">Rejected</option>
																			</select>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																			<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																				<span class="indicator-label">Apply</span>
																				<span class="indicator-progress">Please wait... 
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																		</div>
																		<!--end::Actions-->
																	</form>
																	<!--end::Form-->
																</div>
																<!--end::Task menu-->
																<!--end::Menu-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center position-relative mb-7">
																<!--begin::Label-->
																<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
																<!--end::Label-->
																<!--begin::Details-->
																<div class="fw-semibold ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Dashboard UI & UX for Leafr CRM</a>
																	<!--begin::Info-->
																	<div class="fs-7 text-muted">Due in 1 week 
																	<a href="#">Olivia Wild</a></div>
																	<!--end::Info-->
																</div>
																<!--end::Details-->
																<!--begin::Menu-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-outline ki-setting-3 fs-3"></i>
																</button>
																<!--begin::Task menu-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-gray-900 fw-bold">Update Status</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																		<!--begin::Input group-->
																		<div class="fv-row mb-10">
																			<!--begin::Label-->
																			<label class="form-label fs-6 fw-semibold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="3">In Process</option>
																				<option value="4">Rejected</option>
																			</select>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																			<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																				<span class="indicator-label">Apply</span>
																				<span class="indicator-progress">Please wait... 
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																		</div>
																		<!--end::Actions-->
																	</form>
																	<!--end::Form-->
																</div>
																<!--end::Task menu-->
																<!--end::Menu-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center position-relative">
																<!--begin::Label-->
																<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
																<!--end::Label-->
																<!--begin::Details-->
																<div class="fw-semibold ms-5">
																	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>
																	<!--begin::Info-->
																	<div class="fs-7 text-muted">Due in 2 weeks 
																	<a href="#">Sean Bean</a></div>
																	<!--end::Info-->
																</div>
																<!--end::Details-->
																<!--begin::Menu-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-outline ki-setting-3 fs-3"></i>
																</button>
																<!--begin::Task menu-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-gray-900 fw-bold">Update Status</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																		<!--begin::Input group-->
																		<div class="fv-row mb-10">
																			<!--begin::Label-->
																			<label class="form-label fs-6 fw-semibold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="3">In Process</option>
																				<option value="4">Rejected</option>
																			</select>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																			<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																				<span class="indicator-label">Apply</span>
																				<span class="indicator-progress">Please wait... 
																				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																			</button>
																		</div>
																		<!--end::Actions-->
																	</form>
																	<!--end::Form-->
																</div>
																<!--end::Task menu-->
																<!--end::Menu-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Tasks-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Profile</h2>
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																	<tbody class="fs-6 fw-semibold text-gray-600">
																		<tr>
																			<td>Email</td>
																			<td>smith@kpmg.com</td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
																					<i class="ki-outline ki-pencil fs-3"></i>
																				</button>
																			</td>
																		</tr>
																		<tr>
																			<td>Password</td>
																			<td>******</td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																					<i class="ki-outline ki-pencil fs-3"></i>
																				</button>
																			</td>
																		</tr>
																		<tr>
																			<td>Role</td>
																			<td>Administrator</td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
																					<i class="ki-outline ki-pencil fs-3"></i>
																				</button>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title flex-column">
																<h2 class="mb-1">Two Step Authentication</h2>
																<div class="fs-6 fw-semibold text-muted">Keep your account extra secure with a second authentication step.</div>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Add-->
																<button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-outline ki-fingerprint-scanning fs-3"></i>Add Authentication Step</button>
																<!--begin::Menu-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu-->
																<!--end::Add-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pb-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Content-->
																<div class="d-flex flex-column">
																	<span>SMS</span>
																	<span class="text-muted fs-6">+61 412 345 678</span>
																</div>
																<!--end::Content-->
																<!--begin::Action-->
																<div class="d-flex justify-content-end align-items-center">
																	<!--begin::Button-->
																	<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
																		<i class="ki-outline ki-pencil fs-3"></i>
																	</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
																		<i class="ki-outline ki-trash fs-3"></i>
																	</button>
																	<!--end::Button-->
																</div>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin:Separator-->
															<div class="separator separator-dashed my-5"></div>
															<!--end:Separator-->
															<!--begin::Disclaimer-->
															<div class="text-gray-600">If you lose your mobile device or security key, you can 
															<a href='#' class="me-1">generate a backup code</a>to sign in to your account.</div>
															<!--end::Disclaimer-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title flex-column">
																<h2>Email Notifications</h2>
																<div class="fs-6 fw-semibold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body">
															<!--begin::Form-->
															<form class="form" id="kt_users_email_notification_form">
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_0">
																			<div class="fw-bold">Successful Payments</div>
																			<div class="text-gray-600">Receive a notification for every successful payment.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_1">
																			<div class="fw-bold">Payouts</div>
																			<div class="text-gray-600">Receive a notification for every initiated payout.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_2">
																			<div class="fw-bold">Application fees</div>
																			<div class="text-gray-600">Receive a notification each time you collect a fee from an account.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_3">
																			<div class="fw-bold">Disputes</div>
																			<div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked='checked' />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_4">
																			<div class="fw-bold">Payment reviews</div>
																			<div class="text-gray-600">Receive a notification if a payment is marked as an elevated risk.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_5">
																			<div class="fw-bold">Mentions</div>
																			<div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_6">
																			<div class="fw-bold">Invoice Mispayments</div>
																			<div class="text-gray-600">Receive a notification if a customer sends an incorrect amount to pay their invoice.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_7">
																			<div class="fw-bold">Webhooks</div>
																			<div class="text-gray-600">Receive notifications about consistently failing webhook endpoints.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class='separator separator-dashed my-5'></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_8">
																			<div class="fw-bold">Trial</div>
																			<div class="text-gray-600">Receive helpful tips when you try out our products.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<!--begin::Action buttons-->
																<div class="d-flex justify-content-end align-items-center mt-12">
																	<!--begin::Button-->
																	<button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait... 
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
																<!--begin::Action buttons-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Card body-->
														<!--begin::Card footer-->
														<!--end::Card footer-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Login Sessions</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Filter-->
																<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
																<i class="ki-outline ki-entrance-right fs-3"></i>Sign out all sessions</button>
																<!--end::Filter-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																	<thead class="border-bottom border-gray-200 fs-7 fw-bold">
																		<tr class="text-start text-muted text-uppercase gs-0">
																			<th class="min-w-100px">Location</th>
																			<th>Device</th>
																			<th>IP Address</th>
																			<th class="min-w-125px">Time</th>
																			<th class="min-w-70px">Actions</th>
																		</tr>
																	</thead>
																	<tbody class="fs-6 fw-semibold text-gray-600">
																		<tr>
																			<td>Australia</td>
																			<td>Chome - Windows</td>
																			<td>207.40.19.111</td>
																			<td>23 seconds ago</td>
																			<td>Current session</td>
																		</tr>
																		<tr>
																			<td>Australia</td>
																			<td>Safari - iOS</td>
																			<td>207.17.19.227</td>
																			<td>3 days ago</td>
																			<td>
																				<a href="#" data-kt-users-sign-out="single_user">Sign out</a>
																			</td>
																		</tr>
																		<tr>
																			<td>Australia</td>
																			<td>Chrome - Windows</td>
																			<td>207.49.32.181</td>
																			<td>last week</td>
																			<td>Expired</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Logs</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-outline ki-cloud-download fs-3"></i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
																	<tbody>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_2396_4908/payment</td>
																			<td class="pe-0 text-end min-w-200px">19 Aug 2023, 6:05 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-danger">500 ERR</div>
																			</td>
																			<td>POST /v1/invoice/in_4875_7152/invalid</td>
																			<td class="pe-0 text-end min-w-200px">25 Jul 2023, 5:30 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-danger">500 ERR</div>
																			</td>
																			<td>POST /v1/invoice/in_7557_2694/invalid</td>
																			<td class="pe-0 text-end min-w-200px">19 Aug 2023, 10:10 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_654c8486e1e54/not_found</td>
																			<td class="pe-0 text-end min-w-200px">10 Mar 2023, 11:30 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-danger">500 ERR</div>
																			</td>
																			<td>POST /v1/invoice/in_7557_2694/invalid</td>
																			<td class="pe-0 text-end min-w-200px">20 Jun 2023, 5:30 pm</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Events</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-outline ki-cloud-download fs-3"></i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
																<tbody>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been 
																		<span class="badge badge-light-danger">Declined</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2023, 6:43 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from 
																		<span class="badge badge-light-succees me-1">In Transit</span>to 
																		<span class="badge badge-light-success">Approved</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2023, 6:05 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2023, 6:43 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 6:05 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is 
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2023, 9:23 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2023, 6:05 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2023, 9:23 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 10:30 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 8:43 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2023, 11:05 am</td>
																	</tr>
																</tbody>
															</table>
															<!--end::Table-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - Update user details-->
									<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" action="#" id="kt_modal_update_user_form">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_update_user_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Update User Details</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<i class="ki-outline ki-cross fs-1"></i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
															<!--begin::User toggle-->
															<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information 
															<span class="ms-2 rotate-180">
																<i class="ki-outline ki-down fs-3"></i>
															</span></div>
															<!--end::User toggle-->
															<!--begin::User form-->
															<div id="kt_modal_update_user_user_info" class="collapse show">
																<!--begin::Input group-->
																<div class="mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Update Avatar</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
																			<i class="ki-outline ki-information fs-7"></i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Image input wrapper-->
																	<div class="mt-1">
																		<!--begin::Image placeholder-->
																		<style>.image-input-placeholder { background-image: url('assets/media/svg/avatars/blank.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/avatars/blank-dark.svg'); }</style>
																		<!--end::Image placeholder-->
																		<!--begin::Image input-->
																		<div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
																			<!--begin::Preview existing avatar-->
																			<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
																			<!--end::Preview existing avatar-->
																			<!--begin::Edit-->
																			<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																				<i class="ki-outline ki-pencil fs-7"></i>
																				<!--begin::Inputs-->
																				<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																				<input type="hidden" name="avatar_remove" />
																				<!--end::Inputs-->
																			</label>
																			<!--end::Edit-->
																			<!--begin::Cancel-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																				<i class="ki-outline ki-cross fs-2"></i>
																			</span>
																			<!--end::Cancel-->
																			<!--begin::Remove-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																				<i class="ki-outline ki-cross fs-2"></i>
																			</span>
																			<!--end::Remove-->
																		</div>
																		<!--end::Image input-->
																	</div>
																	<!--end::Image input wrapper-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Emma Smith" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Email</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
																			<i class="ki-outline ki-information fs-7"></i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Description</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="description" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-15">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Language</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
																		<option></option>
																		<option value="id">Bahasa Indonesia - Indonesian</option>
																		<option value="msa">Bahasa Melayu - Malay</option>
																		<option value="ca">Català - Catalan</option>
																		<option value="cs">Čeština - Czech</option>
																		<option value="da">Dansk - Danish</option>
																		<option value="de">Deutsch - German</option>
																		<option value="en">English</option>
																		<option value="en-gb">English UK - British English</option>
																		<option value="es">Español - Spanish</option>
																		<option value="fil">Filipino</option>
																		<option value="fr">Français - French</option>
																		<option value="ga">Gaeilge - Irish (beta)</option>
																		<option value="gl">Galego - Galician (beta)</option>
																		<option value="hr">Hrvatski - Croatian</option>
																		<option value="it">Italiano - Italian</option>
																		<option value="hu">Magyar - Hungarian</option>
																		<option value="nl">Nederlands - Dutch</option>
																		<option value="no">Norsk - Norwegian</option>
																		<option value="pl">Polski - Polish</option>
																		<option value="pt">Português - Portuguese</option>
																		<option value="ro">Română - Romanian</option>
																		<option value="sk">Slovenčina - Slovak</option>
																		<option value="fi">Suomi - Finnish</option>
																		<option value="sv">Svenska - Swedish</option>
																		<option value="vi">Tiếng Việt - Vietnamese</option>
																		<option value="tr">Türkçe - Turkish</option>
																		<option value="el">Ελληνικά - Greek</option>
																		<option value="bg">Български език - Bulgarian</option>
																		<option value="ru">Русский - Russian</option>
																		<option value="sr">Српски - Serbian</option>
																		<option value="uk">Українська мова - Ukrainian</option>
																		<option value="he">עִבְרִית - Hebrew</option>
																		<option value="ur">اردو - Urdu (beta)</option>
																		<option value="ar">العربية - Arabic</option>
																		<option value="fa">فارسی - Persian</option>
																		<option value="mr">मराठी - Marathi</option>
																		<option value="hi">हिन्दी - Hindi</option>
																		<option value="bn">বাংলা - Bangla</option>
																		<option value="gu">ગુજરાતી - Gujarati</option>
																		<option value="ta">தமிழ் - Tamil</option>
																		<option value="kn">ಕನ್ನಡ - Kannada</option>
																		<option value="th">ภาษาไทย - Thai</option>
																		<option value="ko">한국어 - Korean</option>
																		<option value="ja">日本語 - Japanese</option>
																		<option value="zh-cn">简体中文 - Simplified Chinese</option>
																		<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::User form-->
															<!--begin::Address toggle-->
															<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details 
															<span class="ms-2 rotate-180">
																<i class="ki-outline ki-down fs-3"></i>
															</span></div>
															<!--end::Address toggle-->
															<!--begin::Address form-->
															<div id="kt_modal_update_user_address" class="collapse show">
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 1</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address2" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Town</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="row g-9 mb-7">
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">State / Province</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">Post Code</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Country</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
																			<i class="ki-outline ki-information fs-7"></i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
																		<option value="">Select a Country...</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Aland Islands</option>
																		<option value="AL">Albania</option>
																		<option value="DZ">Algeria</option>
																		<option value="AS">American Samoa</option>
																		<option value="AD">Andorra</option>
																		<option value="AO">Angola</option>
																		<option value="AI">Anguilla</option>
																		<option value="AG">Antigua and Barbuda</option>
																		<option value="AR">Argentina</option>
																		<option value="AM">Armenia</option>
																		<option value="AW">Aruba</option>
																		<option value="AU">Australia</option>
																		<option value="AT">Austria</option>
																		<option value="AZ">Azerbaijan</option>
																		<option value="BS">Bahamas</option>
																		<option value="BH">Bahrain</option>
																		<option value="BD">Bangladesh</option>
																		<option value="BB">Barbados</option>
																		<option value="BY">Belarus</option>
																		<option value="BE">Belgium</option>
																		<option value="BZ">Belize</option>
																		<option value="BJ">Benin</option>
																		<option value="BM">Bermuda</option>
																		<option value="BT">Bhutan</option>
																		<option value="BO">Bolivia, Plurinational State of</option>
																		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																		<option value="BA">Bosnia and Herzegovina</option>
																		<option value="BW">Botswana</option>
																		<option value="BR">Brazil</option>
																		<option value="IO">British Indian Ocean Territory</option>
																		<option value="BN">Brunei Darussalam</option>
																		<option value="BG">Bulgaria</option>
																		<option value="BF">Burkina Faso</option>
																		<option value="BI">Burundi</option>
																		<option value="KH">Cambodia</option>
																		<option value="CM">Cameroon</option>
																		<option value="CA">Canada</option>
																		<option value="CV">Cape Verde</option>
																		<option value="KY">Cayman Islands</option>
																		<option value="CF">Central African Republic</option>
																		<option value="TD">Chad</option>
																		<option value="CL">Chile</option>
																		<option value="CN">China</option>
																		<option value="CX">Christmas Island</option>
																		<option value="CC">Cocos (Keeling) Islands</option>
																		<option value="CO">Colombia</option>
																		<option value="KM">Comoros</option>
																		<option value="CK">Cook Islands</option>
																		<option value="CR">Costa Rica</option>
																		<option value="CI">Côte d'Ivoire</option>
																		<option value="HR">Croatia</option>
																		<option value="CU">Cuba</option>
																		<option value="CW">Curaçao</option>
																		<option value="CZ">Czech Republic</option>
																		<option value="DK">Denmark</option>
																		<option value="DJ">Djibouti</option>
																		<option value="DM">Dominica</option>
																		<option value="DO">Dominican Republic</option>
																		<option value="EC">Ecuador</option>
																		<option value="EG">Egypt</option>
																		<option value="SV">El Salvador</option>
																		<option value="GQ">Equatorial Guinea</option>
																		<option value="ER">Eritrea</option>
																		<option value="EE">Estonia</option>
																		<option value="ET">Ethiopia</option>
																		<option value="FK">Falkland Islands (Malvinas)</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finland</option>
																		<option value="FR">France</option>
																		<option value="PF">French Polynesia</option>
																		<option value="GA">Gabon</option>
																		<option value="GM">Gambia</option>
																		<option value="GE">Georgia</option>
																		<option value="DE">Germany</option>
																		<option value="GH">Ghana</option>
																		<option value="GI">Gibraltar</option>
																		<option value="GR">Greece</option>
																		<option value="GL">Greenland</option>
																		<option value="GD">Grenada</option>
																		<option value="GU">Guam</option>
																		<option value="GT">Guatemala</option>
																		<option value="GG">Guernsey</option>
																		<option value="GN">Guinea</option>
																		<option value="GW">Guinea-Bissau</option>
																		<option value="HT">Haiti</option>
																		<option value="VA">Holy See (Vatican City State)</option>
																		<option value="HN">Honduras</option>
																		<option value="HK">Hong Kong</option>
																		<option value="HU">Hungary</option>
																		<option value="IS">Iceland</option>
																		<option value="IN">India</option>
																		<option value="ID">Indonesia</option>
																		<option value="IR">Iran, Islamic Republic of</option>
																		<option value="IQ">Iraq</option>
																		<option value="IE">Ireland</option>
																		<option value="IM">Isle of Man</option>
																		<option value="IL">Israel</option>
																		<option value="IT">Italy</option>
																		<option value="JM">Jamaica</option>
																		<option value="JP">Japan</option>
																		<option value="JE">Jersey</option>
																		<option value="JO">Jordan</option>
																		<option value="KZ">Kazakhstan</option>
																		<option value="KE">Kenya</option>
																		<option value="KI">Kiribati</option>
																		<option value="KP">Korea, Democratic People's Republic of</option>
																		<option value="KW">Kuwait</option>
																		<option value="KG">Kyrgyzstan</option>
																		<option value="LA">Lao People's Democratic Republic</option>
																		<option value="LV">Latvia</option>
																		<option value="LB">Lebanon</option>
																		<option value="LS">Lesotho</option>
																		<option value="LR">Liberia</option>
																		<option value="LY">Libya</option>
																		<option value="LI">Liechtenstein</option>
																		<option value="LT">Lithuania</option>
																		<option value="LU">Luxembourg</option>
																		<option value="MO">Macao</option>
																		<option value="MG">Madagascar</option>
																		<option value="MW">Malawi</option>
																		<option value="MY">Malaysia</option>
																		<option value="MV">Maldives</option>
																		<option value="ML">Mali</option>
																		<option value="MT">Malta</option>
																		<option value="MH">Marshall Islands</option>
																		<option value="MQ">Martinique</option>
																		<option value="MR">Mauritania</option>
																		<option value="MU">Mauritius</option>
																		<option value="MX">Mexico</option>
																		<option value="FM">Micronesia, Federated States of</option>
																		<option value="MD">Moldova, Republic of</option>
																		<option value="MC">Monaco</option>
																		<option value="MN">Mongolia</option>
																		<option value="ME">Montenegro</option>
																		<option value="MS">Montserrat</option>
																		<option value="MA">Morocco</option>
																		<option value="MZ">Mozambique</option>
																		<option value="MM">Myanmar</option>
																		<option value="NA">Namibia</option>
																		<option value="NR">Nauru</option>
																		<option value="NP">Nepal</option>
																		<option value="NL">Netherlands</option>
																		<option value="NZ">New Zealand</option>
																		<option value="NI">Nicaragua</option>
																		<option value="NE">Niger</option>
																		<option value="NG">Nigeria</option>
																		<option value="NU">Niue</option>
																		<option value="NF">Norfolk Island</option>
																		<option value="MP">Northern Mariana Islands</option>
																		<option value="NO">Norway</option>
																		<option value="OM">Oman</option>
																		<option value="PK">Pakistan</option>
																		<option value="PW">Palau</option>
																		<option value="PS">Palestinian Territory, Occupied</option>
																		<option value="PA">Panama</option>
																		<option value="PG">Papua New Guinea</option>
																		<option value="PY">Paraguay</option>
																		<option value="PE">Peru</option>
																		<option value="PH">Philippines</option>
																		<option value="PL">Poland</option>
																		<option value="PT">Portugal</option>
																		<option value="PR">Puerto Rico</option>
																		<option value="QA">Qatar</option>
																		<option value="RO">Romania</option>
																		<option value="RU">Russian Federation</option>
																		<option value="RW">Rwanda</option>
																		<option value="BL">Saint Barthélemy</option>
																		<option value="KN">Saint Kitts and Nevis</option>
																		<option value="LC">Saint Lucia</option>
																		<option value="MF">Saint Martin (French part)</option>
																		<option value="VC">Saint Vincent and the Grenadines</option>
																		<option value="WS">Samoa</option>
																		<option value="SM">San Marino</option>
																		<option value="ST">Sao Tome and Principe</option>
																		<option value="SA">Saudi Arabia</option>
																		<option value="SN">Senegal</option>
																		<option value="RS">Serbia</option>
																		<option value="SC">Seychelles</option>
																		<option value="SL">Sierra Leone</option>
																		<option value="SG">Singapore</option>
																		<option value="SX">Sint Maarten (Dutch part)</option>
																		<option value="SK">Slovakia</option>
																		<option value="SI">Slovenia</option>
																		<option value="SB">Solomon Islands</option>
																		<option value="SO">Somalia</option>
																		<option value="ZA">South Africa</option>
																		<option value="KR">South Korea</option>
																		<option value="SS">South Sudan</option>
																		<option value="ES">Spain</option>
																		<option value="LK">Sri Lanka</option>
																		<option value="SD">Sudan</option>
																		<option value="SR">Suriname</option>
																		<option value="SZ">Swaziland</option>
																		<option value="SE">Sweden</option>
																		<option value="CH">Switzerland</option>
																		<option value="SY">Syrian Arab Republic</option>
																		<option value="TW">Taiwan, Province of China</option>
																		<option value="TJ">Tajikistan</option>
																		<option value="TZ">Tanzania, United Republic of</option>
																		<option value="TH">Thailand</option>
																		<option value="TG">Togo</option>
																		<option value="TK">Tokelau</option>
																		<option value="TO">Tonga</option>
																		<option value="TT">Trinidad and Tobago</option>
																		<option value="TN">Tunisia</option>
																		<option value="TR">Turkey</option>
																		<option value="TM">Turkmenistan</option>
																		<option value="TC">Turks and Caicos Islands</option>
																		<option value="TV">Tuvalu</option>
																		<option value="UG">Uganda</option>
																		<option value="UA">Ukraine</option>
																		<option value="AE">United Arab Emirates</option>
																		<option value="GB">United Kingdom</option>
																		<option value="US">United States</option>
																		<option value="UY">Uruguay</option>
																		<option value="UZ">Uzbekistan</option>
																		<option value="VU">Vanuatu</option>
																		<option value="VE">Venezuela, Bolivarian Republic of</option>
																		<option value="VN">Vietnam</option>
																		<option value="VI">Virgin Islands</option>
																		<option value="YE">Yemen</option>
																		<option value="ZM">Zambia</option>
																		<option value="ZW">Zimbabwe</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Address form-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Update user details-->
									<!--begin::Modal - Add schedule-->
									<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add an Event</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_add_schedule_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_name" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Date & Time</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date & time.">
																	<i class="ki-outline ki-information fs-7"></i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="Pick date & time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Organiser</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_org" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Send Event Details To</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add schedule-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a Task</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_add_task_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="task_name" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Task Due Date</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date.">
																	<i class="ki-outline ki-information fs-7"></i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid rounded-3"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--begin::Modal - Update email-->
									<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Email Address</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_email_form" class="form" action="#">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<i class="ki-outline ki-information fs-2tx text-primary me-4"></i>
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email Address</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update email-->
									<!--begin::Modal - Update password-->
									<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_password_form" class="form" action="#">
														<!--begin::Input group=-->
														<div class="fv-row mb-10">
															<label class="required form-label fs-6 mb-2">Current Password</label>
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
														</div>
														<!--end::Input group=-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row" data-kt-password-meter="true">
															<!--begin::Wrapper-->
															<div class="mb-1">
																<!--begin::Label-->
																<label class="form-label fw-semibold fs-6 mb-2">New Password</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="position-relative mb-3">
																	<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
																	<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																		<i class="ki-outline ki-eye-slash fs-1"></i>
																		<i class="ki-outline ki-eye d-none fs-1"></i>
																	</span>
																</div>
																<!--end::Input wrapper-->
																<!--begin::Meter-->
																<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
																</div>
																<!--end::Meter-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Hint-->
															<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
															<!--end::Hint-->
														</div>
														<!--end::Input group=-->
														<!--begin::Input group=-->
														<div class="fv-row mb-10">
															<label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
														</div>
														<!--end::Input group=-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update password-->
									<!--begin::Modal - Update role-->
									<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update User Role</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_role_form" class="form" action="#">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<i class="ki-outline ki-information fs-2tx text-primary me-4"></i>
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-5">
																<span class="required">Select a user role</span>
															</label>
															<!--end::Label-->
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_0">
																		<div class="fw-bold text-gray-800">Administrator</div>
																		<div class="text-gray-600">Best for business owners and company administrators</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_1">
																		<div class="fw-bold text-gray-800">Developer</div>
																		<div class="text-gray-600">Best for developers or people primarily using the API</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_2">
																		<div class="fw-bold text-gray-800">Analyst</div>
																		<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_3">
																		<div class="fw-bold text-gray-800">Support</div>
																		<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_4">
																		<div class="fw-bold text-gray-800">Trial</div>
																		<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update role-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add Authenticator App</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Content-->
													<div class="fw-bold d-flex flex-column justify-content-center mb-5">
														<!--begin::Label-->
														<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
														<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
														<!--end::Label-->
														<!--begin::QR code-->
														<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
															<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
														</div>
														<!--end::QR code-->
														<!--begin::Text code-->
														<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
															<div class="fs-1">gi2kdnb54is709j</div>
														</div>
														<!--end::Text code-->
													</div>
													<!--end::Content-->
													<!--begin::Action-->
													<div class="d-flex flex-center">
														<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
														<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Enable One Time Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-outline ki-cross fs-1"></i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form class="form" id="kt_modal_add_one_time_password_form">
														<!--begin::Label-->
														<div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
														<!--end::Label-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Mobile number</span>
																<span class="ms-2" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login.">
																	<i class="ki-outline ki-information fs-7"></i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator saperator-dashed my-5"></div>
														<!--end::Separator-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Confirm password</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<i class="ki-outline ki-cross fs-1"></i>
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline timeline-border-dashed">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon me-4">
									<i class="ki-outline ki-flag fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task 
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with 
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-sms fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case 
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-outline ki-basket fs-2 text-gray-500"></i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order 
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities 
					<i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-outline ki-dots-square fs-2"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
									<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-outline ki-information fs-7"></i>
									</span></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
							<i class="ki-outline ki-cross-square fs-2"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here: 
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-outline ki-paper-clip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-outline ki-cloud-add fs-3"></i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
			<!--begin::Messenger-->
			<div class="card card-flush w-100 rounded-0">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Title-->
					<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
							<i class="ki-outline ki-cross fs-2"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body hover-scroll-overlay-y h-400px pt-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
								<span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 350</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
								<span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
								<span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 150</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
								<span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
								<span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 720</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 430</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-outline ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-outline ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Total</span>
						<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Sub total</span>
						<span class="text-primary fw-bolder fs-5">$ 246.35</span>
					</div>
					<!--end::Item-->
					<!--end::Action-->
					<div class="d-flex justify-content-end mt-9">
						<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-outline ki-cross fs-1"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check 
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise 
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-outline ki-cross-circle fs-1"></i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-outline ki-check-circle fs-1 text-success"></i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
								<!--begin::Indicator label-->
								<span class="indicator-label">Upgrade Plan</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait... 
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - View Users-->
		<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-outline ki-cross fs-1"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Browse Users</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out our 
							<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Users-->
						<div class="mb-15">
							<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">melody@altbox.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$50,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">max@kt.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$75,900</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">sean@dellito.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$10,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox 
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">brian@exchange.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$20,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">mik@pex.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$9,300</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$15,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild 
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$45,800</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">dam@consilting.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$90,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">emma@intenso.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$5,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$70,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">robert@benko.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$45,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex justify-content-between">
							<!--begin::Label-->
							<div class="fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - View Users-->
		<!--begin::Modal - Create Campaign-->
		<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-9">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header py-7 d-flex justify-content-between">
						<!--begin::Modal title-->
						<h2>Create Campaign</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-outline ki-cross fs-1"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y m-5">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Campaign Details</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Creative Uploads</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Audiences</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Budget Estimates</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-gray-900">Setup Campaign Details 
											<span class="ms-1" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out 
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="required form-label mb-3">Campaign Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-block fw-semibold fs-6 mb-5">
												<span class="required">Company Logo</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign.">
													<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Image input placeholder-->
											<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
											<!--end::Image input placeholder-->
											<!--begin::Image input-->
											<div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="ki-outline ki-pencil fs-7"></i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="ki-outline ki-cross fs-2"></i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="ki-outline ki-cross fs-2"></i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
											<!--end::Label-->
											<!--begin::Roles-->
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_0">
														<div class="fw-bold text-gray-800">Get more visitors</div>
														<div class="text-gray-600">Increase impression traffic onto the platform</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_1">
														<div class="fw-bold text-gray-800">Get more messages on chat</div>
														<div class="text-gray-600">Increase community interaction and communication</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_2">
														<div class="fw-bold text-gray-800">Get more calls</div>
														<div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_3">
														<div class="fw-bold text-gray-800">Get more likes</div>
														<div class="text-gray-600">Increase positive interactivity on social media platforms</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_4">
														<div class="fw-bold text-gray-800">Lead generation</div>
														<div class="text-gray-600">Collect contact information for potential customers</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<!--end::Roles-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Upload Files</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check 
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_campaign_files_upload">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<i class="ki-outline ki-file-up fs-3hx text-primary"></i>
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
														<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
											<!--End::Label-->
											<!--begin::Files-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/pdf.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
															<div class="fw-semibold text-muted">230kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/tif.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
															<div class="fw-semibold text-muted">2.4mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/folder-document.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
															<div class="fw-semibold text-muted">1.12mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/css.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
															<div class="fw-semibold text-muted">85kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/ai.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
															<div class="fw-semibold text-muted">48mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/doc.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
															<div class="fw-semibold text-muted">27kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
											</div>
											<!--end::Files-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Configure Audiences</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check 
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Gender 
											<span class="ms-1" data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
											<!--End::Label-->
											<!--begin::Row-->
											<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">All</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="2" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="3" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Age 
											<span class="ms-1" data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
											<!--End::Label-->
											<!--begin::Slider-->
											<div class="d-flex flex-stack">
												<div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
												<div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
												<div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
											</div>
											<!--end::Slider-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Location 
											<span class="ms-1" data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
											<!--End::Label-->
											<!--begin::Tagify-->
											<input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="assets/media/flags/" />
											<!--end::Tagify-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Budget Estimates</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check 
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Campaign Duration 
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose how long you want your ad to run for">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
											<!--end::Label-->
											<!--begin::Duration option-->
											<div class="d-flex gap-9 mb-7">
												<!--begin::Button-->
												<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">Continuous duration
												<br />
												<span class="fs-7">Your ad will run continuously for a daily budget.</span></button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">Fixed duration
												<br />
												<span class="fs-7">Your ad will run on the specified dates only.</span></button>
												<!--end::Button-->
											</div>
											<!--end::Duration option-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Daily Budget 
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
											<!--end::Label-->
											<!--begin::Slider-->
											<div class="d-flex flex-column text-center">
												<div class="d-flex align-items-start justify-content-center mb-7">
													<span class="fw-bold fs-4 mt-1 me-2">$</span>
													<span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
													<span class="fw-bold fs-3x">.00</span>
												</div>
												<div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
											</div>
											<!--end::Slider-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Campaign Created!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly created campaign!</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Campaign</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Campaign</a>
										</div>
										<!--end::Actions-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-10">
									<!--begin::Wrapper-->
									<div class="me-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
										<i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit 
											<i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
											<span class="indicator-progress">Please wait... 
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue 
										<i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--begin::Modal body-->
				</div>
			</div>
		</div>
		<!--end::Modal - Create Campaign-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-outline ki-cross fs-1"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-outline ki-cross fs-1"></i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out 
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/user-management/users/view/view.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-details.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-schedule.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-task.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-email.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-password.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-role.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-auth-app.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-one-time-password.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>