<!--begin::Subheader-->
<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center mr-1">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">User Admin</h5>
			<!--end::Title-->
			<!--begin::Search Form-->
			<div class="d-flex align-items-center" id="kt_subheader_search">
				<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Daftar Users</span>
			</div>
			<!--end::Search Form-->
		</div>
		<!--end::Details-->
	<!--end::Toolbar-->
	</div>
</div>
<!--end::Subheader-->

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container-fluid">
		<!--begin::Notice-->
		<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
			<div class="alert-icon">
				<span class="svg-icon svg-icon-primary svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
							<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</div>
			<div class="alert-text">Anda dapat melihat semua user yang telah terdaftar dan berstatus "Aktif", Anda juga dapat melakukan edit data maupun menghapus akun user dengan cara : 
			<br>(Klik Tombol Edit - Untuk Mengubah Data Akun Login User).
			<br>(Klik Tombol Hapus - Untuk Menghapus Akun Login User).</div>
		</div>
		<!--end::Notice-->
		<!--begin::Card-->
		<div class="card card-custom">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Local Datasource
					<span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3>
				</div>
				<div class="card-toolbar">
					<!--begin::Button-->
					<a href="<?= site_url('H_TambahPelanggan')?>" class="btn btn-primary font-weight-bolder">
					<span class="svg-icon svg-icon-md">
						<i class="la la-user-plus icon-xl"></i>
					</span>Tambah Pelanggan</a>
					<!--end::Button-->
				</div>
			</div>
			<div class="card-body">
				<!--begin: Search Form-->
				<!--begin::Search Form-->
				<div class="mb-7">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-8">
							<div class="row align-items-center">
								<div class="col-md-6 my-2 my-md-0">
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
										<span>
											<i class="flaticon2-search-1 text-muted"></i>
										</span>
									</div>
								</div>
								<div class="col-md-6 my-2 my-md-0">
									<div class="d-flex align-items-center">
										<label class="mr-3 mb-0 d-none d-md-block">Role:</label>
										<select class="form-control" id="kt_datatable_search_role">
											<option value="">All</option>
											<option value="1">Super Admin</option>
											<option value="2">Admin</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
							<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
						</div>
					</div>
				</div>
				<!--end::Search Form-->
				<!--end: Search Form-->
				<!--begin: Datatable-->
				<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
					<thead>
						<tr>
							<th title="Field #1">No</th>
							<th title="Field #2">Username</th>
							<th title="Field #3">Nama</th>
							<th title="Field #4">Role</th>
							<th title="Field #5">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
							foreach ($row->result() as $key => $data) {?>
								
								<tr>
									<td><?= $no++ ;?></td>
									<td><?= $data->username;?></td>
									<td><?= $data->nama;?></td>
									<td class="text-right"><?= $data->role;?></td>
									<td>
										<a href="<?= site_url('D_UserAdmin/edit')?>" class="btn btn-sm btn-outline-warning">
										    <i class="flaticon2-edit"></i> Edit
										</a>
										<a href="#" class="btn btn-sm btn-outline-danger">
										    <i class="flaticon2-trash"></i> Hapus
										</a>
									</td>
								</tr>
							<?php } ?>

							<!-- <tr class="text-center">
								<td>0006-3629</td>
								<td>Land Rover</td>
								<td>Range Rover</td>
								<td class="text-right">1</td>
								<td>
									<a href="#" class="btn btn-sm btn-outline-warning">
									    <i class="flaticon2-edit"></i> Edit
									</a>
									<a href="#" class="btn btn-sm btn-outline-danger">
									    <i class="flaticon2-trash"></i> Hapus
									</a>
								</td>
							</tr> -->
					</tbody>
				</table>
				<!--end: Datatable-->
			</div>
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->

<!-- Alert Hapus Data -->

<!-- End Alert Hapus Data -->