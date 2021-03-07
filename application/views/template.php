
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Kavling</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?= base_url()?>assets/theme/dist/assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/theme/dist/assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?= base_url()?>assets/theme/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?= base_url()?>assets/theme/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/theme/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/theme/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?= base_url()?>assets/theme/dist/assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?= base_url()?>assets/theme/dist/assets/media/logos/logo-letter-9.png" class="max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:<?= base_url()?>assets/theme/dist/assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header flex-column header-fixed">
						<!--begin::Top-->
						<div class="header-top">
							<!--begin::Container-->
							<div class="container-fluid">
								<!--begin::Left-->
								<div class="d-none d-lg-flex align-items-center mr-3">
									<!--begin::Logo-->
									<a href="index.html" class="mr-20">
										<img alt="Logo" src="<?= base_url()?>assets/theme/dist/assets/media/logos/logo-letter-9.png" class="max-h-35px" />
									</a>
									<!--end::Logo-->
									<!--begin::Tab Navs(for desktop mode)-->
									<ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
										<!--begin::Item-->
										<li class="nav-item">
											<a href="#" class="nav-link py-4 px-6 
											<?= 
											$this->uri->segment(1) == 'Home' ||
											$this->uri->segment(1) == 'H_Pelanggan' ||
											$this->uri->segment(1) == 'H_DataTanah' || 
											$this->uri->segment(1) == 'H_DataLokasi' ? 'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6 
											<?= 
											$this->uri->segment(1) == 'A_TambahAngsuran' ||
											$this->uri->segment(1) == 'A_DataAngsuran' ? 'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Angsuran</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6 
											<?= $this->uri->segment(1) == 'Laporan'?'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_3" role="tab">Laporan</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6 
											<?= $this->uri->segment(1) == 'Developer'?'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_4" role="tab">Developer</a>
										</li>
										<!--end::Item-->
									</ul>
									<!--begin::Tab Navs-->
								</div>
								<!--end::Left-->
								<!--begin::Topbar-->
								<div class="topbar bg-primary">
									<!--begin::Search-->
									<div class="dropdown">
										<!--begin::Toggle-->
										<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
											<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:<?= base_url()?>assets/theme/dist/assets/media/svg/icons/General/Search.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<!--end::Toggle-->
										<!--begin::Dropdown-->
										<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
											<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
												<!--begin:Form-->
												<form method="get" class="quick-search-form">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<span class="svg-icon svg-icon-lg">
																	<!--begin::Svg Icon | path:<?= base_url()?>assets/theme/dist/assets/media/svg/icons/General/Search.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
														</div>
														<input type="text" class="form-control" placeholder="Search..." />
														<div class="input-group-append">
															<span class="input-group-text">
																<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
															</span>
														</div>
													</div>
												</form>
												<!--end::Form-->
												<!--begin::Scroll-->
												<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
												<!--end::Scroll-->
											</div>
										</div>
										<!--end::Dropdown-->
									</div>
									<!--end::Search-->
									<!--begin::User-->
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-sm-3">
												<span class="text-white opacity-80 font-weight-bold font-size-sm d-none d-sm-inline">
													<?= $this->fungsi->user_login()->nama; ?></span>
												<span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">
													<?php 
													if ($this->fungsi->user_login()->role == 1) {
														echo 'Super Admin';
													}else if ($this->fungsi->user_login()->role == 2) {
														echo 'Admin';
													}
													?>
												</span>
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">
													<?php 
														echo substr($this->fungsi->user_login()->nama, 0,1)
													?>
												</span>
											</span>
										</div>
									</div>
									<!--end::User-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Top-->
						<!--begin::Bottom-->
						<div class="header-bottom">
							<!--begin::Container-->
							<div class="container-fluid">
								<!--begin::Header Menu Wrapper-->
								<div class="header-navs header-navs-left" id="kt_header_navs">
									<!--begin::Tab Navs(for tablet and mobile modes)-->
									<ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-outline-primary 
											<?= 
											$this->uri->segment(1) == 'Home' ||
											$this->uri->segment(1) == 'H_Pelanggan' || 
											$this->uri->segment(1) == 'H_DataTanah' || 
											$this->uri->segment(1) == 'H_DataLokasi' ? 'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-outline-primary
											<?= 
											$this->uri->segment(1) == 'A_TambahAngsuran' ||
											$this->uri->segment(1) == 'A_DataAngsuran' ? 'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Angsuran</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-outline-primary
											<?= $this->uri->segment(1) == 'Laporan'?'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_3" role="tab">Laporan</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-outline-primary
											<?= $this->uri->segment(1) == 'Developer'?'active' : "" ?>" data-toggle="tab" data-target="#kt_header_tab_4" role="tab">Developer</a>
										</li>
										<!--end::Item-->
									</ul>
									<!--begin::Tab Navs-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab Pane-->
										<div class="tab-pane py-5 p-lg-0 
										<?= 
										$this->uri->segment(1) == 'Home' || 
										$this->uri->segment(1) == 'H_Pelanggan' ||
										$this->uri->segment(1) == 'H_DataTanah' || 
										$this->uri->segment(1) == 'H_DataLokasi' ? 'show active' : "" ?>" id="kt_header_tab_1">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item-rel
													<?= $this->uri->segment(1) == 'Home' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?=site_url('Home');?>" class="menu-link">
															<span class="menu-text">Dashboard</span>
														</a>
													</li>
													<li class="menu-item menu-item-submenu menu-item-rel
													<?= 
													$this->uri->segment(1) == 'H_Pelanggan' ? ' menu-item-open menu-item-here' : '' ?>" data-menu-toggle="click" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="menu-text">Pelanggan</span>
															<span class="menu-desc"></span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-left">
															<ul class="menu-subnav">
																<li class="menu-item
																<?= 
																$this->uri->segment(2) == 'DaftarPelanggan' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
																	<a href="<?= site_url('H_Pelanggan/DaftarPelanggan')?>" class="menu-link">
																		<span class="menu-icon">
																		<i class="la la-user-check icon-xl"></i></span>
																		<span class="menu-text">Daftar Pelanggan</span>
																	</a>
																</li>
																<li class="menu-item 
																<?= $this->uri->segment(2) == 'TambahPelanggan' ? 'menu-item-active' : '' ?>" aria-haspopup="true">
																	<a href="<?= site_url('H_Pelanggan/TambahPelanggan')?>" class="menu-link">
																		<span class="menu-icon">
																		<i class="la la-user-plus icon-xl"></i></span>
																		<span class="menu-text">Tambah Pelanggan</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item 
													<?= $this->uri->segment(1) == 'H_DataTanah' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?= site_url('H_DataTanah');?>" class="menu-link">
															<span class="menu-text">Kavling</span>
														</a>
													</li>
													<li class="menu-item 
													<?= $this->uri->segment(1) == 'H_DataLokasi' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?= site_url('H_DataLokasi');?>" class="menu-link">
															<span class="menu-text">Tahap Lokasi</span>
														</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane p-5 p-lg-0 justify-content-between
										<?= $this->uri->segment(1) == 'A_TambahAngsuran' ||
										$this->uri->segment(1) == 'A_DataAngsuran' ? 'show active' : "" ?>" id="kt_header_tab_2">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item 
													<?=$this->uri->segment(1) == 'A_TambahAngsuran' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?=site_url('A_TambahAngsuran')?>" class="menu-link">
															<span class="menu-text">Angsuran Baru</span>
														</a>
													</li>
													<li class="menu-item 
													<?=$this->uri->segment(1) == 'A_DataAngsuran' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?=site_url('A_DataAngsuran')?>" class="menu-link">
															<span class="menu-text">Lihat Angsuran</span>
														</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_3">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">Latest Orders</a>
												<a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">Customer Service</a>
												<!--end::Actions-->
											</div>
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane py-5 p-lg-0 
										<?= 
										$this->uri->segment(1) == 'Developer' ? 'show active' : "" ?>" id="kt_header_tab_4">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item-rel
													<?= $this->uri->segment(2) == 'UserAdmin' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?=site_url('Developer/UserAdmin');?>" class="menu-link">
															<span class="menu-text">User Admin</span>
														</a>
													</li>
													<li class="menu-item menu-item-rel
													<?= $this->uri->segment(2) == 'TahapLokasi' ? 'menu-item-active' : "" ?>" aria-haspopup="true">
														<a href="<?=site_url('Developer/TahapLokasi');?>" class="menu-link">
															<span class="menu-text">Tahap Lokasi</span>
														</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content-fluid d-flex flex-column flex-column-fluid" id="kt_content">
						<!-- AWAL ISI KONTEN -->
							<?php echo $contents?>
						<!-- AKHIR ISI KONTEN -->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021 &nbsp;&nbsp;©</span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">Team Skuy</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="#" target="_blank" class="nav-link pr-3 pl-0">Aplikasi Sistem Pembayaran Tanah Kavling</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<small class="text-muted font-size-sm ml-2"></small></h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('<?= base_url()?>assets/theme/dist/assets/media/users/300_21.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
							<?= $this->fungsi->user_login()->nama;?></a>
						<div class="text-muted mt-1">
							<?php 
								if ($this->fungsi->user_login()->role == 1) {
									echo 'Super Admin';
								}else if ($this->fungsi->user_login()->role == 2) {
									echo 'Admin';
								}
							?>
						</div>
						<div class="navi mt-2">
							<a href="<?= site_url('Auth/logout');?>" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->
				<div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:<?= base_url()?>assets/theme/dist/assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Profile</div>
								<div class="text-muted">Account settings and more
								<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
							</div>
						</div>
					</a>
					<!--end:Item-->
				</div>
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?= base_url()?>assets/theme/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?= base_url()?>assets/theme/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?= base_url()?>assets/theme/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?= base_url()?>assets/theme/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script> -->
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/js/pages/widgets.js"></script> -->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/js/pages/custom/wizard/wizard-1.js"></script> -->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/js/pages/custom/wizard/wizard-4.js"></script> -->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/js/pages/custom/user/add-user.js"></script> -->
		<!-- <script src="<?= base_url()?>assets/theme/dist/assets/js/pages/crud/forms/validation/form-widgets.js"></script> -->
		<!-- <script src="<?= base_url()?>assets/dist/sweetalert2.all.min.js"></script> -->
		<script src="<?= base_url()?>assets/js/notif.js"></script>
		<script src="<?= base_url()?>assets/js/kt_datatable/table_user.js"></script>
		<script src="<?= base_url()?>assets/js/validation.js"></script>
		<script src="<?= base_url()?>assets/js/form-validation.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>