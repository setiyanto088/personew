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
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card" >
              <div class="card">
			  <br>
				<div class="row" style="margin-left:10px;margin-right:10px;font-size:13px;" id="list_resp_table" >
					
						<div class="col-md-12" style="margin-top:20px" >
							<h3 class="font-weight-normal mb-0">All Contacts</h3>
						</div>

						<div class="col-md-6" style="margin-top:20px" >
							<h6 class="font-weight-normal mb-0">Database Pelanggan Indihome</h6>
						</div>
						
						<div class="col-md-3" >
							&nbsp
						</div>
						<div class="col-md-3" style="margin-top:20px" >
							<h6 class="font-weight-normal mb-0" id="cnt_contact">1000 Contact</h6>
						</div>
						
						<div class="col-md-12" style="margin-top:20px;" >
							<div style="margin-left:0px;margin-right:0px;border-bottom: 1px solid grey;"></div>
						</div> 
						
						<div class="col-md-12" style="margin-top:20px" >
						<select class="form-control js-example-basic-multiple" name="kota[]" id="kota" multiple="multiple" style="width:100%" data-placeholder="Pilih Kecamatan" > 
												<?php  foreach($kecamatan as $kotas){
													
													echo "<option value='".$kotas['KECAMATAN_DAGRI']."'>".$kotas['KECAMATAN_DAGRI']." </option>";
													
												} ?>
											</select>
						</div>
							<div class="col-md-12" style="margin-top:20px;height:600px;overflow-y: auto; width:100% " >
										 <table id="table_resp_ss" class="table-hover" style="font-size:9" >
										 <thead>
											<th onClick="nama_sort('NAMA_PELANGGAN')" style='cursor: pointer;' >Nama Pelanggan</th>
											<th onClick="nama_sort('No_HP')" style='cursor: pointer;'>No HP</th>
										 </thead>
										  <tbody id ="body_table">
											<?php //foreach($contact as $contact){ 
																							
												// echo "<tr onclick=\"select_cont('".$contact['NAMA_PELANGGAN']."|".$contact['NO_HP']."|".$contact['CARDNO']."|".$contact['ALAMAT']."')\" style='cursor: pointer;' ><td>".$contact['NAMA_PELANGGAN']."</td><td>+62".$contact['NO_HP']."</td><td> &nbsp &nbsp ".$contact['KOTA_X']."</td></tr>";
											// } ?>
										  </tbody>
										</table>
							</div>
				 </div>
				  
				  
              </div>
            </div>
			
			<div class="col-md-8 grid-margin"  id="form_respdas">
			
			<div class="col-md-12 grid-margin" >
              <div class="card" >
			  <br>
			  <div class="row" >
			  <div class="col-md-6" id="form_resp" >
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" >
							<div class="col-md-8">
								<h4><label for="exampleInputEmail1" id="nama_contact">-</label></h4>
								<label for="exampleInputEmail1">-</label>
							</div>
							
								<div class="col-md-4" id="status_label">
									Status 
								</diV>

								<div class="col-md-12" style="margin-top:20px;" >
									<div style="margin-left:0px;margin-right:0px;border-bottom: 1px solid grey;"></div>
								</div> 

								<div class="col-md-12" style="margin-top:30px" >
									<h4><label for="exampleInputEmail1">Identitas Pelanggan</label></h4>
									<label for="exampleInputEmail1">(data sewaktu-waktu dapat berubah)</label>
									<br>
									<br>
								</div>
								
								<div class="col-md-12" style="" >
									<div style="margin-left:0px;margin-right:0px;border-bottom: 1px solid grey;"></div>
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

								<div class="col-md-12">
									 <form class="forms-sample" id="form_respondents">
										<div class="form-group">
										  <label for="exampleInputUsername1">Nama Lengkap</label>
										  <input type="text" class="form-control" id="nama_lengkap_new" placeholder="Nama Lengkap" readOnly="ReadOnly">
										</div>
										 <div class="form-group">
										  <label for="exampleInputEmail1">Nomor Langganan</label>
										  <input type="text" class="form-control" id="no_cardno" placeholder="No. Telp" readOnly="ReadOnly">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Nomor Telephone</label>
										  <input type="text" class="form-control" id="no_tel_new" placeholder="No. Telp" readOnly="ReadOnly">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Nomor Whatsapp</label>
										  <input type="text" class="form-control" id="no_whats" placeholder="Diketik Ketika Konfirmasi" >
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Alamat Lengkap</label>
										  <textarea  class="form-control" id="alamat" placeholder="Alamat" readOnly="ReadOnly"></textarea>
										</div>
										
										<div class="form-group">
										  <label for="exampleInputEmail1">Usia</label>
										  <input type="input" class="form-control" id="usia" placeholder="Usia" >
										</div>
										<label for="exampleInputUsername1" id="plas" style="border-bottom: thin solid #009;"><h4><b>Apakah Anda Menonton ? </b></h4> </label> <br><br>
										<?php for($ii=1;$ii<21;$ii++){ ?>
										<input type="hidden" class="form-check-input" name="pvs<?php echo $ii ?>" id="ps<?php echo $ii ?>" value="" />
										<!--<div class="form-group">
										  <label for="exampleInputEmail1" id="p<?php echo $ii ?>">Program <?php echo $ii ?></label>
										  <input type="input" class="form-control" id="pv<?php echo $ii ?>" placeholder="" >
										</div>-->
										
										<div class="form-group" id="f69-pg">
										  
										  <label for="exampleInputUsername1" id="pl<?php echo $ii ?>"><b>Program <?php echo $ii ?></b> </label>
											 <div class="row">
												<?php $situs_musik = ['Tidak','Ya']; 
												$i = 1;
												foreach($situs_musik as $penggunaan_ss){ ?>
												
													<div class="col-md-6">
														  <div class="form-check" >
															<label class="form-check-label">
															  
															  <input type="radio" class="form-check-input" name="pv<?php echo $ii ?>" id="p<?php echo $ii ?><?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>" onClick="select_program()" >
															  <?php echo $penggunaan_ss; ?>
															</label>
														  </div>
													</div>
												<?php } ?>
											</div>
										</div>
										
										<?php } ?>
										
									  </form>
								</div>
								
								<div class="col-md-12">
								&nbsp
								</div>

						</div>
					</div>
					</div>
					<!--<div class="col-md-6" style="border-left: thin solid #009;" id="pre_don">-->
					<div class="col-md-6" style="" id="pre_don">
						<div class="row" >
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Response</label></h4>
								<label for="exampleInputEmail1">Activity Operator</label>
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
										  <select class="form-control" id="respond" placeholder="respond" style="border-radius:20%" onChange="select_respond()" >
											<option value="" selected disabled="disabled">Hasil Respond</option>
											<option value="1">Nomor Tidak Dapat Dihubungi</option>
											<option value="2">RNA</option>
											<option value="3">Diangkat tapi Tidak Bersedia bicara</option>
											<option value="4">Salah Sambung</option>
											<option value="5">Tidak Bersedia jadi Responden</option>
											<option value="6">Tidak Memenuhi menjadi Responden</option>
											<option value="7" id="sedia_resps" disabled="disabled">Bersedia jadi Responden</option>
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
										  <textarea  class="form-control" id="ket" placeholder="Keterangan" rows="6" disabled="disabled" ></textarea>
										</div>

										
									  </form>
								</div>
								
								
								
								<div class="col-md-12" style="margin-top:20px;margin-button:20px">
								<button class="form-control btn btn btn-danger" type="button" id="btn_sss" onClick="save_new_user()" disabled="disabled">Lanjut Untuk Konfirmasi</button>
								</div>

						</div>
						
					</div>
					
					<div class="col-md-6" style="display: none;" id="don"  >
						<div class="row" >
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Response</label></h4>
								<label for="exampleInputEmail1" style="font-size:11px;">Activity Operator</label>
							</div>
							
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
									
									<h4><label for="exampleInputEmail1">Proses outbound call pelanggan telah selesai,
