
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
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">History</h3>
				
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
          <div class="row"> 
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
					<div class="row" >
					
						<div class="col-md-4" style="margin-top:20px" >
							<p class="text-primary fs-16 font-weight-medium" style="color:#000 !important;">Riwayat Survey Terkini</p>
						</div>
						<!--<div class="col-md-3" style="margin-top:20px" >
							<div class="form-group">
														  <div id="datepicker-popup" class="input-group date datepicker">
															<input type="text" name="tgl_s" id="tgl_s"  class="form-control">
															<span class="input-group-addon input-group-append border-left">
															  <span class="ti-calendar input-group-text"></span>
															</span>
														  </div>
							  
														</div>
						</div>-->
						<div class="col-md-2" style="margin-top:20px;text-align:right" >
						<select class="form-control js-example-basic-multiple" name="kota[]" id="kota" multiple="multiple" style="width:100%;border-radius:50px" data-placeholder="Lokasi" > 
												<?php  foreach($kecamatan as $kotas){
													
													echo "<option value='".$kotas['KECAMATAN_DAGRI']."'>".$kotas['KECAMATAN_DAGRI']." </option>";
													
												} ?>
											</select>
						</div>
						
						<div class="col-md-2" style="margin-top:20px;text-align:right" >
							<input type="text" class="form-control" id="texts" placeholder="Search" style="height:36px"  />
						</div>
						
						<div class="col-md-2" style="margin-top:20px;text-align:right" >
							<select class="form-control" id="respond" placeholder="respond" style="height:36px" >
											<option value="" selected >Semua</option>
											<option value="1">Nomor Tidak Dapat Dihubungi</option>
											<option value="2">RNA</option>
											<option value="3">Diangkat tapi Tidak Bersedia bicara</option>
											<option value="4">Salah Sambung</option>
											<option value="5">Tidak Bersedia jadi Responden</option>
											<option value="6">Tidak Memenuhi menjadi Responden</option>
											<option value="7" id="sedia_resps" >Bersedia jadi Responden</option>
											<option value="8" >Selesai Interview</option>
										  </select>
						</div>
						
						<div class="col-md-2" style="margin-top:20px;text-align:right" >
							<div class="btn-group" role="group" aria-label="Basic example" style="margin:auto" >
							  <button type="button" class="  btn btn-danger" onClick="filter()" id="btn_filter">Filter</button>
							  <!--<button type="button" class="  btn btn-danger" onClick="reset_filter()">Reset</button>-->
							</div>
						</div>
						
					</div>
					<div class="row" >
													<div class="col-md-12" id="data_survey" style="">
														 <table id="table_resp_ss" class="table" style="">
														  <thead>
															<tr>
																<td style='font-size: 12px'><p class="text-primary fs-16 font-weight-medium" style="color:#F1646E !important;">Responden</p></td>
																<td style='font-size: 12px'><p class="text-primary fs-16 font-weight-medium" style="color:#F1646E !important;">Call</p></td>
																<td style='font-size: 12px'><p class="text-primary fs-16 font-weight-medium" style="color:#F1646E !important;">Interview</p></td>
																<td style='font-size: 12px'><p class="text-primary fs-16 font-weight-medium" style="color:#F1646E !important;">Status</p></td>
																<td style='font-size: 12px'></td>
															</tr>
														  </thead>
														  <tbody>
															
															<?php foreach($get_history as $users){ 
																if($users['status_survey'] == null || $users['status_survey'] == 0 ){
																	$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Mulai Survey</button>';
																}elseif($users['status_survey'] == 2){
																	$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Lanjut Survey</button>';
																}else{
																	$html = '<Span>Survey Telah Selesai</span>';
																}
																
																//$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$users['id_outbound'].')">Mulai Survey</button>';
																
																if($users['sa'] == 0 ){
																	$clr = "background-color:#FF6666";
																	$clr_txt = "Hari Ini";
																}else{
																	$clr = "";
																	$clr_txt = "";
																}
																
																$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>']; 
																
																
																	$a_respond = ['',
			'<div class="badge badge-danger" style=""><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Tidak Dapat Dihubungi</p></div>',
			'<div class="badge badge-danger" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">RNA</p></div>',
			'<div class="badge badge-danger" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Tidak Bersedia bicara</p></div>',
			'<div class="badge badge-danger" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Salah Sambung</p></div>',
			'<div class="badge badge-danger" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Tidak Bersedia jadi Responden</p></div>',
			'<div class="badge badge-danger" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Tidak Memenuhi menjadi Responden</p></div>',
			'<div class="badge badge-success" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Bersedia</p></div>',
			'<div class="badge badge-info" style="" ><p class="text-primary fs-16 font-weight-medium" style="color:#FFF !important;margin-top:5px">Sudah Interview</p></div>'];
															
																 ?>
																<tr>
																	<td style="white-space:initial"><?php echo  $users['NAMA_PELANGGAN'] ?><br><?php echo $users['cardno'] ?><br><?php echo $users['ALAMAT'] ?><br><?php echo $users['NO_HP'] ?></td>
																	<td><?php echo  $users['time_call'] ?></td>
																	<td><?php echo  (date_format(date_create($users['date_survey']),"Y/m/d")) ?><br><?php echo $users['day_survey'] ?><br><?php echo $users['hours_survey'] ?><br><?php echo $users['date_hours_survey'] ?></td>
																	<td><?php echo  $a_respond[$users['respond_res']]; ?></td>
																	<td><?php if($users['respond_res'] == 1 ){  ?> <button type="button" class="btn btn-info btn-md" onClick="recall('<?php echo $users['NAMA_PELANGGAN'].'|'.$users['NO_HP'].'|'.$users['cardno'].'|'.$users['ALAMAT'].'|0'; ?> ')"><p class="text-primary fs-22 font-weight-medium" style="color:#FFF !important;margin-top:5px">Recall</p></button><?php } ?></td>
																</tr>
															
															<?php } ?>
															
														  </tbody>
														</table>
													</div>
					</div>
                </div>
              </div>
            </div> 

          </div>

        </div>
		
		
		
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item" >
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">

				  <div class="modal-body">
				  
					<input type="hidden" class="form-control" id="id_cardno_d" placeholder="">
					
					<div id="respond_call" class="col-md-12 grid-margin" style="" >
              <div class="card" >
			  <br>
			  <div class="row" >
			  <div class="col-md-12" id="form_resp" >
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" >
						
							<div class="col-md-12" id="">
								<p class="text-primary fs-24 font-weight-medium" style="color:#000 !important;">Info Respoden</p><br>
							</diV>
							
							<div class="col-md-12">
								<h4><label for="exampleInputEmail1" id="nama_contact">-</label><label for="exampleInputEmail1" class="btn btn-inverse-info" style="padding: 3px;border-radius: 5px;font-size: 10px;margin-top: 5px; margin-left: 5px; pointer-events: none;" >Berlangganan</label></h4>
								
							</div>

								<div class="col-md-3" style="margin-top:20px" >
									<p class="text-primary fs-24 font-weight-medium" style="color:#E72929 !important;">Identitas Pelanggan</p><br>
								</div>
								
								<div class="col-md-9" style="margin-top:30px" >
									<div style="margin-left:-10px;margin-right:0px;border-bottom: 2px solid #E72929;"></div>
								</div>

								
								<div class="col-md-12" id="list_user" style="text-align: center; vertical-align: middle;height:500px;line-height: 190px;">
								<br>
						
									<span>
									 <p>Operator Belum Memilih Salah Satu Data 
									 Pelanggan, Silahkan Pilih Salah Satu Data
									 Lalu Lanjutkan
									 </p>
									</span>
								</div>
						</div>
						
						<div class="row" id="create_user" style="display: none;">

									 <form class="forms-samples" id="form_respondents" style="width:100%">
									 
									<div class="row" style="" >	
										<div class="col-md-6" style="" >
											<div class="form-group">
											  <label for="exampleInputUsername1">Nama Lengkap</label>
											  <input type="text" class="form-control" id="nama_lengkap_new" placeholder="Nama Lengkap" readOnly="ReadOnly">
											</div>
										</div>
										
										<div class="col-md-6" style="margin-left:-15px" >
											 <div class="form-group">
											  <label for="exampleInputEmail1">Nomor Langganan</label>
											  <input type="text" class="form-control" id="no_cardno" placeholder="No. Telp" readOnly="ReadOnly">
											</div>
										</div>
										
										<div class="col-md-6" style="" >
											<div class="form-group">
											  <label for="exampleInputEmail1">Telepon</label>
											  <input type="text" class="form-control" id="no_tel_new" placeholder="No. Telp" readOnly="ReadOnly">
											</div>
										</div>
										
										<div class="col-md-6" style="margin-left:-15px" >
											<div class="form-group">
											  <label for="exampleInputEmail1">Nomor Whatsapp</label>
											  <input type="text" class="form-control" id="no_whats" placeholder="Diketik Ketika Konfirmasi" >
											</div>
										</div>
										
										<div class="col-md-6" style="" >
											<div class="form-group">
											  <label for="exampleInputEmail1">Alamat Lengkap</label>
											  <textarea  class="form-control" id="alamat" placeholder="Alamat" readOnly="ReadOnly"></textarea>
											</div>
										</div>
										
										<div class="col-md-6" style="margin-left:-15px" >
											<div class="form-group">
											  <label for="exampleInputEmail1">Usia</label>
											  <input type="input" class="form-control" id="usia" placeholder="Usia" >
											</div>
										</div>
									
									</div>
									<div class="row" style="" >		
										<div class="col-md-4" style="margin-top:20px" >
											<p class="text-primary fs-24 font-weight-medium" style="color:#E72929 !important;">Preferensi Tontonan Pelanggan</p><br>
										</div>
										
										<div class="col-md-8" style="margin-top:30px" >
											<div style="margin-left:-10px;margin-right:15px;border-bottom: 2px solid #E72929;"></div>
										</div>
									</div>	
								
									<div class="row" style="" >	
										<?php for($ii=1;$ii<21;$ii++){ ?>
										<input type="hidden" class="form-check-input" name="pvs<?php echo $ii ?>" id="ps<?php echo $ii ?>" value="" />
										<!--<div class="form-group">
										  <label for="exampleInputEmail1" id="p<?php echo $ii ?>">Program <?php echo $ii ?></label>
										  <input type="input" class="form-control" id="pv<?php echo $ii ?>" placeholder="" >
										</div>-->
										
										
											<div class="col-md-12" style="margin-bottom:20px;" >	
												<div class="row" style="" >	
													<div class="col-md-8" style="" >
														<label for="exampleInputUsername1" id="pl<?php echo $ii ?>"><b>Program <?php echo $ii ?></b> </label>
													</div>
													<div class="col-md-4" style="" >
													<div class="row">
															<?php $situs_musik = ['Ya','Tidak']; 
															$i = 1;
															foreach($situs_musik as $penggunaan_ss){ ?>

																	  <div class="form-check col-md-12" >
																		<label class="form-check-label">
																		  
																		  <input type="radio" class="form-check-input" name="pv<?php echo $ii ?>" id="p<?php echo $ii ?><?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>" onClick="select_program()" >
																		  <?php echo $penggunaan_ss; ?>
																		</label>
																	  </div>
																
															<?php } ?>
													</div>
													</div>
												</div>
											</div>
										
										<?php } ?>
									</div>
										
									  </form>
								
								
								<div class="col-md-12">
								&nbsp
								</div>

						</div>
						
						<div class="row" style="" >		
										<div class="col-md-3" style="margin-top:20px" >
											<p class="text-primary fs-24 font-weight-medium" style="color:#E72929 !important;">Respon Pelanggan</p><br>
										</div>
										
										<div class="col-md-9" style="margin-top:30px" >
											<div style="margin-left:-10px;margin-right:15px;border-bottom: 2px solid #E72929;"></div>
										</div>
									</div>
									
						<div class="row" style="" >	
							<div class="col-md-6" style="" id="pre_don">
						<div class="row" >
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Hasil Call</label></h4>
							</div>
							
								<div class="col-md-2">
									 
								</diV>
								
								<div class="col-md-1">
									 &nbsp
								</diV>
								
								<div class="col-md-10" id="list_user2" style="text-align: center; vertical-align: middle;height:500px;line-height: 190px;">
								<br>
						
									<span>
									 <p>Operator Belum Memilih Salah Satu Data 
									 Pelanggan, Silahkan Pilih Salah Satu Data
									 Lalu Lanjutkan
									 </p>
									</span>
								</div>
								
								<div class="col-md-1">
									 &nbsp
								</diV>
						</div>
						
						<div class="row" id="create_user2" style="display: none;margin-right:5px;margin-bottom:15px" >

								<div class="col-md-12">
									 <form class="forms-sample" id='form_responds'>
										<div class="form-group">
										  <select class="form-control" id="respondss" placeholder="respond" style="border-radius:10px" onChange="select_respond()" >
											<option value="" selected disabled="disabled">Hasil Respond</option>
											<option value="1">Nomor Tidak Dapat Dihubungi</option>
											<option value="2">RNA</option>
											<option value="3">Diangkat tapi Tidak Bersedia bicara</option>
											<option value="4">Salah Sambung</option>
											<option value="5">Tidak Bersedia jadi Responden</option>
											<option value="6">Tidak Memenuhi menjadi Responden</option>
											<option value="7" id="sedia_respssss" disabled="disabled">Bersedia jadi Responden</option>
										  </select>
										</div>
										
										<br>
									
										<div class="row" id="jadwal" style="display: none;">
											
											<div class="col-md-12">
											
											
												<div class="row" style="margin-top:-15px">
													<div class="col-md-12" >
														<label for="exampleInputEmail1">Tanggal</label>
													</div>
												
													<div class="col-md-12" >
														<div class="form-group">
														  <div id="datepicker-popup" class="input-group date datepicker">
															<input type="text" name="tgl" id="tgl"  class="form-control">
															<span class="input-group-addon input-group-append border-left">
															  <span class="ti-calendar input-group-text"></span>
															</span>
														  </div>
							  
														</div>
													</div>
												
													<div class="col-md-5">
														<div class="input-group date" id="timepicker-example" data-target-input="nearest">
															<div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
															  <input type="text" name="jam_tgl_awal" id="jam_tgl_awal"  class="form-control datetimepicker-input" data-target="#timepicker-example"/>
															  <div class="input-group-addon input-group-append"><i class="ti-time input-group-text"></i></div>
															</div>
														</div>
													</div>
													<div class="col-md-2" style="margin-top:15px">
													s/d
													</div>
													<div class="col-md-5">
														<div class="input-group date" id="timepicker-example2" data-target-input="nearest">
															<div class="input-group" data-target="#timepicker-example2" data-toggle="datetimepicker">
															  <input type="text" name="jam_tgl_akhir" id="jam_tgl_akhir"  class="form-control datetimepicker-input" data-target="#timepicker-example2"/>
															  <div class="input-group-addon input-group-append"><i class="ti-time input-group-text"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12" style="" >
											</div>
											<br>
											<br>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6"><label for="exampleInputEmail1">Hari</label></div>
													<div class="col-md-6"><label for="exampleInputEmail1">Jam</label></div>
													<div class="col-md-6">
														<div class="form-group">
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Senin" class="form-check-input">
															  Senin
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Selasa" class="form-check-input">
															  Selasa
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Rabu" class="form-check-input">
															  Rabu
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Kamis" class="form-check-input">
															  Kamis
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Jumat" class="form-check-input">
															  Jumat
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Sabtu" class="form-check-input">
															  Sabtu
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari" value="Minggu" class="form-check-input">
															  Minggu
															</label>
														  </div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam" value="Pagi" class="form-check-input">
															  Pagi (8-11)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam" value="Siang" class="form-check-input">
															  Siang (11-14)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam" value="Sore" class="form-check-input">
															  Sore (14-18)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam" value="Malam" class="form-check-input">
															  Malam (18-22)
															</label>
														  </div>
														</div>
													</div>
												</div>
											</div>
										
										</div>
										
										<br>
										<div class="form-group">
											<label for="exampleInputEmail1">keterangan</label>
										  <textarea  class="form-control" id="ket" placeholder="Keterangan" rows="6" disabled="disabled" ></textarea>
										</div>

										
									  </form>
								</div>
								
								
								
								<div class="col-md-12" style="margin-top:20px;margin-button:20px">
								<button class="btn btn-primary btn-sm" type="button" id="btn_sss" onClick="save_new_user()" disabled="disabled">Lanjut Untuk Konfirmasi</button>
								</div>

						</div>
						
					</div>
						</div>
						
					</div>
					</div>
					<!--<div class="col-md-6" style="border-left: thin solid #009;" id="pre_don">-->
 
              </div>
            </div>

          </div>
					
				  </div>
				  <div class="modal-footer">

				  </div>
				</div>
			  </div>
			</div>
        <!-- content-wrapper ends -->
		

		<script async >
			
			$( document ).ready(function() { 
			
			$(document).ready(function () {
				// $('#table_resp_ss').DataTable({
					// bfilter: false,
					// ordering: false,
					// info: false,
				// });
				
				
				$('#table_resp_ss').DataTable({
					"bFilter": false,
					"aaSorting": [],
					"bLengthChange": false,
					'iDisplayLength': 5,
					"bPaginate": true,
					//"sPaginationType": "simple_numbers",
					"Info" : false,
					"bInfo" : false,
					 "searching": false,
					 "scrollX": true,
					"language": {
						"decimal": ",",
						"thousands": "."
					}
				});	
				
				
			});
				
				 if ($("#datepicker-popup").length) {
					$('#datepicker-popup').datepicker({
					 // enableOnReadonly: true,
					 // todayHighlight: true,
					  format: "yyyy-mm-dd",
						//autoclose: true
					});
				  }


				
			});
		
		</script>
		
		
		<script>


			function save_new_user(){
				
				//alert($("#respond").val());
				
				if($("#respondss").val() == '' || $("#respondss").val() == undefined){
				
					var msg = ' Respond harus disisi';
					swal({
							  title: 'Error !',
							  text: msg,
							  type: 'warning',
							  showCancelButton: false,
							  confirmButtonText: 'Ok'
							})
				
				}else{
					
					var values_hari = '';
					$("input:checkbox[name=hari]:checked").each(function(){
						values_hari += $(this).val()+',';
					});
					var values_hari_rel = values_hari.slice(0, -1) ;
					
					var values_jam = '';
					$("input:checkbox[name=jam]:checked").each(function(){
						values_jam += $(this).val()+',';
					});
					var values_jam_rel = values_jam.slice(0, -1) ;
					
					<?php for($ii=1;$ii<21;$ii++){ ?>
						
							if( $("input[name='pv<?php echo $ii; ?>']:checked").val() == undefined){
								var val_pv<?php echo $ii; ?> = 'Tidak';
							}else{
								var val_pv<?php echo $ii; ?> = $("input[name='pv<?php echo $ii; ?>']:checked").val();
							}
						
					<?php } ?>
					
					var datapost = {
						"nama_lengkap_new": $("#nama_lengkap_new").val(),
						"no_cardno": $("#no_cardno").val(),
						"no_tel_new": $("#no_tel_new").val(),
						"no_whats": $("#no_whats").val(),
						"alamat": $("#alamat").val(),
						"respond": $("#respondss").val(),
						"ket": $("#ket").val(),
						"tgl": $("#tgl").val(),
						"jam_tgl_awal": $("#jam_tgl_awal").val(),
						"jam_tgl_akhir": $("#jam_tgl_akhir").val(),
						"values_hari_rel": values_hari_rel,
						"values_jam_rel": values_jam_rel,
						"usia": $("#usia").val(),
						"p1": val_pv1,
						"p2": val_pv2,
						"p3": val_pv3,
						"p4": val_pv4,
						"p5": val_pv5,
						"p6": val_pv6,
						"p7": val_pv7,
						"p8": val_pv8,
						"p9": val_pv9,
						"p10": val_pv10,
						"p11": val_pv11,
						"p12": val_pv12,
						"p13": val_pv13,
						"p14": val_pv14,
						"p15": val_pv15,
						"p16": val_pv16,
						"p17": val_pv17,
						"p18": val_pv18,
						"p19": val_pv19,
						"p20": val_pv20,
						"ps1": $('#ps1').val(),
						"ps2": $('#ps2').val(),
						"ps3": $('#ps3').val(),
						"ps4": $('#ps4').val(),
						"ps5": $('#ps5').val(),
						"ps6": $('#ps6').val(),
						"ps7": $('#ps7').val(),
						"ps8": $('#ps8').val(),
						"ps9": $('#ps9').val(),
						"ps10": $('#ps10').val(),
						"ps11": $('#ps11').val(),
						"ps12": $('#ps12').val(),
						"ps13": $('#ps13').val(),
						"ps14": $('#ps14').val(),
						"ps15": $('#ps15').val(),
						"ps16": $('#ps16').val(),
						"ps17": $('#ps17').val(),
						"ps18": $('#ps18').val(),
						"ps19": $('#ps19').val(),
						"ps20": $('#ps20').val()
					};
					
					$.ajax({
							type: "POST",
							url: "<?php echo base_url(); ?>contact/save_respond",
							data: JSON.stringify(datapost),
							dataType: 'json',
							contentType: 'application/json; charset=utf-8',
							success: function(response) {
							//obj = jQuery.parseJSON(response);
								
								window.location.href = "<?php echo base_url() . 'history'; ?>";
								
								// $('#form_resp').attr('disabled', 'disabled');
								// $('#list_resp_table').attr('disabled', 'disabled');
								// $("#form_resp").hide('1000');
								// $("#form_respdas").hide('100');
								// $("#pre_don").hide('1000');
								// $("#don").show('1500');
								// $("#jadwal").hide('1000');
								
								// $("#list_resp_table").css("pointer-events", "none");
								// $("#form_resp").css("pointer-events", "none");
								
										
									

							}
					});
					
					
					//alert('aaaaa');
				}
			}
			
				function select_respond(){
			
			//alert('popo');
			$("#ket").prop('disabled', false);
			$("#btn_sss").prop('disabled', false);

			var respond = $("#respondss").val();
			if(respond == 7){
				$("#jadwal").show();
			}else{
				$("#jadwal").hide();
			}
		}

		function select_program(){
			
			var int_program = 0;
			//alert($("input[name='pv12']:checked").val());
			
			<?php for($ii=1;$ii<21;$ii++){ ?>
			
			if( $("input[name='pv<?php echo $ii; ?>']:checked").val() == 'Ya'){
				int_program++;
			}
			
			<?php } ?>
			
			//alert(int_program);
		
			if(int_program > 9){
				$("#sedia_respssss").prop('disabled', false);
				$("#ket").prop('disabled', false);
				$("#btn_sss").prop('disabled', false);
			}else{
				$('#form_responds')[0].reset();
				//$('#form_responds').reset();
				$("#sedia_respssss").prop('disabled', true);
				//$("#ket").prop('disabled', true);
				//$("#btn_sss").prop('disabled', true);
				$("#jadwal").hide();
				
			}
			
		}
			
			function recall(val){
				
				
				
				var vals = val.split("|");
				
				$("#nama_lengkap_new").val(vals[0]);
				$("#nama_contact").html(vals[0]);
				$("#no_cardno").val(vals[2]);
				$("#no_tel_new").val("+62 "+vals[1]);
				$("#alamat").val(vals[3]);
				$("#status_label").html("Status: Berlangganan");
				
				var datapost = {
					"cardno": vals[2]
				};
								 	
										  $.ajax({
											type: "POST",
											url: "<?php echo base_url(); ?>contact/get_top_program",
											data: JSON.stringify(datapost),
											dataType: 'json',
											contentType: 'application/json; charset=utf-8',
											success: function(response) {
											//obj = jQuery.parseJSON(response);
											//console.log(response);
											
											//$(".rowd").css("background-color", "white");
											$("#rowd_"+vals[4]).css("background-color", "#ddd9fa");
											 $(".rowd").hover(function(){
												$(this).css("background-color", "#ddd9fa");
												}, function(){
												$(this).css("background-color", "white");
											  });
											
											
											
												for(ii=0;ii<response.length;ii++){
													
													var in_ii = ii+1;
													$("#pl"+in_ii).html('Channel: '+response[ii]['CHANNEL']+'<BR>Program: '+response[ii]['PROGRAM']+'<BR>Genre: '+response[ii]['GENRE_PROGRAM']);
													$("#ps"+in_ii).val(response[ii]['PROGRAM']+'|'+response[ii]['CHANNEL']+'|'+response[ii]['GENRE_PROGRAM']);
													//$("#ps"+in_ii).val("asasa");
													
												}
												// $('#body_table').html(response.html);
												// $('#cnt_contact').html(response.count+' Contact');
												
												$("#list_user").hide();
												$("#list_user2").hide();
												$("#create_user").show();
												$("#create_user2").show();
												
												 // var div = document.getElementById('form_respondents');
												// $('#form_respondents').animate({scrollTop: -1000}, 500);
												// $('html,body').animate({scrollTop: $('div #scrollBottom').offset().top},'slow');
												//$('#form_respondents').focus();
												//window.location.hash = '#form_resp';
												window.location.hash = '#nama_contact';
													$("#blank_respond").hide();
													$("#respond_call").show();
												//$("html, body").animate({scrollBottom: 0}, 400);
												

											}
										  });
				
				
				
				
				
				
				$('#modal_new_item').modal('show');
				
				
			}

			function reschedule(outbound){
				
				if ($("#datepicker-popup_"+outbound).length) {
					$('#datepicker-popup_'+outbound).datepicker({
					// enableOnReadonly: true,
					// todayHighlight: true,
					format: "yyyy-mm-dd",
						//autoclose: true
					});
				}
				
				if ($("#timepicker-example_"+outbound).length) {
						$('#timepicker-example_'+outbound).datetimepicker({
						format: 'HH:mm',
						defaultDate: new Date('HH:00'),
							pickDate: false,
							pickSeconds: false,
							pick12HourFormat: false    
						});
					}
					
					if ($("#timepicker-example2_"+outbound).length) {
						$('#timepicker-example2_'+outbound).datetimepicker({
						format: 'HH:mm',
						defaultDate: new Date('HH:00'),
							pickDate: false,
							pickSeconds: false,
							pick12HourFormat: false    
						});
					}
						
				

				$("#jadwal_"+outbound).show('1000');

			}

			function batal_res(outbound){
					
				$("#jadwal_"+outbound).hide('1000');

			}

			function save_res(outbound){
			
				var values_hari = '';
				$("input:checkbox[name=hari_"+outbound+"]:checked").each(function(){
					values_hari += $(this).val()+',';
				});
				var values_hari_rel = values_hari.slice(0, -1) ;
				
				var values_jam = '';
				$("input:checkbox[name=jam_"+outbound+"]:checked").each(function(){
					values_jam += $(this).val()+',';
				});
				var values_jam_rel = values_jam.slice(0, -1) ;
				
				var datapost = {
					"id_outbound": outbound,
					"tgl": $("#tgl_"+outbound).val(),
					"note": $("#note_"+outbound).val(),
					"jam_tgl_awal": $("#jam_tgl_awal_"+outbound).val(),
					"jam_tgl_akhir": $("#jam_tgl_akhir_"+outbound).val(),
					"values_hari_rel": values_hari_rel,
					"values_jam_rel": values_jam_rel
				};
				
				console.log(datapost);

				$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>history/edit_schedule",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
							
						
							window.location.href = "<?php echo base_url() . 'survey'; ?>";
								

						}
				});
				//$("#jadwal_"+outbound).hide('1000');

			}

			function reset_filter(){
				
				$("#kota").val('');
				$("#hari").val('');
				$("#tgl_s").val('');
			}
		
			function filter(){
				
				$("#btn_filter").prop('disabled', true);
				
				 $("#data_survey").html(' Loading ....');
				
				var merk_vals = $("#kota").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var kota_list = '';
				for(var i=0; i<merk_vals.length; i++){
						kota_list += ""+merk_vals[i]+"|";	
				}

				
				
				var date = $("#tgl_s").val();
				
				var formData = new FormData();
						var urls = "<?php echo base_url('history/filter_jadwal'); ?>";
						
						formData.append('respond', $("#respond").val()); 
						formData.append('kota_list', kota_list);
						formData.append('texts', $("#texts").val());
						
						$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										obj = jQuery.parseJSON(response);
										
										//alert(response.html);
										//console.log(obj);
										 //window.location.href = "<?php echo base_url() . 'history/new_survey'; ?>";
										 $("#data_survey").html('');
										 $("#data_survey").html(obj.html);
										 
										 $('#table_resp_ss').DataTable({
											"bFilter": false,
											"aaSorting": [],
											"bLengthChange": false,
											'iDisplayLength': 5,
											"bPaginate": true,
											//"sPaginationType": "simple_numbers",
											"Info" : false,
											"bInfo" : false,
											 "searching": false,
											 "scrollX": true,
											"language": {
												"decimal": ",",
												"thousands": "."
											}
										});	
										 
										 $("#btn_filter").prop('disabled', false);
										 //data_survey
									}
						});
				//alert(hari_list);
				
			}
		
			function start_survey(id_outbound){
				
				swal({
					title: 'Akan Memulai Survey ?',
					text: '',
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Ya',
					cancelButtonText: 'Tidak'
				  }).then(function() {

						var formData = new FormData();
						var urls = "<?php echo base_url('history/insert_header_survey'); ?>";
						
						var merk_vals = $("#kota").val();
						
						formData.append('id_outbound', id_outbound);
						
						$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										 window.location.href = "<?php echo base_url() . 'history/new_survey'; ?>/"+id_outbound;
									}
						});
						
						

				  });
				
				//alert('start');
				
			}
			
			// function lanjut_survey(id_outbound){
				
				// swal({
					// title: 'Akan Melanjutkan Survey ?',
					// text: '',
					// type: 'warning',
					// showCancelButton: true,
					// confirmButtonText: 'Ya',
					// cancelButtonText: 'Tidak'
				  // }).then(function() {

						// var formData = new FormData();
						// var urls = "<?php echo base_url('history/insert_header_survey'); ?>";
						
						// var merk_vals = $("#kota").val();
						
						// formData.append('id_outbound', id_outbound);
						
						// $.ajax({
									// type: 'POST',
									// url: urls,
									// data: formData,
									// cache: false,
									// contentType: false,
									// processData: false,
									// success: function(response) {
										 // window.location.href = "<?php echo base_url() . 'history/new_survey'; ?>/"+id_outbound;
									// }
						// });
						
						

				  // });
				
				// //alert('start');
				
			// }
		</script>
 

