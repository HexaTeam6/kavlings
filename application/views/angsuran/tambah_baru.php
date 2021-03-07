	<!--begin::Subheader-->
	<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Details-->
			<div class="d-flex align-items-center mr-1">
				<!--begin::Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Angsuran Baru</h5>
				<!--end::Title-->
				<!--begin::Separator-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
				<!--end::Separator-->
				<!--begin::Search Form-->
				<div class="d-flex align-items-center" id="kt_subheader_search">
					<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">* Pastikan Data Pelanggan Sudah Terdaftar</span>
				</div>
				<!--end::Search Form-->
			</div>
			<!--end::Details--><!--begin::Toolbar-->
		<div class="d-flex align-items-center flex-wrap">

			<!--begin::Button-->
			<a href="#" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
				<span class="svg-icon svg-icon-lg">

					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>

					<!--end::Svg Icon-->
				</span>
				<span class="d-md-inline">Pelanggan Baru</span>
			</a>

			<!--end::Button-->
		</div>
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
					<!--begin::Wizard-->
					<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
						<!--begin::Card-->
						<div class="card card-custom card-shadowless rounded-top-0">
							<!--begin::Body-->
							<div class="card-body p-0">
								<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
									<div class="col-xl-12 col-xxl-10">
										<!--begin::Wizard Form-->
										<form class="form" id="kt_form">
											<div class="row justify-content-center">
												<div class="col-xl-12">
													<!--begin::Wizard Step 1-->
													<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
														<h5 class="text-dark font-weight-bold mb-10">Masukkan Data Pelanggan :</h5>
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">NIK Pelanggan</label>
															<div class="col-lg-9 col-xl-9">
																<input class="form-control form-control-solid form-control-lg" name="nik"
																oninput="JavaScript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="16" value="" placeholder="Nomor Identitas Penduduk (Nomor KTP)" />
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Nama Pelanggan</label>
															<div class="col-lg-9 col-xl-9">
																<input class="form-control form-control-solid form-control-lg" name="nama_pelanggan" type="text" value="" placeholder="Nama Lengkap" />
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Alamat Lengkap</label>
															<div class="col-lg-9 col-xl-9">
																<input type="text" class="form-control form-control-solid form-control-lg" name="alamat" placeholder="Alamat Pelanggan" value="" />
															<span class="form-text text-muted">Masukkan Alamat Lengkap Pelanggan</span>
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label">Nomor Telepon</label>
															<div class="col-lg-9 col-xl-9">
																<div class="input-group input-group-solid input-group-lg">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="la la-phone"></i>
																		</span>
																	</div>
																	<input type="tel" class="form-control form-control-solid form-control-lg" name="phone" value="" placeholder="Nomor Telepon" />
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
													<!--begin::Wizard Step 2-->
													<div class="my-5 step" data-wizard-type="step-content">
														<h5 class="text-dark font-weight-bold mb-10 mt-5">Pilih Lokasi Yang Di Inginkan :</h5>
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-form-label col-xl-3 col-lg-12">Tahap Lokasi</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select class="form-control select2" id="pilih_tahap" name="pilih_tahap">
																	<option label="Label"></option>
																	<option value="TL1">Tahap Lokasi 1</option>
																	<option value="TL2">Tahap Lokasi 2</option>
																	<option value="TL3">Tahap Lokasi 3</option>
																	<option value="TL4">Tahap Lokasi 4</option>
																	<option value="TL5">Tahap Lokasi 5</option>
																	<option value="TL6">Tahap Lokasi 6</option>
																	<option value="TL7">Tahap Lokasi 7</option>
																	<option value="TL8">Tahap Lokasi 8</option>
																	<option value="TL9">Tahap Lokasi 9</option>
																	<option value="TL10">Tahap Lokasi 10</option>
																</select>
																<span class="form-text text-muted">Pilih Tahap Lokasi</span>
															</div>
														</div>
														<!--end::Group-->
														
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-form-label col-xl-3 col-lg-3">Blok Kavling</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select class="form-control select2" id="pilih_blok" name="pilih_blok">
																	<option label="Label"></option>
																	<option value="BK1">Blok A</option>
																	<option value="BK2">Blok B</option>
																	<option value="BK3">Blok C</option>
																	<option value="BK4">Blok D</option>
																	<option value="BK5">Blok E</option>
																	<option value="BK6">Blok F</option>
																	<option value="BK7">Blok G</option>
																	<option value="BK8">Blok H</option>
																	<option value="BK9">Blok I</option>
																	<option value="BK10">Blok J</option>
																</select>
																<span class="form-text text-muted">Pilih Blok Kavling</span>
															</div>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group row">
															<label class="col-form-label col-xl-3 col-lg-3">Nomor Kavling</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select class="form-control select2" id="pilih_nomor" name="pilih_nomor">
																	<option label="Label"></option>
																	<option value="NK1">Nomor 1</option>
																	<option value="NK2">Nomor 2</option>
																	<option value="NK3">Nomor 3</option>
																	<option value="NK4">Nomor 4</option>
																	<option value="NK5">Nomor 5</option>
																	<option value="NK6">Nomor 6</option>
																	<option value="NK7">Nomor 7</option>
																	<option value="NK8">Nomor 8</option>
																	<option value="NK9">Nomor 9</option>
																	<option value="NK10">Nomor 10</option>
																</select>
																<span class="form-text text-muted">Pilih Nomor Kavling</span>
															</div>
														</div>
														<!--end::Group-->
														<div class="separator separator-dashed my-10"></div>
													</div>
													<!--end::Wizard Step 2-->
													<!--begin::Wizard Step 3-->
													<div class="my-5 step" data-wizard-type="step-content">
														<h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>
														<!--begin::Group-->
														<div class="form-group">
															<label>Address Line 1</label>
															<input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
															<span class="form-text text-muted">Please enter your Address.</span>
														</div>
														<!--end::Group-->
														<!--begin::Group-->
														<div class="form-group">
															<label>Address Line 2</label>
															<input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
															<span class="form-text text-muted">Please enter your Address.</span>
														</div>
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-6">
																<!--begin::Group-->
																<div class="form-group">
																	<label>Postcode</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
																	<span class="form-text text-muted">Please enter your Postcode.</span>
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="col-xl-6">
																<div class="form-group">
																	<label>City</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne" />
																	<span class="form-text text-muted">Please enter your City.</span>
																</div>
															</div>
															<!--end::Group-->
														</div>
														<!--end::Row-->
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-6">
																<!--begin::Group-->
																<div class="form-group">
																	<label>State</label>
																	<input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
																	<span class="form-text text-muted">Please enter your State.</span>
																</div>
																<!--end::Group-->
															</div>
															<div class="col-xl-6">
																<!--begin::Group-->
																<div class="form-group">
																	<label>Country</label>
																	<select name="country" class="form-control form-control-solid form-control-lg">
																		<option value="">Select</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Åland Islands</option>
																		<option value="AL">Albania</option>
																		<option value="DZ">Algeria</option>
																		<option value="AS">American Samoa</option>
																		<option value="AD">Andorra</option>
																		<option value="AO">Angola</option>
																		<option value="AI">Anguilla</option>
																		<option value="AQ">Antarctica</option>
																		<option value="AG">Antigua and Barbuda</option>
																		<option value="AR">Argentina</option>
																		<option value="AM">Armenia</option>
																		<option value="AW">Aruba</option>
																		<option value="AU" selected="selected">Australia</option>
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
																		<option value="BV">Bouvet Island</option>
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
																		<option value="CG">Congo</option>
																		<option value="CD">Congo, the Democratic Republic of the</option>
																		<option value="CK">Cook Islands</option>
																		<option value="CR">Costa Rica</option>
																		<option value="CI">Côte d'Ivoire</option>
																		<option value="HR">Croatia</option>
																		<option value="CU">Cuba</option>
																		<option value="CW">Curaçao</option>
																		<option value="CY">Cyprus</option>
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
																		<option value="FO">Faroe Islands</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finland</option>
																		<option value="FR">France</option>
																		<option value="GF">French Guiana</option>
																		<option value="PF">French Polynesia</option>
																		<option value="TF">French Southern Territories</option>
																		<option value="GA">Gabon</option>
																		<option value="GM">Gambia</option>
																		<option value="GE">Georgia</option>
																		<option value="DE">Germany</option>
																		<option value="GH">Ghana</option>
																		<option value="GI">Gibraltar</option>
																		<option value="GR">Greece</option>
																		<option value="GL">Greenland</option>
																		<option value="GD">Grenada</option>
																		<option value="GP">Guadeloupe</option>
																		<option value="GU">Guam</option>
																		<option value="GT">Guatemala</option>
																		<option value="GG">Guernsey</option>
																		<option value="GN">Guinea</option>
																		<option value="GW">Guinea-Bissau</option>
																		<option value="GY">Guyana</option>
																		<option value="HT">Haiti</option>
																		<option value="HM">Heard Island and McDonald Islands</option>
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
																		<option value="KR">Korea, Republic of</option>
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
																		<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
																		<option value="YT">Mayotte</option>
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
																		<option value="NC">New Caledonia</option>
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
																		<option value="PN">Pitcairn</option>
																		<option value="PL">Poland</option>
																		<option value="PT">Portugal</option>
																		<option value="PR">Puerto Rico</option>
																		<option value="QA">Qatar</option>
																		<option value="RE">Réunion</option>
																		<option value="RO">Romania</option>
																		<option value="RU">Russian Federation</option>
																		<option value="RW">Rwanda</option>
																		<option value="BL">Saint Barthélemy</option>
																		<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																		<option value="KN">Saint Kitts and Nevis</option>
																		<option value="LC">Saint Lucia</option>
																		<option value="MF">Saint Martin (French part)</option>
																		<option value="PM">Saint Pierre and Miquelon</option>
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
																		<option value="GS">South Georgia and the South Sandwich Islands</option>
																		<option value="SS">South Sudan</option>
																		<option value="ES">Spain</option>
																		<option value="LK">Sri Lanka</option>
																		<option value="SD">Sudan</option>
																		<option value="SR">Suriname</option>
																		<option value="SJ">Svalbard and Jan Mayen</option>
																		<option value="SZ">Swaziland</option>
																		<option value="SE">Sweden</option>
																		<option value="CH">Switzerland</option>
																		<option value="SY">Syrian Arab Republic</option>
																		<option value="TW">Taiwan, Province of China</option>
																		<option value="TJ">Tajikistan</option>
																		<option value="TZ">Tanzania, United Republic of</option>
																		<option value="TH">Thailand</option>
																		<option value="TL">Timor-Leste</option>
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
																		<option value="UM">United States Minor Outlying Islands</option>
																		<option value="UY">Uruguay</option>
																		<option value="UZ">Uzbekistan</option>
																		<option value="VU">Vanuatu</option>
																		<option value="VE">Venezuela, Bolivarian Republic of</option>
																		<option value="VN">Viet Nam</option>
																		<option value="VG">Virgin Islands, British</option>
																		<option value="VI">Virgin Islands, U.S.</option>
																		<option value="WF">Wallis and Futuna</option>
																		<option value="EH">Western Sahara</option>
																		<option value="YE">Yemen</option>
																		<option value="ZM">Zambia</option>
																		<option value="ZW">Zimbabwe</option>
																	</select>
																</div>
																<!--end::Group-->
															</div>
														</div>
													</div>
													<!--end::Wizard Step 3-->
													<!--begin::Wizard Step 4-->
													<div class="my-5 step" data-wizard-type="step-content">
														<h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>
														<!--begin::Item-->
														<div class="border-bottom mb-5 pb-5">
															<div class="font-weight-bolder mb-3">Your Account Details:</div>
															<div class="line-height-xl">John Wick
															<br />Phone: +61412345678
															<br />Email: johnwick@reeves.com</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border-bottom mb-5 pb-5">
															<div class="font-weight-bolder mb-3">Your Address Details:</div>
															<div class="line-height-xl">Address Line 1
															<br />Address Line 2
															<br />Melbourne 3000, VIC, Australia</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div>
															<div class="font-weight-bolder">Payment Details:</div>
															<div class="line-height-xl">Card Number: xxxx xxxx xxxx 1111
															<br />Card Name: John Wick
															<br />Card Expiry: 01/21</div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Wizard Step 4-->
													<!--begin::Wizard Actions-->
													<div class="d-flex justify-content-between border-top pt-10 mt-15">
														<div class="mr-2">
															<button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
														</div>
														<div>
															<button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
															<button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Next</button>
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
					<!--end::Wizard-->
				</div>
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->