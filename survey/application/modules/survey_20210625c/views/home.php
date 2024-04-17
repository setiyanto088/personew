
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
                  <h3 class="font-weight-bold">Jadwal Survey</h3>
				
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
					
						<div class="col-md-3" style="margin-top:20px" >
							<div class="form-group">
														  <div id="datepicker-popup" class="input-group date datepicker">
															<input type="text" name="tgl_s" id="tgl_s"  class="form-control">
															<span class="input-group-addon input-group-append border-left">
															  <span class="ti-calendar input-group-text"></span>
															</span>
														  </div>
							  
														</div>
						</div>
						<div class="col-md-3" style="margin-top:20px" >
						<select class="form-control js-example-basic-multiple" name="kota[]" id="kota" multiple="multiple" style="width:100%" data-placeholder="Pilih Kecamatan" > 
												<?php  foreach($kecamatan as $kotas){
													
													echo "<option value='".$kotas['KECAMATAN_DAGRI']."'>".$kotas['KECAMATAN_DAGRI']." </option>";
													
												} ?>
											</select>
						</div>
						
						<div class="col-md-3" style="margin-top:20px" >
							<select class="form-control js-example-basic-multiple" name="hari[]" id="hari" multiple="multiple" style="width:100%" data-placeholder="Pilih Hari" > 
								<option value='Senin'>SENIN</option>
								<option value='Selasa'>SELASA</option>
								<option value='Rabu'>RABU</option>
								<option value='Kamis'>KAMIS</option>
								<option value='Jumat'>JUMAT</option>
								<option value='Sabtu'>SABTU</option>
								<option value='Minggu'>MINGGU</option>
							</select>
						</div>
						
						<div class="col-md-3" style="margin-top:20px" >
							<div class="btn-group" role="group" aria-label="Basic example" style="margin:auto" >
							  <button type="button" class="  btn btn-danger" onClick="filter()" id="btn_filter">Filter</button>
							  <!--<button type="button" class="  btn btn-danger" onClick="reset_filter()">Reset</button>-->
							</div>
						</div>
						
					</div>
                </div>
              </div>
            </div> 
			
			 <div class="col-md-12 grid-margin" class="survey_page_1">
              <div class="card">
                <div class="card-body" id="data_survey">

					
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
										
											 ?>
											
											<div class="row" style="border-top: thin solid #009;margin-top:5px;p-top:5px;" >
												<div class="col-md-9 grid-margin ">
													<div class="row">
														<div class='col-md-12'><br><h4> <?php echo $clr_txt ?></h4></div>
														<div class='col-md-4'><br><h4><?php echo  $users['NAMA_PELANGGAN'] ?></h4><?php echo $users['cardno'] ?></div>
														<div class='col-md-6'><br><?php echo $users['KOTA_X'] ?> <?php echo $users['KECAMATAN_DAGRI'] ?><br><?php echo $users['ALAMAT'] ?></div>
														<div class='col-md-2'><br><?php echo  (date_format(date_create($users['date_survey']),"Y/m/d")) ?><br><?php echo $users['day_survey'] ?><br><?php echo $users['hours_survey'] ?><br><?php echo $users['date_hours_survey'] ?></div>
													</div>
												</div>	
												<div class="col-md-3 grid-margin " style="text-align: center;">
													<div class="row">
														<div class='col-md-12' style="text-align: center;margin:auto">
															<br><br><?php echo $html ?><br><br><button type="button" class="btn btn-danger btn-md" onClick="reschedule('<?php echo $users['id_outbound']; ?>')">Reschedule</button>
														</div>
													</div>
												</div>	
												<div class="row" id="jadwal_<?php echo $users['id_outbound'];  ?>" style="display: none;">
											
											<div class="col-md-12">
											<label for="exampleInputEmail1"><h4>Reschedule Survey</h4></label><br>
											
												<div class="row" style="margin-top:0px">
													<div class="col-md-12" >
														<label for="exampleInputEmail1">Tanggal</label>
													</div>
											
													<div class="col-md-12" >
														<div class="form-group">
														  <div id="datepicker-popup_<?php echo $users['id_outbound']; ?>" class="input-group date datepicker">
															<input type="text" name="tgl_<?php echo $users['id_outbound']; ?>" id="tgl_<?php echo $users['id_outbound']; ?>"  class="form-control">
															<span class="input-group-addon input-group-append border-left">
															  <span class="ti-calendar input-group-text"></span>
															</span>
														  </div>
							  
														</div>
													</div>
											
													<div class="col-md-5">
														<div class="input-group date" id="timepicker-example_<?php echo $users['id_outbound']; ?>" data-target-input="nearest">
															<div class="input-group" data-target="#timepicker-example_<?php echo $users['id_outbound']; ?>"" data-toggle="datetimepicker">
															  <input type="text" name="jam_tgl_awal_<?php echo $users['id_outbound']; ?>" id="jam_tgl_awal_<?php echo $users['id_outbound']; ?>"  class="form-control datetimepicker-input" data-target="#timepicker-example"/>
															  <div class="input-group-addon input-group-append"><i class="ti-time input-group-text"></i></div>
															</div>
														</div>
													</div>
													<div class="col-md-2" style="margin-top:15px">
													s/d
													</div>
													<div class="col-md-5">
														<div class="input-group date" id="timepicker-example2_<?php echo $users['id_outbound']; ?>" data-target-input="nearest">
															<div class="input-group" data-target="#timepicker-example2_<?php echo $users['id_outbound']; ?>"" data-toggle="datetimepicker">
															  <input type="text" name="jam_tgl_akhir_<?php echo $users['id_outbound']; ?>" id="jam_tgl_akhir_<?php echo $users['id_outbound']; ?>"  class="form-control datetimepicker-input" data-target="#timepicker-example2"/>
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
												
													<div class="col-md-6">
													<label for="exampleInputEmail1">Hari</label>
														<div class="form-group">
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Senin" class="form-check-input">
															  Senin
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Selasa" class="form-check-input">
															  Selasa
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Rabu" class="form-check-input">
															  Rabu
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Kamis" class="form-check-input">
															  Kamis
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari"_<?php echo $users['id_outbound']; ?> value="Jumat" class="form-check-input">
															  Jumat
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Sabtu" class="form-check-input">
															  Sabtu
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="hari_<?php echo $users['id_outbound']; ?>" value="Minggu" class="form-check-input">
															  Minggu
															</label>
														  </div>
														</div>
													</div>
													<div class="col-md-6">
														<label for="exampleInputEmail1">Jam</label>
														<div class="form-group">
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam_<?php echo $users['id_outbound']; ?>" value="Pagi" class="form-check-input">
															  Pagi (8-11)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam_<?php echo $users['id_outbound']; ?>" value="Siang" class="form-check-input">
															  Siang (11-14)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam_<?php echo $users['id_outbound']; ?>" value="Sore" class="form-check-input">
															  Sore (14-18)
															</label>
														  </div>
														  <div class="form-check">
															<label class="form-check-label">
															  <input type="checkbox" name="jam_<?php echo $users['id_outbound']; ?>" value="Malam" class="form-check-input">
															  Malam (18-22)
															</label>
														  </div>
														</div>
													</div>
													<div class="col-md-12">
														<label for="exampleInputEmail1">Keterangan</label>
														<div class="form-group">
															<textarea type="text" name="note_<?php echo $users['id_outbound']; ?>" id="note_<?php echo $users['id_outbound']; ?>"  class="form-control"></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12" style="text-align: center;margin:auto">

											<button type="button" class="btn btn-danger btn-md" onClick="save_res('<?php echo $users['id_outbound']; ?>')">Simpan</button>
											<button type="button" class="btn btn-danger btn-md" onClick="batal_res('<?php echo $users['id_outbound']; ?>')">Batal</button>

											</div>
										
										</div>

											</div>
									
									<?php } ?>
					
									<div class="row" style="border-top: thin solid #009;margin-top:5px;p-top:5px"></div>
					
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
		

		<script async >
			
			$( document ).ready(function() { 
				
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
						url: "<?php echo base_url(); ?>survey/edit_schedule",
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
				
				
				var merk_vals = $("#kota").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var kota_list = '';
				for(var i=0; i<merk_vals.length; i++){
						kota_list += ""+merk_vals[i]+"|";	
				}
				
				
				var merk_vals = $("#hari").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var hari_list = '';
				for(var i=0; i<merk_vals.length; i++){
						hari_list += ""+merk_vals[i]+"|";	
				}
				
				
				var date = $("#tgl_s").val();
				
				var formData = new FormData();
						var urls = "<?php echo base_url('survey/filter_jadwal'); ?>";
						
						formData.append('date', date); 
						formData.append('kota_list', kota_list);
						formData.append('hari_list', hari_list);
						
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
										 //window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>";
										 $("#data_survey").html('');
										 $("#data_survey").html(obj.html);
										 
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
						var urls = "<?php echo base_url('survey/insert_header_survey'); ?>";
						
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
										 window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>/"+id_outbound;
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
						// var urls = "<?php echo base_url('survey/insert_header_survey'); ?>";
						
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
										 // window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>/"+id_outbound;
									// }
						// });
						
						

				  // });
				
				// //alert('start');
				
			// }
		</script>
 

