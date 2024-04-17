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
              <div class="card">
			  <br>
				<div class="row">
					
					<div class="col-md-12" style="margin-top:10px;">
					   <div class="col-12 col-xl-12 mb-4 mb-xl-0">
					   
						<div class="row">

						<div class="col-md-12" >
						<form class="forms-sample" id="add_user" role="form" action="<?php echo base_url('kord_supervisor/add_user');?>" method="post" enctype="multipart/form-data">
						<div class="row" id="create_user" style="">
							<div class="col-md-10">
							<h3 class="font-weight-bold">Pendaftaran</h3>
								<h4><label for="exampleInputEmail1">Supervisor</label></h4>
							</div>
							
								<div class="col-md-2">
									&nbsp								
								</diV>

								<!--<div class="col-md-2">
									<img width="80%" style="border-radius:20%" src="<?php echo base_url().'uploads/profile/1655bcf1497b9ea9c6a25b25a4d30e94.png'; ?>" alt="profile"/>
									<span style="font-size:9px">(format yang didukung JPG, PNG)</span>
									<input type="file" class="form-control" id="picture" name="picture" data-height="110" accept=".jpg, .jpeg, .png"/>
								</div>-->
								
								<div class="col-md-12">
									
										<div class="form-group">
										  <label for="exampleInputUsername1">Nama Lengkap</label>
										  <input type="text" class="form-control" id="nama_lengkap_new" name="nama_lengkap_new" placeholder="Nama Lengkap">
										</div>
										
										<div class="row">
											<div class="col-md-12"><label for="exampleInputEmail1">Tempat & Tanggal Lahir</label></div>
											<div class="col-md-6">
												<div class="form-group">
												  
												  <input type="text" class="form-control" id="tempat_new" name="tempat_new" placeholder="Tempat">
												</div>
											</div>
											<div class="col-md-6">
												  <div id="datepicker-popup" class="input-group date datepicker">
															<input type="text" name="tgl" id="tgl"  class="form-control">
															<span class="input-group-addon input-group-append border-left">
															  <span class="ti-calendar input-group-text"></span>
															</span>
														  </div>
											</div>
										</div>
										
										   <label for="exampleInputUsername1">Jenis Kelamin</label>

												<div class="row" style="margin-bottom:10px;">
												 <div class="col-md-6">
												  <div class="form-check" >
													<label class="form-check-label">
													  <input type="radio" class="form-check-input" name="gender" id="L" value="L">
													  Laki-laki
													</label>
												  </div>
												</div>
												 <div class="col-md-6">
												  <div class="form-check" >
													<label class="form-check-label">
													  <input type="radio" class="form-check-input" name="gender" id="P" value="P">
													  Perempuan
													</label>
												  </div>
											  </div>
											 </div>
										
										 <div class="form-group">
										  <label for="exampleInputEmail1">No. Telp</label>
										  <input type="text" class="form-control" id="no_tel_new" name="no_tel_new" placeholder="No. Telp">
										</div>
										
										<div class="form-group">
										  <label for="exampleInputUsername1">Username</label>
										  <input type="text" class="form-control" id="username_new" name="username_new" placeholder="Username">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Password</label>
										  <input type="password" class="form-control" id="password_new" name="password_new" placeholder="Password">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Retype Password</label>
										  <input type="password" class="form-control" id="re_password_new" name="re_password_new" placeholder="Password">
										</div>
										
										<label for="exampleInputEmail1">Kota</label>
										
										<div class="row" >
											<?php foreach($location as $kecamatan_data){ ?>
										<br>
											
											 <div class="col-md-6" >
											  <div class="form-check">
												  <label class="form-check-label">
													<input type="checkbox" name="kecamatan" value="<?php echo $kecamatan_data['id_location']; ?>" class="form-check-input" >
													<?php echo $kecamatan_data['location_name']; ?>
												  </label>
												</div>
											</div>

											<?php  } ?>					   
										</div>
										<br>										
									 
								</div>
								
								
								<div class="col-md-12" id="add_div">
									<button class="btn btn btn-danger col-md-12" style="margin-bottom:10px" id="save_button" type="submit" >Daftar Supervisor</button>
								</diV>
								<div class="col-md-6" id="edit_div" style="display:none">
									<button class="btn btn btn-danger col-md-12" style="margin-bottom:10px;" id="edit_button" type="submit" >Edit Supervisor</button>
								</div>
								<div class="col-md-6" id="cancel_edit_div" style="display:none">
									<button class="btn btn btn-danger col-md-12" style="margin-bottom:10px;" id="cancel" type="submit" >Batal</button>
								</div>
								 
						</div>
						</form>
						  </div>
						</div> 
						 
						</div> 
					</div> 
				 </div>
				  
				  
              </div>
            </div>
			
			<div class="col-md-8 grid-margin ">
			
			
			<div class="col-md-12 grid-margin">
              <div class="card">
			  <br>
			  <div class="row">
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" id="list_user">
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Active Supervisor</label></h4>
								<label for="exampleInputEmail1">Daftar List Supervisor yang beroperasional</label>
							</div>
							
								<div class="col-md-2">
								<?php if($session['id_role'] == "125"){ ?>
									<button class="btn btn-sm btn-danger" type="button" onClick="new_user()">Tambah +</button>
								<?php } ?>	
								</diV>

								<div class="col-md-12">
									 <table id="table_resp_ss" class="table table-striped responsive" style="width:97%">
									  <tbody id="body_table_resp">
										<?php foreach($user as $users){ 
											
											$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
											echo "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$users['location_name']."</td><td style='display:none'><h5 style='cursor: pointer;color:#ff0707' onClick='edit_supervisor()' >Edit</h5></td></tr>";
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
				
				var values = '';
				$("input:checkbox[name=kecamatan]:checked").each(function(){
					values += $(this).val()+'|';
				});
				var values_rel = values.slice(0, -1) ;
				
				var formData = new FormData(this);
				formData.append('kecamatan_list',values_rel);

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
