
  <style>
/* Datepicker */
.datepicker.datepicker-dropdown,
.datepicker.datepicker-inline {
	padding: 10;
	width: 100%;
	max-width: 200px;
	min-width: 250px;
	margin-top;100px;

	.datepicker-days {
		padding: 0;

		table.table-condensed {
			width: 100%;

			thead {
				tr {
					th {
						text-align: center;
						padding: 0.5rem 0;

						&.prev {
							color: $body-color;
							padding-bottom: 1rem;
							padding-top: 1rem;
							background: $white;
						}

						&.datepicker-switch {
							color: $body-color;
							background: $white;
							padding-bottom: 1rem;
							padding-top: 1rem;
							font-size: 1rem;
							font-weight: 600;
						}

						&.next {
							color: $body-color;
							padding-bottom: 1rem;
							padding-top: 1rem;
							background: $white;
						}

						&.dow {
							font-family: $type1;
							color: $body-color;
							font-size: 0.875rem;
							font-weight: initial;
						}
					}
				}
			}

			tbody {
				position: relative;
				top: 13px;

				td {
					text-align: center;

					&.day {
						font-size: 0.9375rem;
						padding: 0.5rem 0;
						color: $body-color;

						&:hover {
							background: $white;
						}

						&.active {
							color: #fff;
							background: transparent;
							position: relative;
							z-index: 1;

							&:before {
								content: "";
								width: 28px;
								height: 28px;
								background: theme-color(success);
								@include border-radius(4px);
								display: block;
								margin: auto;
								vertical-align: middle;
								position: absolute;
								top: 6px;
								z-index: -1;
								left: 0;
								right: 0;
							}
						}

						&.today {
							color: #fff;
							background: transparent;
							position: relative;
							z-index: 1;

							&:before {
								content: "";
								width: 28px;
								height: 28px;
								background: theme-color(primary);
								@include border-radius(4px);
								box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
								-webkit-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
								-moz-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
								display: block;
								margin: auto;
								vertical-align: middle;
								position: absolute;
								top: 6px;
								z-index: -1;
								left: 0;
								right: 0;
							}
						}
					}

					&.old.day {
						color: darken(color(gray-lightest),4.5%);
					}

					&.new.day {}

					&.range-start,
					&.range-end {
					  background: transparent;
					  position: relative;
						&::before {
							content: "";
							width: 28px;
							height: 28px;
							background: rgba(theme-color(success), .2);
							border-radius: 4px;
							display: block;
							margin: auto;
							vertical-align: middle;
							position: absolute;
							top: 6px;
							z-index: -1;
							left: 0;
							right: 0;
						}
					}
					&.range {
						position: relative;
						background: transparent;
						&::before {
							content: "";
							width: 28px;
							height: 28px;
							background: #eee;
							border-radius: 4px;
							display: block;
							margin: auto;
							vertical-align: middle;
							position: absolute;
							top: 6px;
							z-index: -1;
							left: 0;
							right: 0;
						}
					}

				}
			}
		}
	}
}

.datepicker.datepicker-inline {
	width: 100%;
	max-width: 100%;
	min-width: 250px;

	thead {
		tr {
			th {
				&.prev {
					color: grey;
					padding-bottom: 0.5rem;
					padding-top: 0.5rem;
				}

				&.datepicker-switch {
					color: theme-color(primary);
					padding-bottom: 0.5rem;
					padding-top: 0.5rem;
				}

				&.next {
					color: grey;
					padding-bottom: 0.5rem;
					padding-top: 0.5rem;
				}

				&.dow {}
			}
		}
	}
}

.datepicker {
	> div {
		display: initial;
		padding: 0.375rem 0.75rem;
		margin-bottom: 0;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		text-align: center;
		white-space: nowrap;
		border-radius: 2px;
	}

	&.input-group {
		border: 1px solid $border-color;
		padding: 0;

		.form-control {
			border: none;
		}
	}
}

.datepicker-dropdown {
	&:after {
		border-bottom-color: $dropdown-bg;
	}
	&:before {
		border-bottom-color: $border-color;
	}
	&.datepicker-orient-top {
		&:before,
		&:after {
			top: auto;
		}
		&:after {
			border-top-color: $dropdown-bg;
		}
		&:before {
			border-top-color: $border-color;
		}
	}
}

</style>
 <style>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
  background-color:#fafafa;
}

#table_resp {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
}

#table_resp caption {
  font-size: 1.5em;
  margin: .25em 0 .75em;
}

#table_resp tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

#table_resp th, #table_resp td {
  padding: .625em;
  text-align: center;
}

#table_resp th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

#table_resp td img { text-align: center; }
@media screen and (max-width: 600px) {

#table_resp { border: 0; }

#table_resp caption { font-size: .6em; }

#table_resp thead { display: none; }

#table_resp tr {
  border-bottom: 3px solid #ddd;
  display: block;
  margin-bottom: .225em;
}

#table_resp td {
  border-bottom: 1px solid #ddd;
  display: block;
  font-size: .7em;
  text-align: right;
}

.tft{
	
	
}

#table_resp td:before {
  content: attr(data-label);
  float: left;
  font-weight: bold;
  text-transform: uppercase;
  
}

#table_resp td:last-child { border-bottom: 0; }
}