pelanggan yang sudah terkonfirmasi untuk menjadi responden 
akan di lanjutkan ke proses <span style="color:#D33341"><strong>Interview</strong></span></label></h4>
<button class="btn btn btn-danger" type="button" onClick="go_contact()">Kembali ke Contact</button>
<button class="btn btn btn-danger" type="button" onClick="go_survey()">Menuju Ke Survey</button>
								</div>
								
								<div class="col-md-1">
									 &nbsp
								</diV>
						</div>
						
						
						
					</div>
				  
				  
              </div>
            </div>

          </div>
		  
		  
		  
		  

		  
		  </div>
		  
        </div>
        <!-- content-wrapper ends -->
		<script async >
		
		$( document ).ready(function() { 
		
			var int_true;
		
			var $selectAll = $( "input:radio[name=pv1]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					int_true++;
				}
									 
			});
			
		  if ($("#datepicker-popup").length) {
			$('#datepicker-popup').datepicker({
			 // enableOnReadonly: true,
			 // todayHighlight: true,
			  format: "yyyy-mm-dd",
				//autoclose: true
			});
		  }
		  
		    if ($("#timepicker-example").length) {
				$('#timepicker-example').datetimepicker({
				   format: 'HH:mm',
				    defaultDate: new Date('HH:00'),
					pickDate: false,
					pickSeconds: false,
					pick12HourFormat: false    
				});
			  }
			  
			     if ($("#timepicker-example2").length) {
				$('#timepicker-example2').datetimepicker({
				   format: 'HH:mm',
				    defaultDate: new Date('HH:00'),
					pickDate: false,
					pickSeconds: false,
					pick12HourFormat: false    
				});
			  }
		
		// $('#tgl').datepicker({
			// format: "yyyy-mm-dd",
			// autoclose: true,
			// todayHighlight: true
		// });
		
		  //$('#example').DataTable();
			var firstSelect = $("#kota"); 
			firstSelect.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = $("#kota").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var kota_list = '';
				for(var i=0; i<merk_vals.length; i++){
						kota_list += "'"+merk_vals[i]+"',";	
				}
				
				var datapost = {
					"kota_list": kota_list
				};
				
				      $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>contact/filter_kota",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
						
							$('#body_table').html(response.html);
							$('#cnt_contact').html(response.count+' Contact');
							

						}
					  });
				
			});
			
			firstSelect.on("select2:unselect", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = $("#kota").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var kota_list = '';
				for(var i=0; i<merk_vals.length; i++){
						kota_list += "'"+merk_vals[i]+"',";	
				}
				
				var datapost = {
					"kota_list": kota_list
				};
				
				      $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>contact/filter_kota",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
						
							$('#body_table').html(response.html);
							$('#cnt_contact').html(response.count+' Contact');
							

						}
					  });
				
			});
		
		});
		
		</script>
