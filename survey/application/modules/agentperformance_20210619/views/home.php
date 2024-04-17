
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
                  <h3 class="font-weight-bold">Agent Performance</h3>
				
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
	
	


		
					
									<?php foreach($user as $users){ ?>
											
										<div class="col-md-12 grid-margin" class="survey_page_1">
              <div class="card">
                <div class="card-body">

											<div class="row" style="border-top: thin solid #009;" >
												<div class="col-md-11 grid-margin ">
													<div class="row">
														<div class='col-md-12'><br><h4><?php echo  $users['nama'] ?></h4></div>
														<div class="col-md-3 grid-margin ">
															<div class="card">
																<div class="card-body">
																	<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
																		<img src="<?php echo base_url().'assets/survey/3 User.png'; ?>" class="img-lg rounded" alt="profile image" style="background-color:#DC3644;padding:10px;width:50px;height:50px" />
																		<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
																			<h3 class="mb-0" style="color:#DC3644" id="total_int"><?php echo number_format($users['total_call'],0,',','.'); ?></h3>
																			<p class="mb-0 font-weight-bold" style="color:#AEAEAE">Total Call</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3 grid-margin ">
															<div class="card">
																<div class="card-body">
																	<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
																		<img src="<?php echo base_url().'assets/survey/Login.png'; ?>" class="img-lg rounded" alt="profile image" style="background-color:#DC3644;padding:10px;width:50px;height:50px" />
																		<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
																			<h3 class="mb-0" style="color:#DC3644" id="user_sedia"><?php echo number_format($users['bersedia'],0,',','.'); ?></h3>
																			<p class="mb-0 font-weight-bold" style="color:#AEAEAE">Bersedia</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3 grid-margin ">
															<div class="card">
																<div class="card-body">
																	<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
																		<img src="<?php echo base_url().'assets/survey/2 User.png'; ?>" class="img-lg rounded" alt="profile image" style="background-color:#DC3644;padding:10px;width:50px;height:50px" />
																		<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
																			<h3 class="mb-0" style="color:#DC3644" id="user_sisa"><?php echo number_format($users['interview'],0,',','.'); ?></h3>
																			<p class="mb-0 font-weight-bold" style="color:#AEAEAE">Total Interview</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3 grid-margin ">
															<div class="card">
																<div class="card-body">
																	<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
																		<img src="<?php echo base_url().'assets/survey/2 User.png'; ?>" class="img-lg rounded" alt="profile image" style="background-color:#DC3644;padding:10px;width:50px;height:50px" />
																		<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
																			<h3 class="mb-0" style="color:#DC3644" id="user_sisa"><?php echo number_format(($users['bersedia']-$users['interview']),0,',','.'); ?></h3>
																			<p class="mb-0 font-weight-bold" style="color:#AEAEAE">Sisa</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
												<div class="col-md-1" style="text-align: center;margin:auto">
													<button type="button" class="  btn btn-danger" onClick="get_resume(<?php echo  $users['id'] ?>)" id="btn_filter" style="margin-right:-10px;">Detail</button>
												</div>
												
											</div>

											<div class="row" id="chart_<?php echo  $users['id'] ?>" style="display:none" >
											<button type="button" class="  btn btn-danger" onClick="cancel_detail(<?php echo  $users['id'] ?>)" id="btn_filter" style="margin-right:-10px;">Batal</button>	


											</div>
									
										</div>

</div>

</div>

									<?php } ?>
					
				
               
 
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

			function cancel_detail(users){

				$('#chart_'+users).hide("1000");

			}

			function get_resume(users){
				
				//alert(users);
				//var params = users.split("|");
				
				var formData = new FormData();
				formData.append('users',users);

				$.ajax({
					type:'POST',
					url: '<?php echo base_url('agentperformance/get_resume');?>',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {
							
								 $("canvas#canvas_"+users).remove();
								 $("#chart_"+users).append('<canvas id="canvas_'+users+'"></canvas>');
								 
								
								var areaData = {
			labels: response.chart_label,
			datasets: [
			  {
				//data: [<?php echo $array_chart; ?>],
				//data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350"],
				data: response.chart,
				borderColor: [
				  '#FFAB2D'
				],
				borderWidth: 2,
				backgroundColor: '#F2C683',
				fill: true,
				label: "Total Call"
			  }
			]
		  };
		  console.log(response.html);
		  
		  var areaOptions = {
			responsive: true,
			maintainAspectRatio: true,
			plugins: {
			  filler: {
				propagate: false
			  }
			},
			scales: {
			  xAxes: [{
				display: true,
				ticks: {
				  display: true,
				  padding: 10,
				  fontColor:"#6C7383"
				},
				gridLines: {
				  display: false,
				  drawBorder: false,
				  color: 'transparent',
				  zeroLineColor: '#eeeeee'
				}
			  }],
			  yAxes: [{
				display: true,
				ticks: {
				  display: true,
				  autoSkip: false,
				  maxRotation: 0,
				  stepSize: 1,
				  // min: 200,
				  // max: 1200,
				  padding: 18,
				  fontColor:"#6C7383"
				},
				gridLines: {
				  display: true,
				  color:"#f2f2f2",
				  drawBorder: false
				}
			  }]
			},
			legend: {
			  display: false
			},
			tooltips: {
			  enabled: true
			},
			elements: {
			  line: {
				tension: .35
			  },
			  point: {
				radius: 0
			  }
			}
		  }
		  var revenueChartCanvas = $("#canvas_"+users).get(0).getContext("2d");
		  var revenueChart = new Chart(revenueChartCanvas, {
			type: 'line',
			data: areaData,
			options: areaOptions
		  });
								
								
		  $('#chart_'+users).show("1000");	
								// $("#list_user").show('1000');
								// $("#create_user").hide('1000');
							  //window.location.href = "<?php echo base_url('users');?>";
							//})
						} else{
							$('#btn-submit').removeAttr('disabled');
							$('#btn-submit').text("Tambah User");
							swal("Failed!", response.message, "error");
						}
					}
				}).fail(function(xhr, status, message) {
					$('#btn-submit').removeAttr('disabled');
					$('#btn-submit').text("Tambah User");
					swal("Failed!", "Invalid respon, silahkan cek koneksi.", "error");
				});
				
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
 