</style>
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0"  >
                  <h3 class="font-weight-bold">Validasi Data </h3><p id="demo"></p>
                </div>

             </div>
            </div>
          </div>
          <div class="row"> 		
									
			<div class="col-md-12 grid-margin stretch-card" class="survey_page_1">
              <div class="card">
                <div class="card-body">
					<div class="row">
						 <div class="col-md-12 grid-margin stretch-card" style="margin-bottom:4px">
						  <div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-10">
									<?php if($valid == null || $valid == '' || $valid == 0 ){ ?>
									<button class="btn btn btn-info" style="" type="button" onClick="validate(<?php echo $id_outbound; ?>,3)" >Valid</button>
									<button class="btn btn btn-danger" style="" type="button" onClick="validate(<?php echo $id_outbound; ?>,2)" >Tidak Valid</button>
									<?php } ?>
									</div>
									<div class="col-2" style="text-align:right">
										<button class="btn btn btn-dark" style="" type="button" onClick="back_qc()" >Kembali</button>
										<input type="hidden" id="list_location" name="list_location" value="<?php echo $list_location; ?>" />
										
									</div>
								</div>
							</div>
						  </div>
						</div> 
					</div> 
					<div class="row">
					
							<div class="col-2">
									
									  <ul class="nav nav-pills nav-pills-vertical nav-pills-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<li class="nav-item">
										  <a class="nav-link" id="identitas_resp_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="identitas_resp_h" onClick='tabs_1()' aria-selected="true">
											<!--<i class="ti-home"></i>-->
											SUMMARY
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link " id="demografi_respondent_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="demografi_respondent_h" onClick='tabs_2()' aria-selected="false">
											R. DEMOGRAFI RESPONDEN
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="profile_rt_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="identitas_resp_h" onClick='tabs_3()' aria-selected="true">
											A. PROFIL RUMAH TANGGA
										  </a>                          
										</li>
										<li class="nav-item">
										   <a class="nav-link" id="internet_data_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="internet_data_h" onClick='tabs_4()' aria-selected="true">
											B. INTERNET DAN DATA
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="menonton_tv_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="menonton_tv_h" onClick='tabs_5()' aria-selected="true">
											C. MENONTON TELEVISI
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="program_tv_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="program_tv_h" onClick='tabs_6()' aria-selected="true">
											D. PROGRAM ACARA TELEVISI
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="kesan_pemirsa_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="kesan_pemirsa_h" onClick='tabs_7()' aria-selected="false">
											E. KESAN PEMIRSA
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="kegemaran_prilaku_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="kegemaran_prilaku_h" onClick='tabs_8()' aria-selected="false">
											F. KEGEMARAN & PERILAKU
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="product_ownership_tab" data-bs-toggle="pill" href="#" role="tab" aria-controls="product_ownership_h" onClick='tabs_9()'  aria-selected="false">
											G. PRODUCT OWNERSHIP
										  </a>                          
										</li>
								
									  </ul>
									</div>
									<div class="col-10">
									  <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
										<div class="tab-pane fade show active" id="identitas_resp_h" role="tabpanel" aria-labelledby="v-pills-home-tab">
										  <div class="media" >
											<div class="media-body" >
											  <div style="border-bottom:1px solid #CED4DA !important;">
												<div class="form-group">
													<label for="exampleInputUsername1">ID Pelanggan</label>
													<div class="input-group">
														 <input type="text" class="form-control" id="id_pelanggan" value="<?php echo $kuisioner['data_nfo']['id_pelanggan']; ?>" placeholder="ID Pelanggan" readOnly>
													</div>
												</div>
												 <input type="hidden" class="form-control" id="kota_survey" placeholder="Kota Survey" readOnly>
												 <input type="hidden" class="form-control" id="telkom_regional" placeholder="Telkom Regional">

												 <div class="form-group">
												  <label for="exampleInputUsername1">Nama Responden</label>
												  <input type="text" class="form-control" id="nama_respondent" placeholder="Nama Responden" value="<?php echo $kuisioner['data_nfo']['nama']; ?>" readOnly>
												</div>
												<div class="form-group">
												  <label for="exampleInputEmail1">Alamat Rumah</label>
												  <input type="text" class="form-control" id="alamat_rumah" placeholder="Alamat Rumah" value="<?php echo $kuisioner['data_nfo']['alamat']; ?>" readOnly>
												</div>
												<div class="form-group">
												  <label for="exampleInputEmail1">Kelurahan</label>
												  <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kuisioner['data_nfo']['kelurahan']; ?>" readOnly>
												</div>
												  <div class="form-group">
												  <label for="exampleInputEmail1">Kecamatan</label>
												  <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kuisioner['data_nfo']['kecamatan']; ?>" readOnly>
												</div>
												  <div class="form-group">
												  <label for="exampleInputEmail1">No. Telp</label>
												  <input type="text" class="form-control" id="no_tel" placeholder="No. Telp" value="<?php echo $kuisioner['data_nfo']['no_telepon']; ?>" readOnly>
												</div>
												  <div class="form-group">
												  <label for="exampleInputEmail1">No. Hp</label>
												  <input type="text" class="form-control" id="no_hp" placeholder="No. HP" value="<?php echo $kuisioner['data_nfo']['no_hp']; ?>" readOnly>
												</div>
												  <div class="form-group" >
												  <label for="exampleInputEmail1">Email</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_nfo']['email']; ?>" readOnly>
												</div>
												
												</div>
													
													<br><br><!--
													<div class="form-check mx-sm-2">
													  <label class="form-check-label">
														<input type="checkbox" name="info_vali" id="info_vali" value="info_true" class="form-check-input formxx" >
														Inputan Sudah Sesuai
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="info_note" name="info_note" placeholder="Keterangan" ></textarea>
													</div>-->
												<div class="form-group" >
												  <label for="exampleInputEmail1">Status Pernikahan</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['status_pernikahan']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">Pekerjaan</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['pekerjaan']; ?>" readOnly>
												</div>
													
												<div class="form-group" >
												  <label for="exampleInputEmail1">Status Rumah</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['status_rumah']; ?> <?php echo $kuisioner['data_a']['status_rumah_lainnya']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">Anggota Keluarga</label>
												  
												  <?php foreach($kuisioner['data_a']['keluarga'] as $angkel ){ 
													if($angkel['is_anggota_keluarga'] == true){ ?>
														<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $angkel['anggota_keluarga']; ?>, <?php echo $angkel['jenis_kelamin']; ?> <?php echo $angkel['usia']; ?> Tahun" readOnly>
												  
													<?php } 
													} ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">Pengeluaran Rutin</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="Rp. <?php echo number_format($kuisioner['data_a']['pengeluaran_keluarga_nominal'],0,',','.'); ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">Bukti Survey</label><br>
												  <img width="300px" src="data:image/png;base64,<?php echo $kuisioner['file_upload']; ?> " />
												</div>
											 
											</div>
										   </div>
										</div>
										
										<div class="tab-pane fade" id="demografi_respondent_h" role="tabpanel" aria-labelledby="demografi_respondent_h">
										  <div class="media" >
											<div class="media-body" >
											  
												<div class="form-group" >
												  <label for="exampleInputEmail1">R1. Jenis kelamin</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['jenis_kelamin']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">R2. Usia</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['usia']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">R3. Pendidikan terakhir</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['pendidikan']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">R4. Pekerjaan utama</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['pekerjaan']; ?> <?php echo $kuisioner['data_demografi']['jabatan']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">R.5 Agama</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_demografi']['agama']; ?>" readOnly>
												</div>
													
													<br><br><!--
													<div class="form-check mx-sm-2">
													  <label class="form-check-label">
														<input type="checkbox" name="demografi_vali" id="demografi_vali" value="info_true" class="form-check-input formxx" >
														Inputan Sudah Sesuai
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="demografi_note" name="demografi_note" placeholder="Keterangan" ></textarea>
													</div>-->
											 
											</div>
										   </div>
										</div>
										
										<div class="tab-pane fade" id="profile_rt_h" role="tabpanel" aria-labelledby="profile_rt_h">
										  <div class="media" >
											<div class="media-body" >
											
												<div class="form-group" >
												  <label for="exampleInputEmail1">A1. Bagaimana status pernikahan Bpk/ Ibu/ Sdr?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['status_pernikahan']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A2.Sebagai apa posisi Bpk/ Ibu/ Sdr di keluarga ini?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['posisi_keluarga']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A3.Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['jml_anggota_keluarga']; ?>" readOnly>
												</div>
											
												<div class="form-group" >
												  <label for="exampleInputEmail1">A4.Siapa saja keluarga inti Bpk/ Ibu/ Sdr yang tinggal di rumah ini? Sebutkan jenis kelamin dan usianya</label>
												  <?php foreach($kuisioner['data_a']['keluarga'] as $angkel ){ 
													if($angkel['is_anggota_keluarga'] == true){ ?>
														<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $angkel['anggota_keluarga']; ?>, <?php echo $angkel['jenis_kelamin']; ?> <?php echo $angkel['usia']; ?> Tahun" readOnly>
												  
													<?php } 
													} ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A5.Apakah isteri dari kepala keluarga/anggota keluarga anda adalah ibu yang memiliki anak dengan usia kurang dari 5 tahun ?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['a5']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A6.Apakah isteri dari kepala keluarga/anggota keluarga anda adalah ibu yang memiliki anak dengan usia 5-9 tahun ?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['a6']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A7.Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah yang memiliki penghasilan?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['jml_anggota_keluarga_berpenghasilan']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A8.Berapakah rata-rata PENGELUARAN RUTIN KELUARGA Bpk/ Ibu/ Sdr perbulannya untuk keperluan sehari-hari, tetapi tidak termasuk pengeluaran untuk rekreasi, pakaian, sepatu & pengeluaran non-rutin lain serta juga kredit-kredit seperti: mobil, rumah, elektronik, dll?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="Rp. <?php echo number_format($kuisioner['data_a']['pengeluaran_keluarga_nominal'],0,',','.'); ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">A9.Bagaimana status kepemilikan rumah yang Bpk/ Ibu/ Sdr tempati saat ini?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_a']['status_rumah']; ?>" readOnly>
												</div>
												
													<br><br><!--
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="profile_rt_vali" value="info_true" class="form-check-input formxx" >
														Inputan Sudah Sesuai
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="profile_rt_note" name="profile_rt_note" placeholder="Keterangan" ></textarea>
													</div>-->
											
											</div>
										   </div>
										</div>
										
										<div class="tab-pane fade" id="internet_data_h" role="tabpanel" aria-labelledby="internet_data_h">
										  <div class="media" >
											<div class="media-body" >
											
												<div class="form-group" >
												  <label for="exampleInputEmail1">B1.Provider PAKET DATA INTERNET SELULER (Mobile Broadband) apa saja yang digunakan oleh Bpk/ Ibu/ Sdr?</label>
												  <?php foreach($kuisioner['data_b']['paket_data'] as $provider){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
												  <?php } ?>
												  
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">B2.Berapa pengeluaran Bpk/ Ibu/ Sdr untuk berlangganan PAKET DATA INTERNET SELULER (Mobile Broadband) per-bulannya?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="Rp. <?php echo number_format($kuisioner['data_b']['pengeluaran_paket_data_nominal'],0,',','.'); ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">B3.Bagaimana frekuensi Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband) dalam sebulan?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_b']['frekuensi_paket_data']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">B4.Kapan terakhir kali Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband)?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_b']['terakhir_pakai']; ?>" readOnly>
												</div>
											
												<br><br> <!--
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="internet_data_vali" value="info_true" class="form-check-input formxx" >
														Inputan Sudah Sesuai
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="internet_data_note" name="internet_data_note" placeholder="Keterangan" ></textarea>
													</div> -->
											
											</div>
										  </div>
										</div>
				
										<div class="tab-pane fade" id="menonton_tv_h" role="tabpanel" aria-labelledby="internet_data_h">
										  <div class="media" >
											<div class="media-body" >
									
												<div class="form-group" >
												  <label for="exampleInputEmail1">C1.(C1-1) Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKDAY?</label>
												  <?php foreach($kuisioner['data_c']['nonton_weekday'] as $provider){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
												  <?php } ?>
												  
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">(C1-2) Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKEND?</label>
												  <?php foreach($kuisioner['data_c']['nonton_weekend'] as $provider){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
												  <?php } ?>
												  
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C2.Pada waktu berikut ini, siapa saja anggota keluarga yang mononton acara TV di rumah?</label><br>
												  <?php foreach($kuisioner['data_c']['waktu_nonton'] as $waktu_nonton){ ?>
															<label for="exampleInputEmail1"><b><?php echo $waktu_nonton['waktu']; ?></b></label>
															<?php foreach($waktu_nonton['keluarga'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
															<br>
												  <?php } ?>
												  
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C3.Siapa saja anggota keluarga yang mononton acara TV di rumah dengan Genre berikut ini?</label><br>
												  <?php foreach($kuisioner['data_c']['kategori_nonton'] as $waktu_nonton){ ?>
															<label for="exampleInputEmail1"><b><?php echo $waktu_nonton['kategori']; ?></b></label>
															<?php foreach($waktu_nonton['keluarga'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
															<br>
												  <?php } ?>
												  
												</div>
										
												<div class="form-group" >
												  <label for="exampleInputEmail1">C4.Dalam 1 bulan terakhir, apakah Bpk/ Ibu/ Sdr sering atau pernah menonton siaran TV dengan menggunakan antena luar?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_c']['nonton_terakhir_kali']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C5.Jika jawaban C4 : Ya, siaran TV jenis apa yang lebih sering Bpk/ Ibu/ Sdr tonton?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_c']['jenis_siaran']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C6.Jika jawaban C5 : TV Digital, maka: (C6-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Digital?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_c']['durasi_digital_nominal']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C6.Jika jawaban C5 : TV Digital, maka: (C6-2) Sebutkan 5 Channel TV Digital apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
												  <?php $rr=0; foreach($kuisioner['data_c']['channel_tv_digital'] as $provider){ if($provider['selected'] == true ){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
												  <?php $rr++; } } if($rr == 0){ ?> <input type="text" class="form-control" id="email" placeholder="" value="" readOnly> <?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C7.Jika jawaban C5 : TV Digital, apakah Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan IndiHomeTV?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_c']['digital_tv_nasional']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C8.Jika jawaban C7: Ya, apa alasan Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan IndiHome TV?</label>
												  <?php if(count($kuisioner['data_c']['alasan_nonton_tv_nasional']) > 0 ){foreach($kuisioner['data_c']['alasan_nonton_tv_nasional'] as $provider){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
												  <?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C9.Jika jawaban C5 : TV Analog,(C9-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Analog?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_c']['durasi_analog_nominal']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C9.Jika jawaban C5 : TV Analog,(C9-2) Sebutkan 5 Channel TV Analog apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
												   <?php $rr=0;foreach($kuisioner['data_c']['channel_tv_analog'] as $provider){ if($provider['selected'] == true ){ ?>
															<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider['name']; ?>" readOnly>
												    <?php $rr++; } } if($rr == 0){ ?> <input type="text" class="form-control" id="email" placeholder="" value="" readOnly> <?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">C10.Dari 20 program acara TV yang sering Bpk/ Ibu/ Sdr dan keluarga tonton di 2 bulan terakhir berikut ini, sebutkan siapa saja (sesuai jawaban A4) yang menonton?</label><br>
												  <?php foreach($kuisioner['data_c']['program_tv'] as $program_tv){ $program = explode('|',$program_tv['nama_program']); ?>
															<label for="exampleInputEmail1"><b><?php echo 'Channel '.$program[2].'<br>Genre '.$program[3].'<br>'.$program[1]; if($program[0] == 'Ya'){ echo '*'; } ?></b></label>
															<?php foreach($program_tv['keluarga'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
															<br>
												  <?php } ?>
												</div>
												
										
											</div>
										  </div>
										</div>

									
										<div class="tab-pane fade" id="program_tv_h" role="tabpanel" aria-labelledby="program_tv_h">
										  <div class="media" >
											<div class="media-body" >
											
												<div class="form-group" >
												  <label for="exampleInputEmail1">(Showcard-G) Hal apa yang menjadi perhatian utama Bpk/ Ibu/ Sdr dalam menilai kualitas program acara TV?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_d']['perhatian_utama']; ?><?php echo $kuisioner['data_d']['perhatian_utama_lainnya']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">Menurut Bpk/ Ibu/ Sdr, adakah program acara TV baru yang perlu ditambahkan? Jika ada, program seperti apa yang perlu ditambahkan? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_d']['program_acara']; ?>" readOnly>
												  <input type="text" class="form-control" id="email" placeholder="Lainnya" value="<?php echo $kuisioner['data_d']['program_acara_seperti']; ?>" readOnly>
												</div>
													
		  <br><br>
											
											</div>
										  </div>
										</div>
									
										<div class="tab-pane fade" id="kesan_pemirsa_h" role="tabpanel" aria-labelledby="kesan_pemirsa_h">
										  <div class="media" >
											<div class="media-body" >
			
												<div class="form-group" >
												  <label for="exampleInputEmail1">E1. Channel TV yang SERING DITONTON DALAM 2 MINGGU TERAKHIR apa saja (melalui media apapun termasuk TV Digital atau TV Analog atau IndiHome TV maupun video streaming (OTT) ? dan kategori / genre / jenis tayangan mana yang sesuai dengan channel TV tersebut?</label>
												  <?php foreach($kuisioner['data_e']['channel_tv'] as $channel_tv){ ?>
															<label for="exampleInputEmail1"><b><?php echo $channel_tv['nama_channel']; ?></b></label>
															<?php foreach($channel_tv['kategory_film'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
															<br>
												  <?php } ?>
												</div>
			
											</div>
										</div>
										</div>


										<div class="tab-pane fade" id="kegemaran_prilaku_h" role="tabpanel" aria-labelledby="kegemaran_prilaku_h">
										  <div class="media" >
											<div class="media-body" >

												<div class="form-group" >
												  <label for="exampleInputEmail1">F1.Apakah Bpk/ Ibu/ Sdr suka nonton film di BIOSKOP? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f1']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F2.Jika jawaban F1:“YA”, Seberapa sering Bpk/ Ibu/ Sdr atau keluarga menonton BIOSKOP? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f2']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F3.Jika jawaban F1:“YA”,  Dimana Bpk/ Ibu/ Sdr biasanya nonton film dibioskop? </label>
															<?php if(count($kuisioner['data_f']['f3']['value']) > 0 ){foreach($kuisioner['data_f']['f3']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F4.Jika jawaban F1:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr menonton film dibioskop? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f4']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F5.Dimana biasanya Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat?</label>
												  <?php foreach($kuisioner['data_f']['f5']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F6.Kapan terakhir kali Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f6']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F7.Apakah Bpk/ Ibu/ Sdr ikut dalam sebuah Klub Olahraga yang rutin mengikutinya? Jika ”Ya”, sebutkan nama klub-nya!</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f7']['value']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F8.Jika jawaban F7:“YA”,  Sebutkan jenis olahraganya?  </label>
												   <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f8']['value']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F9.Jika jawaban F7:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan aktivitas bersama klub olahraga yang diikuti?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f9']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F10.(F10-1) Saluran media yang Bpk /Ibu /Sdr gunakan (menonton, mendengar, membaca) hingga sebulan terakhir, apa saja? dan beragam media yang Bpk / Ibu/ Sdr konsumsi dan kapan terakhir kali Bpk / Ibu/ Sdr mengonsumsi</label><br>
												  
												    <label for="exampleInputEmail1"><b>Media Konvensional</b></label>
													 <?php foreach($kuisioner['data_f']['f10']['mediaKonvensional'] as $provider){ 
														if($provider['selected'] == true){?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider['jenis_media']; ?> - <?php echo $provider['waktu']; ?>" readOnly>
														<?php } } ?>
														<br>
														  <label for="exampleInputEmail1"><b>Media Digital / Online</b></label>
													 <?php foreach($kuisioner['data_f']['f10']['mediaDigital'] as $provider){ 
														if($provider['selected'] == true){?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider['jenis_media']; ?> - <?php echo $provider['waktu']; ?>" readOnly>
														<?php } } ?>
												  
												  
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F11.Jika jawaban F10-2:“KORAN”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan koran yang dibaca? </label>
															<?php if(count($kuisioner['data_f']['f11']) > 0 ){foreach($kuisioner['data_f']['f11'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F12.Jika jawaban F11:“BERLANGGANAN”, berapa biaya berlangganan koran yang Bpk/ Ibu/ Sdr baca tersebut?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f12']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F13.Jika jawaban F10-2:“KORAN”, Seberapa sering Bpk/ Ibu/ Sdr membaca koran?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f13']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F14.Jika jawaban F10-2:“KORAN”, Koran apa yang biasa Bpk/ Ibu/ Sdr baca? </label>
															<?php if(count($kuisioner['data_f']['f14']['value']) > 0 ){foreach($kuisioner['data_f']['f14']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F15.Jika jawaban F10-2:“KORAN”, (Showcard-I) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca? </label>
															<?php if(count($kuisioner['data_f']['f15']) > 0 ){foreach($kuisioner['data_f']['f15'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F16.Jika jawaban F10-2:“ MAJALAH/ TABLOID”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan majalah/ tabloid yang dibaca? </label>
															<?php if(count($kuisioner['data_f']['f16']) > 0 ){foreach($kuisioner['data_f']['f16'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F17.Jika jawaban F16:“BERLANGGANAN”, berapa biaya berlangganan majalah/ tabloid yang Bpk/ Ibu/ Sdr baca tersebut?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f17']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F18.Jika jawaban F10-2:“MAJALAH/ TABLOID”, Majalah / Tabloid apa yang sering Bpk/ Ibu/ Sdr baca?</label>
															<?php if(count($kuisioner['data_f']['f18']['value']) > 0 ){foreach($kuisioner['data_f']['f18']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F19.Jika jawaban F10-2:“ MAJALAH/ TABLOID”, (Showcard-J) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca? </label>
															<?php if(count($kuisioner['data_f']['f19']['value']) > 0 ){foreach($kuisioner['data_f']['f19']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F20.Jika jawaban F10-2:“RADIO”? Sebutkan nama Radio yang paling sering didengarkan!</label>
															<?php if(count($kuisioner['data_f']['f20']['value']) > 0 ){foreach($kuisioner['data_f']['f20']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F21.Jika jawaban F10-2:“RADIO”, dimana biasa Bpk/ Ibu/ Sdr mendengarkan Radio? </label>
															<?php if(count($kuisioner['data_f']['f21']['value']) > 0 ){foreach($kuisioner['data_f']['f21']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F22.Jika jawaban F10-2:“RADIO”, seberapa sering Bpk/ Ibu/ Sdr mendengarkan radio?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f22']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F23.Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, apakah Bpk/ Ibu/ Sdr berlangganan Koran /Majalah /Tabloid /Situs berita Online? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f23']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F24.Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, Seberapa sering Bpk/ Ibu/ Sdr membaca Online? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f24']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F25.Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, media online apa yang biasa Bpk/ Ibu/ Sdr baca? </label>
															<?php if(count($kuisioner['data_f']['f25']['value']) > 0 ){foreach($kuisioner['data_f']['f25']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F26.a jawaban F10-2: “SOCIAL MEDIA”, media apa yang biasa Bpk/ Ibu/ Sdr baca berita / informasinya? </label>
															<?php if(count($kuisioner['data_f']['f26']['value']) > 0 ){foreach($kuisioner['data_f']['f26']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F27.Akun media sosial apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan? Urutkan dari yang paling sering digunakan! </label>
															<?php if(count($kuisioner['data_f']['f27']['value']) > 0 ){foreach($kuisioner['data_f']['f27']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F28.Jika jawaban F27: “YOUTUBE”, Apakah Bpk/ Ibu/ Sdr memiliki Channel YOUTUBE pribadi dan aktif mengupdate atau mengisi contentnya? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f28']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F29.Jika jawaban F27: “YOUTUBE”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr menonton Channel YOUTUBE orang lain? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f29']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F30.Jika jawaban F27: “YOUTUBE”, jenis tayangan apa yang sering Bpk/ Ibu/ Sdr tonton? </label>
															<?php if(count($kuisioner['data_f']['f30']) > 0 ){foreach($kuisioner['data_f']['f30'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F31.Jika jawaban F27: “FACEBOOK”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun facebook yang dimiliki? </label>
															<?php if(count($kuisioner['data_f']['f31']['value']) > 0 ){foreach($kuisioner['data_f']['f31']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F32.Jika jawaban F27: “FACEBOOK”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun FACEBOOK yang dimiliki? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f32']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F33.Jika jawaban F27: “INSTAGRAM”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun instagram yang dimiliki?</label>
															<?php if(count($kuisioner['data_f']['f33']['value']) > 0 ){foreach($kuisioner['data_f']['f33']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F34.Jika jawaban F27: “INSTAGRAM”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun INSTAGRAM yang dimiliki? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f34']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F35.Jika jawaban F27: “TIKTOK”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun TIKTOK yang dimiliki?</label>
															<?php if(count($kuisioner['data_f']['f35']['value']) > 0 ){foreach($kuisioner['data_f']['f35']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F36.Jika jawaban F27: “TIKTOK”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun TIKTOK  yang dimiliki? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f36']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F37.Akun social messenger apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan?</label>
															<?php if(count($kuisioner['data_f']['f37']['value']) > 0 ){foreach($kuisioner['data_f']['f37']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F38.(Showcard-K) Apa saja yang Bpk/ Ibu/ Sdr lakukan dalam seminggu terakhir saat terhubung dengan internet? </label>
															<?php if(count($kuisioner['data_f']['f38']['value']) > 0 ){foreach($kuisioner['data_f']['f38']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F39.Jika jawaban F38:“AKSES SITUS BERITA DAN INFORMASI”, (Showcard-L) berita dan informasi apa yang sering Bpk/Ibu/Sdr cari? </label>
															<?php if(count($kuisioner['data_f']['f39']['value']) > 0 ){foreach($kuisioner['data_f']['f39']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F40.Jika jawaban F38:“AKSES SITUS MUSIK/ AUDIO STREAMING”, genre atau jenis musik apa yang sering Bpk/ Ibu/ Sdr dengarkan? </label>
															<?php if(count($kuisioner['data_f']['f40']['value']) > 0 ){foreach($kuisioner['data_f']['f40']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F41.Jika jawaban F38:“AKSES SITUS MUSIK/ AUDIO STREAMING”, aplikasi Musik Streaming apa yang Bpk/ Ibu/ Sdr gunakan? </label>
															<?php if(count($kuisioner['data_f']['f41']['value']) > 0 ){foreach($kuisioner['data_f']['f41']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F42.Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses musik streaming per-bulannya?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f42']['value']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F43.Jika jawaban F38:“AKSES SITUS MUSIK/ AUDIO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi music streaming tersebut? </label>
															<?php if(count($kuisioner['data_f']['f43']['value']) > 0 ){foreach($kuisioner['data_f']['f43']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F44.Jika jawaban F38:“AKSES SITUS MUSIK/ AUDIO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi musik streaming?</label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f44']; ?>" readOnly>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F45.Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, Genre atau jenis tayangan apa yang biasa Bpk/ Ibu/ Sdr tonton? </label>
															<?php if(count($kuisioner['data_f']['f45']['value']) > 0 ){foreach($kuisioner['data_f']['f45']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F46.Jika jawaban F38:“AKSES SITUS VIDEO STREAMING”, aplikasi/ layanan Video/ Movie Streaming apa yang Bpk/ Ibu/ Sdr gunakan? </label>
															<?php if(count($kuisioner['data_f']['f46']['value']) > 0 ){foreach($kuisioner['data_f']['f46']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F47.Jika jawaban F38:“ AKSES SITUS VIDEO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses video streaming per-bulannya? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f47']['value']; ?>" readOnly>
												</div>
												
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F48.Jika jawaban F38:“AKSES SITUS VIDEO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi Video Streaming tersebut? </label>
															<?php if(count($kuisioner['data_f']['f48']['value']) > 0 ){foreach($kuisioner['data_f']['f48']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F49.Jika jawaban F38:“ AKSES SITUS VIDEO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi/ layanan Video/ Movie Streaming? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f49']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F50.Jika jawaban F38:“AKSES SITUS GAMES”, situs game apa yang sering Bpk/ Ibu/ Sdr akses?</label>
															<?php if(count($kuisioner['data_f']['f50']['value']) > 0 ){foreach($kuisioner['data_f']['f50']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F51.Jika jawaban F38:“AKSES SITUS GAMES”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses situs games per-bulannya? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f51']['value']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F52.Jika jawaban F38:“AKSES SITUS GAMES”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr mengakses situs game tersebut? </label>
															<?php if(count($kuisioner['data_f']['f52']['value']) > 0 ){foreach($kuisioner['data_f']['f52']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F53.Jika jawaban F38:“ AKSES SITUS GAMES”, seberapa sering memanfaatkan situs game yang sering Bpk/ Ibu/ Sdr akses? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f53']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F54.Jika jawaban F38:“AKSES SITUS GAMES”, game online apa saja yang sering Bpk/ Ibu/ Sdr mainkan? </label>
															<?php if(count($kuisioner['data_f']['f54']['value']) > 0 ){foreach($kuisioner['data_f']['f54']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F55.Dimanakah dan kapankan biasanya Bpk/ Ibu/ Sdr belanja untuk kebutuhan rumah tangga? </label>
															<?php if(count($kuisioner['data_f']['f55']) > 0 ){foreach($kuisioner['data_f']['f55'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider['tempat_belanja']; ?>" readOnly>
																<?php foreach($provider['waktu'] as $waktu){ ?>
																	<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $waktu; ?>" readOnly>
																	
																<?php } ?>
																<br><br>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F56.Jika jawaban F55:“MINIMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja? </label>
															<?php if(count($kuisioner['data_f']['f56']['value']) > 0 ){foreach($kuisioner['data_f']['f56']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F57.Jika jawaban F55:“SUPERMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja? </label>
															<?php if(count($kuisioner['data_f']['f57']['value']) > 0 ){foreach($kuisioner['data_f']['f57']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F58.Jika jawaban F55:“HIPERMAKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja? </label>
															<?php if(count($kuisioner['data_f']['f58']['value']) > 0 ){foreach($kuisioner['data_f']['f58']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F59.Jika jawaban F55:”ONLINE SHOP”, Dimanakah biasanya Bpk/Ibu/Sdr belanja?</label>
															<?php if(count($kuisioner['data_f']['f59']['value']) > 0 ){foreach($kuisioner['data_f']['f59']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F60.apa anggaran rutin rumah tangga per bulan untuk belanja rumah tangga? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f60']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F61.(Showcard-M) Dalam 6 bulan terakhir, barang elektronik dan Home Appliance apa saja yang Bpk /Ibu /Sdr beli. Apa mereknya? </label> <br>
												  <?php foreach($kuisioner['data_f']['f61'] as $provider){ ?>
															<label for="exampleInputEmail1"><b><?php echo $provider['jenis']; ?></b></label>
																<br>
																<?php if(count($provider['merek'] > 0)){
																	
																	foreach($provider['anggota_keluarga'] as $jenis){ ?>
																		<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $jenis['merek']['LABEL']; ?>" readOnly> 
																		<?php foreach($jenis['anggota_keluarga'] as $anggota_keluarga){ ?>
																			<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $anggota_keluarga; ?>" readOnly>
																		<?php } ?>
																	<?php }
																	
																} ?> <br>
															<?php } ?>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F62.Dalam 2 bulan terakhir, apakah Bpk/ Ibu/ Sdr pernah belanja online? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f62']; ?>" readOnly>
												</div>
												
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F63.Jika jawaban F62:“TIDAK PERNAH SAMA SEKALI BELANJA ONLINE”, mengapa Bpk/ Ibu/ Sdr tidak berbelanja online?</label>
															<?php if(count($kuisioner['data_f']['f63']['value']) > 0 ){foreach($kuisioner['data_f']['f63']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F64.Jika Jawaban F62: “YA”, Produk/ Barang apa saja yang pernah Bpk/ Ibu/ Sdr beli melalui belanja online?</label>
															<?php if(count($kuisioner['data_f']['f64']['value']) > 0 ){foreach($kuisioner['data_f']['f64']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F65.Jika Jawaban F62: “YA”, Dimana Bpk/ Ibu/ Sdr sering belanja online?</label>
															<?php if(count($kuisioner['data_f']['f65']['value']) > 0 ){foreach($kuisioner['data_f']['f65']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F66.Jika Jawaban F62: “YA”, Dalam 2 bulan terakhir berapa kali Bpk/ Ibu/ Sdr belanja online? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f66']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F67.Jika jawaban F62:“YA”, jasa ekspedisi apa yang sering Bpk/ Ibu/ Sdr gunakan saat berbelanja online?</label>
															<?php if(count($kuisioner['data_f']['f67']['value']) > 0 ){foreach($kuisioner['data_f']['f67']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F68.Jika jawaban F62:“YA”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr dalam berbelanja online?</label>
															<?php if(count($kuisioner['data_f']['f68']['value']) > 0 ){foreach($kuisioner['data_f']['f68']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F69.Jika Jawaban F62: “YA”, jenis pembayaran apa yang biasa Bpk/ Ibu/ Sdr gunakan saat belanja online?</label>
															<?php if(count($kuisioner['data_f']['f69']['value']) > 0 ){foreach($kuisioner['data_f']['f69']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F70.Jika Jawaban F69: “e-Wallet”,  e-Wallet apa yang saat ini Bpk/ Ibu/ Sdr gunakan saat belanja online?</label>
															<?php if(count($kuisioner['data_f']['f70']['value']) > 0 ){foreach($kuisioner['data_f']['f70']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F71.Dalam kurun waktu satu tahun terakhir ini, Apakah Bpk/ Ibu/ Sdr pernah melakukan traveling (bepergian untuk tujuan berlibur / wisata)?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f71']; ?>" readOnly>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F72.Jika Jawaban F71: “Ya”, Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan traveling (bepergian untuk tujuan berlibur / wisata)? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f72']; ?>" readOnly>
												</div>
												
													<div class="form-group" >
												  <label for="exampleInputEmail1">F73.Jika Jawaban F71: “Ya”, Apakah Bpk/ Ibu/ Sdr sebelumnya melakukan perencanaan saat melakukan traveling? </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_f']['f73']; ?>" readOnly>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">F74.Jika Jawaban F71: “Ya” , Jenis wisata apa yang sering Bpk/ Ibu/ Sdr kunjungi? </label>
															<?php if(count($kuisioner['data_f']['f74']['value']) > 0 ){foreach($kuisioner['data_f']['f74']['value'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												


											<br><br> 

											</div>
										</div>
										</div>
						
										<div class="tab-pane fade" id="product_ownership_h" role="tabpanel" aria-labelledby="v-pills-home-tab">
										  <div class="media" >
											<div class="media-body" >
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G1-G2.Barang-barang tahan lama berikut ini, mana yang Bpk/ Ibu/ Sdr miliki? </label> <br>
												  <?php foreach($kuisioner['data_g']['dataG1A'] as $provider){ ?>
															<label for="exampleInputEmail1"><b><?php echo $provider['jenis']; ?></b></label>
																<br>
																<?php if(count($provider['kendaraan'] > 0)){
																	
																	foreach($provider['kendaraan'] as $jenis){ ?>
																		<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $jenis['merek']['LABEL']; ?> <?php echo $jenis['tahun']; ?>" readOnly> 
																		<?php foreach($jenis['anggota_keluarga'] as $anggota_keluarga){ ?>
																			<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $anggota_keluarga; ?>" readOnly>
																		<?php } ?>
																	<?php }
																	
																} ?> <br>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G3.Produk perbankan atau keuangan (Financial Literacy) berikut ini mana yang Bpk/ Ibu/ Sdr miliki atau manfaatkan? </label>
												  <?php foreach($kuisioner['data_g']['dataG3'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G4.Layanan perbankan apa yang Bpk/ Ibu/ Sdr miliki atau manfaatkan? </label>
												  <?php foreach($kuisioner['data_g']['dataG4'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G5.Bpk /Ibu /Sdr tercatat sebagai nasabah bank apa saja?</label>
												  <?php foreach($kuisioner['data_g']['dataG5'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G6.Jika Jawaban G3: “ASURANSI”, asuransi apa saja yang Bpk/ Ibu/ Sdr miliki atau manfaatkan?</label>
												  <?php if(count($kuisioner['data_g']['dataG6']) > 0 ){foreach($kuisioner['data_g']['dataG6'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G7.ka Jawaban G3: “ASURANSI”, Bpk /Ibu /Sdr tercatat sebagai nasabah asuransi apa saja?</label>
												  <?php if(count($kuisioner['data_g']['dataG7']) > 0 ){foreach($kuisioner['data_g']['dataG7'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G8.Jenis alat pembayaran Non Tunai apa saja yang masih Bpk/ Ibu/ Sdr gunakan hingga saat ini? </label>
												  <?php foreach($kuisioner['data_g']['dataG8'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G9.Jika Jawaban G8: “E-WALLET”, Sebutkan e-Wallet yang MASIH AKTIF Bpk/ Ibu/ Sdr gunakan hingga saat ini?</label>
												  <?php if(count($kuisioner['data_g']['dataG9']) > 0 ){foreach($kuisioner['data_g']['dataG9'] as $provider){ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="<?php echo $provider; ?>" readOnly>
															<?php }}else{ ?>
																<input type="text" class="form-control" id="email" placeholder="" value="" readOnly>
																
															<?php } ?>
												</div>
												
												<div class="form-group" >
												  <label for="exampleInputEmail1">G10.Dalam melakukan pembayaran Non Tunai, Bpk/ Ibu/ Sdr lebih sering memanfaatkan pembayaran dengan debit, kartu kredit atau e-wallet?  </label>
												  <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $kuisioner['data_g']['dataG10']; ?>" readOnly>
												</div>
												
												
												
												

											</div>
										  </div>
										</div>

										<div class="tab-pane fade" id="qc_h" role="tabpanel" aria-labelledby="v-pills-home-tab">
										  <div class="media" >
											<div class="media-body" >
												<div class="row">

												<div class='col-md-12' style="border-bottom:1px solid #CED4DA !important;">
													<h3>Summary Report Hasil Dokumen</h3>
													<h4>&nbsp</h4>
												</div>

												<div class='col-md-6'>
													<div class="form-check mx-sm-2">
													  <label class="form-check-label">
														<input type="checkbox" name="info_vali" id="info_vali" value="info_true" class="form-check-input formxx" >
														IDENTITAS RESPONDEN
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="info_note" name="info_note" placeholder="Keterangan" ></textarea>
													  </div>
												</div>

												<div class='col-md-6'>
												</div>											

												<div class='col-md-6'>
													<div class="form-check mx-sm-2">
													  <label class="form-check-label">
														<input type="checkbox" name="demografi_vali" id="demografi_vali" value="info_true" class="form-check-input formxx" >
														R. DEMOGRAFI RESPONDEN
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="demografi_note" name="demografi_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="profile_rt_vali" value="info_true" class="form-check-input formxx" >
														A. PROFIL RUMAH TANGGA
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="profile_rt_note" name="profile_rt_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="internet_data_vali" value="info_true" class="form-check-input formxx" >
														B. INTERNET DAN DATA
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="internet_data_note" name="internet_data_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
														<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="menonton_tv_vali" value="info_true" class="form-check-input formxx" >
														C. MENONTON TELEVISI
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="menonton_tv_note" name="menonton_tv_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
														<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="program_tv_vali" value="info_true" class="form-check-input formxx" >
														D. PROGRAM ACARA TELEVISI
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="program_tv_note" name="program_tv_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="kesan_pemirsa_vali" value="info_true" class="form-check-input formxx" >
														E. KESAN PEMIRSA
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="kesan_pemirsa_note" name="kesan_pemirsa_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="kegemaran_prilaku_vali" value="info_true" class="form-check-input formxx" >
														F. KEGEMARAN & PERILAKU
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="kegemaran_prilaku_note" name="kegemaran_prilaku_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>

												<div class='col-md-6'>
												</div>		

												<div class='col-md-6'>
													<div class="form-check mx-sm-2" >
													  <label class="form-check-label">
														<input type="checkbox" name="product_ownership_vali" value="info_true" class="form-check-input formxx" >
														G. PRODUCT OWNERSHIP
													  </label>
													</div>
													 <div class="form-group">
													  <label for="exampleInputEmail1"></label>
													  <textarea  class="form-control" id="product_ownership_note" name="product_ownership_note" placeholder="Keterangan" ></textarea>
													</div>
												</div>
										
												<div class='col-md-6'>
												</div>	
												<div class="col-md-12">
													<label for="exampleInputUsername1">Hasil QC</label>
												</div>
												<div class="col-md-3">
													<div class="form-check" >
														<label class="form-check-label">
														<input type="radio" class="form-check-input " name="validasi" id="r1_L" value="1">
														OK
														</label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input " name="validasi" id="r1_P" value="0" >
														Not OK
														</label>
													</div>
												</div>
											

												<div class='col-md-12'>
												</div>	

												<div class='col-md-12' style="margin-top:40px">
													 <button class="btn btn-sm btn-info " type="button" id="save_qc" onClick="save_qc()" >Simpan</button>
													 <button class="btn btn-sm btn-info " type="button" id="back_qc" onClick="back_qc()" >Kembali</button>
												</div>

											</div>
										  </div>
										</div>

									</div>
								</div>
							</div>
							
				</div>
              </div>
            </div>							


			
			<div class="col-md-12" style="display: none;" id="don" >
						<div class="row" >
							<!--<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Response</label></h4>
								<label for="exampleInputEmail1" style="font-size:11px;">Activity Operator</label>
							</div>-->
							
								<div class="col-md-2">
									 
								</diV>
								
								<div class="col-md-1">
									 &nbsp
								</diV>
								
								<div class="col-md-10" id="list_user2" style="text-align: center; vertical-align: middle;height:500px;line-height: 90px;">
								<br>
									<img width="40%" style="border-radius:20%" src="<?php echo base_url().'assets/survey/technical-support1.png'; ?>" alt="profile"/>
									<br>
									<br>
									<h4><label for="exampleInputEmail1" style="color:#D33341"><strong>Congratulations!</strong></label></h4>
									
									<h4><label for="exampleInputEmail1">Proses survey telah selesai, data sudah tersimpan </label></h4>
							<button class="btn btn btn-danger" type="button" onClick="back_user()">Kembali ke survey</button>
								</div>
								
								<div class="col-md-1">
									 &nbsp
								</diV>
						</div>
						
						
						
					</div>
			
          </div>
		  
		  <div class="row" id="survey_page_3">
            
		   </div>
		  
		    <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
				<!-- <button type="button" class="btn btn-success btn-md" onClick="before_survey(0)">Sebelumnya</button>
                  <button type="button" class="btn btn-success btn-md" id="btn_next" onClick="next_survey(1)">Selanjutnya</button> -->
                 
                </div>
              </div>
            
            </div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">

				  <div class="modal-body">
				  
				  <h4 id="msg_confirm">Apakah Anda Yakin Bahwa Data Telah Valid ?</h4><br>
					<input type="hidden" class="form-control" id="id_outbound_valid" placeholder="">
					<input type="hidden" class="form-control" id="status_valid" placeholder="">
					
					<textarea class="form-control" id="note_validasi" placeholder="Keterangan"></textarea>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" onClick="save_qc()">Ya</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item2" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya2" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name2" placeholder="">
					<input type="hidden" class="form-control" id="field_name3" placeholder="">
					<input type="hidden" class="form-control" id="field_name4" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item2">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item3" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya3" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name33" placeholder="">
					<input type="hidden" class="form-control" id="field_name34" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item3">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>
			
        </div>
        <!-- content-wrapper ends -->
		
		<script async >
		
		$( document ).ready(function() {
			
		});
		
		
		</script>
		
		<script>
		
			
			
			function back_user(){
					window.location.href = "<?php echo base_url() . 'survey'; ?>";
				
			}
			
	
			 
			  function tabs_1(){
				  
				$("#profile_rt_tab").removeClass("active");
				$("#profile_rt_h").removeClass("show active");
				 
				$("#identitas_resp_tab").addClass("active");
				$("#identitas_resp_h").addClass("show active");
				
				$("#internet_data_tab").removeClass("active");
				$("#internet_data_h").removeClass("show active");
				
				$("#menonton_tv_tab").removeClass("active");
				$("#menonton_tv_h").removeClass("show active");

				$("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");
				
				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				$("#demografi_respondent_tab").removeClass("active");
				$("#demografi_respondent_h").removeClass("show active");
				 $("html, body").animate({scrollTop: 0}, 400);
			 }
			 
			 function tabs_2(){
				 
				 $("#profile_rt_tab").removeClass("active");
				$("#profile_rt_h").removeClass("show active");
				 
				$("#identitas_resp_tab").removeClass("active");
				$("#identitas_resp_h").removeClass("show active");
				
				$("#internet_data_tab").removeClass("active");
				$("#internet_data_h").removeClass("show active");
				
				$("#menonton_tv_tab").removeClass("active");
				$("#menonton_tv_h").removeClass("show active");

				$("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");
				
				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				$("#demografi_respondent_tab").addClass("active");
				$("#demografi_respondent_h").addClass("show active");
				$("html, body").animate({scrollTop: 0}, 400);
				 
			 } 
			 
			 function tabs_3(){
				 
				$("#demografi_respondent_tab").removeClass("active");
				$("#demografi_respondent_h").removeClass("show active");
				 
				$("#identitas_resp_tab").removeClass("active");
				$("#identitas_resp_h").removeClass("show active");
				
				$("#internet_data_tab").removeClass("active");
				$("#internet_data_h").removeClass("show active");
				
				$("#menonton_tv_tab").removeClass("active");
				$("#menonton_tv_h").removeClass("show active");

				$("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");
				
				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				$("#profile_rt_tab").addClass("active");
				$("#profile_rt_h").addClass("show active");
				$("html, body").animate({scrollTop: 0}, 400);
				 
			 }
			 
			 function tabs_4(){
				 
				$("#demografi_respondent_tab").removeClass("active");
				$("#demografi_respondent_h").removeClass("show active");
				 
				$("#identitas_resp_tab").removeClass("active");
				$("#identitas_resp_h").removeClass("show active");
				
				$("#profile_rt_tab").removeClass("active");
				$("#profile_rt_h").removeClass("show active");
				
				$("#menonton_tv_tab").removeClass("active");
				$("#menonton_tv_h").removeClass("show active");

				$("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");
			
				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				$("#internet_data_tab").addClass("active");
				$("#internet_data_h").addClass("show active");
				$("html, body").animate({scrollTop: 0}, 400);
				 //style="border-bottom:1px solid #CED4DA !important;"
			 }			 
			 
			 function tabs_5(){
				
				$("#demografi_respondent_tab").removeClass("active");
				$("#demografi_respondent_h").removeClass("show active");
				 
				$("#identitas_resp_tab").removeClass("active");
				$("#identitas_resp_h").removeClass("show active");
				
				$("#profile_rt_tab").removeClass("active");
				$("#profile_rt_h").removeClass("show active");
				
				$("#internet_data_tab").removeClass("active");
				$("#internet_data_h").removeClass("show active");
		
				$("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				$("#menonton_tv_tab").addClass("active");
				$("#menonton_tv_h").addClass("show active");
				$("html, body").animate({scrollTop: 0}, 400);
				 //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			 }

			 function tabs_6(){
				 
				 $("#demografi_respondent_tab").removeClass("active");
				 $("#demografi_respondent_h").removeClass("show active");
				  
				 $("#identitas_resp_tab").removeClass("active");
				 $("#identitas_resp_h").removeClass("show active");
				 
				 $("#profile_rt_tab").removeClass("active");
				 $("#profile_rt_h").removeClass("show active");
				 
				 $("#internet_data_tab").removeClass("active");
				 $("#internet_data_h").removeClass("show active");
				
				 $("#menonton_tv_tab").removeClass("active");
				 $("#menonton_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#program_tv_tab").addClass("active");
				 $("#program_tv_h").addClass("show active");
				 $("html, body").animate({scrollTop: 0}, 400);
				  //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			  }

			  function tabs_7(){
				 
				 $("#demografi_respondent_tab").removeClass("active");
				 $("#demografi_respondent_h").removeClass("show active");
				  
				 $("#identitas_resp_tab").removeClass("active");
				 $("#identitas_resp_h").removeClass("show active");
				 
				 $("#profile_rt_tab").removeClass("active");
				 $("#profile_rt_h").removeClass("show active");
				 
				 $("#internet_data_tab").removeClass("active");
				 $("#internet_data_h").removeClass("show active");
				
				 $("#menonton_tv_tab").removeClass("active");
				 $("#menonton_tv_h").removeClass("show active");

				 $("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").addClass("active");
				 $("#kesan_pemirsa_h").addClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("html, body").animate({scrollTop: 0}, 400);
				  //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			  }

			  function tabs_8(){
				 
				 $("#demografi_respondent_tab").removeClass("active");
				 $("#demografi_respondent_h").removeClass("show active");
				  
				 $("#identitas_resp_tab").removeClass("active");
				 $("#identitas_resp_h").removeClass("show active");
				 
				 $("#profile_rt_tab").removeClass("active");
				 $("#profile_rt_h").removeClass("show active");
				 
				 $("#internet_data_tab").removeClass("active");
				 $("#internet_data_h").removeClass("show active");
				
				 $("#menonton_tv_tab").removeClass("active");
				 $("#menonton_tv_h").removeClass("show active");

				 $("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").addClass("active");
				 $("#kegemaran_prilaku_h").addClass("show active");

				 $("html, body").animate({scrollTop: 0}, 400);
				  //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			  }

			  function tabs_9(){
				 
				 $("#demografi_respondent_tab").removeClass("active");
				 $("#demografi_respondent_h").removeClass("show active");
				  
				 $("#identitas_resp_tab").removeClass("active");
				 $("#identitas_resp_h").removeClass("show active");
				 
				 $("#profile_rt_tab").removeClass("active");
				 $("#profile_rt_h").removeClass("show active");
				 
				 $("#internet_data_tab").removeClass("active");
				 $("#internet_data_h").removeClass("show active");
				
				 $("#menonton_tv_tab").removeClass("active");
				 $("#menonton_tv_h").removeClass("show active");

				 $("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#qc_tab").removeClass("active");
				 $("#qc_h").removeClass("show active");

				 $("#product_ownership_tab").addClass("active");
				 $("#product_ownership_h").addClass("show active");

				 $("html, body").animate({scrollTop: 0}, 400);
				  //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			  }

			  function tabs_10(){
				 
				 $("#demografi_respondent_tab").removeClass("active");
				 $("#demografi_respondent_h").removeClass("show active");
				  
				 $("#identitas_resp_tab").removeClass("active");
				 $("#identitas_resp_h").removeClass("show active");
				 
				 $("#profile_rt_tab").removeClass("active");
				 $("#profile_rt_h").removeClass("show active");
				 
				 $("#internet_data_tab").removeClass("active");
				 $("#internet_data_h").removeClass("show active");
				
				 $("#menonton_tv_tab").removeClass("active");
				 $("#menonton_tv_h").removeClass("show active");

				 $("#program_tv_tab").removeClass("active");
				 $("#program_tv_h").removeClass("show active");

				 $("#kesan_pemirsa_tab").removeClass("active");
				 $("#kesan_pemirsa_h").removeClass("show active");

				 $("#kegemaran_prilaku_tab").removeClass("active");
				 $("#kegemaran_prilaku_h").removeClass("show active");

				 $("#product_ownership_tab").removeClass("active");
				 $("#product_ownership_h").removeClass("show active");

				 $("#qc_tab").addClass("active");
				 $("#qc_h").addClass("show active");

				 $("html, body").animate({scrollTop: 0}, 400);
				  //style="border-bottom:1px solid #CED4DA !important;pointer-events:none;"
			  }
			  
			  function back_qc(){
				  
				 // window.location.href = "<?php echo base_url() . 'qc_surveyor'; ?>";
				 var list_location = $("#list_location").val();
				var url = '<?php echo base_url(); ?>qc_surveyor'; 
				var id_outbound = '<?php echo $id_outbound; ?>';
				  
				 $("#laod").append(' <img id="loading" src="<?php echo base_url();?>assets/urate-frontend-master/assets/images/icon_loader.gif">');
				  var form = $("<form action='" + url + "' method='post'>" +
					"<input type='hidden' name='id_outbound' value='" + id_outbound + "' />" +
					"<input type='hidden' name='list_location_text' value='<?php echo $list_location; ?>' />" +
					"<input type='hidden' name='respond' value='<?php echo $respond; ?>' />" +
					"<input type='hidden' name='start_date' value='<?php echo $start_date; ?>' />" +
					"<input type='hidden' name='end_date' value='<?php echo $end_date; ?>' />" +
					"</form>");
				  $('body').append(form);
				  form.submit();
				  
			  }
			  
			  function validate(id_outbound,status){
				  
				  $('#id_outbound_valid').val(id_outbound);
				  $('#status_valid').val(status);
				  
				  if(status == 3){
					 $('#msg_confirm').html('Apakah Anda Yakin Bahwa Data <b> Valid </b> ?');
				  }else{
					 $('#msg_confirm').html('Apakah Anda Yakin Bahwa Data <b>  Tidak Valid </b> ?');
				  }
				  
				  $('#modal_new_item').modal('show');
				  
			  }
			  
			  function save_qc(){
				  
				  var valid = 0;
				  var valid_stat = 0;
				  	var formData = new FormData();
					var urls = "<?php echo base_url('qc_surveyor/insert_qc'); ?>";

					 formData.append('id_outbound_valid', $('#id_outbound_valid').val());
					 formData.append('status_valid', $('#status_valid').val());
					 formData.append('note_validasi', $('#note_validasi').val());

						$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
										swal({
											title: ' Validasi Selesai ',
											text: '',
											type: 'success',
											showCancelButton: false,
											confirmButtonText: 'Ya'
										}).then(function() {

											//window.location.hash = '#page_identiatas_responden';	 
											$("html, body").animate({scrollTop: 0}, 400);
										});
										
										var list_location = $("#list_location").val();
										var url = '<?php echo base_url(); ?>qc_surveyor'; 
										var id_outbound = '<?php echo $id_outbound; ?>';
										  
										 $("#laod").append(' <img id="loading" src="<?php echo base_url();?>assets/urate-frontend-master/assets/images/icon_loader.gif">');
										  var form = $("<form action='" + url + "' method='post'>" +
											"<input type='hidden' name='id_outbound' value='" + id_outbound + "' />" +
											"<input type='hidden' name='list_location_text' value='<?php echo $list_location; ?>' />" +
											"<input type='hidden' name='respond' value='<?php echo $respond; ?>' />" +
											"<input type='hidden' name='start_date' value='<?php echo $start_date; ?>' />" +
											"<input type='hidden' name='end_date' value='<?php echo $end_date; ?>' />" +
											"</form>");
										  $('body').append(form);
										  form.submit();
										
										// window.location.href = "<?php echo base_url() . 'qc_surveyor'; ?>";
									}
						});
				  
			  }

		</script>
 