<script>

var sort_nama = 0;
		var sort_hp = 0;
		var sort_kota = 0;

		function nama_sort(sss){
			
				var merk_vals = $("#kota").val();
				var array_suh = new Array();
				int_lainnya = 0;
				var kota_list = '';
				for(var i=0; i<merk_vals.length; i++){
						kota_list += "'"+merk_vals[i]+"',";	
				}
				
				if(sort_nama == 0){
					var cnd = 'ASC';
					sort_nama = 1;
				}else{
					var cnd = 'DESC';
					sort_nama = 0;
				}
				
				var datapost = {
					"kota_list": kota_list,
					"sort"	   : sss,
					"cnd"	   : cnd
				};
				
				      $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>contact/filter_kota_sort",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
						
							$('#body_table').html(response.html);
							$('#cnt_contact').html(response.count+' Contact');
							

						}
					  });
			
		}
		
		function select_respond(){
			
			//alert('popo');
			$("#ket").prop('disabled', false);
			$("#btn_sss").prop('disabled', false);

			var respond = $("#respond").val();
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
				$("#sedia_resps").prop('disabled', false);
				$("#ket").prop('disabled', false);
				$("#btn_sss").prop('disabled', false);
			}else{
				$('#form_responds')[0].reset();
				//$('#form_responds').reset();
				$("#sedia_resps").prop('disabled', true);
				//$("#ket").prop('disabled', true);
				//$("#btn_sss").prop('disabled', true);
				$("#jadwal").hide();
				
			}
			
		}

			function select_cont(val){
				
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
											console.log(response);
												for(ii=0;ii<20;ii++){
													
													var in_ii = ii+1;
													$("#pl"+in_ii).html(response[ii]['PROGRAM']);
													$("#ps"+in_ii).val(response[ii]['PROGRAM']);
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
												//$("html, body").animate({scrollBottom: 0}, 400);
												

											}
										  });
				
				
				
				
				
			}
			
			function cancel_new_user(){
				$("#list_user").show('1000');
				$("#create_user").hide('1000');
			}
			
			function back_user(){
				$('#form_resp').removeAttr('disabled');
				$('#list_resp_table').removeAttr('disabled');
				$("#pre_don").show('1000');
				$("#don").hide('1000');
				
				$("#list_user").show('1000');
				$("#list_user2").show('1000');
				$("#create_user").hide('1000');
				$("#create_user2").hide('1000');
				
				$('#form_responds')[0].reset();
							$('#form_respondents')[0].reset();
							$('#kota').val(null).trigger('change');
									
									var datapost = {
										"kota_list": ""
									};
									
										  $.ajax({
											type: "POST",
											url: "<?php echo base_url(); ?>contact/filter_kota",
											data: JSON.stringify(datapost),
											dataType: 'json',
											contentType: 'application/json; charset=utf-8',
											success: function(response) {
											//obj = jQuery.parseJSON(response);
											
												$('#body_table').html(response.html);
												$('#cnt_contact').html(response.count+' Contact');
												

											}
										  });
				
			}
		
			function save_new_user(){
				
				
				if($("#respond").val() == '' || $("#respond").val() == undefined){
				
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
						"respond": $("#respond").val(),
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
								
								
								$('#form_resp').attr('disabled', 'disabled');
								$('#list_resp_table').attr('disabled', 'disabled');
								$("#pre_don").hide('1000');
								$("#don").show('1000');
								$("#jadwal").hide('1000');
								
								$("#list_resp_table").css("pointer-events", "none");
								$("#form_resp").css("pointer-events", "none");
								
										
									

							}
					});
					
					
					//alert('aaaaa');
				}
			}
			
			function  go_survey(){
				
				window.location.href = "<?php echo base_url() . 'survey'; ?>";
				
			}
			
			function  go_contact(){
				
				window.location.href = "<?php echo base_url() . 'contact'; ?>";
				
			}
			
			

</script>
