<div>
	<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
	<!--begin::Header container-->
		<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
			<!--begin::Sidebar mobile toggle-->
			<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
				<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
					<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
			</div>
			<!--end::Sidebar mobile toggle-->
			<!--begin::Mobile logo-->
			<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
				<a href="../../demo1/dist/index.html" class="d-lg-none">
					<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
				</a>
			</div>
			<!--end::Mobile logo-->
			<!--begin::Header wrapper-->
			<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
				<!--begin::Menu wrapper-->
				<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
					<!--begin::Menu-->
					
					<!--end::Menu-->
				</div>
				<!--end::Menu wrapper-->
				<!--begin::Navbar-->
				<div class="app-navbar flex-shrink-0">
					<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
						<!--begin::Menu wrapper-->
						<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<img src="assets/media/avatars/300-3.jpg" class="rounded-3" alt="user" />
						</div>
						<!--begin::User account menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<!--begin::Avatar-->
									<div class="symbol symbol-50px me-5">
										<img alt="Logo" src="assets/media/avatars/300-3.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Username-->
									<div class="d-flex flex-column">
										<div class="fw-bold d-flex align-items-center fs-5">Robert Fox
										<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
										<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">robert@kt.com</a>
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
								<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profiless</a>
							</div>
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							
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
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
										</span>English</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
										</span>Spanish</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
										</span>German</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
										<span class="symbol symbol-20px me-4">
											<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
										</span>Japanese</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
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
								<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::User account menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::User menu-->
					<!--begin::Header menu toggle-->
					<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
						<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
							<i class="ki-duotone ki-element-4 fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
					</div>
					<!--end::Header menu toggle-->
					<!--begin::Aside toggle-->
					<!--end::Header menu toggle-->
				</div>
				<!--end::Navbar-->
			</div>
			<!--end::Header wrapper-->
		</div>
		<!--end::Header container-->
	</div>
</div>