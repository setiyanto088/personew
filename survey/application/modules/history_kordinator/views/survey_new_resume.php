
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
                  <h3 class="font-weight-bold">CUSTOMER PROFILING SURVEY - 2021 </h3><p id="demo"></p>
				 <h6 id="info-na">(Jika ada yang tidak terisi maka kuesioner ini dianggap TIDAK SAH) (Tulis “NA” pada jawaban kosong)</h6>
                </div>
				<!--
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div> -->
             </div>
            </div>
          </div>
          <div class="row"> <!--
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">KRITERIA RESPONDEN : (Jika ada yang tidak terpenuhi, maka kuesioner ini dianggap TIDAK SAH)</p>
				   <ul>
                 <li> <h6 class="font-weight-normal mb-0"> Responden berlangganan INDIHOME 2 PLAY (Internet+USee TV) atau INDIHOME 3 PLAY (Telepon+Internet+USee TV);</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden setiap hari aktif mengakses/ menonton tayangan USee TV;</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden dan keluarga sering mengakses/ menonton 20 tayangan USee TV berikut (SHOWCARD);</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden berusia antara 17 tahun hingga 60 tahun.</h6></li>
					</ul>
                </div>
              </div>
            </div> -->
			
			 <div class="col-md-6 grid-margin stretch-card" class="survey_page_1">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">INFO</p>

				<form class="forms-sample">
				
				
                    <div class="form-group">
					<label for="exampleInputUsername1">ID Pelanggan</label>
						<div class="input-group">
							  
							 <input type="text" class="form-control" id="id_pelanggan" value="<?php echo $outbound[0]['cardno']; ?>" placeholder="ID Pelanggan">
							 <!-- <div class="input-group-append">
								<button class="btn btn-sm btn-primary" type="button" onClick="get_respondent()">Search</button>
								 </div>
								 
								 <select class="form-control js-example-basic-single w-100" id="id_pelanggan" onChange="get_respondent()">
								<option value='' selected disabled='disabled'>-- id_pelanggan --</option>
								<?php  foreach($data_cardno as $data_cardnos){
									
									echo "<option value='".$data_cardnos['CARDNO']."'>".$data_cardnos['CARDNO']." - ".$data_cardnos['NAMA']."</option>";
									
								} ?>
								  
								</select>-->
								
							 
						</div>
                    </div>
					 <input type="hidden" class="form-control" id="kota_survey" placeholder="Kota Survey">
					 <input type="hidden" class="form-control" id="telkom_regional" placeholder="Telkom Regional">

					 <div class="form-group">
                      <label for="exampleInputUsername1">Nama Responden</label>
                      <input type="text" class="form-control" id="nama_respondent" placeholder="Nama Responden">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Rumah</label>
                      <input type="text" class="form-control" id="alamat_rumah" placeholder="Alamat Rumah">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kelurahan</label>
                      <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Kecamatan</label>
                      <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">No. Telp</label>
                      <input type="text" class="form-control" id="no_tel" placeholder="No. Telp">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">No. Hp</label>
                      <input type="text" class="form-control" id="no_hp" placeholder="No. HP">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
					 
                 <!--   <div class="form-group">
                      <label for="exampleInputEmail1">Kota Survey</label>
                      <input type="text" class="form-control" id="kota_survey" placeholder="Kota Survey">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telkom Regional</label>
                      <input type="text" class="form-control" id="telkom_regional" placeholder="Telkom Regional">
                    </div> -->
                  </form>
					
                </div>
              </div>
            </div>
         
          <!--
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_identiatas_responden" style="display: none;" >
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">IDENTITAS RESPONDEN</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Responden</label>
                      <input type="text" class="form-control" id="nama_respondent" placeholder="Nama Responden">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Rumah</label>
                      <input type="text" class="form-control" id="alamat_rumah" placeholder="Alamat Rumah">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kelurahan</label>
                      <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Kecamatan</label>
                      <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">No. Telp</label>
                      <input type="text" class="form-control" id="no_tel" placeholder="No. Telp">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">No. Hp</label>
                      <input type="text" class="form-control" id="no_hp" placeholder="No. HP">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
			
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_demografi_responden" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DEMOGRAFI RESPONDEN</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">R1. Jenis Kelamin *</label>
					    <div class="row">
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r1" id="r1_L" value="L">
								  Laki-laki
								</label>
							  </div>
						  </div>
						   <div class="col-md-6">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r1" id="r1_P" value="P" >
								  Perempuan
								</label>
							  </div>
						   </div>
						</div>
					</div>
                    <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R2. Usia *</label>
					    <div class="row">
						 <div class="col-md-2">
							  <div class="form-group">
								<select class="form-control" id="r2lainnya" onChange="selectAge()">
								<option value=''selected disabled='disabled'>-- Usia --</option>
								<?php  for($in=17;$in<61;$in++){
									
									echo "<option value='".$in."'>".$in." Tahun</option>";
									
								} ?>
								  
								</select>
							  </div>
						  </div>
						  <div class="col-md-2">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r2_17-25" value="17-25">
								  17-25 Tahun
								</label>
							  </div>
						  </div>
						   <div class="col-md-2">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r2_26-39" value="26-39" >
								  26-39 Tahun
								</label>
							  </div>
						   </div>
						    <div class="col-md-2">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r2_40-55" value="40-55">
								  40-55 Tahun
								</label>
							  </div>
						  </div>
						   <div class="col-md-2">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r2_56-60" value="56-60" >
								  56-60 Tahun
								</label>
							  </div>
						   </div>
						</div>
					</div>
                     <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R3. Pendidikan Terakhir *</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_SD" value="SD">
								  SD
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_SMP" value="SMP" >
								  SMP
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_SMA" value="SMA">
								  SMA
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_D1" value="D1" >
								  D1
								</label>
							  </div>
						   </div>
						     <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_D3" value="D3" >
								  D3
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_D4_S1" value="D4_S1">
								  D4/S1
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_S2" value="S2" >
								  S2
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r3_S3" value="S3">
								  S3
								</label>
							  </div>
						  </div>
						 
						   
						</div>
					</div>
					<div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R4. Pekerjaan Utama *</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_Pelajar" value="Pelajar">
								  Pelajar/ Mahasiswa
								  
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_art" value="art">
								  Ibu Rumah Tangga
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_pensiunan" value="pensiunan" >
								  Pensiunan
								</label>
							  </div>
						   </div>
						      <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_bumn" value="bumn" >
								  BUMN atau BUMD
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_asn" value="asn" >
								  ASN (PNS)/ TNI/ POLRI
								  
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jabatanASN" placeholder="Jabatan ASN (PNS)/ TNI/ POLRI">
							</div>
						   </div>
						   
						  
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_swasta" value="swasta" >
								  Pegawai Swasta
								</label>
							  </div>
						   </div>
						     <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jabatanswasta" placeholder="Jabatan Swasta">
							</div>
						   </div>
						   
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_mandiri" value="mandiri">
								  Pekerja mandiri (tanpa karyawan)
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="bidangmandiri" placeholder="Bidang Usaha Mandiri">
							</div>
						   </div>
						
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r4_wiraswasta" value="wiraswasta">
								  Wiraswasta (memiliki karyawan)
								</label>
							  </div>
						  </div>
						     <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="bidangwiraswasta" placeholder="Bidang Usaha Wiraswasta">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>

		  
            
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_profile_rumah_tangga" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROFIL RUMAH TANGGA</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">A1. Bagaimana status pernikahan Bpk/ Ibu/ Sdr?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a1" id="a1_single" value="single">
								  Belum menikah
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a1" id="a1_married" value="married" >
								  Menikah
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a1" id="a1_mcm" value="mcm" >
								  Menikah – Cerai mati
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a1" id="a1_mch" value="mch" >
								  Menikah – Cerai Hidup
								</label>
							  </div>
						   </div>
						</div>
					</div>
                    <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A2. Sebagai apa posisi Bpk/ Ibu/ Sdr di keluarga ini?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_kk" value="kk">
								  Kepala Keluarga (KK)
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_ik" value="ik" >
								  Isteri dari Kepala Keluarga
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_ak" value="ak">
								  Anak dari Kepala Keluarga
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_oki" value="oki" >
								  Orang tua dari Kepala Keluarga/ Isteri KK
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_ski" value="ski" >
								  Saudara dari Kepala Keluarga/ Isteri KK
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a2" id="a2_fs_ll" value="fs_ll" >
								  Lainnya
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="posisiKelLain" placeholder="Posisi Keluarga ">
							</div>
						   </div>
						</div>
					</div>
                     <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A3. Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_1" value="count_1">
								  1
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_2" value="count_2">
								  2
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_3" value="count_3">
								  3
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_4" value="count_4">
								  4
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_5" value="count_5">
								  5
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a3" id="a3_count_6" value="count_5+">
								  >5
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jumlahKel5p" placeholder="Jumlah Keluarga">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					<div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A4. (Showcard-A) Siapa saja keluarga inti Bpk/ Ibu/ Sdr yang tinggal di rumah ini? Sebutkan jenis kelamin dan usianya!</label>
					    <div class="row">
						
						  <div class="col-md-12">
						  <table id="table_resp">
							  <thead>
								<tr>
								  <th scope="col">Anggota Keluarga</th>
								  <th scope="col">Jenis Kelamin</th>
								  <th scope="col">Usia</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_kk" value="family_kk" class="form-check-input tft" >Kepala keluarga KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input tft" name="a4_kk_gen" id="a4_kk_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input tft" name="a4_kk_gen" id="a4_kk_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text" class="tft" id="a4_kk_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_ik" value="family_ik" class="form-check-input" >Isteri dari  Kepala <br> Keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ik_gen" id="a4_ik_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ik_gen" id="a4_ik_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ik_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_ak1" value="family_ak1" class="form-check-input" >Anak pertama dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak1_gen" id="a4_ak1_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak1_gen" id="a4_ak1_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak1_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_ak2" value="family_ak2" class="form-check-input" >Anak kedua dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak2_gen" id="a4_ak2_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak2_gen" id="a4_ak2_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak2_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_ak3" value="family_ak3" class="form-check-input" >Anak ketiga dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak3_gen" id="a4_ak3_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak3_gen" id="a4_ak3_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak3_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_oki" value="family_oki" class="form-check-input" >Orang tua dari Kepala <br> keluarga/ Isteri KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_oki_gen" id="a4_oki_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_oki_gen" id="a4_oki_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_oki_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_check_family_ski" value="family_ski" class="form-check-input" >Saudara dari Kepala <br> keluarga/ isteri KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ski_gen" id="a4_ski_gen_L" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ski_gen" id="a4_ski_gen_P" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ski_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
							  </tbody>
							</table>
						</div>
					</div>
					</div>
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A5. Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah yang memiliki penghasilan?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_1_ff" value="count_1_ff">
								  1 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_2_ff" value="count_2_ff">
								  2 Orang
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_3_ff" value="count_3_ff">
								  3 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_4_ff" value="count_4_ff">
								  4 Orang
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_5_ff" value="count_5_ff">
								  5 Orang
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a5_count_5_ff+" value="count_5_ff+">
								  >5 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="a5p" placeholder="Jumlah Keluarga Berpenghasilan">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A6. Berapakah rata-rata PENGELUARAN RUTIN KELUARGA Bpk/ Ibu/ Sdr perbulannya untuk keperluan sehari-hari, tetapi tidak termasuk pengeluaran untuk rekreasi, pakaian, sepatu & pengeluaran non-rutin lain serta juga kredit-kredit seperti: mobil, rumah, elektronik, dll?</label>
					    <div class="row">
						    <div class="col-md-4">
							 <div class="form-group">
							  Pengeluaran per bulan: <input type="text" class="form-control" id="a6p" onkeyup="expense_family()" placeholder="Pengeluaran per bulan">
							</div>
						   </div>
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_2-" value="2-">
								  Dibawah Rp 2.0 Juta
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_2-3" value="2-3">
								  Rp 2.0 Juta – Rp 3.0 Juta
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_3-45" value="3-45">
								  Rp 3.1 Juta – Rp 4.5 Juta
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_45-6" value="45-6">
								  Rp 4.6 Juta – Rp 6.0 Juta
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_6-9" value="6-9">
								  Rp 6.1 Juta – Rp 9.0 Juta
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a6_9s" value="9s">
								  Diatas Rp 9.0 Juta
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A7. Bagaimana status kepemilikan rumah yang Bpk/ Ibu/ Sdr tempati saat ini?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_rs" value="rs">
								  Milik sendiri
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_rd" value="rd">
								  Rumah dinas
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_rs" value="rs">
								  Rumah saudara
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_sk" value="sk">
								  Sewa/ kontrak
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_rot" value="rot">
								  Rumah Orang tua
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a7_ho_ll" value="ho_ll">
								  Lainnya
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="a7p" placeholder="Tempat Tinggal Lainnya">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_internet_dan_data" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INTERNET DAN DATA</h4>

                  <form class="forms-sample">
                    <div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B1. Provider PAKET DATA INTERNET SELULER (Mobile Broadband) apa saja yang digunakan oleh Bpk/ Ibu/ Sdr?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_axis" value="axis" class="form-check-input" >
									Axis
								  </label>
								</div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_indosat" value="indosat" class="form-check-input" >
									Indosat
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_smartfren" value="smartfren" class="form-check-input" >
									SmartFren
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_telkomsel" value="telkomsel" class="form-check-input" >
									Telkomsel
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_three" value="three" class="form-check-input" >
									Three (3)
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_xl" value="xl" class="form-check-input" >
									XL
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" id="b1_lainnya" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
						  </div> 

						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="b1lainnya" placeholder="Provider Lainnya">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B2. Berapa pengeluaran Bpk/ Ibu/ Sdr untuk berlangganan PAKET DATA INTERNET SELULER (Mobile Broadband) per-bulannya?</label>
					    <div class="row">
						    <div class="col-md-4">
							 <div class="form-group">
							  Pengeluaran per bulan: <input type="text" class="form-control" id="b2lainnya" onkeyup="data_expense()"  placeholder="Pengeluaran per bulan">
							</div>
						   </div>
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_-5" value="-50">
								  Dibawah Rp 50 Ribu
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_50-100" value="50-100">
								  Rp 50 Ribu – Rp 100 Ribu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_100-150" value="100-150">
								  Rp 100 Ribu – Rp 150 Ribu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_150-200" value="150-200">
								  Rp 150 Ribu – Rp 200 Ribu
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_200-300" value="200-300">
								  Rp 200 Ribu – Rp 300 Ribu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b2" id="b2_300s" value=">300">
								  Diatas Rp 300 Ribu
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B3. Bagaimana frekuensi Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband) dalam sebulan?</label>
					    <div class="row">
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_very_high" value="data_very_high">
								  Setiap hari
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_high" value="data_high">
								  4-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_medhigh" value="data_medhigh">
								  2-3 hari dalam seminggu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_med" value="data_med">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_low" value="data_low">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b3_data_very_low" value="data_very_low">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B4. Kapan terakhir kali Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband)?</label>
					    <div class="row">
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b4_1" value="1">
								  Hari ini
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b4_1-3" value="1-3">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b4_4-6" value="4-6">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b4_7" value="7">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b4_7" value="7+">
								  Lebih dari seminggu yang lalu
								</label>
							  </div>
						  </div>
						    
						 </div>
						   </div>
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_menonton_televisi" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MENONTON TELEVISI  </h4>

                  <form class="forms-sample">
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C1. Seberapa sering Bpk/ Ibu/ Sdr menonton acara TV di rumah?</label>

						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_1-2mg" value="1-2mg">
								  1-2 kali seminggu
								</label>
							  </div>
							</div>
							 <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_3-6mg" value="3-6mg">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_1hari" value="1hari">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_2-3hari" value="2-3hari">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_3shari" value="3shari">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c1_1mg-" value="1mg-">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						 </div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C2. Berapa jam dalam sehari Bpk/ Ibu/ Sdr mononton acara TV di rumah?</label>
					    <div class="row">
							
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c2lainnya" onkeyup="tv_duration()" placeholder="Durasi Menonton Tv">
							</div>
						   </div>
							
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_1-" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_1-2" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_2-4" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_4-6" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_6-8" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c2_8s" value="8s">
								  > 8 Jam
								</label>
							  </div>
						  </div>
						</div>
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C3-1. Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKDAY?</label>
					    <div class="row">
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c3-1" id="c3-1_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C3-2. Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKEND?</label>
					    <div class="row">
						    
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c3-2" id="c3-2_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C4. Pada waktu berikut ini, siapa saja anggota keluarga yang mononton acara TV di rumah?</label>
					    <div class="row">
						<div class="col-md-2">
						<h5>Pagi Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						   <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-1" id="c4-1_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Siang Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						<?php foreach($array_family as $array_familys){ ?>
						     <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-2" id="c4-2_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>						   
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Sore Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						    
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-3" id="c4-3_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Malam Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						  
						  <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-4" id="c4-4_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Dini Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						  
						  <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-5" id="c4-5_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C5. Siapa saja anggota keluarga yang mononton acara TV di rumah dengan Genre berikut ini?</label>
					  <br>
					  <br>
					  <?php $c5int = 1; foreach($array_genre as $array_genres){ ?>
					  
					    <div class="row">
						<div class="col-md-2">
						<h5><?php echo $array_genres; ?></h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						   <?php foreach($array_family as $array_familys){ ?>
						   <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" id="c5-<?php echo $c5int; ?>_<?php echo $array_familys[1]; ?>" name="c5-<?php echo $c5int; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						<br>
					  <?php $c5int++; } ?>
						
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C6. Dalam 1 bulan terakhir, apakah Bpk/ Ibu/ Sdr sering atau pernah menonton siaran TV dengan menggunakan antena luar?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c6" id="c6_Tidak" value="Tidak">
								  Tidak
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c6" id="c6_Ya" value="Ya">
								  Ya
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c7-pg" style="display:none">
                      <label for="exampleInputUsername1">C7. Jika jawaban C6 : Ya, siaran TV jenis apa yang lebih sering Bpk/ Ibu/ Sdr tonton?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c7" id="c7_digital" value="digital">
								  TV Digital
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c7" id="c7_analog" value="analog">
								  TV Analog
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c81-pg" style="display:none">
                      <label for="exampleInputUsername1">C8. Jika jawaban C7 : TV Digital, maka: (C8-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Digital?</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c81lainnya" placeholder="Lama Menonton" onkeyup="tv_duration_digital()" />
							</div>
						   </div >
						   
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_1-" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_1-2" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_2-4" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_4-6" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_6-8" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c8_8s" value="8s">
								  > 8 Jam
								</label>
							  </div>
						  </div>	
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c82-pg" style="display:none">
                      <label for="exampleInputUsername1">C8. Jika jawaban C7 : (C8-2) Sebutkan 5 Channel TV Digital apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_s" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Channel</th>
									  <th scope="col">Urutan</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $uc = 1; foreach($array_channel as $array_channels){ ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="c82-<?php echo $uc; ?>" id="c82-<?php echo $uc; ?>_<?php echo str_replace(' ','_',$array_channels); ?>" value="<?php echo $array_channels; ?>" class="form-check-input" >
											<?php echo $array_channels; ?>
										  </label>
										</div>
									  </td>
									  <td><input type="text" class="form-control" id="c82u-<?php echo $uc; ?>" placeholder="Urutan" size=5> </td>
									</tr>
								  <?php $uc++; } ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" class="form-check-input" >
											Lainnya
										  </label>
										</div>
									  </td>
									  <td>
									   <div class="row">
									    <div class="col-md-6">
											<input type="text" class="form-control" id="c82channelLainnya" placeholder="Channel" > 
										</div>
										
									   <div class="col-md-6">
											<input type="text" class="form-control" id="c82urutanLainnya" placeholder="Urutan" size=5>
									  </div>
									  </div>
									  </td>
									</tr>
								  </tbody>
								</table>
							</div>
						   </div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c9-pg" style="display:none">
                      <label for="exampleInputUsername1">C9. Jika jawaban C7 : TV Digital, apakah Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan UseeTV?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c9" id="c9_Tidak" value="Tidak">
								  Tidak
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c9" id="c9_Ya" value="Ya">
								  Ya
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c10-pg" style="display:none">
                      <label for="exampleInputUsername1">C10. Jika jawaban C9: Ya, apa alasan Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan UseeTV?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" id="c10_praktis" value="praktis" class="form-check-input" >
									Lebih praktis
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" id="c10_Kualitas" value="Kualitas" class="form-check-input" >
									Kualitas suara dan gambar lebih jernih
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" id="c10_Tidak_ada" value="Tidak_ada" class="form-check-input" >
									Tidak ada alasan khusus
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" id="c10_other" value="other" class="form-check-input" >
									Lainnya
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c10_alasan" placeholder="Alasan Lainnya">
							</div>
						   </div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c111-pg" style="display:none">
                      <label for="exampleInputUsername1">C11. Jika jawaban C7 : TV Analog, maka: (C11-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Analog?</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c111lainnya" placeholder="Lama Menonton" onkeyup="tv_duration_analog()"> 
							</div>
						   </div>

						
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_1-" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_1-2" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_2-4" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_4-6" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_6-8" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c11_8s" value="8s">
								  > 8 Jam
								</label>
							  </div>
						  </div>		

						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c112-pg" style="display:none">
                      <label for="exampleInputUsername1">C11. Jika jawaban C7 : TV Analog,(C11-2) Sebutkan 5 Channel TV Analog apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_s" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Channel</th>
									  <th scope="col">Urutan</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $uc = 1;foreach($array_channel as $array_channels){ ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="c112-<?php echo $uc; ?>" value="<?php echo $array_channels; ?>" class="form-check-input" >
											<?php echo $array_channels; ?>
										  </label>
										</div>
									  </td>
									  <td><input type="text" class="form-control" id="c112u-<?php echo $uc; ?>" placeholder="Urutan" size=5> </td>
									</tr>
								  <?php $uc++; } ?>
								  <tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" class="form-check-input" >
											Lainnya
										  </label>
										</div>
									  </td>
									  <td>
									   <div class="row">
									    <div class="col-md-6">
											<input type="text" class="form-control" id="channelLainnyaanalog" placeholder="Channel" > 
										</div>
										
									   <div class="col-md-6">
											<input type="text" class="form-control" id="urutanLainnyaanalog" placeholder="Urutan" size=5>
									  </div>
									  </div>
									  </td>
									</tr>
								  </tbody>
								</table>
							</div>
						   </div>
						</div>
						
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C12. Dari 20 program acara TV yang sering Bpk/ Ibu/ Sdr dan keluarga tonton di 2 bulan terakhir berikut ini, sebutkan siapa saja (sesuai jawaban A4) yang menonton?</label>
					  <br>
					  <br>
					  <?php for($ii=1;$ii<21;$ii++){ ?>
					  
					    <div class="row">
						<div class="col-md-4">
						<h5 id="program_name_<?php echo $ii; ?>"></h5>
						<input type="hidden" id="c12_channel<?php echo $ii; ?>" value="" />
						</div>
						<div class="col-md-8">
						    <div class="row">
						   
 
						   <?php foreach($array_family as $array_familys){ ?>
							<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c12_fam<?php echo $ii; ?>" id="c12_fam<?php echo $ii; ?>_<?php echo $array_familys[1]; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>						   
						    
						 </div>
						</div>
						</div>
						<br>
					  <?php } ?>
						
					</div>
					
				
					
                  </form>
                </div>
              </div>
            </div>
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_program_acara_televisi" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROGRAM ACARA TELEVISI</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">D1. Seberapa seringkah (pilih skala 1 Untuk Paling Jarang - 10 Untuk Sering) Bpk/ Ibu/ Sdr  menonton program acara TV berikut? </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Program</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $iii = 1;for($iii=1;$iii <21;$iii++){ ?>
									<tr>

									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="progra_skala_<?php echo $iii; ?>">
										  Program <?php echo $iii; ?>
										  <input type="hidden" id="d1_program_skala<?php echo $ii; ?>" value="" />
										  </label>
											<select class="form-control" id="d1_skala_prog_<?php echo $iii; ?>">
											<option value=''selected>-- Skala --</option>
											<?php  for($in=1;$in<11;$in++){
												
												echo "<option value='".$in."'>".$in." </option>";
												
											} ?>
											  
											</select>
										  </div>
									 
									  </td>
									</tr>
								  <?php } ?>
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1">D2. Hal apa yang menjadi perhatian utama Bpk/ Ibu/ Sdr dalam menilai kualitas program acara TV?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_1" value="1">
								  Bisa menambah pengetahuan
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_2" value="2" >
								  Bersifat pengawasan atau memberi peringatan
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_3" value="3" >
								  Membangkitkan empati sosial
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_4" value="4" >
								  Meningkatkan daya kritis
								</label>
							  </div>
						   </div>
						   
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_5" value="5">
								  Memberi model perilaku yang baik
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_6" value="6" >
								  Menghibur
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d2_7" value="7" >
								  Lainnya, sebutkan:
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							   <div class="form-group">
									<input type="text" class="form-control" id="d2lainnya" placeholder="Nilai Kualitas">
								</div>
						   </div>
						   
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>D3. Menurut Bpk/ Ibu/ Sdr, adakah program acara TV baru yang perlu ditambahkan? Jika ada, program seperti apa yang perlu ditambahkan?</b> </label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d3" id="d3_Tidak" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d3" id="d3_Ya" value="Ya" >
								  Ada:
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							   <div class="form-group">
									<input type="text" class="form-control" id="d3lainnya" placeholder="program seperti">
								</div>
						   </div>
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_kesan_pemirsa" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KESAN PEMIRSA</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">E1. Channel TV yang SERING DITONTON DALAM 2 MINGGU TERAKHIR apa saja? </label>
					    <div class="row">
						  
						  <?php $c5int = 1; foreach($array_channel_h as $array_channel_hs){ ?>
						  
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="e1" id="e1_<?php echo str_replace(' ','_',$array_channel_hs); ?>" value="<?php echo $array_channel_hs; ?>" class="form-check-input" >
									<?php echo $array_channel_hs; ?>
								  </label>
								</div>
							</div>
						  
						  <?php $c5int++; } ?>
							
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="e1_other" value="other" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="e1_other_input" placeholder="Channel Lainnya">
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1">E2. Menurut Bpk/ Ibu/ Sdr dari channel TV yang sering ditonton, kategori / genre / jenis tayangan mana yang sesuai dengan channel TV tersebut?</label>
					   
						
						 <?php $ii=1; foreach($array_channel_h as $array_channel_hs){ ?>
						
						<br><br>
						 <div class="row">
						 <div class="col-md-3">
							 <?php echo $array_channel_hs; ?>
						 </div>
						 <div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_movies" value="movies" class="form-check-input" >
										Film (Movies)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_musik" value="musik" class="form-check-input" >
										Musik
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_kids" value="kids" class="form-check-input" >
										Kids (Kartun/ program anak)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_religi" value="religi" class="form-check-input" >
										Religi
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_lifestyle" value="lifestyle" class="form-check-input" >
										Lifestyle/ Fashion/ Selebritis
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_sport" value="sport" class="form-check-input" >
										Olah Raga (Sport)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_technology" value="technology" class="form-check-input" >
										Pengetahuan & Teknologi
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_news" value="news" class="form-check-input" >
										Berita (News)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox"  name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_drama_series" value="drama_series" class="form-check-input" >
										Drama Series / Sinetron
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" id="e2-<?php echo $ii; ?>_ftv" value="ftv" class="form-check-input" >
										FTV / Sinetron Pendek
									  </label>
									</div>
								</div>
							</div>
						 </div>
						 </div>
						 <?php $ii++; } ?>
						 
						
						
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_kegemaran_dan_perilaku" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KEGEMARAN & PERILAKU</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1"><b>F1. Apakah Bpk/ Ibu/ Sdr suka nonton film di BIOSKOP? </b> </label>
					    <div class="row">

							
							<div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f1" id="f1_Tidak" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f1" id="f1_Ya" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>

						</div>
					</div>
					
					<div class="form-group" id="f2-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F2. Jika jawaban F1:“YA”, Seberapa sering Bpk/ Ibu/ Sdr atau keluarga menonton BIOSKOP?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f2_0" value="0">
								  1 kali sebulan
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f2_1" value="1">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f2_2" value="2">
								  Lebih dari 2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f2_3" value="3">
								  2-3 kali sebulan
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f2_4" value="4">
								  Seminggu 2 kali
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f3-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F3. Jika jawaban F1:“YA”,  Dimana Bpk/ Ibu/ Sdr biasanya nonton film dibioskop?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_studio21" value="studio21" class="form-check-input" >
									Studio 21
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_cinema_xx1" value="cinema_xx1" class="form-check-input" >
									Cinema XXI
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_cgv_blitz" value="cgv_blitz" class="form-check-input" >
									CGV*Blitz
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_cinemaxx" value="cinemaxx" class="form-check-input" >
									Cinemaxx
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_platinum" value="platinum" class="form-check-input" >
									Platinum Cineplex
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" id="f3_lainnya" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f3lain" placeholder="Bioskop Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					
					<div class="form-group" id="f4-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F4. Jika jawaban F1:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr menonton film dibioskop?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_0" value="0">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_1" value="1">
								  2-3 Minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_2" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_3" value="3">
								  2 - 6 Bulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_4" value="4">
								  1 Tahun yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f4_5" value="5">
								  Lebih dari Satu Tahun yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F5. Dimana biasanya Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_tamankota" value="tamankota" class="form-check-input" >
									Taman Kota
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_perpustakaan" value="perpustakaan" class="form-check-input" >
									Perpustakaan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_gym" value="gym" class="form-check-input" >
									Tempat olah raga / Klub kebugaran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_kafe" value="kafe" class="form-check-input" >
									Kafe / Resto
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_sekolah" value="sekolah" class="form-check-input" >
									Sekolah / Kampus
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" id="f5_lainnya" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f5lain" placeholder="Hangout Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F6. Kapan terakhir kali Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_0" value="0">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_1" value="1">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_2" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_3" value="3">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_4" value="4">
								  2 – 3 minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f6_5" value="5">
								  Lebih dari sebulan yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F7. Apakah Bpk/ Ibu/ Sdr ikut dalam sebuah Klub Olahraga yang rutin mengikutinya? Jika ”Ya”, sebutkan nama klub-nya! </b> </label>
					    <div class="row">

							
							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f7" id="f7_Tidak" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f7" id="f7_Ya" value="Ya">
								  Ya,sebut nama klub 
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-group">
								<input type="text" class="form-control" id="f7lain" placeholder="Nama Klub">
								</div>
						  </div>

						</div>
					</div>
					
					<div class="form-group" id="f8-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F8. Jika jawaban F7:“YA”,  Sebutkan jenis olahraganya? </b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Futsal" value="Futsal">
								  Futsal
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Tennis" value="Tennis">
								  Tennis
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Badminton" value="Badminton">
								  Bulu Tangkis
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Running" value="Running">
								  Running
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Volly" value="Volly">
								  Volly
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Sepeda" value="Sepeda">
								  Sepeda
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f8_Lainnya" value="Lainnya">
								  Lainnya
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f8lain" placeholder="Olahraga Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					<div class="form-group" id="f9-pg" style="display:none">
	                     <label for="exampleInputUsername1"><b>F9. Jika jawaban F7:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan aktivitas bersama klub olahraga yang diikuti?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_0" value="0">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_1" value="1">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_2" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_3" value="3">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_4" value="4">
								  2 – 3 minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="F9_5" value="5">
								  Lebih dari sebulan yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F10. (F10-1) Saluran media yang Bpk /Ibu /Sdr gunakan (menonton, mendengar, membaca) hingga sebulan terakhir, apa saja? <br> 
					  (F10-2) Sebutkan beragam media yang Bpk / Ibu/ Sdr konsumsi dan kapan terakhir kali Bpk / Ibu/ Sdr mengonsumsi?</b> </label>
					   <div class="row">
						   <div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<h4>Konvensional</h4>
									  </label>
									</div>
						   </div>
						   <div class="col-md-9">
						   <?php $ffd=1;
							
						   foreach($array_ragam_media as $array_ragam_medias){ ?>
						   
							<br>
								<div class="row">
							   <div class="col-md-3">
								<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="F10-k<?php echo $ffd; ?>" id="F10-k<?php echo $ffd; ?>_1" value="1" class="form-check-input" >
											<?php echo $array_ragam_medias; ?>
										  </label>
										</div>
							   </div>
							   <div class="col-md-9">
								 <div class="row">

								 <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_0" value="0">
										  Tadi pagi/siang/sore
										</label>
									  </div>
								  </div>
									<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_1" value="1">
										  1-3 hari yang lalu
										</label>
									  </div>
								  </div>
								  <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_2" value="2">
										  Seminggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_3" value="3">
										  Sebulan yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_4" value="4">
										  4-6 hari yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_5" value="5">
										  2 – 3 minggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>_6" value="6">
										  Lebih dari sebulan yang lalu
										</label>
									  </div>
								  </div>

									</div>
								</div>
								</div>

						   <?php $ffd++; }  ?>
						   </div>
							
						</div>
						
						<div class="row">
						   <div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<h4>Digital / Online</h4>
									  </label>
									</div>
						   </div>
						   <div class="col-md-9">
						   <?php $ffd=1; foreach($array_ragam_media2 as $array_ragam_medias){ ?>
						   
							<br>
								<div class="row">
							   <div class="col-md-3">
								<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="F10-d<?php echo $ffd; ?>" id="F10-d<?php echo $ffd; ?>_1" value="1" class="form-check-input" >
											<?php echo $array_ragam_medias; ?>
										  </label>
										</div>
							   </div>
							   <div class="col-md-9">
								 <div class="row">
								 <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_0" value="0">
										  Tadi pagi/siang/sore
										</label>
									  </div>
								  </div>
									<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_1" value="1">
										  1-3 hari yang lalu
										</label>
									  </div>
								  </div>
								  <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_2" value="2">
										  Seminggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_3" value="3">
										  Sebulan yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_4" value="4">
										  4-6 hari yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_5" value="5">
										  2 – 3 minggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>_6" value="6">
										  Lebih dari sebulan yang lalu
										</label>
									  </div>
								  </div>

									</div>
								</div>
								</div>

						   <?php $ffd++; }  ?>
						   </div>
							
						</div>
						
					</div>
					
					
					<div class="form-group" id="f11-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F11. Jika jawaban F10-2:“KORAN”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan koran yang dibaca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="0" id="f11_0"  class="form-check-input" >
									Berlangganan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="1" id="f11_1" class="form-check-input" >
									Beli eceran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="2" id="f11_2" class="form-check-input" >
									Pinjam
								  </label>
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f12-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F12. Jika jawaban F11:“BERLANGGANAN”, berapa biaya berlangganan koran yang Bpk/ Ibu/ Sdr baca tersebut?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="F12" placeholder="Biaya Berlangganan">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f13-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F13. Jika jawaban F10-2:“KORAN”, Seberapa sering Bpk/ Ibu/ Sdr membaca koran?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_0" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_1" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_2" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_3" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_4" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="f13_5" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f14-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F14. Jika jawaban F10-2:“KORAN”, Koran apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Jawa_Pos" value="Jawa_Pos"  class="form-check-input" >
										Jawa Pos
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Kompas" value="Kompas" class="form-check-input" >
									Kompas
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Bisnis_Indonesia" value="Bisnis_Indonesia" class="form-check-input" >
									Bisnis Indonesia
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Radar" value="Radar" class="form-check-input" >
										Radar
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Investor_Daily" value="Investor_Daily" class="form-check-input" >
										Investor Daily
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Jakarta_Post" value="Jakarta_Post" class="form-check-input" >
										Jakarta Post
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Sindo" value="Sindo" class="form-check-input" >
										Sindo
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox"name="f14" id="f14_Tempo" value="Tempo"  class="form-check-input" >
										Tempo
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Republika" value="Republika" class="form-check-input" >
										Republika
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" id="f14_Lainnya" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="f14lainnya" placeholder="Koran Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f15-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F15. Jika jawaban F10-2:“KORAN”, (Showcard-I) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Politik" value="Politik"  class="form-check-input" >
										Politik
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Ekonomi" value="Ekonomi" class="form-check-input" >
									Ekonomi/Bisnis
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Sosial" value="Sosial" class="form-check-input" >
									Sosial/ Budaya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Teknologi" value="Teknologi" class="form-check-input" >
										Teknologi
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Properti" value="Properti" class="form-check-input" >
										Properti
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Otomotif" value="Otomotif" class="form-check-input" >
										Otomotif
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Olahraga" value="Olahraga" class="form-check-input" >
										Olahraga
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Kesehatan" value="Kesehatan" class="form-check-input" >
										Kesehatan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Hiburan" value="Hiburan"  class="form-check-input" >
										Hiburan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Fashion" value="Fashion" class="form-check-input" >
										Fashion
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_nasional" value="nasional" class="form-check-input" >
										Berita daerah/ nasional
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" id="f15_Berita_Luar_Negeri" value="Berita_Luar_Negeri" class="form-check-input" >
										Berita Luar Negeri
								  </label>
								</div>
							</div> 
						
						
						</div>
						
					</div>
					
					<div class="form-group" id="f16-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F16. Jika jawaban F10-2:“ MAJALAH/ TABLOID”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan majalah/ tabloid yang dibaca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f16" value="Berlangganan" id="f16_Berlangganan" class="form-check-input" >
									Berlangganan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f16" value="Beli_eceran"  id="f16_Beli_eceran" class="form-check-input" >
									Beli eceran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox"name="f16" value="Pinjam" id="f16-Berlangganan"   class="form-check-input" >
									Pinjam
								  </label>
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f17-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F17. Jika jawaban F16:“BERLANGGANAN”, berapa biaya berlangganan majalah/ tabloid yang Bpk/ Ibu/ Sdr baca tersebut?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="f17" placeholder="Biaya Berlangganan">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f18-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F18. Jika jawaban F10-2:“MAJALAH/ TABLOID”, Majalah / Tabloid apa yang sering Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Trubus" value="Trubus"   class="form-check-input" >
											Trubus
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Wanita_Indonesia" value="Wanita_Indonesia" class="form-check-input" >
										Wanita Indonesia
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Bintang" value="Bintang" class="form-check-input" >
										Bintang
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Nova" value="Nova" class="form-check-input" >
											Nova
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Chip"  value="Chip" class="form-check-input" >
											Chip
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_SWA" value="SWA" class="form-check-input" >
											SWA
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Intisari" value="Intisari" class="form-check-input" >
											Intisari
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Rumah" value="Rumah" class="form-check-input" >
										Rumah
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Gadis" value="Gadis" class="form-check-input" >
										Gadis
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" id="f18_Lainnya"  value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="f18lainnya" placeholder="Tabloid Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f19-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F19. Jika jawaban F10-2:“ MAJALAH/ TABLOID”, (Showcard-J) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Politik" value="Politik"  class="form-check-input" >
												Politik
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Ekonomi_Bisnis" value="Ekonomi_Bisnis"  class="form-check-input" >
											Ekonomi/Bisnis
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Sosial_Budaya" value="Sosial_Budaya"  class="form-check-input" >
											Sosial/ Budaya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Teknologi" value="Teknologi"  class="form-check-input" >
												Teknologi
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Properti" value="Properti"  class="form-check-input" >
												Properti
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Otomotif" value="Otomotif"  class="form-check-input" >
											Otomotif
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Olahraga" value="Olahraga"  class="form-check-input" >
												Olahraga
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Kesehatan" value="Kesehatan"  class="form-check-input" >
											Kesehatan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Hiburan" value="Hiburan"  class="form-check-input" >
											Hiburan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Fashion" value="Fashion"  class="form-check-input" >
											Fashion
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Agro" value="Agro"   class="form-check-input" >
											Agro
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" id="f19_Lainnya" value="Lainnya"  class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F19lainnya" placeholder="Koran Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f20-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F20. Jika jawaban F10-2:“RADIO”? Sebutkan nama Radio yang paling sering didengarkan!</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="f20" placeholder="Nama Radio">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					
					<div class="form-group" id="f21-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F21. Jika jawaban F10-2:“RADIO”, dimana biasa Bpk/ Ibu/ Sdr mendengarkan Radio?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" id="f21_Rumah" value="Rumah" class="form-check-input" >
													Rumah
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" id="f21_Kantor" value="Kantor" class="form-check-input" >
											Kantor
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" id="f21_Sekolah" value="Sekolah" class="form-check-input" >
											Sekolah
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21"id="f21_Mobil"  value="Mobil" class="form-check-input" >
													Mobil
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" id="f21_Lainnya" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F2lainnya" placeholder="Radio Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f22-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F22. Jika jawaban F10-2:“RADIO”, seberapa sering Bpk/ Ibu/ Sdr mendengarkan radio?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_0" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_1" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_2" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_3" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_4" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F22_5" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f23-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F23. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, apakah Bpk/ Ibu/ Sdr berlangganan Koran /Majalah /Tabloid /Situs berita Online?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F23_Ya" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F23_Kadang" value="Kadang">
								  Kadang
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F23_Tidak" value="Tidak">
								  Tidak / Gratisan
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group" id="f24-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F24. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, Seberapa sering Bpk/ Ibu/ Sdr membaca Online?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_0" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_1" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_2" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_3" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_4" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F24_5" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group" id="f25-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F25. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, media online apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_detik" value="detik"  class="form-check-input" >
													detik.com
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_tirto" value="tirto" class="form-check-input" >
												tirto.id
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_tempo" value="tempo" class="form-check-input" >
												tempo.com
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_kumparan" value="kumparan" class="form-check-input" >
													kumparan.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_okezone" value="okezone" class="form-check-input" >
													okezone.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_liputan6" value="liputan6"class="form-check-input" >
												liputan6.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_kompas" value="kompas" class="form-check-input" >
													kompas.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_tribunnews"  value="tribunnews" class="form-check-input" >
												tribunnews.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_kapanlagi" value="kapanlagi" class="form-check-input" >
												kapanlagi.com
								  </label>
								</div>
							</div> 
							
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" id="f25_Lainnya" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F25lainnya" placeholder="Media Online Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					
					<div class="form-group" id="f26-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F26. Jika jawaban F10-2: “SOCIAL MEDIA”, media apa yang biasa Bpk/ Ibu/ Sdr baca berita / informasinya?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" id="f26_Facebook" value="Facebook" class="form-check-input" >
												Facebook
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" id="f26_twitter" value="twitter" class="form-check-input" >
												twitter
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" id="f26_Line" value="Line" class="form-check-input" >
												Line
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" id="f26_Instagram" value="Instagram" class="form-check-input" >
													Instagram
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" id="f26_Lainnya" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F26lainnya" placeholder="Media Online Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f27-pg">
                      <label for="exampleInputUsername1"><b>F27. Akun media sosial apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan? Urutkan dari yang paling sering digunakan!</b> </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Akun Media Sosial</th>
									</tr>
								  </thead>
								  <tbody>
								  
									<?php $iii=1;foreach($array_social_media as $array_social_medias){ ?>
								  
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmed_skala_<?php echo $iii; ?>">
										
										 <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" id="f27_chk<?php echo $iii; ?>_1" name="f27_chk<?php echo $iii; ?>" value="1" class="form-check-input" > 
												<?php echo $array_social_medias; ?>
										  </label>
										</div>
										
										<input type="hidden" id="f27_socmed<?php echo $iii; ?>" value="<?php echo $array_social_medias; ?>" />
										  <?php //echo $array_social_medias; ?>
										  </label>
											<input type="text" class="form-control" id="f27_rank_<?php echo $iii; ?>" placeholder="Urutan">
				
										  </div>
									  </td>
									</tr>
									
									<?php $iii++;} ?>
									
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmed_skala_<?php echo $iii; ?>">
										 
										  </label>
										   <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f27_chk_lainnya" value="Lainnya" class="form-check-input" >
												lainnya
										  </label>
										</div>
											<input type="text" class="form-control" id="f27channel_lainnya" placeholder="Media Sosial Lainnya">
											<input type="text" class="form-control" id="f27rank_lainnya" placeholder="Rank Lainnya">
				
										  </div>
									  </td>
									</tr>
									
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group" id="f28-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F28. Jika jawaban F27: “YOUTUBE”, Apakah Bpk/ Ibu/ Sdr memiliki Channel YOUTUBE pribadi dan aktif mengupdate atau mengisi contentnya?</b> </label>
					   
						 <div class="row">

							<div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F28" id="F28_Tidak" value="Tidak">
								  Tidak 
								</label>
							  </div>
						  </div>
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F28" id="F28_Ya" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group" id="f29-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F29. Jika jawaban F27: “YOUTUBE”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr menonton Channel YOUTUBE orang lain?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_0" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_1" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_2" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_3" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_4" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_5" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F29_6" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					
					<div class="form-group" id="f30-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F30. Jika jawaban F27: “YOUTUBE”, F30.jenis tayangan apa yang sering Bpk/ Ibu/ Sdr tonton?</b> </label>
					   
						 <div class="row">

							<?php $ii=0; foreach($array_jenis_tayangan as $array_jenis_tayangans){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f30" id="f30_<?php echo $array_jenis_tayangan_val[$ii]; ?>" value="<?php echo $array_jenis_tayangan_val[$ii]; ?>" class="form-check-input" >
											<?php echo $array_jenis_tayangans; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
						</div>
						
					</div>
					
					<div class="form-group" id="f31-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F31. Jika jawaban F27: “FACEBOOK”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun facebook yang dimiliki?</b> </label>
					   
						 <div class="row">

							<?php $penggunaan_s = ['Berdagang / Jualan / Berbisnis','Menyimpan kenangan','Update Informasi','Update Status','Silaturahmi / Bertemu Teman Lama ','Berdiskusi','Memberi Comment / Like','Diary / Catatan Harian','Lainnya'];

							$penggunaan_s_val = ['Berdagang_Jualan_Berbisnis','Menyimpan_kenangan','Update_Informasi','Update_Status','Silaturahmi_Bertemu_Teman_Lama ','Berdiskusi','Memberi_Comment_Like','Diary_Catatan Harian','Lainnya'];	
							$ii = 0;							
							foreach($penggunaan_s as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f31" id="f31_<?php echo $penggunaan_s_val[$ii]; ?>" value="<?php echo $penggunaan_s_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F31lainnya" placeholder="Kegunaan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					
						<div class="form-group" id="f32-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F32. Jika jawaban F27: “FACEBOOK”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun FACEBOOK yang dimiliki?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_0" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_1" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_2" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_3" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_4" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_5" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F32_6" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group" id="f33-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F33. Jika jawaban F27: “INSTAGRAM”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun instagram yang dimiliki?</b> </label>
					   
						 <div class="row">

							<?php 
							
							$ii = 0;	
							foreach($penggunaan_s as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f33" id="f33_<?php echo $penggunaan_s_val[$ii]; ?>" value="<?php echo $penggunaan_s_val[$ii]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F33lainnya" placeholder="Kegunaan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
				
					<div class="form-group" id="f34-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F34. Jika jawaban F27: “INSTAGRAM”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun INSTAGRAM yang dimiliki?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_0" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_1" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_2" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_3" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_4" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_5" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F34_6" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F35. Akun social messenger apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan?</b> </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Akun Social Messenger</th>
									</tr>
								  </thead>
								  <tbody>
								  
									<?php 
									$array_social_msg = ['Line','IMO','WeChat','Skype','Whatsapp','Telegram','FB Messenger','Yahoo Messenger']; 
									$array_social_msg_val = ['Line','IMO','WeChat','Skype','Whatsapp','Telegram','FB_Messenger','Yahoo_Messenger']; 
									$iii = 1;
									foreach($array_social_msg as $array_social_medias){ ?>
								  
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmsg_skala_<?php echo $iii; ?>">
										  <?php echo $array_social_medias; ?>
										  </label>
											<input type="text" class="form-control" id="f35_rank_<?php echo $iii; ?>" placeholder="Urutan">
											<input type="hidden" id="f35_socmes<?php echo $iii; ?>" value="<?php echo $array_social_msg_val[$iii-1]; ?>" />
										  </div>
									  </td>
									</tr>
									
									<?php $iii++; } ?>
									
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmsg_skala_<?php echo $iii; ?>">
										 Lainnya
										  </label>
											<input type="text" class="form-control" id="channel_lainnya" placeholder="Channel Lainnya">
											<input type="text" class="form-control" id="rank_lainnya" placeholder="Rank Lainnya">
				
										  </div>
									  </td>
									</tr>
									
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F36. Apa saja yang Bpk/ Ibu/ Sdr lakukan dalam seminggu terakhir saat terhubung dengan internet?</b> </label>
					   
						 <div class="row">

							<?php 
							$penggunaan_lakukan = ['1. Akses situs berita dan informasi  ','2. Akses situs pembelajaran (mis: ruang guru)','3. Akses situs gaya hidup (mis: detikhot, kapanlagi)','4. Akses situs hobi','5. Akses situs hiburan','6. Akses belanja online (mis: tokopedia, shoppe, blibli, dll) ','7. Akses situs games','8. Akses situs media sosial','9. Akses situs video streaming (mis: Youtube, Netflix, Vidio)','10. Akses situs musik/ audio streaming (mis: JOOX, Spotify)','11. Akses situs video call (mis: Skype, bluejeans)','12. Melakukan chatting/ instan messaging','13. Download','14. Upload','15. Email ','16. Lainnya']; 
							
							$penggunaan_lakukan_val = ['berita_dan_informasi','pembelajaran','gaya_hidup','hobi','hiburan','belanja_online','games','media_sosial','video_streaming','musik_audio_streaming','video_call','instan_messaging','Download','Upload','Email','Lainnya']; 
							$ii = 1;
							$iii = 0;
							foreach($penggunaan_lakukan as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f36" id="f36_<?php echo $penggunaan_lakukan_val[$iii]; ?>" value="<?php echo $penggunaan_lakukan_val[$iii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; $iii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F36lainnya" placeholder="Lakukan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f37-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F37. Jika jawaban F36:“AKSES SITUS BERITA DAN INFORMASI”, (Showcard-L) berita dan informasi apa yang sering Bpk/Ibu/Sdr cari?</b> </label>
					   
						 <div class="row">

							<?php 
							$berita_informasi = ['Publikasi hasil penelitian atau jurnal','Berita terbaru/ terkini','Informasi produk atau jasa','Informasi film dan hiburan','Informasi Ekonomi','Informasi Politik','Informasi Kuliner','Informasi Otomotif','Informasi Properti','Informasi Kesehatan & Olahraga','Informasi Teknologi Informasi','Lainnya']; 
							$berita_informasi_val = ['Publikasi_hasil_penelitian_atau_jurnal','Berita_terbaru_terkini','Informasi_produk_atau_jasa','Informasi_film_dan_hiburan','Informasi_Ekonomi','Informasi_Politik','Informasi_Kuliner','Informasi_Otomotif','Informasi_Properti','Informasi_Kesehatan_Olahraga','Informasi_Teknologi_Informasi','Lainnya']; 
							$ii = 0;
							foreach($berita_informasi as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f37" id="f37_<?php echo $berita_informasi_val[$ii]; ?>" value="<?php echo $berita_informasi_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php  $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F36lainnya" placeholder="Lakukan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group"  id="f38-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F38. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, genre atau jenis musik apa yang sering Bpk/ Ibu/ Sdr dengarkan?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Pop','Funk/Rock','Dangut','Jazz','Hip hop','Rap','Keroncong','Lainnya']; 
							$situs_musik_val = ['Pop','FunkRock','Dangut','Jazz','Hip_hop','Rap','Keroncong','Lainnya']; 
							$ii = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f38" id="f38_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php  $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F38lainnya" placeholder="Genre Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f39-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F39. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, aplikasi Musik Streaming apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Sound Cloud','JOOX Music','MelOn','Spotify Music','MusixMatch','Vortex Music Player','Guvera Music','Deezer Music','Apple Music (iTunes)','Langit Musik','Amazon Music with Prime Music','Lainnya']; 
							$situs_musik_val = ['Sound_Cloud','JOOX_Music','MelOn','Spotify_Music','MusixMatch','Vortex_Music_Player','Guvera_Music','Deezer_Music','Apple_Music','Langit_Musik','Amazon_Music_with_Prime_Music','Lainnya'];
							$ii = 0;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f39" id="f39_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F39lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					
						<div class="form-group" id="f40-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F40. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses musik streaming per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$situs_musik_val = ['0','25000','25000–50000','25000–50000','75001-100000','100001-150000','150000s'];
							$i = 0;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F40" id="F40_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F40lainnya" onkeyup="expense_audio()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f41-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F41. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi music streaming tersebut?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Tersedia akses gratis','Tampilan / interface-nya','Katalog musiknya','Sinkronisasi antar perangkat','Kualitas audio','Lainnya']; 
							$situs_musik_val = ['Tersedia_akses_gratis','Tampilan_interface-nya','Katalog_musiknya','Sinkronisasi_antar_perangkat','Kualitas_audio','Lainnya']; 
							$i = 0;	
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f41" id="f41_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++;  } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F41lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f42-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F42. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi musik streaming?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$situs_musik_val = ['Kurang_dari_seminggu_sekali','1-2_kali_seminggu','3-6_kali_seminggu','1_kali_sehari','2-3_kali_sehari','Lebih_dari_3_kali_sehari']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F42" id="F42_<?php echo $situs_musik_val[$i]; ?>" value=" <?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php $i++; } ?>
							
								
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f43-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F43. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, Genre atau jenis tayangan apa yang biasa Bpk/ Ibu/ Sdr tonton?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Adventure','Action','Komedi','Drama','Mistic','Horor & Thriller','Lainnya']; 
							$situs_musik_val = ['Adventure','Action','Komedi','Drama','Mistic','Horor_Thriller','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f43" id="f43_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f44-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F44. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, aplikasi/ layanan Video/ Movie Streaming apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Catchplay','Iflix','Netflix','Genflix','Hooq','Youtube','Google play movie','Lainnya']; 
							$situs_musik_val = ['Catchplay','Iflix','Netflix','Genflix','Hooq','Youtube','Google_play_movie','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f44" id="f44_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f45-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F45. Jika jawaban F36:“ AKSES SITUS VIDEO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses video streaming per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$situs_musik_val = ['0','25000','25000–50000','25000–50000','75001-100000','100001-150000','150000s'];
							$i = 0;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F45" id="F45_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F45lainnya" onkeyup="expense_video()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f46-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F46. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi Video Streaming tersebut?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Tarif berlangganan','Jumlah device untuk menikmati','Konten film','Bisa bermacam device untuk menikmati','Resolusi video','Lainnya']; 
							$situs_musik_val = ['Tarif_berlangganan','Jumlah_device_untuk_menikmati','Konten_film','Bisa_bermacam_device_untuk_menikmati','Resolusi_video','Lainnya'];
							$i = 0;								
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f46" id="f46_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F46lainnya" placeholder="Pertimbangan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f47-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F47. Jika jawaban F36:“ AKSES SITUS VIDEO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi/ layanan Video/ Movie Streaming?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$situs_musik_val = ['Kurang_dari_seminggu_sekali','1-2_kali_seminggu','3-6_kali_seminggu','1_kali_sehari','2-3_kali_sehari','Lebih_dari_3_kali_sehari']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F47" id="F47_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php $i++; } ?>
							
								
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f48-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F48. Jika jawaban F36:“AKSES SITUS GAMES”, situs game apa yang sering Bpk/ Ibu/ Sdr akses?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Steam','Garena','GOG','OnePlay','Origin','Uplay','Ocean of games','Acid Play','GameTop','Lainnya']; 
							$situs_musik_val = ['Steam','Garena','GOG','OnePlay','Origin','Uplay','Ocean_of_games','Acid_Play','GameTop','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f48" id="f48_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F48lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f49-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F49. Jika jawaban F36:“AKSES SITUS GAMES”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses situs games per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$situs_musik_val = ['0','25000','25000–50000','25000–50000','75001-100000','100001-150000','150000s'];
							$i = 0;								
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F49" id="F49_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F49lainnya" onkeyup="expense_game()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f50-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F50. Jika jawaban F36:“AKSES SITUS GAMES”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr mengakses situs game tersebut?</b> </label>
						 <div class="row">
								<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F50" placeholder="Pertimbangan">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group" id="f51-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F51. Jika jawaban F36:“ AKSES SITUS GAMES”, seberapa sering memanfaatkan situs game yang sering Bpk/ Ibu/ Sdr akses?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$situs_musik_val = ['Kurang_dari_seminggu_sekali','1-2_kali_seminggu','3-6_kali_seminggu','1_kali_sehari','2-3_kali_sehari','Lebih_dari_3_kali_sehari']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F51" id="F51_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" >
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
						
					</div>
					
					<div class="form-group" id="f52-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F52. Jika jawaban F36:“AKSES SITUS GAMES”, game online apa saja yang sering Bpk/ Ibu/ Sdr mainkan?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Mobile Legends','Arena of Valor','PUBG Mobile','Clash of Clans','Clash Royale','Vainglory','Space Comander','Lineage2 Revolution','DOTA','Lainnya']; 
							$situs_musik_val = ['Mobile_Legends','Arena_of_Valor','PUBG_Mobile','Clash_of_Clans','Clash_Royale','Vainglory','Space_Comander','Lineage2_Revolution','DOTA','Lainnya'];
							$i = 0;							
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f52" id="f52_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Game Online Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f53-pg" >
                      <label for="exampleInputUsername1"><b>F53. Dimanakah dan kapankan biasanya Bpk/ Ibu/ Sdr belanja untuk kebutuhan rumah tangga?</b> </label>
					   
						 <div class="row">
							<div class="col-md-12">
							<?php 
							$situs_musik = ['Toko/ warung klontong','Minimarket','Pasar tradisional','Supermarket','Hipermarket']; 
							$situs_musik_val = ['Toko_warung_klontong','Minimarket','Pasar_tradisional','Supermarket','Hipermarket']; 
							$iii = 1;
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-9">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f53<?php echo $iii; ?>" id="f53_<?php echo $iii; ?>_1" value="1" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
									
									<div style="margin-left:20px">
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_day_<?php echo $iii; ?>" id="f53_day_<?php echo $iii; ?>_1" value="1" class="form-check-input" style="margin-left:20px;" >
												Harian
										  </label>
										</div>
										
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_week_<?php echo $iii; ?>" id="f53_week_<?php echo $iii; ?>_1" value="1" class="form-check-input" style="margin-left:20px;">
												Mingguan
										  </label>
										</div>
										
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_month_<?php echo $iii; ?>" id="f53_month_<?php echo $iii; ?>_1" value="1" class="form-check-input" style="margin-left:20px;">
												Bulanan
										  </label>
										</div>
									</div>
								</div> 
 
							</div>
							<?php $iii++; $i++; } ?>
						</div>
						</div>
					</div>
					
					<div class="form-group" id="f54-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F54. Jika jawaban F53:“MINIMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php 
							$situs_musik = ['Alfamart','Alfamidi','Bright','Circle K','Indomaret','Lainnya']; 
							$situs_musik_val = ['Alfamart','Alfamidi','Bright','Circle_ K','Indomaret','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f54" id="f54_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F54lainnya" placeholder="MINIMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f55-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F55. Jika jawaban F53:“SUPERMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Giant','Indogrosir','Lottemart','Superindo','Ranchmarket','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f55" id="f55_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F55lainnya" placeholder="SUPERMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f56-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F56. Jika jawaban F53:“HIPERMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Giant','Hypermart','Lotte','Transmart','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f56" id="f56_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F56lainnya" placeholder="HIPERMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f57-pg" >
                      <label for="exampleInputUsername1"><b>F57. Berapa anggaran rutin rumah tangga per bulan untuk belanja rumah tangga?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['< Rp 500rb','Rp 500rb – Rp 1juta','Rp 1juta – Rp 2juta','Rp 2juta – Rp 5juta ','> Rp 5juta ']; 
							$situs_musik_val = ['-500rb','500rb–1juta','1juta–2juta','2juta-5juta','5juta+']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F57" id="F57_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>

							<?php $i++;  } ?>
						</div>
					</div>
					
					<div class="form-group" id="f58-pg" >
                      <label for="exampleInputUsername1"><b>F58. Dalam 6 bulan terakhir, barang elektronik dan Home Appliance apa saja yang Bpk /Ibu /Sdr beli. Apa mereknya?</b> </label>
						 
							<?php 
							$situs_musik = ['Pendingin Udara (misal: kipas angin)','Vacuum Cleaner','Water Heater','Pompa Air','Bolam Lampu','Kompor','Televisi','Air Conditioning (AC)','Kulkas/ Lemari Es','Microwave','Penanak Nasi']; 
							$field_merk = ['merk_fan','merk_vc','merk_waterhtr','merk_pump','merk_lamp','merk_stump','merk_ledtv','merk_ac','merk_refri','merk_mcwave','merk_riceckr']; 
							//$situs_musik = ['Pendingin Udara (misal: kipas angin)']; 
							//$field_merk = ['merk_fan']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
									<div class="col-md-6">
										  <div class="form-group" >
										  <select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>[]" id="<?php echo $field_merk[$in]; ?>" multiple="multiple" style="width:100%">
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
												} ?>
												<option value="oo" >Merk Lainnya</option>
											</select>
											<!--<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>[]" id="<?php echo $field_merk[$in]; ?>" style="width:100%"> 
												
												  
											</select>-->
										  </div>
									</div>
							</div>
							<?php 
							$in++; 
							$i++; } ?>
						
					</div>
					
					<div class="form-group" id="f59-pg" >
                      <label for="exampleInputUsername1"><b>F59. Dalam 2 bulan terakhir, apakah Bpk/ Ibu/ Sdr pernah belanja online?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak pernah belanja online','Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F59" id="F59_<?php echo $i; ?>" value="<?php echo $i; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f60-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F60. Jika jawaban F59:“TIDAK PERNAH”, mengapa Bpk/ Ibu/ Sdr tidak berbelanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Sering salah kirim','Barang rusak saat diterima','Salah ukuran','Stok tidak tersedia','Salah spec','Lainnya'];
							$i = 1;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f60" id="f60_<?php echo $i; ?>" value="<?php echo $i; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F60lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f61-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F61. Jika Jawaban F59: “YA”, Produk/ Barang apa saja yang pernah Bpk/ Ibu/ Sdr beli melalui belanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Fashion','Gadget','Perlengkapan rumah tangga','Kosmetik','Kebutuhan sehari-hari','Perlengkapan bayi','Elektronik','Lainnya']; 
							$i = 1;			
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f61" id="f61_<?php echo $i; ?>"  value="<?php echo $i; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++;} ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F61lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f62-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F62. Jika Jawaban F59: “YA”, Dimana Bpk/ Ibu/ Sdr sering belanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Facebook','Instagram','Shopee','Lazada','Tokopedia','Zalora','Blibli','Bukalapak','JD.id','Lainnya']; 
							$i = 1;		
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f62" id="f62_<?php echo $i; ?>"  value="<?php echo $i; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $i++; } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F62lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f63-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F63. Jika Jawaban F59: “YA”, Dalam 2 bulan terakhir berapa kali Bpk/ Ibu/ Sdr belanja online?</b> </label>
						 <div class="row">
								<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F63lainnya" placeholder="Berapa Kali">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group" id="f64new-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F64. Jika jawaban F59:“YA”, jasa ekspedisi apa yang sering Bpk/ Ibu/ Sdr gunakan saat berbelanja online ?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['JNE','SiCepat','Go-Send','Tidak tahu (ditentukan oleh ecommerce)','J&T','Ninja Express','Pos','TiKi','Lainnya']; 
							$situs_musik_val = ['JNE','SiCepat','Go-Send','Tidak_tahu','J_T','Ninja_Express','Pos','TiKi','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f64new" id="f64new_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="f64new_lainnya" placeholder="Kurir">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f64-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F65. Jika jawaban F59:“YA”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr dalam berbelanja online?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Diskon','Free Ongkir','Cashback','Lainnya']; 
							$situs_musik_val = ['Diskon','Free_Ongkir','Cashback','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f64" id="f64_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F64lainnya" placeholder="Pertimbangan">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f65-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F66. Jika Jawaban F59: “YA”, jenis pembayaran apa yang biasa Bpk/ Ibu/ Sdr gunakan saat belanja online?</b> </label>
						 <div class="row">
							<?php $ii=0; 
							$situs_musik = ['Kartu Kredit','Transfer','E-Wallet','COD','Lainnya']; 
							$situs_musik_val = ['Kartu_Kredit','Transfer','E-Wallet','COD','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f65" id="f65_<?php echo $situs_musik_val[$ii]; ?>"  value="<?php echo $situs_musik_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F65lainnya" placeholder="Pertimbangan">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f66-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F67. Jika Jawaban F66: “e-Wallet”,  e-Wallet apa yang saat ini Bpk/ Ibu/ Sdr gunakan saat belanja online?</b> </label>
						 <div class="row">
							<?php $ii=0; 
							$situs_musik = ['Gopay','jenius','OVO','Go Mobile','DANA','PayTren','LinkAja','DOKU','i-saku','Lainnya']; 
							$situs_musik_val = ['Gopay','jenius','OVO','Go_Mobile','DANA','PayTren','LinkAja','DOKU','i-saku','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f66" id="f66_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F66lainnya" placeholder="E-Wallet Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F68. Dalam kurun waktu satu tahun terakhir ini, Apakah Bpk/ Ibu/ Sdr pernah melakukan traveling (bepergian untuk tujuan berlibur / wisata)? </b> </label>
						 <div class="row">
								<!--<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F67lainnya" placeholder="Berapa Kali">
										</div>
								  </div>-->
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F67" id="F67_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++;  } ?>	  
								  
								  
						</div>
					</div>
					
					<div class="form-group" id="f68-pg" style="display:none" >
                      <label for="exampleInputUsername1"><b>F69. Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan traveling (bepergian untuk tujuan berlibur / wisata)? </b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['1-3 hari yang lalu','4-6 hari yang lalu','Seminggu yang lalu','2-3 minggu yang lalu','Sebulan yang lalu','Lebih dari sebulan yang lalu']; 
							$situs_musik_val = ['1-3_hari_yang_lalu','4-6_hari_yang_lalu','Seminggu_yang_lalu','2-3_minggu_yang_lalu','Sebulan_yang_lalu','Lebih_dari_sebulan_yang_lalu']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F68" id="F68_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f69-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F70. Saat melakukan traveling apakah Bpk/ Ibu/ Sdr sebelumnya melakukan perencanaan ?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F69" id="F69_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f70-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F71. Jenis wisata apa yang sering Bpk/ Ibu/ Sdr kunjungi? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Alam','Religi','Sejarah','Budaya','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f70" id="f70_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F70lainnya" placeholder="jenis Wisata Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f71-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F72. Sebutkan tempat wisata atau obyek wisata yang sering Bpk/ Ibu/ Sdr kunjungi?</b> </label>
						 <div class="row">
								<div class="col-md-6">
									  <div class="form-group">
											<input type="text" class="form-control" id="F71dalam" placeholder="Dalam Negeri">
										</div>
								  </div>
								  <div class="col-md-6">
									  <div class="form-group">
											<input type="text" class="form-control" id="F71luar" placeholder="Luar Negeri">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group" id="f72-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F73. Untuk menuju ke tempat wisata, alat trasnportasi apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Pesawat','Kereta api','Bus','Mobil pribadi','Lainnya']; 
							$situs_musik_val = ['Pesawat','Kereta_api','Bus','Mobil pribadi','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f72" id="f72_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F72lainnya" placeholder="Transportasi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f73-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F74. Bagaimana cara Bpk/ Ibu/ Sdr membeli tiket perjalanan wisata?</b> </label>
						 <div class="row">
							<?php $ii=0; 
							$situs_musik = ['Melalui online / Aplikasi','Agen travel','Lainnya']; 
							$situs_musik_val = ['Melalui_online_Aplikasi','Agen_travel','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f73" id="f73_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F73lainnya" placeholder="Membeli Tiket Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f74-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F75. Jika Jawaban F74: “ONLINE”, aplikasi atau situs apa yang Bpk /Ibu /Sdr pilih?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Traveloka','Agoda','TIKET.COM','Mr Aladin','pegi pegi','IndiTravel','wego','Lainnya']; 
							$situs_musik_val = ['Traveloka','Agoda','TIKET','Mr_Aladin','pegi_pegi','IndiTravel','wego','Lainnya']; 
							$i=0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f74" id="f74_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F74lainnya" placeholder="Transportasi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F76. Untuk beberapa aktifitas berikut ini, mana yang Bpk/ Ibu/ Sdr lakukan secara rutin atau sudah menjadi kebiasaan di 3 bulan terakhir ini?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Rekreasi ke kolam renang','Rekreasi ke spa','Rekreasi ke pijat urut tradisional','Pergi ke gym','Pergi ke Mall','Pergi ke Cafe','Rekreasi ke Karaoke','Rekreasi ke Taman kota','Rekreasi ke Taman bermain']; 
							$situs_musik_val = ['kolam_renang','spa','pijat_urut_tradisional','gym','Mall','Cafe','Karaoke','Taman_kota','Taman_bermain']; 
							$i=0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f75" id="f75_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F77. Apakah dalam 3 bulan terakhir ini, dalam perjalanan wisata Bpk /Ibu /Sdr menginap di hotel? Jika ”Ya”, sebutkan hotelnya:</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F76" id="F76_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
							<div class="col-md-4">
									  <div class="form-group">
											<input type="text" class="form-control" id="F76lainnya" placeholder="Sebutkan">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F78. Apakah Bpk/ Ibu/ Sdr dalam 1 tahun terakhir ini melakukan medical check-up (pemeriksaan kesehatan)?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F77" id="F77_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F79. Dimana tempat yang biasanya Bpk /Ibu /Sdr untuk mendapatkan tindakan / perawatan / konsultasi medis?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Puskesmas','Klinik','RS Negeri','RS Swasta','Online','Lainnya']; 
							$situs_musik_val = ['Puskesmas','Klinik','RS_Negeri','RS_Swasta','Online','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f78" id="f78_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F78lainnya" placeholder="Konsultasi Medis Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F80. Dimana biasanya Bpk/ Ibu/ Sdr membeli obat?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Apotik','Toko Obat','Minimarket','Online','Lainnya']; 
							$situs_musik_val = ['Apotik','Toko_Obat','Minimarket','Online','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f79" id="f79_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F79lainnya" placeholder="Beli Obat Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F81. Dimanakah Bpk/ Ibu/ Sdr 	menyekolahkan anak? </b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Sekolah swasta','Sekolah negeri','Sekolah diluar ','Boarding ','Lainnya']; 
							$situs_musik_val = ['Sekolah_swasta','Sekolah_negeri','Sekolah_diluar ','Boarding ','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f80" id="f80_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F80lainnya" placeholder="Sekolah Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F82. Penguasaan bahasa apa saja yang diajarkan di sekolah anak Bpk/ Ibu/ Sdr?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Bahasa Indonesia','Bahasa Daerah','Bahasa Inggris','Bahasa Arab','Bahasa Mandarin','Lainnya']; 
							$situs_musik_val = ['Bahasa_Indonesia','Bahasa_Daerah','Bahasa_Inggris','Bahasa_Arab','Bahasa_Mandarin','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f81" id="f81_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F81lainnya" placeholder="Sekolah Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F83. Selain buku pelajaran yang ditentukan oleh sekolah, apakah Bpk/ Ibu/ Sdr juga membelikan buku pelajaran tambahan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F82" id="F82_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f83-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F84. Jika Jawaban F83: “YA”, Untuk keperluan membeli buku pelajaran tambahan, berapa rupiah uang yang Bpk/ Ibu/ Sdr anggarkan dalam 1 tahun?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['< Rp 500rb','Rp 500rb – Rp 1juta','Rp 1juta – Rp 2juta ','Rp 2juta – Rp 5juta','> Rp 5juta']; 
							$situs_musik_val = ['-500rb','500rb-1juta','1juta-2juta','2juta-5juta','5jutas']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F83" id="F83_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F85. Apakah Bpk/ Ibu/ Sdr memberikan les tambahan kepada anak?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F84" id="F84_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f85-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F86. Jika Jawaban F85: “YA”, (Showcard-O) kegiatan les tambahan berikut ini, manakah yang Bpk/ Ibu/ Sdr berikan kepada anak?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Les Bimbingan Belajar','Les Olahraga','Les Musik','Les Mengaji/ agama ','Les Bahasa','Les Ketrampilan','Les Sains dan Teknologi','Les Beladiri','Les Budaya']; 
							$situs_musik_val = ['Bimbingan_Belajar','Olahraga','Musik','Mengaji_agama','Bahasa','Ketrampilan','Sains_Teknologi','Beladiri','Budaya']; 
							$ii = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f85" id="f85_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f86-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F87. Jika Jawaban F86: “Bimbingan Belajar”, bimbingan belajar Offline mana sajakah yang Bpk/ Ibu/ Sdr daftarkan untuk anak?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Primagama','GO (Ganesha Operation)','SSC (Sony Sugema College','Lainnya']; 
							$situs_musik_val = ['Primagama','GO','SSC','Lainnya']; 
							$ii = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f86" id="f86_<?php echo $situs_musik_val[$ii]; ?>" value="<?php echo $situs_musik_val[$ii]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++;; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F86lainnya" placeholder="Bimbingan Belajar Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f87-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F88. Jika jawaban F86: “Bimbingan Belajar”, apakah juga memanfaatkan bimbingan belajar ONLINE?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F87" id="F87_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f88-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F89. Jika Jawaban F88: “YA”, bimbingan belajar ONLINE mana sajakah yang Bpk/ Ibu/ Sdr daftarkan untuk anak?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Ruang Guru ','Quipper ','Kelas Kita','Lainnya']; 
							$situs_musik_val = ['Ruang_Guru ','Quipper','Kelas_Kita','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f88" id="f88_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F87lainnya" placeholder="Bimbingan Belajar Online Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  F90.(F90-1) (Showcard-P) Barang kebutuhan sehari-hari berikut ini, mana yang Bpk/Ibu/ Sdr dan atau keluarga beli dalam 1 bulan terakhir; <br>
						(F90-2) sebutkan brand/ merk yang Bpk/ Ibu/ Sdr konsumsi? <br>
						(F90-3) Siapa saja anggota keluarga yang mengonsumsi barang dan brand tersebut?</b> </label><br>
						<b>Kebutuhan Makan dan Minum</b>
							<?php $situs_musik = ['Air Mineral (AMDK)','Air berasa','Sereal','Biskuit','Roti','Permen','Mie Instan']; 
							$field_merk = ['merk_amdk','merk_softdrink','merk_cereal','merk_biscuit','merk_bakery','merk_candy','merk_instant_noodle']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												<option value="oo" >Merk Lainnya</option>
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Dapur</b>
							<?php $situs_musik = ['Susu','Kopi','Teh','Penyedap rasa','Kecap','Saus']; 
							$field_merk = ['merk_milk','merk_coffee','merk_tea','merk_flavoring','merk_soy_sauce','merk_ketchup']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												  <option value="oo" >Merk Lainnya</option>
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Mandi dan Cuci</b>
							<?php $situs_musik = ['Pasta gigi','Sabun mandi','Sabun muka','Sabun cuci tangan','Shampo','Body Lotion','Pengharum pakaian','Deterjen','Pelembut pakaian']; 
							$field_merk = ['merk_toothpaste','merk_body_wash','merk_face_wash','merk_hand_wash','merk_shampoo','merk_body_lotion','merk_cloth_deo','merk_detergen','merk_softener']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Rumah Tangga</b>
							<?php $situs_musik = ['Bola lampu','Baterai','Alat cukur','Obat nyamuk','Pengharum ruangan','Alat tulis','Kertas']; 
							$field_merk = ['merk_lamp','merk_battery','merk_shaver','merk_insectrepell','merk_airfresh','merk_stationary','merk_paper']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												<option value="oo" >Merk Lainnya</option>  
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  F91.(F91-1) (Showcard-Q) Dari produk kecantikan/ kosmetik berikut ini mana yang Bpk/ Ibu/ Sdr dan atau keluarga gunakan?<br>
						(F91-2) Sebutkan brand/ merek yang Bpk/ Ibu/ Sdr gunakan?<br>
						(F91-3) Siapa saja anggota keluarga yang menggunakan produk dan brand tersebut?</b> </label><br>
						<b>Produk Kecantikan dan Kosmetik</b>
							<?php $situs_musik = ['Conditioner','Hair mask','Hair spray','Vitamin rambut','BB Cream','Krim malam','Krim pemutih',
							'Bedak','Pensil alis','Maskara','Foundation','Eye Shadow','Sunblock','Body Scrub','Body Butter','Eau de toilette','Eau de parfume','Pelangsing']; 
							$field_merk = ['merk_hair_cond','merk_hair_mask','merk_hair_spray','merk_hair_vit','merk_cream_bb','merk_cream_night','merk_cream_white','merk_face_powder','merk_eyebrow','merk_mascara','merk_foundation','merk_eyeshadow','merk_sunblock','merk_body_scrub','merk_body_butter','merk_parf_edt','merk_parf_edp','merk_slimming']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F92. Seberapa sering Bpk /Ibu /Sdr menggunakan kosmetik dan perawatan?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Setiap hari','Pada acara tertentu','Pada momen khusus','Lainnya']; 
							$situs_musik_val = ['Setiap_hari','Pada_acara_tertentu','Pada_momen_khusus','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F91" id="F91_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++;} ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F91lainnya" placeholder="Penggunaan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F93. Seberapa sering Bpk /Ibu /Sdr membeli produk Fashion? (sebutkan pilihan jawabannya: sebulan sekali, setiap acara besar, hanya pada penawaran khusus, mengikuti trend)</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Sebulan sekali','Setiap acara besar','Bila ada penawaran khusus','Tergantung tren','Lainnya']; 
							$situs_musik_val = ['Sebulan_sekali','Setiap_acara_besar','Bila_ada_penawaran_khusus','Tergantung_tren','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F92" id="F92_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F92lainnya" placeholder="Penggunaan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F94. Media apa yang digunakan untuk mengetahui  Tren Fashion Bpk/ Ibu/ Sdr dan keluarga dapatkan?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Televisi','Internet','Majalah','Social Media','Billboard / Baliho','Lainnya']; 
							$situs_musik_val = ['Televisi','Internet','Majalah','Social_Media','Billboard_Baliho','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F93" id="F93_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F93lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F95. Alat transportasi apa yang Bpk/ Ibu/ Sdr atau keluarga gunakan dalam aktifitas sehari-hari?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Mobil','Mobil dinas','Motor','Motor dinas','Bemo/ Mikrolet','Bus kota','Becak','Bajai','Go/ Grab Car','Go Ride/ Grab Bike','Lainnya']; 
							$situs_musik_val = ['Mobil','Mobil_dinas','Motor','Motor_dinas','Bemo_Mikrolet','Bus_kota','Becak','Bajai','Go_Grab_Car','Go_Ride_Grab_Bike','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F94" id="F94_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F94lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F96. Untuk tujuan apa Bpk/ Ibu/ Sdr menggunakan alat transportasi?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Bertemu teman lama','Kegiatan komunitas','Bisnis','Lainnya']; 
							$situs_musik_val = ['Bertemu_teman_lama','Kegiatan_komunitas','Bisnis','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F95" id="F95_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F95lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F97. Apakah Bpk/ Ibu/ Sdr mau atau bersedia untuk membeli produk yang baru di launching atau ditawarkan perdana?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Kadang-kadang','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F96" id="F96_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f97-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F98. Jika jawaban F97: “YA” atau “Kadang-kadang”, Apa pertimbangan Bpk /Ibu /Sdr membeli produk yang baru di launching tersebut?</b> </label>
						 <div class="row">
							<?php 
							$situs_musik = ['Bisa ikut tren / Jadi trensetter','Agar eksis di komunitas','Biasanya diskon besar','Lainnya']; 
							$situs_musik_val = ['ikut_tren_Jadi_trensetter','Agar_eksis_di_komunitas','Biasanya_diskon_besar','Lainnya']; 
							$i = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F97" id="F97_<?php echo $situs_musik_val[$i]; ?>" value="<?php echo $situs_musik_val[$i]; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $i++; } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F97lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f98-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F99. Jika jawaban F97: “YA” atau “Kadang-kadang”, Produk apa yang Bpk /Ibu /Sdr pernah beli saat launching tersebut?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Properti','Mobil','Gadget','Elektronik','Fashion','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F98" id="F98_<?php echo $penggunaan_ss; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F98lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_product_ownership" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PRODUCT OWNERSHIP   </h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  G1. (G1-1) (Showcard-R) Barang-barang tahan lama berikut ini, mana yang Bpk/ Ibu/ Sdr miliki? <br>
						(G1-2) Sebutkan brand/ merek yang Bpk/ Ibu/ Sdr miliki?<br>
						(G1-3) Siapa saja anggota keluarga yang menggunakan barang dan brand tersebut?</b> </label><br>
						<b>Produk Kendaraan dan Elektronik</b>
													
							<?php $situs_musik = ['Mobil','Motor']; 
							$field_merk = ['merk_car','merk_mb']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style='margin-left:-5px;'><?php echo $penggunaan_ss; ?></h4>
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							
										
										 <div class="form-group" >
										 <?php echo $array_familys[0]; ?>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%" onChange="change_<?php echo $field_merk[$in]; ?>('<?php echo $array_familys[1]; ?>','<?php echo $array_familys[0]; ?>')"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."|".$array_merks['LABEL']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
						
							<?php $situs_musik = ['Home Theater','LED TV','Air Conditioner','Water Heater','Mesin Cuci',
							'Alat-alat Kebugaran','Microwave Oven','Lemari es (Kulkas)','Audio','Desktop PC','Laptop','Tablet','Smartphone','Printer','Video game','Rice Cooker','DVD player','Kipas Angin','Sepeda']; 
							$field_merk = ['merk_hometht','merk_ledtv','merk_ac','merk_waterhtr','merk_washmch','merk_gym_tools','merk_mcwave','merk_refri','merk_audio','merk_pc','merk_laptop','merk_tablet','merk_smphone','merk_printer','merk_vidgame','merk_riceckr','merk_dvd','merk_fan','merk_bike']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style='margin-left:-5px;'><?php echo $penggunaan_ss; ?></h4>
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							
										
										 <div class="form-group" >
										 <?php echo $array_familys[0]; ?>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
	
							
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  G2. Untuk kepemilikan Mobil dan Motor, Sebutkan tahun perakitan mobil dan motor yang Bpk/ Ibu/ Sdr miliki?</b>
					  <br><br>
							<div class="row">
									<div class="col-md-6">
										<div class="row" id="list_car_own_kk">
												
										</div>
										<div class="row" id="list_car_own_ik">
												
										</div>
										<div class="row" id="list_car_own_ak1">
												
										</div>
										<div class="row" id="list_car_own_ak2">
												
										</div>
										<div class="row" id="list_car_own_ak3">
												
										</div>
										<div class="row" id="list_car_own_oki">
												
										</div>
										<div class="row" id="list_car_own_ski">
												
										</div>
										
									</div> 
									<div class="col-md-6">
										
										<div class="row" id="list_mb_own_kk">
												
										</div>
										<div class="row" id="list_mb_own_ik">
												
										</div>
										<div class="row" id="list_mb_own_ak1">
												
										</div>
										<div class="row" id="list_mb_own_ak2">
												
										</div>
										<div class="row" id="list_mb_own_ak3">
												
										</div>
										<div class="row" id="list_mb_own_oki">
												
										</div>
										<div class="row" id="list_mb_own_ski">
												
										</div>
									</div>
							</div>
							<br>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G3. Produk perbankan atau keuangan (Financial Literacy) berikut ini mana yang Bpk/ Ibu/ Sdr miliki atau manfaatkan? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tabungan ','Saham','Deposito','Reksadana','Kartu Kredit','Obligasi','KPR / KPA','Asuransi','Kredit Kepemilikan Mobil','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G3" id="G3_<?php echo $ii; ?>" value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G3lainnya" placeholder="Perbankan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G4. Layanan perbankan apa yang Bpk/ Ibu/ Sdr miliki atau manfaatkan?  </b> </label>
						 <div class="row">
							<?php $situs_musik = ['ATM','Phone Banking','Internet Banking','Mobile Banking','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G4" id="G4_<?php echo $ii; ?>" value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G4lainnya" placeholder="Perbankan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G5. Bpk /Ibu /Sdr tercatat sebagai nasabah bank apa saja? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['BRI','CIMB Niaga','Bank Mandiri','BTPN','BCA','Danamon','BNI','BTN','Bank Syariah Indonesia','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G5" id="G5_<?php echo $ii; ?>"  value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G5lainnya" placeholder="Bank Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g6-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G6. Jika Jawaban G3: “ASURANSI”, asuransi apa saja yang Bpk/ Ibu/ Sdr miliki atau manfaatkan?  </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Asuransi Kesehatan','Asuransi Jiwa','Asuransi Pendidikan','Asuransi Kendaraan','Lainnya'];
							$ii = 1;							
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G6" id="G6_<?php echo $ii; ?>" value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G6lainnya" placeholder="Asuransi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g7-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G7. Jika Jawaban G3: “ASURANSI”, Bpk /Ibu /Sdr tercatat sebagai nasabah asuransi apa saja?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['AIA Financial','FWD','Allianz','Manulife','AXA Mandiri','Jiwasraya','Cigna','Prudential','Sequislife Indonesia','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G7" id="G7_<?php echo $ii; ?>"  value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $ii; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G7lainnya" placeholder="Nama Asuransi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G8. Jenis alat pembayaran Non Tunai apa saja yang masih Bpk/ Ibu/ Sdr gunakan hingga saat ini? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['e-Money (uang elektronik – berwujud kartu)','e-Wallet (dompet virtual – berbasis aplikasi)','Kartu ATM / Debit','Kartu Kredit','Kartu Prabayar (prepaid)','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G8" id="G8_<?php echo $ii; ?>" value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="G8lainnya" placeholder="Pembayaran Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g9-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G9. Jika Jawaban G8: “E-WALLET”, Sebutkan e-Wallet yang MASIH AKTIF Bpk/ Ibu/ Sdr gunakan hingga saat ini?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Gopay','LinkAja','OVO','Dana','DOKU','Sakuku','Paytren','i.saku','Flip','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G9" id="G9_<?php echo $ii; ?>" value="<?php echo $ii; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G9lainnya" placeholder="E-WALLET Lainnya">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G10. Dalam melakukan pembayaran Non Tunai, Bpk/ Ibu/ Sdr lebih sering memanfaatkan pembayaran dengan debit, kartu kredit atau e-wallet? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Debit','Kartu Kredit','E-Wallet']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="g10" id="g10_<?php echo $i; ?>" value="<?php echo $i; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>

                  </form>
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
									
									<h4><label for="exampleInputEmail1">Proses survey telah selesai, 
data sudah tersimpan </label></h4>
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
				 <button type="button" class="btn btn-success btn-md" onClick="before_survey(0)">Sebelumnya</button>
                  <button type="button" class="btn btn-success btn-md" id="btn_next" onClick="next_survey(1)">Selanjutnya</button>
                 
                </div>
              </div>
            
            </div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name" placeholder="">
					<input type="hidden" class="form-control" id="field_name12" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
		
			//start_survey();
			get_respondent();

			setInterval(myTimer, 10000);

		 // if ($("#datepicker-popup").length) {
			// $('#datepicker-popup').datepicker({
			 // // enableOnReadonly: true,
			 // // todayHighlight: true,
			  // format: "yyyy-mm-dd",
				// //autoclose: true
			// });
		  // }
			
		
			var family_kk = 0;
			var family_ik = 0;
			var family_ak1 = 0;
			var family_ak2 = 0;
			var family_ak3 = 0;
			var family_oki = 0;
			var family_ski = 0;
			
			<?php foreach($data_r1 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.$vvs.'").prop("checked", true);';
					}
				}
				 
			} ?>
			
			<?php foreach($data_r2 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.$vvs.'").prop("checked", true);';
					}
				}
				 
			} ?>
			
			<?php foreach($data_r3 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}
				 
			} ?>			
			
			<?php foreach($data_r4 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}
				 
			} ?>
			
			<?php foreach($data_r5 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}
				 
			} ?>
			
			<?php foreach($data_r6 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.$data_r1s['value'].'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}
				 
			} ?>
			
			<?php foreach($data_r7 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.(str_replace(' ','_',$data_r1s['value'])).'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}elseif($data_r1s['type_input'] == 3){
					$dr = substr($data_r1s['value'], 0, -1);
					$vv = explode(',',$dr);
					$str_data = "";
					foreach($vv as $vvs){
						
						$str_data .="'".$vvs."',";
						
						
					}
					$drs = substr($str_data, 0, -1);
					echo "var array_suh = [".$drs."];";
					echo "var selects= $('#".$data_r1s['code_question']."');";
					echo "selects.val(array_suh).trigger('change');";
				}
				 
			} ?>
			
			<?php foreach($data_r8 as $data_r1s){ 
				//echo '$("#'.$data_r1s['code_question'].'_'.$data_r1s['value'].'").prop("checked", true);';
				if($data_r1s['type_input'] == 0){
					echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$data_r1s['value'])).'").prop("checked", true);';
				}elseif($data_r1s['type_input'] == 1){
					echo '$("#'.$data_r1s['code_question'].'").val("'.(str_replace(' ','_',$data_r1s['value'])).'");';
				}elseif($data_r1s['type_input'] == 2){
					
					$vv = explode(',',$data_r1s['value']);
					foreach($vv as $vvs){
						echo '$("#'.$data_r1s['code_question'].'_'.(str_replace(' ','_',$vvs)).'").prop("checked", true);';
					}
				}elseif($data_r1s['type_input'] == 3){
					$dr = substr($data_r1s['value'], 0, -1);
					
					if($dr <> ''){
					
						$vv = explode(',',$dr);
						$str_data = "";
						
						if($data_r1s['sub_question'] == 'sp'){
							foreach($vv as $vvs){
								
								//if($vvs <> ''){
									$spd = explode('_',$vvs);
									//print_r($spd);
									
									$str_data .="'".$vvs."|".$spd[2]."',";
								//}
							}
						}else{
							foreach($vv as $vvs){
								$str_data .="'".$vvs."',";
							}
						}
						

						$drs = substr($str_data, 0, -1);
						echo "var array_suh = [".$drs."];";
						echo "var selects= $('#".$data_r1s['code_question']."');";
						echo "selects.val(array_suh).trigger('change');";
						//echo "change_merk_car(fm,sm_str)";
					
					}
				}
				 
			} ?>
			
			
			
			if ($('#a4_check_family_kk').is(':checked')) {
				$('.kk').show();
				//alert("checked");
			}
			
			if ($('#a4_check_family_ik').is(':checked')) {
				$('.ik').show();
				//alert("checked");			
			}
			
			if ($('#a4_check_family_ak1').is(':checked')) {
				$('.ak1').show();
				//alert("checked");			
			}
			
			if ($('#a4_check_family_ak2').is(':checked')) {
				$('.ak2').show();
				//alert("checked");			
			}
			
			if ($('#a4_check_family_ak3').is(':checked')) {
				$('.ak3').show();			
			}
			
			if ($('#a4_check_family_oki').is(':checked')) {
				$('.oki').show();
				//alert("checked");			
			}
			
			if ($('#a4_check_family_ski').is(':checked')) {
				$('.ski').show();
				//alert("checked");			
			}
			
			
			//var $selectAll = $( "input:radio[name=c6]" );
			if($('#c6_Ya').is(':checked')){
					$("#c7-pg").show();
			}
			
			if($('#c7_analog').is(':checked')){
					$("#c81-pg").hide();
					$("#c82-pg").hide();
					$("#c9-pg").hide();
					$("#c10-pg").hide();
					$("#c111-pg").show();
					$("#c112-pg").show();
			}
			
			if($('#c7_digital').is(':checked')){
						$("#c81-pg").show();
					$("#c82-pg").show();
					$("#c9-pg").show();
					//$("#c10-pg").show();
					$("#c111-pg").hide();
					$("#c112-pg").hide();
			}
			
			if($('#c9_Ya').is(':checked')){
					$("#c10-pg").show();
			}
			
			if($('#f1_Ya').is(':checked')){
					$("#f2-pg").show();
					$("#f3-pg").show();
					$("#f4-pg").show();
			}

			if($('#f7_Ya').is(':checked')){
					$("#f8-pg").show();
					$("#f9-pg").show();
			}
			
			if($('#F10-k5_1').is(':checked')){
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
			}
			
			if($('#F10-d5_1').is(':checked')){
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
			}
			
			if($('#F10-d2_1').is(':checked')){
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
			}
			
			if($('#F10-k7_1').is(':checked')){
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
			}
			
			if($('#F10-k1_1').is(':checked')){
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
			}
			
			if($('#F10-d1_1').is(':checked')){
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
			}
			
			if($('#F10-d4_1').is(':checked')){
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
			}
			
			if($('#F10-d6_1').is(':checked')){
					$("#f26-pg").show();
			}
			
			if($('#f11_0').is(':checked')){
					$("#f12-pg").show();
			}
			
			if($('#f16_Berlangganan').is(':checked')){
					$("#f17-pg").show();
			}
			
			if($('#f27_chk3_1').is(':checked')){
					$("#f28-pg").show();
					$("#f29-pg").show();
					$("#f30-pg").show();
			}
			
			if($('#f27_chk1_1').is(':checked')){
					$("#f31-pg").show();
					$("#f32-pg").show();
			}
			
			if($('#f27_chk4_1').is(':checked')){
					$("#f33-pg").show();
					$("#f34-pg").show();
			}
			
			if($('#f36_pembelajaran').is(':checked')){
					$("#f37-pg").show();
			}
			
			if($('#f36_musik_audio_streaming').is(':checked')){
					$("#f38-pg").show();
					$("#f39-pg").show();
					$("#f40-pg").show();
					$("#f41-pg").show();
					$("#f42-pg").show();
			}
			
			if($('#f36_video_streaming').is(':checked')){
					$("#f43-pg").show();
					$("#f44-pg").show();
					$("#f45-pg").show();
					$("#f46-pg").show();
					$("#f47-pg").show();
			}
			
			if($('#f36_games').is(':checked')){
					$("#f48-pg").show();
					$("#f49-pg").show();
					$("#f50-pg").show();
					$("#f51-pg").show();
					$("#f52-pg").show();
			}
			
			if($('#f53_2_1').is(':checked')){
					$("#f54-pg").show();
			}
			
			if($('#f53_4_1').is(':checked')){
					$("#f55-pg").show();
			}
			
			if($('#f53_5_1').is(':checked')){
					$("#f56-pg").show();
			}
			
			if($('#F59_1').is(':checked')){
				$("#f60-pg").show();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f64new-pg").hide();
					$("#f65-pg").hide();
			}
			
			if($('#F59_3').is(':checked')){
				$("#f60-pg").show();
					$("#f61-pg").show();
					$("#f62-pg").show();
					$("#f63-pg").show();
					$("#f64-pg").show();
					$("#f64new-pg").show();
					$("#f65-pg").show();
					$("#f60-pg").hide();
			}
			
			if($('#F59_2').is(':checked')){
				$("#f60-pg").hide();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f64new-pg").hide();
					$("#f65-pg").hide();
			}
			
			
			if($('#f65_E-Wallet').is(':checked')){
					$("#f66-pg").show();
			}
			
			if($('#f73_Melalui_online_Aplikasi').is(':checked')){
					$("#f74-pg").show();
			}
			
			if($('#F82_Ya').is(':checked')){
					$("#f83-pg").show();
			}
			
			if($('#F84_Ya').is(':checked')){
					$("#f85-pg").show();
			}
			
			if($('#F85_Bimbingan_Belajar').is(':checked')){
					$("#f86-pg").show();
					$("#f87-pg").show();
			}
			
			if($('#F87_Ya').is(':checked')){
					$("#f88-pg").show();
			}
			
			if($('#F96_Ya').is(':checked')){
					$("#f97-pg").show();
					$("#f98-pg").show();
			}
			
			if($('#F67_Ya').is(':checked')){
					$("#f68-pg").show();
					$("#f69-pg").show();
					$("#f70-pg").show();
					$("#f71-pg").show();
					$("#f72-pg").show();
					$("#f73-pg").show();
			}
			
			if($('#f11_0').is(':checked')){
					$("#f12-pg").show();
			}
			

			if($('#G8_2').is(':checked')){

				$("#g9-pg").show();

			}

			
			
			
			//document.gendersForm.gender.value="F";

		/*	$("#merk_stump").on("change", function () {
				id = $(this).val();

				var dre = ['stump_rinnai','stump_hock']
				$("#merk_stump option[value = '" + dre + "']").prop("selected",true);

				alert(id);
			}) */
			<?php 
				$field_merk = ['merk_fan','merk_vc','merk_waterhtr','merk_pump','merk_lamp','merk_stump','merk_ledtv','merk_ac','merk_refri','merk_mcwave','merk_riceckr']; 
				$field_merk_raw = ['fan','vc','wh','pump','lp','stump','led','ac','refri','mcw','riceckr']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			

			var firstSelect<?php echo $is; ?> = <?php echo '$("#'.$penggunaan_ss.'")'; ?>;
			firstSelect<?php echo $is; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelect<?php echo $is; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name").val(<?php echo '"'.$penggunaan_ss.'"'; ?>);
					 $("#field_name12").val(<?php echo '"'.$field_merk_raw[$is].'"'; ?>);
					 $("#item_lainnya").val("");
					$("#modal_new_item").modal("show");
				}
				
			});
			
			<?php $is++; } ?>
			
					
			$("#save_new_item").click(function() {
				var field = $("#field_name").val();
				var field2 = $("#field_name12").val();
				var item_new = $("#item_lainnya").val();
				var res = field.split("_");
				
				$("#"+field+" option[value='oo']").remove();
				
				var html = "<option value='"+field2+"_"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
				
				$("#"+field).append(html);
				
				var selects= $("#"+field);
				var merk_vals = $("#"+field).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = field2+"_"+item_new;				
				selects.val(array_suh).trigger("change");
				
				 $("#modal_new_item").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				
				
				formData.append('field', field);
				formData.append('value', field2+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
			
			
			<?php 
				$field_merk = ['merk_amdk','merk_softdrink','merk_cereal','merk_biscuit','merk_bakery','merk_candy','merk_instant_noodle','merk_milk','merk_coffee','merk_tea','merk_flavoring','merk_soy_sauce','merk_ketchup','merk_toothpaste','merk_body_wash','merk_face_wash','merk_hand_wash','merk_shampoo','merk_body_lotion','merk_cloth_deo','merk_detergen','merk_softener','merk_lamp','merk_battery','merk_shaver','merk_insectrepell','merk_airfresh','merk_stationary','merk_paper','merk_hair_cond','merk_hair_mask','merk_hair_spray','merk_hair_vit','merk_cream_bb','merk_cream_night','merk_cream_white','merk_face_powder','merk_eyebrow','merk_mascara','merk_foundation','merk_eyeshadow','merk_sunblock','merk_body_scrub','merk_body_butter','merk_parf_edt','merk_parf_edp','merk_slimming','merk_hometht','merk_ledtv','merk_ac','merk_waterhtr','merk_washmch','merk_gym_tools','merk_mcwave','merk_refri','merk_audio','merk_pc','merk_laptop','merk_tablet','merk_smphone','merk_printer','merk_vidgame','merk_riceckr','merk_dvd','merk_fan','merk_bike']; 
				$field_raw_merk = ['amdk','sd','cr','bsc','bsc','brd','nd','m','coffee','tea','fl','kcp','ketchup','tp','bw','fw','hw','shm','bl','cd','dg','softener','lp','bt','shv','instc','af','st','ppr','hc','hm','hsp','hv','bb','cn','cw','fp','eyb','msc','fdn','eys','sb','bds','bdb','edt','edp','slimming','ht','led','ac','wh','wn','gt','mcw','rfr','au','pc','lap','tab','smp','prnt','vg','rck','dvd','fan','bike']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			
			<?php foreach($array_family as $array_familys){ ?>
			var firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?> = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'")'; ?>;
			firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name2").val(<?php echo '"'.$penggunaan_ss.'"'; ?>);
					 $("#field_name3").val(<?php echo '"'.$array_familys[1].'"'; ?>);
					 $("#field_name4").val(<?php echo '"'.$field_raw_merk[$is].'"'; ?>);
					  $("#item_lainnya2").val("");
					$("#modal_new_item2").modal("show");
				}
			
			});
			
			<?php } $is++; } ?>
			
						
			$("#save_new_item2").click(function() {
				var field = $("#field_name2").val();
				var field3 = $("#field_name3").val();
				var field4 = $("#field_name4").val();
				var item_new = $("#item_lainnya2").val();
				var res = field.split("_");
			
				<?php foreach($array_family as $array_familys){ 
				
					echo '$("#"+field+"_'.$array_familys[1].' option[value=\'oo\']").remove();';
					?>
									
					var html = "<option value='"+field4+"_"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
				
				<?php 
					echo '$("#"+field+"_'.$array_familys[1].'").append(html);';
				} ?>
				
				var selects= $("#"+field+"_"+field3);
				var merk_vals = $("#"+field+"_"+field3).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = field4+"_"+item_new;				
				
				//console.log(array_suh);
				
				selects.val(array_suh).trigger("change");
				
				$("#modal_new_item2").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				formData.append('field', field);
				formData.append('value', field4+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
	
	
	
			<?php 
				$field_merk = ['merk_car','merk_mb']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			
			<?php foreach($array_family as $array_familys){ ?>
			var firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?> = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'")'; ?>;
			firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name33").val(<?php echo '"'.$penggunaan_ss.'_'.$array_familys[1].'"'; ?>);
					 $("#field_name34").val(<?php echo '"'.$array_familys[1].'"'; ?>);
					  $("#item_lainnya3").val("");
					$("#modal_new_item3").modal("show");
				}
				
			});
			
			<?php } $is++; } ?>
			
						
			$("#save_new_item3").click(function() {
				var field = $("#field_name33").val();
				var field2 = $("#field_name34").val();
				var item_new = $("#item_lainnya3").val();
				var res = field.split("_");
				
				<?php foreach($array_family as $array_familys){ 
				
					echo '$("#"+res[0]+"_"+res[1]+"_'.$array_familys[1].' option[value=\'oo\']").remove();';
					?>
				
					$("#"+res[0]+"_"+res[1]+" option[value='oo']").remove();
					
					var html = "<option value='"+res[0]+"_"+res[1]+"_"+item_new+"|"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
					
					$("#"+res[0]+"_"+res[1]).append(html);
				
				
				<?php 
					echo '$("#"+res[0]+"_"+res[1]+"_'.$array_familys[1].'").append(html);';
				} ?>
				
				var selects= $("#"+field);
				var merk_vals = $("#"+field).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = res[0]+"_"+res[1]+"_"+item_new+"|"+item_new;				
				
				//console.log(array_suh);
				
				selects.val(array_suh).trigger("change");
				
				 $("#modal_new_item3").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				formData.append('field', res[0]+"_"+res[1]);
				formData.append('value', res[0]+"_"+res[1]+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
			


			$("#a4_check_family_kk").change(function() {
				if(this.checked) {
					$(".kk").show();
				}else{
					$(".kk").hide();
				}
			});
			
			$("#a4_check_family_ik").change(function() {
				if(this.checked) {
					$(".ik").show();
				}else{
					$(".ik").hide();
				}
			});
			
			$("#a4_check_family_ak1").change(function() {
				if(this.checked) {
					$(".ak1").show();
				}else{
					$(".ak1").hide();
				}
			});
			
			$("#a4_check_family_ak2").change(function() {
				if(this.checked) {
					$(".ak2").show();
				}else{
					$(".ak2").hide();
				}
			});
			
			$("#a4_check_family_ak3").change(function() {
				if(this.checked) {
					$(".ak3").show();
				}else{
					$(".ak3").hide();
				}
			});
			
			$("#a4_check_family_oki").change(function() {
				if(this.checked) {
					$(".oki").show();
				}else{
					$(".oki").hide();
				}
			});
			
			$("#a4_check_family_ski").change(function() {
				if(this.checked) {
					$(".ski").show();
				}else{
					$(".ski").hide();
				}
			});
		
		//id_pelanggan
		
			var $selectAll = $( "input:radio[name=c6]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Tidak'){
					$("#c7-pg").hide();
					$("#c81-pg").hide();
					$("#c82-pg").hide();
					$("#c9-pg").hide();
					//$("#c10-pg").hide();
					$("#c111-pg").hide();
					$("#c112-pg").hide();
				}else{
					$("#c7-pg").show();
					/*$("#c81-pg").show();
					$("#c82-pg").show();
					$("#c9-pg").show();
					$("#c10-pg").show();
					$("#c111-pg").show();
					$("#c112-pg").show();*/
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=c7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'analog'){
					$("#c81-pg").hide();
					$("#c82-pg").hide();
					$("#c9-pg").hide();
					$("#c10-pg").hide();
					$("#c111-pg").show();
					$("#c112-pg").show();
				}else{
					$("#c81-pg").show();
					$("#c82-pg").show();
					$("#c9-pg").show();
					//$("#c10-pg").show();
					$("#c111-pg").hide();
					$("#c112-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=c9]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#c10-pg").show();
				}else{
					$("#c10-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=f1]" );
			$selectAll.on( "change", function() {
				//alert($(this).val());
				if( $(this).val() == 'Ya'){
					$("#f2-pg").show();
					$("#f3-pg").show();
					$("#f4-pg").show();
				}else{
					$("#f2-pg").hide();
					$("#f3-pg").hide();
					$("#f4-pg").hide();
				}
									 
			});
			
			/*var $selectAll = $( "input:radio[name=f7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f8-pg").show();
					$("#f9-pg").show();
					$("#f4-pg").show();
				}else{
					$("#f8-pg").hide();
					$("#f9-pg").hide();
					$("#f4-pg").hide();
				}
									 
			});*/
			
			var $selectAll = $( "input:radio[name=f7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f8-pg").show();
					$("#f9-pg").show();
				}else{
					$("#f8-pg").hide();
					$("#f9-pg").hide();
				}
									 
			});
			
			$("#F10-k5_1").change(function() {
				if(this.checked) {
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f11-pg").hide();
					$("#f12-pg").hide();
					$("#f13-pg").hide();
					$("#f14-pg").hide();
					$("#f15-pg").hide();
						$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#F10-d5_1").change(function() {
				if(this.checked) {
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f11-pg").hide();
					$("#f12-pg").hide();
					$("#f13-pg").hide();
					$("#f14-pg").hide();
					$("#f15-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#F10-k2_1").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#F10-d2_1").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#F10-d7_1").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
					
				}
			});
			
			$("#F10-k7_1").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});

			
			$("#F10-k1_1").change(function() {
				if(this.checked) {
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
				}else{
					$("#f22-pg").hide();
					$("#f21-pg").hide();
					$("#f20-pg").hide();
				}
			});
			
			$("#F10-d1_1").change(function() {
				if(this.checked) {
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
				}else{
					$("#f22-pg").hide();
					$("#f21-pg").hide();
					$("#f20-pg").hide();
				}
			});
			
			$("#F10-d4_1").change(function() {
				if(this.checked) {
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#F10-d6_1").change(function() {
				if(this.checked) {
					$("#f26-pg").show();
				}else{
					$("#f26-pg").hide();
				}
			});
			
			$("#f11_0").change(function() {
				if(this.checked) {
					$("#f12-pg").show();
				}else{
					$("#f12-pg").hide();
				}
			});
			
			$("#f16_Berlangganan").change(function() {
				if(this.checked) {
					$("#f17-pg").show();
				}else{
					$("#f17-pg").hide();
				}
			});

			$("#f27_chk3_1").change(function() {

				if(this.checked) {
					$("#f28-pg").show();
					$("#f29-pg").show();
					$("#f30-pg").show();
				}else{
					$("#f28-pg").hide();
					$("#f29-pg").hide();
					$("#f30-pg").hide();
				}
			});

			$("#f27_chk1_1").change(function() {

				if(this.checked) {
					$("#f31-pg").show();
					$("#f32-pg").show();
				}else{
					$("#f31-pg").hide();
					$("#f32-pg").hide();
				}
			});

			$("#f27_chk4_1").change(function() {

				if(this.checked) {
					$("#f33-pg").show();
					$("#f34-pg").show();
				}else{
					$("#f33-pg").hide();
					$("#f34-pg").hide();
				}
			});
			
			$("#f36_pembelajaran").change(function() {
				if(this.checked) {
					$("#f37-pg").show();
				}else{
					$("#f37-pg").hide();
				}
			});
			
			$("#f36_musik_audio_streaming").change(function() {
				if(this.checked) {
					$("#f38-pg").show();
					$("#f39-pg").show();
					$("#f40-pg").show();
					$("#f41-pg").show();
					$("#f42-pg").show();
				}else{
					$("#f38-pg").hide();
					$("#f39-pg").hide();
					$("#f40-pg").hide();
					$("#f41-pg").hide();
					$("#f42-pg").hide();
				}
			});
			
			$("#f36_video_streaming").change(function() {
				if(this.checked) {
					$("#f43-pg").show();
					$("#f44-pg").show();
					$("#f45-pg").show();
					$("#f46-pg").show();
					$("#f47-pg").show();
				}else{
					$("#f43-pg").hide();
					$("#f44-pg").hide();
					$("#f45-pg").hide();
					$("#f46-pg").hide();
					$("#f47-pg").hide();
				}
			});
			
			$("#f36_games").change(function() {
				if(this.checked) {
					$("#f48-pg").show();
					$("#f49-pg").show();
					$("#f50-pg").show();
					$("#f51-pg").show();
					$("#f52-pg").show();
				}else{
					$("#f48-pg").hide();
					$("#f49-pg").hide();
					$("#f50-pg").hide();
					$("#f51-pg").hide();
					$("#f52-pg").hide();
				}
			});	
			
			$("#f53_2_1").change(function() {
				if(this.checked) {
					$("#f54-pg").show();
				}else{
					$("#f54-pg").hide();
				}
			});
			
			$("#f53_4_1").change(function() {
				if(this.checked) {
					$("#f55-pg").show();
				}else{
					$("#f55-pg").hide();
				}
			});
			
			$("#f53_5_1").change(function() {
				if(this.checked) {
					$("#f56-pg").show();
				}else{
					$("#f56-pg").hide();
				}
			});
			
			$("#f65_E-Wallet").change(function() {
				if(this.checked) {
					$("#f66-pg").show();
				}else{
					$("#f66-pg").hide();
				}
			});
			
			$("#f73_Melalui_online_Aplikasi").change(function() {
				if(this.checked) {
					$("#f74-pg").show();
				}else{
					$("#f74-pg").hide();
				}
			});
			
			$("#F82_Ya").change(function() {
				if(this.checked) {
					$("#f83-pg").show();
				}else{
					$("#f83-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F82]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f83-pg").show();
				}else{
					$("#f83-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=F84]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f85-pg").show();
				}else{
					$("#f85-pg").hide();
				}
									 
			});
			
			$("#F85_Bimbingan_Belajar").change(function() {
				if(this.checked) {
					$("#f86-pg").show();
					$("#f87-pg").show();
				}else{
					$("#f86-pg").hide();
					$("#f87-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F87]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f88-pg").show();
				}else{
					$("#f88-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=F96]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Tidak'){
					$("#f97-pg").hide();
					$("#f98-pg").hide();
				}else{
					$("#f97-pg").show();
					$("#f98-pg").show();
				}
									 
			});
		
			var $selectAll = $( "input:radio[name=F67]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Tidak'){
					$("#f68-pg").hide();
					$("#f69-pg").hide();
					$("#f70-pg").hide();
					$("#f71-pg").hide();
					$("#f72-pg").hide();
					$("#f73-pg").hide();
				}else{
					$("#f68-pg").show();
					$("#f69-pg").show();
					$("#f70-pg").show();
					$("#f71-pg").show();
					$("#f72-pg").show();
					$("#f73-pg").show();
				}
									 
			});
			
			$("#G38").change(function() {
				if(this.checked) {
					$("#g6-pg").show();
					$("#g7-pg").show();
				}else{
					$("#g6-pg").hide();
					$("#g7-pg").hide();
				}
			});
			
			$("#G8_2").change(function() {
				if(this.checked) {
					$("#g9-pg").show();
				}else{
					$("#g9-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F59]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == '1'){
					$("#f60-pg").show();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f64new-pg").hide();
					$("#f65-pg").hide();
				}else if( $(this).val() == '3'){
					$("#f61-pg").show();
					$("#f62-pg").show();
					$("#f63-pg").show();
					$("#f64-pg").show();
					$("#f64new-pg").show();
					$("#f65-pg").show();
					$("#f60-pg").hide();
				}else{
					$("#f60-pg").hide();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f64new-pg").hide();
					$("#f65-pg").hide();
				}
									 
			});

// $("#page_identiatas_responden").hide();
						 // $("#page_demografi_responden").hide();
						 // $("#page_profile_rumah_tangga").hide();
						 // $("#page_internet_dan_data").hide();
						 // $("#page_menonton_televisi").hide();
						 // $("#page_program_acara_televisi").hide();
						 // $("#page_kesan_pemirsa").hide();
						 // $("#page_kegemaran_dan_perilaku").hide();
						 // $("#page_product_ownership").hide();
						//swal.close();

		
			
		
		});
		
		
		</script>
		
		<script>
		
			//var page_curr = 2;
			var page_curr = <?php echo ($kuisioner[0]['curr_page']) ?>;
			var page_currss = <?php echo ($kuisioner[0]['curr_page']-1) ?>;
			
			if(page_currss == 1){
				
			}else if(page_currss == 2){
				
							$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").show('1000');
						$("#page_demografi_responden").show('1000');
						$("#page_profile_rumah_tangga").show('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
							
				//next_survey(1);
			}else if(page_currss == 3){
				
							$("#survey_page_1").hide('1000');
										$("#page_identiatas_responden").hide('1000');
										$("#page_demografi_responden").hide('1000');
										$("#page_profile_rumah_tangga").hide('1000');
										$("#page_internet_dan_data").show('1000');
										$("#page_menonton_televisi").hide('1000');
										$("#page_program_acara_televisi").hide('1000');
										$("#page_kesan_pemirsa").hide('1000');
										$("#page_kegemaran_dan_perilaku").hide('1000');
										$("#page_product_ownership").hide('1000');
										
										$("html, body").animate({scrollTop: 0}, 400);
							
				//next_survey(1);
			}else if(page_currss == 4){
				
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").show('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
				//next_survey(1);
			}else if(page_currss == 5){
				
						$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").show('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
				//next_survey(1);
			}else if(page_currss == 6){
				
						$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").show('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
				//next_survey(1);
			}else if(page_currss == 7){
				
					$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").show('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
				//next_survey(1);
			}else if(page_currss == 8){
				
					$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").show('1000');

							//$("#btn_next").html('Selesai');
							
							$("html, body").animate({scrollTop: 0}, 400);
				//next_survey(1);
			}
		
			function myTimer() {
			  // var d = new Date();
			  // document.getElementById("demo").innerHTML = d.toLocaleTimeString();
			 // $('#demo').html(d.toLocaleTimeString()+' '+page_curr);
			  
			  if(page_curr == 3){
				  
				  var formData = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData.append('id_pelanggan', $('#id_pelanggan').val());
							formData.append('kota_survey', $('#kota_survey').val());
							formData.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData.append('nama_respondent', $('#nama_respondent').val());
							formData.append('alamat_rumah', $('#alamat_rumah').val());
							formData.append('kecamatan', $('#kecamatan').val());
							formData.append('kelurahan', $('#kelurahan').val());
							formData.append('no_tel', $('#no_tel').val());
							formData.append('no_hp', $('#no_hp').val());
							formData.append('email', $('#email').val());
							formData.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData.append('form_part', 0);
							formData.append('curr_page', 3);
							
							<?php foreach($field_r1 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r2 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
				  
			  }else if(page_curr == 4){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 1);
							formData2.append('curr_page', 4);
							
							<?php foreach($field_r3 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }else if(page_curr == 5){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 2);
							formData2.append('curr_page', 5);
							
							<?php foreach($field_r4 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }else if(page_curr == 6){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 3);
							formData2.append('curr_page', 6);
							
							<?php foreach($field_r5 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }else if(page_curr == 7){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 4);
							formData2.append('curr_page', 7);
							
							<?php foreach($field_r6 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }else if(page_curr == 8){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 5);
							formData2.append('curr_page', 8);
							
							<?php foreach($field_r7 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }else if(page_curr == 9){
				  
				  	var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 6);
							formData2.append('curr_page', 9);
							
							<?php foreach($field_r8 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
				  
			  }
			  
			  
			  
			}


			

			function merk_item(){
				var merk_vals = $('#merk_stump').val();
				var array_suh = new Array();
				var int_lainnya = 0;
				
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}		
				//$('#merk_stump').select2("val", array_suh);
				/*setTimeout(function() {
					$('#merk_stump').val(array_suh).change();
					
					if(int_lainnya==1){
						alert('new_item');
					}
				}, 0);*/

				

			}

			function selectAge(){
				
				//alert(age);
				var age = $('#r2lainnya').val();
				
				if(age > 16 && age < 26){
					$("#r2_17-25").prop("checked", true);
				}else if(age > 25 && age < 40){
					$("#r2_26-39").prop("checked", true);
				}else if(age > 39 && age < 56){
					$("#r2_40-55").prop("checked", true); 
				}else{
					$("#r2_56-60").prop("checked", true);
				}
			} 

			function get_respondent(){
				
			//alert('asasaa');
				
				var datapost = {
				//"id": $('#id_pelanggan').val()
				"id": <?php echo $outbound[0]['cardno']; ?>
			  };
				var array_sc = ["","*"];
				
				      $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>survey/get_respondent",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
						
						//console.log(response[1].screening);
						
							$('#kota_survey').val(response[0].KOTA_X);
							$('#telkom_regional').val("0"+response[0].REG);
						
							$('#nama_respondent').val(response[0].NAMA_PELANGGAN);
							$('#alamat_rumah').val(response[0].ALAMAT);
							$('#kelurahan').val(response[0].KELURAHAN_DESA_DAGRI);
							$('#kecamatan').val(response[0].KECAMATAN_DAGRI);
							$('#no_tel').val(response[0].NO_HP_MYIH);
							$('#no_hp').val(response[0].NO_HP);
							$('#email').val();
							
							//alert(length.response);
							
							for(var i=0;i<response.length;i++){
								
								
								
								var numbers = i+1;
								$('#program_name_'+numbers).html(response[i].PROGRAM+""+array_sc[response[i].screening]);
								$('#c12_channel'+numbers).val(response[i].PROGRAM);
								$('#c12_program_skala'+numbers).val(response[i].PROGRAM);
								$('#progra_skala_'+numbers).html(numbers+'. '+response[i].PROGRAM);
								
							}
							//console.log(response[0].NAMA_PELANGGAN);
						  // swal({
							// title: 'Success!',
							// text: response.message,
							// type: 'success',
							// showCancelButton: false,
							// confirmButtonText: 'Ok'
						  // }).then(function() {
							// window.location.href = "<?php echo base_url('jurnal'); ?>";
						  // })

						  // if (response.status == "success") {

						  // } else {
							// swal("Failed!", response.message, "error");
						  // }
						}
					  });
				
			}

			function change_merk_car(fm,sm_str){

				//alert('asasasa');

				var vals = '';
				var merk_vals = $('#merk_car_'+fm).val();
				
				//console.log(merk_vals);
			 
				var html = '<div class="col-md-12"><span id="mobilheader'+fm+'"><b>Mobil '+sm_str+'</b></span></div> ';

				for(var i=0; i<merk_vals.length; i++){

					var spl =merk_vals[i].split("|");

					var idn = i+1;
						html += '<div class="col-md-6">	<span id="mobil'+idn+'">'+spl[1]+'</span></div> ';
						html += '<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="G21lainnya'+idn+'_'+fm+'" placeholder="Tahun Perakitan"></div></div>';
				}

				$('#list_car_own_'+fm).html(html);


			}

			function change_merk_mb(fm,sm_str){

//alert('asasasa');

				var vals = '';
				var merk_vals = $('#merk_mb_'+fm).val();

				var html = '<div class="col-md-12"><span id="motorheader'+fm+'"><b>Motor '+sm_str+'</b></span></div> ';

				for(var i=0; i<merk_vals.length; i++){

					var spl =merk_vals[i].split("|");

					var idn = i+1;
						html += '<div class="col-md-6">	<span id="mb'+idn+'">'+spl[1]+'</span></div> ';
						html += '<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="G22lainnya'+idn+'_'+fm+'" placeholder="Tahun Perakitan"></div></div>';
				}

				$('#list_mb_own_'+fm).html(html);


			}

			function expense_family(){
				
				//alert('sssss');
				
								var age = $('#a6p').val();
								
								if(age >= 1 && age < 2000000){
									$("#a6_2-").prop("checked", true);
								}else if(age >= 2000000 && age <= 3000000){
									$("#a6_2-3").prop("checked", true);
								}else if(age > 3000000 && age <= 4500000){
									$("#a6_3-45").prop("checked", true);
								}else if(age > 4500000 && age <= 6000000){
									$("#a6_45-6").prop("checked", true);
								}else if(age > 6000000 && age <= 9000000){
									$("#a6_6-9").prop("checked", true);
								}else{
									$("#a6_9s").prop("checked", true);
								}
								

							}	
			function expense_video(){
				
				//alert('sssss');
				
								var age = $('#F45lainnya').val();
								
								if(age < 0){
									$("#F451").prop("checked", true);
								}else if(age >= 1 && age < 25000){
									$("#F452").prop("checked", true);
								}else if(age >= 25000 && age < 50000){
									$("#F453").prop("checked", true);
								}else if(age >= 50000 && age < 75000){
									$("#F454").prop("checked", true);
								}else if(age >= 75000 && age < 100000){
									$("#F455").prop("checked", true);
								}else if(age >= 100000 && age < 150000){
									$("#F456").prop("checked", true);
								}else{
									$("#F457").prop("checked", true);
								}
								
							}	


			function expense_audio(){
				
				//alert('sssss');
				
								var age = $('#F40lainnya').val();
								
								if(age < 0){
									$("#F40_0").prop("checked", true);
								}else if(age >= 1 && age < 25000){
									$("#F40_25000").prop("checked", true);
								}else if(age >= 25000 && age < 50000){
									$("#F40_25000–50000").prop("checked", true);
								}else if(age >= 50000 && age < 75000){
									$("#F40_25000–50000").prop("checked", true);
								}else if(age >= 75000 && age < 100000){
									$("#F40_75001-100000").prop("checked", true);
								}else if(age >= 100000 && age < 150000){
									$("#F40_100001-150000").prop("checked", true);
								}else{
									$("#F40_150000s").prop("checked", true);
								}
								
							}	

			function expense_game(){
				
//alert('sssss');

				var age = $('#F49lainnya').val();
				
				if(age < 0){
					$("#F49_0").prop("checked", true);
				}else if(age >= 1 && age < 25000){
					$("#F49_25000").prop("checked", true);
				}else if(age >= 25000 && age < 50000){
					$("#F49_25000–50000").prop("checked", true);
				}else if(age >= 50000 && age < 75000){
					$("#F49_25000–50000").prop("checked", true);
				}else if(age >= 75000 && age < 100000){
					$("#F49_75001-100000").prop("checked", true);
				}else if(age >= 100000 && age < 150000){
					$("#F49_100001-150000").prop("checked", true);
				}else{
					$("#F49_150000s").prop("checked", true);
				}
				
			}	

			function data_expense(){
				
				var age = $('#b2lainnya').val();
				
				if(age < 50000){
					$("#b2_-5").prop("checked", true);
				}else if(age >= 50000 && age <= 100000){
					$("#b2_50-100").prop("checked", true);
				}else if(age > 100000 && age <= 150000){
					$("#b2_100-150").prop("checked", true);
				}else if(age > 150000 && age <= 200000){
					$("#b2_150-200").prop("checked", true);
				}else if(age > 200000 && age <= 300000){ 
					$("#b2_200-300").prop("checked", true);
				}else{
					$("#b2_300s").prop("checked", true);
				}
				
			}
			
			function tv_duration(){
				
				var age = $('#c2lainnya').val();
				
				if(age < 1){
					$("#c2_1-").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c2_1-2").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c2_2-4").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c2_4-6").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c2_6-8").prop("checked", true);
				}else{
					$("#c2_8s").prop("checked", true);
				}
				
			}

			function tv_duration_analog(){
				
				var age = $('#c111lainnya').val();
				
				if(age < 1){
					$("#c11_1-").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c11_1-2").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c11_2-4").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c11_4-6").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c11_6-8").prop("checked", true);
				}else{
					$("#c11_8s").prop("checked", true);
				}
				
			} function tv_duration_digital(){
			
				var age = $('#c81lainnya').val();
				
				if(age < 1){
					$("#c8_1-").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c8_1-2").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c8_2-4").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c8_4-6").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c8_6-8").prop("checked", true);
				}else{
					$("#c8_8s").prop("checked", true);
				}
				
			}

			function start_survey(){
				
				swal({
					title: 'Akan Memulai Survey ?',
					text: '',
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Ya',
					cancelButtonText: 'Tidak'
				  }).then(function() {

						 window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>";

				  });
				
				//alert('start');
				
			}
			
			function before_survey(page){
				
				//alert(page_curr);

				page_curr--;
				//alert(page_curr);
				
				if(page_curr == 3){
				
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").show('1000');
						$("#page_demografi_responden").show('1000');
						$("#page_profile_rumah_tangga").show('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');

						$("#info-na").hide('1000');
							
						$("html, body").animate({scrollTop: 0}, 400);
				}else if(page_curr == 4){
					$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").show('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
				}else if(page_curr == 5){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").show('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 6){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").show('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 7){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").show('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 8){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").show('1000');

						$("#btn_next").html('Selesai');
						
						$("html, body").animate({scrollTop: 0}, 400);
						
					}
			}
			
			function next_survey(page){
				
				//alert(page_curr);
				
					if(page_curr > 0 || page_curr < 9){
					
					// if(page == 0){
							// page_curr--;
						// }else{
							// //page_curr++;
						// }
						
					
					
					if(page_curr == 1){
						
						if(page == 0){
							page_curr--;
						}else{
							page_curr++;
						}
					//alert(page_curr);
					}else if(page_curr == 2){
						// $("#survey_page_1").hide('1000');
						// $("#page_identiatas_responden").show('1000');
						// $("#page_demografi_responden").show('1000');
						// $("#page_profile_rumah_tangga").show('1000');
						// $("#page_internet_dan_data").show('1000');
						// $("#page_menonton_televisi").show('1000');
						// $("#page_program_acara_televisi").show('1000');
						// $("#page_kesan_pemirsa").show('1000');
						// $("#page_kegemaran_dan_perilaku").show('1000');
						// $("#page_product_ownership").hide('1000');
						$("#info-na").hide('1000');	
						//page_curr++;
						
						if(page == 0){
							page_curr--;
						}else{
							page_curr++;
						}
						
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").show('1000');
						$("#page_demografi_responden").show('1000');
						$("#page_profile_rumah_tangga").show('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 3){
						var errors = '';
												
						var values = '';
						$("input:checkbox[name=a4_check]:checked").each(function(){
							values += $(this).val()+',';
						});
						var values_rel = values.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'a4<br>';
						}
						//console.log(values_rel);
						//alert(values_rel);
					
						<?php
						
						foreach($field_r1v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						<?php
						
						foreach($field_r2v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						
						//alert(errors);
						
						if(errors == ''){
							
							
							var formData = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData.append('id_pelanggan', $('#id_pelanggan').val());
							formData.append('kota_survey', $('#kota_survey').val());
							formData.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData.append('nama_respondent', $('#nama_respondent').val());
							formData.append('alamat_rumah', $('#alamat_rumah').val());
							formData.append('kecamatan', $('#kecamatan').val());
							formData.append('kelurahan', $('#kelurahan').val());
							formData.append('no_tel', $('#no_tel').val());
							formData.append('no_hp', $('#no_hp').val());
							formData.append('email', $('#email').val());
							formData.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData.append('form_part', 0);
							formData.append('curr_page', 3);
							
							<?php foreach($field_r1 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r2 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
										if(page == 0){
											page_curr--;
										}else{
											page_curr++;
										}
										
										$("#survey_page_1").hide('1000');
										$("#page_identiatas_responden").hide('1000');
										$("#page_demografi_responden").hide('1000');
										$("#page_profile_rumah_tangga").hide('1000');
										$("#page_internet_dan_data").show('1000');
										$("#page_menonton_televisi").hide('1000');
										$("#page_program_acara_televisi").hide('1000');
										$("#page_kesan_pemirsa").hide('1000');
										$("#page_kegemaran_dan_perilaku").hide('1000');
										$("#page_product_ownership").hide('1000');
										
										$("html, body").animate({scrollTop: 0}, 400);
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});

						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
						
						
					}else if(page_curr == 4){
						var errors = '';
						//alert('aaaaaa');
						<?php
						
						foreach($field_r3v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						// $("#survey_page_1").hide('1000');
						// $("#page_identiatas_responden").hide('1000');
						// $("#page_demografi_responden").hide('1000');
						// $("#page_profile_rumah_tangga").hide('1000');
						// $("#page_internet_dan_data").hide('1000');
						// $("#page_menonton_televisi").show('1000');
						// $("#page_program_acara_televisi").hide('1000');
						// $("#page_kesan_pemirsa").hide('1000');
						// $("#page_kegemaran_dan_perilaku").hide('1000');
						// $("#page_product_ownership").hide('1000');
						
						// $("html, body").animate({scrollTop: 0}, 400);
						
						if(errors == ''){
							
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 1);
							formData2.append('curr_page', 4);
							
							<?php foreach($field_r3 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>


							
							if(page == 0){
								page_curr--;
							}else{
								page_curr++;
							}
							
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").show('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
							$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
						
					}else if(page_curr == 5){
						
						var errors = '';

						var values = '';
						$("input:checkbox[name=c3-1]:checked").each(function(){
							values += $(this).val()+',';
						});

						$("input:checkbox[name=c3-2]:checked").each(function(){
							values += $(this).val()+',';
						});

						var values_rel = values.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'c3<br>';
						}

						var values = '';
						$("input:checkbox[name=c4-1]:checked").each(function(){
							values += $(this).val()+',';
						});

						$("input:checkbox[name=c4-2]:checked").each(function(){
							values += $(this).val()+',';
						});

						$("input:checkbox[name=c4-3]:checked").each(function(){
							values += $(this).val()+',';
						});

						$("input:checkbox[name=c4-4]:checked").each(function(){
							values += $(this).val()+',';
						});

						$("input:checkbox[name=c4-5]:checked").each(function(){
							values += $(this).val()+',';
						});

						var values_rel = values.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'c4<br>';
						}

						var values = '';
						<?php $c5int = 1; foreach($array_genre as $array_genres){ ?>

						$("input:checkbox[name=c5-<?php echo $c5int; ?>]:checked").each(function(){
							values += $(this).val()+',';
						});

						<?php $c5int++; } ?>

						var values_rel = values.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'c5<br>';
						}

						
						var values = '';
						var blank_prog = '';
						<?php for($ii=1;$ii<21;$ii++){ ?>
						
						var values_p = '';

						$("input:checkbox[name=c12_fam<?php echo $ii; ?>]:checked").each(function(){
							values += $(this).val()+',';
							values_p += $(this).val()+',';
						});
						
							if(values_p == ''){
								blank_prog += 'p<?php echo $ii; ?>|';
							}

						<?php } ?>

						var values_rel = values.slice(0, -1) ;
						var values_p_rel = blank_prog.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'c12<br>';
						}else{
							
							var array_pom = [<?php echo $pom; ?>];
							var array_pom_po = [<?php echo $pom_po; ?>];
							var program_val = values_p_rel.split('|');
							var error_pom = '';
							
							for (i = 0; i < array_pom.length; i++) {
							  //text += cars[i] + "<br>";
								//var a = array_pom.indexOf(program_val[i]);
								var a = program_val.indexOf(array_pom[i]);
								if(a == -1){
									
								}else{
									error_pom += '-'+array_pom_po[i]+'<br>';
								}
							}

							//var fruits = ["Banana", "Orange", "Apple", "Mango"];
							
  
							// console.log(array_pom);
							// console.log(program_val);
							// console.log(error_pom);
							
							
							
						}
				
						<?php
						
						foreach($field_r4v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						errors += error_pom;
						
						if(errors == ''){
							
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 2);
							formData2.append('curr_page', 5);
							
							<?php foreach($field_r4 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

							
							if(page == 0){
								page_curr--;
							}else{
								page_curr++;
							}
							
							// $("#survey_page_1").hide('1000');
							// $("#page_identiatas_responden").hide('1000');
							// $("#page_demografi_responden").hide('1000');
							// $("#page_profile_rumah_tangga").hide('1000');
							// $("#page_internet_dan_data").hide('1000');
							// $("#page_menonton_televisi").show('1000');
							// $("#page_program_acara_televisi").hide('1000');
							// $("#page_kesan_pemirsa").hide('1000');
							// $("#page_kegemaran_dan_perilaku").hide('1000');
							// $("#page_product_ownership").hide('1000');
							
							// $("html, body").animate({scrollTop: 0}, 400);
							
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").show('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
							$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
						
						
					}else if(page_curr == 6){
						
						var errors = '';
						
						<?php
						
						foreach($field_r5v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						if(errors == ''){
							
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 3);
							formData2.append('curr_page', 6);
							
							<?php foreach($field_r5 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
							
							if(page == 0){
								page_curr--;
							}else{
								page_curr++;
							}
							
							// $("#survey_page_1").hide('1000');
							// $("#page_identiatas_responden").hide('1000');
							// $("#page_demografi_responden").hide('1000');
							// $("#page_profile_rumah_tangga").hide('1000');
							// $("#page_internet_dan_data").hide('1000');
							// $("#page_menonton_televisi").hide('1000');
							// $("#page_program_acara_televisi").hide('1000');
							// $("#page_kesan_pemirsa").show('1000');
							// $("#page_kegemaran_dan_perilaku").hide('1000');
							// $("#page_product_ownership").hide('1000');
							
							// $("html, body").animate({scrollTop: 0}, 400);
							
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").show('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
							$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
						
						
					}else if(page_curr == 7){
						
						var errors = '';
						
						var values = '';
						<?php $ii=1; foreach($array_channel_h as $array_channel_hs){ ?>

						$("input:checkbox[name=e2-<?php echo $ii; ?>]:checked").each(function(){
							values += $(this).val()+',';
						});

						<?php $ii++; } ?>

						var values_rel = values.slice(0, -1) ;

						if(values_rel == ''){
							errors += 'e2<br>';
						}


						<?php
						
						foreach($field_r6v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						if(errors == ''){
							
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 4);
							formData2.append('curr_page', 7);
							
							<?php foreach($field_r6 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
							
							if(page == 0){
								page_curr--;
							}else{
								page_curr++;
							}
							
								// $("#survey_page_1").hide('1000');
								// $("#page_identiatas_responden").hide('1000');
								// $("#page_demografi_responden").hide('1000');
								// $("#page_profile_rumah_tangga").hide('1000');
								// $("#page_internet_dan_data").hide('1000');
								// $("#page_menonton_televisi").hide('1000');
								// $("#page_program_acara_televisi").hide('1000');
								// $("#page_kesan_pemirsa").hide('1000');
								// $("#page_kegemaran_dan_perilaku").show('1000');
								// $("#page_product_ownership").hide('1000');
								
								// $("html, body").animate({scrollTop: 0}, 400);
							
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").show('1000');
							$("#page_product_ownership").hide('1000');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
							$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
						
						
						
					}else if(page_curr == 8){
						
						// var bbb = $("input[name='F67']:checked").val();
						
						// alert(bbb);
						
						// alert($('input[name="f68"]:checked').val());
						
						var errors = '';
						

						if( $("input[name='F67']:checked").val() == 'Ya'){

							var dest_traf = $( "#F71dalam" ).val()+''+$( "#F71luar" ).val();
							if(dest_traf == ''){
								errors += 'f72<br>';
							}
							
							

							if( $("input[name='F68']:checked").val() == '' || $("input[name='F68']:checked").val() == undefined ){
								errors += 'F69<br>'; 
							}

							if( $("input[name='F69']:checked").val() == '' || $("input[name='F69']:checked").val() == undefined ){
								errors += 'F70<br>'; 
							}

							/*if( $('input[name="f76"]:checked').val() == '' || $('input[name="f76"]:checked').val() == undefined ){
								errors += 'f77<br>'; 
							}

							if( $('input[name="f77"]:checked').val() == '' || $('input[name="f77"]:checked').val() == undefined ){
								errors += 'f78<br>'; 
							}

							if( $('input[name="f82"]:checked').val() == '' || $('input[name="f82"]:checked').val() == undefined ){
								errors += 'f83<br>'; 
							}

							if( $('input[name="f84"]:checked').val() == '' || $('input[name="f84"]:checked').val() == undefined ){
								errors += 'f85<br>'; 
							}*/

							var values = '';
							$("input:checkbox[name=f70]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += 'F71<br>';
							}

							var values = '';
							$("input:checkbox[name=f72]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += 'F73<br>';
							}

							var values = '';
							$("input:checkbox[name=f73]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += 'F74<br>';
							}

							/*
							var values = '';
							$("input:checkbox[name=f75]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += '76<br>';
							}

							var values = '';
							$("input:checkbox[name=f78]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += '79<br>';
							}

							var values = '';
							$("input:checkbox[name=f79]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += '80<br>';
							}

							var values = '';
							$("input:checkbox[name=f80]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += '81<br>';
							}

							var values = '';
							$("input:checkbox[name=f81]:checked").each(function(){
								values += $(this).val()+',';
							});
							var values_rel = values.slice(0, -1) ;

							if(values_rel == ''){
								errors += '82<br>';
							}
							*/

							
						}else if( $("input[name='F67']:checked").val() == '' || $("input[name='F67']:checked").val() == undefined ){
							
							errors += 'F68<br>';
							
						}else{
							errors += '';
						}

						<?php
						
						foreach($field_r7v as $r1){ 

					
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['question_number']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['question_number']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['question_number']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['question_number']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						if(errors == ''){
							
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 5);
							formData2.append('curr_page', 8);
							
							<?php foreach($field_r7 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
							
							if(page == 0){
								page_curr--;
							}else{
								page_curr++;
							}
							
							// $("#survey_page_1").hide('1000');
							// $("#page_identiatas_responden").hide('1000');
							// $("#page_demografi_responden").hide('1000');
							// $("#page_profile_rumah_tangga").hide('1000');
							// $("#page_internet_dan_data").hide('1000');
							// $("#page_menonton_televisi").hide('1000');
							// $("#page_program_acara_televisi").hide('1000');
							// $("#page_kesan_pemirsa").hide('1000');
							// $("#page_kegemaran_dan_perilaku").hide('1000');
							// $("#page_product_ownership").show('1000');

							// $("#btn_next").html('Selesai');
							
							// $("html, body").animate({scrollTop: 0}, 400);
							
							$("#survey_page_1").hide('1000');
							$("#page_identiatas_responden").hide('1000');
							$("#page_demografi_responden").hide('1000');
							$("#page_profile_rumah_tangga").hide('1000');
							$("#page_internet_dan_data").hide('1000');
							$("#page_menonton_televisi").hide('1000');
							$("#page_program_acara_televisi").hide('1000');
							$("#page_kesan_pemirsa").hide('1000');
							$("#page_kegemaran_dan_perilaku").hide('1000');
							$("#page_product_ownership").show('1000');

							$("#btn_next").html('Selesai');
							
							$("html, body").animate({scrollTop: 0}, 400);
							
							$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										
									}
								});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}

						
					}else if(page_curr == 9){					
					//}else{					
					
						var errors = '';
						
						<?php
						
						foreach($field_r8v as $r1){ 
						
								if($r1['type_input'] == 0){
									echo " if( $('input[name=\"".$r1['code_question']."\"]:checked').val() == '' || $('input[name=\"".$r1['code_question']."\"]:checked').val() == undefined ){ ";
										echo " errors += '".$r1['code_question']."<br>'; ";
									echo " } ;";
								}else if($r1['type_input'] == 1){
										echo "if( $('#".$r1['code_question']."').val() == '' || $('#".$r1['code_question']."').val() == undefined ){
											 errors += '".$r1['code_question']."<br>';
										}";
								}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined){
											
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
										}
										
										<?php
										echo "if(vals == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
									<?php
								}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										
										<?php
										echo "if(values == ''){
											 errors += '".$r1['code_question']."<br>';
										}";
										
										?>
										
							<?php } 
							
						} ?>
						
						if(errors == ''){
							
						swal({
							title: 'Akan Menyelesaikan Survey ?',
							text: '',
							type: 'warning',
							showCancelButton: true,
							confirmButtonText: 'Ya',
							cancelButtonText: 'Tidak'
						}).then(function() {
							
							//alert('kiasias');
							var formData2 = new FormData();
							var urls = "<?php echo base_url('survey/insert_survey'); ?>";

								
							formData2.append('id_pelanggan', $('#id_pelanggan').val());
							formData2.append('kota_survey', $('#kota_survey').val());
							formData2.append('telkom_regional', $('#telkom_regional').val());
									
									
							formData2.append('nama_respondent', $('#nama_respondent').val());
							formData2.append('alamat_rumah', $('#alamat_rumah').val());
							formData2.append('kecamatan', $('#kecamatan').val());
							formData2.append('kelurahan', $('#kelurahan').val());
							formData2.append('no_tel', $('#no_tel').val());
							formData2.append('no_hp', $('#no_hp').val());
							formData2.append('email', $('#email').val());
							formData2.append('id_kuisioner', <?php echo $kuis_id; ?>);
							formData2.append('form_part', 6);
							formData2.append('curr_page', 9);
							
							<?php foreach($field_r8 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData2.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData2.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == '' || merk_vals == undefined ){
											<?php echo "formData2.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData2.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData2.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
									$("#survey_page_1").hide('1000');
										$("#page_identiatas_responden").hide('1000');
										$("#page_demografi_responden").hide('1000');
										$("#page_profile_rumah_tangga").hide('1000');
										$("#page_internet_dan_data").hide('1000');
										$("#page_menonton_televisi").hide('1000');
										$("#page_program_acara_televisi").hide('1000');
										$("#page_kesan_pemirsa").hide('1000');
										$("#page_kegemaran_dan_perilaku").hide('1000');
										$("#page_product_ownership").hide('1000');
										//$("#don").show('1000');
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData2,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									
										swal({
											title: 'Terima Kasih, Data survey telah disimpan',
											text: '',
											type: 'success',
											showCancelButton: true,
											confirmButtonText: 'Ya',
											cancelButtonText: 'Tidak'
										}).then(function() {
											
											window.location.href = "<?php echo base_url() . 'survey'; ?>";
											
										});
										
									}
								});
								

							});
							
						}else{
							//alert(errors);
							var msg_error = errors;
							
							swal({
								title: 'Pertanyaan <br>'+msg_error+' Tidak Boleh Kosong ',
								text: '',
								type: 'warning',
								showCancelButton: false,
								confirmButtonText: 'Ya'
							}).then(function() {

								//window.location.hash = '#page_identiatas_responden';	 
								$("html, body").animate({scrollTop: 0}, 400);
							});
							
						}
					
						
					
					}

					
					
				}
				 // $("#survey_page_1").hide('1000');
				 // $("#survey_page_2").show('1000');
				//alert('start');
				
			}	
			
			function prev_survey(page){
								page_curr--;
				//alert('aaa');
				// $("#survey_page_2").hide('1000');
				 // $("#survey_page_1").show('1000');
				//alert('start');
				
			}
			
			function back_user(){
					window.location.href = "<?php echo base_url() . 'survey'; ?>";
				
			}
			
			function start_survey(){
				
				// swal({
					// title: 'Akan Memulai Survey ?',
					// text: '',
					// type: 'warning',
					// showCancelButton: true,
					// confirmButtonText: 'Ya',
					// cancelButtonText: 'Tidak'
				  // }).then(function() {

						var formData = new FormData();
						var urls = "<?php echo base_url('survey/insert_header_survey'); ?>";
						
						formData.append('aa', 'aa');
						
						$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										 //window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>";
									}
						});
						
						

				  // });
				
				// //alert('start');
				
			 }
		</script>
 

