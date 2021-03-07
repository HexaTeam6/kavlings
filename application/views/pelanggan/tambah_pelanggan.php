	<!--begin::Subheader-->
	<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Details-->
			<div class="d-flex align-items-center mr-1">
				<!--begin::Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Pelanggan</h5>
				<!--end::Title-->
				<!--begin::Search Form-->
				<div class="d-flex align-items-center" id="kt_subheader_search">
					<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Tambah Pelanggan Baru</span>
				</div>
				<!--end::Search Form-->
			</div>
			<!--end::Details-->
			<!--begin::Button-->
			<a href="<?= site_url('H_DataPelanggan')?>" class="btn btn-warning font-weight-bold mr-2"> Lihat Daftar Pelanggan</a>
			<!--end::Button-->
		<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container-fluid">
			<!--begin::Card-->
			<div class="card card-custom card-transparent">
				<div class="card-body p-0">
						<!--begin::Card-->
						<div class="card card-custom card-shadowless rounded-top-0">
							<!--begin::Body-->
							<div class="card-body p-0">
								<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
									<div class="col-xl-12 col-xxl-10">
										<!--begin::Wizard Form-->
										<form class="form" id="kt_form_1" action="<?= site_url('Pelanggan/TambahPelanggan')?>">
											<div class="row justify-content-center">
												<div class="col-xl-12">
													<!--begin::Wizard Step 1-->
													<div class="my-5 step">
														<h5 class="text-dark font-weight-bold mb-10">Masukkan Data Pelanggan :</h5>
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">NIK Pelanggan *</label>
															<div class="col-lg-9 col-xl-9">
																<input class="form-control form-control-lg" id="nik" name="nik"
																oninput="JavaScript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="16" value="" placeholder="Nomor Identitas Penduduk (Nomor KTP)" />
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Nama Pelanggan *</label>
															<div class="col-lg-9 col-xl-9">
																<input class="form-control form-control form-control-lg" name="nama_pelanggan" type="text" value="" placeholder="Nama Lengkap" />
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Alamat Lengkap *</label>
															<div class="col-lg-9 col-xl-9">
																<input type="text" class="form-control form-control form-control-lg" name="alamat" placeholder="Alamat Pelanggan" value="" />
															<span class="form-text text-muted">Masukkan Alamat Lengkap Pelanggan</span>
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Nomor Telepon</label>
															<div class="col-lg-9 col-xl-9">
																<div class="input-group input-group input-group-lg">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="la la-phone"></i>
																		</span>
																	</div>
																	<input type="number" class="form-control form-control form-control-lg" name="phone" value="" placeholder="Nomor Telepon" />
																</div>
																<span class="form-text text-muted">Nomor Telepon Yang Dapat Dihubungi</span>
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label text-left">Upload KTP</label>
															<div class="col-lg-9 col-xl-9">
																<div class="image-input image-input-outline" id="kt_user_add_avatar">
																	<div class="image-input-wrapper" style="background-image: url(<?= base_url()?>assets/theme/dist/assets/media/users/100_6.jpg)"></div>
																	<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																		<i class="fa fa-pen icon-sm text-muted"></i>
																		<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																		<input type="hidden" name="profile_avatar_remove" />
																	</label>
																	<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																		<i class="ki ki-bold-close icon-xs text-muted"></i>
																	</span>
																</div>
															</div>
														</div>
														<!--end::Group-->
													</div>
													<!--end::Wizard Step 1-->
													<!--begin::Wizard Actions-->

													<div class="d-flex justify-content-between border-top pt-10 mt-15">
														<div class="mr-2">
															<button type="reset" id="prev-step" class="btn btn-light-warning font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Reset</button>
														</div>
														<div>
															<button type="submit" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Simpan</button>
														</div>
													</div>
													<!--end::Wizard Actions-->
												</div>
											</div>
										</form>
										<!--end::Wizard Form-->
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card-->
				</div>
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->