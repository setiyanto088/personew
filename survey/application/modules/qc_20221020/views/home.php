
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

		   <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Validasi Data</h3>
				
                </div>
				<br>
				
			<div class="row" style="margin-bottom:20px;">
				
				<div class="col-md-3 mb-2 mb-lg-0 stretch-card transparent">
                  <div class="card">
                    <div class="card-body">
						
						<div class="row">
							<div class="col-md-8">
								<p class="mb-4"><b>Total Data</b></p>
								<p class="fs-30 mb-2"><?php echo number_format($data_qc[0]['cnt'],0,',','.'); ?></p>
								<p><?php if($data_qc_tot[0]['total_survey'] == 0){ echo 0; }else{ echo number_format(($data_qc[0]['cnt']/$data_qc_tot[0]['total_survey'])*100,3,',','.'); } ?> % </p>
							</div>
							<div class="col-md-4" style="text-align:right">
								<img src="https://inrate.id/survey_new_dev/uploads/noto_telephone.png" class="mr-2" alt="logo" style=""/>
								
							</div>
						</div>
                     
                    </div>
                  </div>
                </div>
				
				<div class="col-md-3 mb-2 mb-lg-0 stretch-card transparent">
                  <div class="card">
                    <div class="card-body">
						
						<div class="row">
							<div class="col-md-8">
								 <p class="mb-4"><b>Valid</b></p>
									<p class="fs-30 mb-2"><?php echo number_format($data_qc[0]['valid'],0,',','.'); ?></p>
									<p><?php if($data_qc_tot[0]['total_survey'] == 0){ echo 0; }else{ echo number_format(($data_qc[0]['valid']/$data_qc_tot[0]['total_survey'])*100,3,',','.'); } ?> % </p>
							</div>
							<div class="col-md-4" style="text-align:right">
								<img src="https://inrate.id/survey_new_dev/uploads/noto_check-mark-button.png" class="mr-2" alt="logo" style=""/>
								
							</div>
						</div>
                     
                    </div>
                  </div>
                </div>
				
				<div class="col-md-3 mb-2 mb-lg-0 stretch-card transparent">
                  <div class="card">
                    <div class="card-body">
						
						<div class="row">
							<div class="col-md-8">
								<p class="mb-4"><b>Tidak Valid</b></p>
								<p class="fs-30 mb-2"><?php echo number_format($data_qc[0]['tidak_valid'],0,',','.'); ?></p>
								<p><?php if($data_qc_tot[0]['total_survey'] == 0){ echo 0; }else{ echo number_format(($data_qc[0]['tidak_valid']/$data_qc_tot[0]['total_survey'])*100,3,',','.'); } ?> % </p>
							</div>
							<div class="col-md-4" style="text-align:right">
								<img src="https://inrate.id/survey_new_dev/uploads/noto_no-mobile-phones.png" class="mr-2" alt="logo" style=""/>
								
							</div>
						</div>
                     
                    </div>
                  </div>
                </div>
				
				<div class="col-md-3 mb-2 mb-lg-0 stretch-card transparent">
                  <div class="card">
                    <div class="card-body">
						
						<div class="row">
							<div class="col-md-8">
								 <p class="mb-4"><b>Sisa</b></p>
                      <p class="fs-30 mb-2"><?php echo number_format($data_qc[0]['belum_validasi'],0,',','.'); ?></p>
                      <p><?php if($data_qc_tot[0]['total_survey'] == 0){ echo 0; }else{ echo number_format((($data_qc[0]['belum_validasi'])/$data_qc_tot[0]['total_survey'])*100,3,',','.'); } ?> % </p>
							</div>
							<div class="col-md-4" style="text-align:right">
								<img src="https://inrate.id/survey_new_dev/uploads/noto_clipboard.png" class="mr-2" alt="logo" style=""/>
								
							</div>
						</div>
                     
                    </div>
                  </div>
                </div>
				
				
            </div>

			 <div class="col-md-12 grid-margin" class="survey_page_1">
              <div class="card">
                <div class="card-body" id="data_survey">
				<div class="row" >
						<!--
						<div class="col-md-2" style="margin-top:20px" >
						<select class="form-control" name="list_surveyor" id="list_surveyor"  style="width:100%" data-placeholder="surveyor" onChange="get_agent()" > 
								<option value="" selected >Semua Supervisor</option>
												<?php  foreach($kecamatan as $kotas){
												
													echo "<option value='".$kotas['nama']."'>".$kotas['nama']." </option>";
													
												} ?>
											</select>
						</div>
						-->
						
						<div class="col-md-2" style="margin-top:20px" >
						<select class="form-control" name="list_location" id="list_location"  style="width:100%" data-placeholder="Kota"  > 
								<option value="" selected >Semua Kota</option>
												<?php  foreach($location as $locations){
												
													echo "<option value='".$locations['location_name']."'>".$locations['location_name']." </option>";
													
												} ?>
											</select>
						</div>

						<div class="col-md-2" style="margin-top:20px" >
							<select class="form-control" id="respond" placeholder="respond" style="" >
											<option value="" selected >Semua Status</option>
											<option value="1">Valid</option>
											<option value="3">Valid Supervisor</option>
											<option value="2">Tidak Valid</option>
											<option value="0" >Belum Tervalidasi</option>
										  </select>
						</div>
						
						<!--
						<div class="col-md-2" style="margin-top:20px" >
							<input type="text" class="form-control" id="texts" placeholder="Nama / No Pelanggan" style=""  />
						</div>-->
						
						<div class="col-md-2" style="margin-top:20px" >
							<input type="text" class="form-control" id="start_date" placeholder="Periode Awal" style=""  />
						</div>
						
						<div class="col-md-2" style="margin-top:20px" >
							<input type="text" class="form-control" id="end_date" placeholder="Periode Akhir" style=""  />
						</div>
						
						
						<div class="col-md-2" style="margin-top:20px" >
							<div class="btn-group" role="group" aria-label="Basic example" style="margin:auto" >
							  <button type="button" class="  btn btn-danger" onClick="filter()" id="btn_filter">Filter</button>
							  <!--<button type="button" class="  btn btn-danger" onClick="reset_filter()">Reset</button>-->
							</div>
						</div>
						
					</div>
					<div class="row" style="margin-top:20px" >
						<div class="col-md-12" id="tabel_front">
						<table id="exampless" class="table table-striped" style="width:100%;">
							<thead style="">
								<tr style="color:red">
									<th>No Pelanggan</th>
									<th>Nama</th>
									<th>No Telepon</th>
									<th>Alamat</th>
									<th>Kota</th>
									<th>Surveyor</th>
									<th>Supervisor</th>
									<th>Status</th>
									<th>Tanggal</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody id="table_bodys">
							<?php foreach($get_history as $table_datas){ 	
							
										if($table_datas['valid'] == 1 ){
														$html = '<span class="btn btn btn-info" style="padding:5px;color:white;pointer-events: none;" type="button"  >Valid</span>';
													}elseif($table_datas['valid'] == 2){
														$html = '<span class="btn btn btn-danger" type="button"  style="padding:5px;color:white;pointer-events: none;">Invalid</span>';
													}elseif($table_datas['valid'] == 3){
														$html =  '<button type="button"  class="btn btn btn-secondary" style="padding:5px;color:white;pointer-events: none;">Valid Supervisor</button>';
													}else{
														$html = '<button type="button"  class="btn btn btn-secondary" style="padding:5px;color:white;pointer-events: none;">Belum Tervalidasi</button>';
													}
													
													//$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey('.$table_datas['id_outbound'].')">Mulai Survey</button>';
													
													if($table_datas['sa'] == 0 ){
														$clr = "background-color:#FF6666";
														$clr_txt = "Hari Ini";
													}else{
														$clr = "";
														$clr_txt = "";
													}
													
													$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>']; 
												
													 ?>
													 
													 <tr>
														<td><?php echo $table_datas['cardno']; ?></td>
														<td><?php echo $table_datas['NAMA_PELANGGAN']; ?></td>
														<td><?php echo $table_datas['NO_HP']; ?></td>
														<td style="white-space: normal "><?php echo $table_datas['ALAMAT']; ?></td>
														<td><?php echo $table_datas['KOTA_X']; ?></td>
														<td><?php echo $table_datas['surveyor']; ?></td>
														<td><?php echo $table_datas['supervisor']; ?></td>
														<td><?php echo $html; ?></td>
														<td><?php echo $table_datas['date_survey']; ?></td>
														<td><Span class="btn btn-primary" style="padding: 8px;border-radius: 8px;" onClick="check_outbound(<?php echo $table_datas['id_outbound']; ?>)"><i class="fa fa-search"></i></Span></td>
													</tr>
													 
													 
									<?php } ?>
				
							</tbody>

						</table>
						</div>
					</div>
					
									
					
					
                </div>
              </div>
            </div>
			
			
			 <div class="col-md-12 grid-margin" class="survey_page_1">
              <div class="card">
                <div class="card-body" id="data_survey">
					<h3><b>Summary</b></h3>
					<div class="row" style="margin-top:20px" >
						<div class="col-md-12" id="tabel_front">
						<table id="exampless" class="table table-striped" style="width:100%;">
							<thead style="">
								<tr style="color:red">
									<th>Supervisor</th>
									<th>Kota</th>
									<th>Belum Tervalidasi </th>
									<th>Invalid</th>
									<th>Valid</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody id="table_bodys">
							<?php foreach($get_history_sum as $table_datas){ 	
												
													 ?>
													 
													 <tr>
														<td><?php echo $table_datas['supervisor']; ?></td>
														<td><?php echo $table_datas['KOTA_X']; ?></td>
														<td><?php echo $table_datas['unvalidate_sum']; ?></td>
														<td><?php echo $table_datas['invalid_sum']; ?></td>
														<td><?php echo $table_datas['valid_sum']; ?></td>
														<td><?php echo $table_datas['valid_sum']+$table_datas['invalid_sum']+$table_datas['unvalidate_sum']; ?></td>
														
													</tr>
													 
													 
									<?php } ?>
				
							</tbody>

						</table>
						</div>
					</div>
					
									
					
					
                </div>
              </div>
            </div>
			
	
			
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel"><strong>Quality Control</strong></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
							<div class="row">			  
							<div class="col-md-12 col-xl-12 grid-margin">
							  <div class="card">
								<div class="card-body">

								  <div class="row">
									<div class="col-2">
									  <ul class="nav nav-pills nav-pills-vertical nav-pills-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<li class="nav-item">
										  <a class="nav-link active" id="identitas_resp_tab" data-bs-toggle="pill" href="#identitas_resp_h" role="tab" aria-controls="identitas_resp_h" aria-selected="true">
											<!--<i class="ti-home"></i>-->
											IDENTITAS RESPONDEN
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" onClick='tabs_2()' aria-selected="false">
											R. DEMOGRAFI RESPONDEN
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											A. PROFIL RUMAH TANGGA
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											B. INTERNET DAN DATA
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											C. MENONTON TELEVISI
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											D. PROGRAM ACARA TELEVISI
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											E. KESAN PEMIRSA
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											F. KEGEMARAN & PERILAKU
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											G. PRODUCT OWNERSHIP
										  </a>                          
										</li>
										<li class="nav-item">
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
											QUALITY CONTROL
										  </a>                          
										</li>
									
									  </ul>
									</div>
									<div class="col-10">
									  <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
										<div class="tab-pane fade show active" id="identitas_resp_h" role="tabpanel" aria-labelledby="v-pills-home-tab">
										  <div class="media">
											<div class="media-body">
											  <h5 class="mt-0">IDENTITAS RESPONDEN</h5>
											  
												<div class="form-group">
													<label for="exampleInputUsername1">ID Pelanggan</label>
													<div class="input-group">
														 <input type="text" class="form-control" id="id_pelanggan" value="" placeholder="ID Pelanggan">
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
													
													<br><br>
													<div class="form-check mx-sm-2">
													  <label class="form-check-label">
														<input type="checkbox" name="b1" id="b1_smartfren" value="smartfren" class="form-check-input formxx" >
														Inputan Sudah Sesuai
													  </label>
													</div>
											 
											</div>
											
											
												 
											
											
											
											
										  </div>
										</div>
										<div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
										  <div class="media">
											<img class="mr-3 w-25 rounded" src="../../../../images/samples/300X300/10.jpg" alt="sample image">
											<div class="media-body">
											  <p>I'm thinking two circus clowns dancing. You? Finding a needle in a haystack isn't hard when every straw is computerized. Tell him time is of the essence. 
												Somehow, I doubt that. You have a good heart, Dexter.</p>
											</div>
										  </div>
										</div>
										<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
										  <div class="media">
											<img class="mr-3 w-25 rounded" src="../../../../images/samples/300x300/14.jpg" alt="sample image">
											<div class="media-body">
											  <p>
												  I'm really more an apartment person. This man is a knight in shining armor. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. You all right, Dexter?
											  </p>
											  <p>
												  I'm generally confused most of the time. Cops, another community I'm not part of. You're a killer. I catch killers. Hello, Dexter Morgan.
											  </p>
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
						  
						  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Submit</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
		

		<script async >
			
			$( document ).ready(function() { 
	
				$('#exampless').DataTable({
					"order": [[ 2, "desc" ]],
					responsive: true,
					"scrollX": true,
					"bFilter": false
				});
				
				
				 if ($("#start_date").length) {
					$('#start_date').datepicker({
					 // enableOnReadonly: true,
					 // todayHighlight: true,
					  format: "yyyy-mm-dd",
						//autoclose: true
					});
				  }
				  
				  
				  if ($("#end_date").length) {
					$('#end_date').datepicker({
					 // enableOnReadonly: true,
					 // todayHighlight: true,
					  format: "yyyy-mm-dd",
						//autoclose: true
					});
				  }


				
			});
		
		</script>
		
		
		<script>
		
			function tabs_2(){
				
				//$('#profile-1').show(1000);
				$("#v-pills-home-tab").removeClass("active");
				$("#v-pills-home").removeClass("show active");
				
				$("#v-pills-profile-tab").addClass("active");
				$("#v-pills-profile").addClass("show active");
				
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
						url: "<?php echo base_url(); ?>qc/edit_schedule",
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
				
				// $("#data_survey").html(' Loading ....');

				var start_date = $("#start_date").val();
				var end_date = $("#end_date").val();
				var list_location = $("#list_location").val();
				var respond = $("#respond").val();
				
				var formData = new FormData();
						var urls = "<?php echo base_url('qc/filter_jadwal'); ?>";
						
						formData.append('start_date', $("#start_date").val()); 
						formData.append('end_date', $("#end_date").val()); 
						formData.append('list_location', $("#list_location").val()); 
						formData.append('respond', $("#respond").val()); 
					
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
										console.log(obj.html);
										 //window.location.href = "<?php echo base_url() . 'qc/new_survey'; ?>";
										 $("#tabel_front").html('');
										 $("#tabel_front").html(obj.html);
										 
										 
										 $('#exampless').DataTable({
											"order": [[ 2, "desc" ]],
											responsive: true,
											"scrollX": true,
											"bFilter": false
										});
										//$("#data_survey").html(obj.html);
										 
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
						var urls = "<?php echo base_url('qc/insert_header_survey'); ?>";
						
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
										 window.location.href = "<?php echo base_url() . 'qc/new_survey'; ?>/"+id_outbound;
									}
						});
						
						

				  });
				
				//alert('start');
				
			}
			
			function check_outbound(id_outbound){
				//$("#exampleModal").modal('show');
				
				window.location.href = "<?php echo base_url() . 'qc/check_survey'; ?>/"+id_outbound;
				
				// swal({
					// title: 'Akan Menghapus Data ?',
					// text: 'Data yang sudah dihapus tidak akan bisa dikembalikan ',
					// type: 'warning',
					// showCancelButton: true,
					// confirmButtonText: 'Ya',
					// cancelButtonText: 'Tidak'
				  // }).then(function() {

						// var formData = new FormData();
						// var urls = "<?php echo base_url('qc/delete_outbound'); ?>";
												
						// formData.append('id_outbound', id_outbound);
						
						// $.ajax({
									// type: 'POST',
									// url: urls,
									// data: formData,
									// cache: false,
									// contentType: false,
									// processData: false,
									// success: function(response) {
										// window.location.href = "<?php echo base_url() . 'history_kordinator'; ?>";
									// }
						// });
						
						

				  // });
				
				//alert('start');
				
			}
			
			function get_agent(){
				


						var formData = new FormData();
						var urls = "<?php echo base_url('qc/get_agent'); ?>";
												
						formData.append('id_outbound', id_outbound);
						
						$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										window.location.href = "<?php echo base_url() . 'history_kordinator'; ?>";
									}
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
						// var urls = "<?php echo base_url('qc/insert_header_survey'); ?>";
						
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
										 // window.location.href = "<?php echo base_url() . 'qc/new_survey'; ?>/"+id_outbound;
									// }
						// });
						
						

				  // });
				
				// //alert('start');
				
			// }
		</script>
 

