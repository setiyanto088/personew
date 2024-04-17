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
			
			<div class="col-md-4 grid-margin stretch-card">
			
			
			<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
			  <br>
			  <div class="row">
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" id="list_user">
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1"> Supervisor</label></h4>
								<label for="exampleInputEmail1">Daftar List Supervisor yang beroperasional</label>
							</div>
							
								<div class="col-md-2">
								<?php if($session['id_role'] == "125"){ ?>
									<button class="btn btn-sm btn-danger" type="button" onClick="new_user()">Tambah +</button>
								<?php } ?>	
								</diV>

								<div class="col-md-12">
									 <table id="table_resp_ss" class="table table-striped" style="width:97%">
									  <tbody id="body_table_resp">
										<?php foreach($user as $users){ 
											
											$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
											echo "<tr style='cursor: pointer;' onClick='get_resume(\"".$users['id']."|".$users['nama']."\")'><td width='40%'><div class='row'><div class='col-md-2'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-6' style='margin-left:10px'><h4>".$users['nama']."</4><h5>".$users['location_name']."</h5></div></div></td><td style='text-align:right'><h5> > </h5></td></tr>";
										} ?>
									  </tbody>
									</table>
								</div>
								
								<div class="col-md-12">
									 
								</div>
						</div>

					</div>
					<div class="col-md-12">
						&nbsp
					</div>
				  
				  
              </div>
            </div>

          </div>
		  
		  
		  
		  

		  
		  </div>
		  
		  <div class="col-md-8 grid-margin ">
			
			<div class="row" >
			
			 <div class="col-md-12 grid-margin ">
		   
			<h4><label for="exampleInputEmail1"> Mapping</label></h4>
								<label for="exampleInputEmail1" id="agenty_name">Supervisor </label>
		   
		   </div>
			
						<div class="col-md-12 grid-margin ">
							<div class="card">
								<div class="card-body">
								<div class="row" id="body_kec" >
								<input type="hidden" id="agent_id" />
										<br>
											<?php foreach($location as $array_familys){ ?>
											 <div class="col-md-6" >
											  <div class="form-check">
												  <label class="form-check-label">
													<input type="checkbox" name="kecamatan" id="<?php echo str_replace(" ","_",$array_familys['id_location']); ?>" value="<?php echo $array_familys['id_location']; ?>" class="form-check-input" >
													<?php echo $array_familys['location_name']; ?>
												  </label>
												</div>
											</div>


											<?php  } ?>										   
										</div>
										<div class="col-md-12" >
											
										</div>
								</div>
								<div class="row" >
											<div class="col-md-2" style="margin:auto;" ><button class="btn btn-sm btn-danger" type="button" onClick="mapping_user()">Simpan</button></div>
											</div>
								
							</div>
						</div>
						
					
						
					<!--<div class="col-md-4">
						 <div class="col-lg-12 grid-margin stretch-card">
						  <div class="card">
							<div class="card-body">
							  <h4 class="card-title">Target Responden</h4>
							  <canvas id="doughnutChart"></canvas>
							</div>
						  </div>
						</div>
					</div>-->
		  
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
		  
		  
		    
		  
		  
		    var doughnutPieData = {
    datasets: [{
      data: [30, 40, 30],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Pink',
      'Blue',
      'Yellow',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
		  
		      // var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
				// var doughnutChart = new Chart(doughnutChartCanvas, {
				  // type: 'doughnut',
				  // data: doughnutPieData,
				  // options: doughnutPieOptions
				// });
		  
		  
		});
		
		</script>
 
<script>
			function mapping_user(){

				//alert('asasasa');
				
				var urls = "<?php echo base_url('supervisor_mapping/insert_mapping');?>";
				var values = '';
				$("input:checkbox[name=kecamatan]:checked").each(function(){
					values += $(this).val()+'|';
				});
				var values_rel = values.slice(0, -1) ;
				
				var formData = new FormData();
				formData.append('kecamatan_list',values_rel);
				formData.append('id_user',$('#agent_id').val());

				$.ajax({
					type:'POST',
					url: urls,
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {
							swal({
							  title: 'Success!',
							  text: response.message,
							  type: 'success',
							  showCancelButton: false,
							  confirmButtonText: 'Ok'
							}).then(function () {
								
							//	$('#add_user').trigger("reset");
							//	$('#body_table_resp').html(response.html);
								
								
								// $("#list_user").show('1000');
								// $("#create_user").hide('1000');
							  //window.location.href = "<?php echo base_url('users');?>";
							})
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

			function get_resume(users){
				
				//alert(users);
				var params = users.split("|");
				
				var formData = new FormData();
				formData.append('users',params[0]);

				$.ajax({
					type:'POST',
					url: '<?php echo base_url('supervisor_mapping/get_resume');?>',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {
							
							//obj = jQuery.parseJSON(response.html);
							
							console.log(response.his);

							var arr = response.his;
							// swal({
							  // title: 'Success!',
							  // text: response.message,
							  // type: 'success',
							  // showCancelButton: false,
							  // confirmButtonText: 'Ok'
							// }).then(function () {
								
								// $('#add_user').trigger("reset");
								// $('#body_table_resp').html(response.html);
								$('#agent_id').val(params[0]);
								$('#agenty_name').html('Agent '+params[1]);
								//$('#body_kec').html('');

								$('input[type=checkbox]').prop('checked',false);
								
								for (i = 0; i < arr.length; i++) {

									$('#'+arr[i]['id_location']).prop('checked', true);

								}

								
								//$('#body_kec').html(response.his);
								
								
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

			function edit_profile(){
				
				$('#nama_lengkap').prop('readonly', false);
				$('#no_tel').prop('readonly', false);
				$('#email').prop('readonly', false);
				$('#username').prop('readonly', false);
				$('#password').prop('readonly', false);
				
				$("#btn_cancel_edit").show();
				$("#btn_save_edit").show();
				
			}
			
			function cancel_edit_user(){
				$('#nama_lengkap').prop('readonly', true);
				$('#no_tel').prop('readonly', true);
				$('#email').prop('readonly', true);
				$('#username').prop('readonly', true);
				$('#password').prop('readonly', true);
				
				$("#btn_cancel_edit").hide();
				$("#btn_save_edit").hide();
			}
			
			function new_user(){
				$("#list_user").hide('1000');
				$("#create_user").show('1000');
			}
			
			function cancel_new_user(){
				$("#list_user").show('1000');
				$("#create_user").hide('1000');
			}
			
			
			$('#add_user').on('submit',(function(e) {
				$('#btn-submit').attr('disabled','disabled');
				$('#btn-submit').text("Memasukkan data...");
				e.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					type:'POST',
					url: $(this).attr('action'),
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {
							swal({
							  title: 'Success!',
							  text: response.message,
							  type: 'success',
							  showCancelButton: false,
							  confirmButtonText: 'Ok'
							}).then(function () {
								
								$('#add_user').trigger("reset");
								$('#body_table_resp').html(response.html);
								
								
								// $("#list_user").show('1000');
								// $("#create_user").hide('1000');
							  //window.location.href = "<?php echo base_url('users');?>";
							})
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
			}));
			
			
			$('#edit_user').on('submit',(function(e) {
				$('#btn-submit').attr('disabled','disabled');
				$('#btn-submit').text("Memasukkan data...");
				e.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					type:'POST',
					url: $(this).attr('action'),
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {
							swal({
							  title: 'Success!',
							  text: response.message,
							  type: 'success',
							  showCancelButton: false,
							  confirmButtonText: 'Ok'
							}).then(function () {
								
								$('#add_user').trigger("reset");
								// $("#list_user").show('1000'); 
								// $("#create_user").hide('1000');
							  //window.location.href = "<?php echo base_url('users');?>";
							})
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
			}));

</script>
