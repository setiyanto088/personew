
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
			  <br>
				<div class="row">
					<div class="col-md-12" >
					   <div class="col-12 col-xl-8 mb-4 mb-xl-0">
						  <h3 class="font-weight-bold">My Profile</h3>
						  <h6 class="font-weight-normal mb-0">Data diri anda <?php echo $session['username']; ?></h6>
						</div> 
					</div> 
					
					<div class="col-md-12" style="margin-top:40px;" >
						<div style="margin-left:10px;margin-right:10px;border-bottom: 1px solid grey;"></div>
					</div> 
					
					
					<div class="col-md-4" style="margin-top:40px;">
						<div class="col-12 col-xl-8 mb-4 mb-xl-0">
						  <img width="100%" style="border-radius:20%" src="<?php echo $session_val['profile_picture']; ?>" alt="profile"/>
						</div>
					</div>
					
					<div class="col-md-8" style="margin-top:40px;margin-left:-50px;">
						 <h3 class="font-weight-bold"><?php echo $session['nama']; ?></h3>
						  <h6 class="font-weight-normal mb-0"><?php echo $session['nama']; ?> <?php echo $session['name_role']; ?></h6><br>
						  <h6 class="font-weight-normal mb-0"><?php echo $session['email']; ?> </h6>
					</div>
					
					<div class="col-md-12" style="margin-top:40px;" >
						<div style="margin-left:10px;margin-right:10px;border-bottom: 1px solid grey;"></div>
					</div>
					
					<div class="col-md-12" style="margin-top:40px;">
					   <div class="col-12 col-xl-12 mb-4 mb-xl-0">
					   
						<div class="row">
						
							<div class="col-md-6" >
								<h3 class="font-weight-bold">Detail Profile</h3>
							</div>
							<div class="col-md-6" style="text-align:right" >
								<h6 class="font-weight-bold" style="color:#F82A2A;cursor: pointer;" onClick="edit_profile()"><i class="icon-pencil"></i>Edit Profile</h6></a>
							</div>
							<div class="col-md-12" >
							  <form class="forms-sample" id="edit_user" role="form" action="<?php echo base_url('agent/edit_user');?>" method="post" >
								<div class="form-group">
								  <label for="exampleInputUsername1">Nama Lengkap</label>
								  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $session['nama']; ?>" readonly="readonly">
								</div>
								 <div class="form-group">
								  <label for="exampleInputEmail1">No. Telp</label>
								  <input type="text" class="form-control" id="no_tel" name="no_tel" placeholder="No. Telp" value="<?php echo $session['nokontak']; ?>" readonly="readonly">
								</div>
								<div class="form-group">
								  <label for="exampleInputEmail1">Email</label>
								  <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $session['email']; ?>" readonly="readonly">
								</div>
								<div class="form-group">
								  <label for="exampleInputEmail1">Username</label>
								  <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $session['username']; ?>" readonly="readonly">
								</div>
								<div class="form-group">
								  <label for="exampleInputEmail1">Password</label>
								  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="00000000" readonly="readonly">
								</div>
								<div class="form-group">
								 <button class="btn btn btn-danger" id="btn_cancel_edit" type="button" onClick="cancel_edit_user()" style="display:none">Batal</button>&nbsp 
								 <button class="btn btn btn-danger" id="btn_save_edit" type="submit" style="display:none">Simpan</button>
								</div>
							  </form>
						  </div>
						</div> 
						 
						</div> 
					</div> 
				 </div>
				  
				  
              </div>
            </div>
			
			<div class="col-md-6 grid-margin ">
			
			<div class="col-md-12 grid-margin">
              <div class="card">
			  <br>
			  <div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-9">
								<label for="exampleInputEmail1">Monthly Caller</label>
							</diV>
							<div class="col-md-3">
								<label for="exampleInputEmail1" style="text-align:right">1000 Respondent</label>
							</diV>
							<div class="col-md-12">
								<div class="progress progress-lg" >
									
									<div class="progress-bar bg" role="progressbar" style="width: 75%;background-color:#ff4747" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color:#dc3545 !important" > </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						&nbsp
					</div>
				  
				  
              </div>
            </div>

          </div>
			
			<div class="col-md-12 grid-margin">
              <div class="card">
			  <br>
			  <div class="row">
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" id="list_user">
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Active Agent</label></h4>
								<label for="exampleInputEmail1">Daftar List Agent yang beroperasi</label>
							</div>
							
								<div class="col-md-2">
								<?php if($session['id_role'] == "125"){ ?>
									<button class="btn btn-sm btn-danger" type="button" onClick="new_user()">Tambah +</button>
								<?php } ?>	
								</diV>

								<div class="col-md-12">
									 <table id="table_resp_ss" class="table table-striped" style="width:97%">
									  <tbody>
										<?php foreach($user as $users){ 
											
											$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
											echo "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$users['group']."</td><td><h4>".$array_akses[$users['status_akses']]."</h4></td></tr>";
										} ?>
									  </tbody>
									</table>
								</div>
								
								<div class="col-md-12">
									 
								</div>
						</div>
						 <form class="forms-sample" id="add_user" role="form" action="<?php echo base_url('agent/add_user');?>" method="post" enctype="multipart/form-data">
						<div class="row" id="create_user" style="display: none;">
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Active Agent</label></h4>
								<label for="exampleInputEmail1">Daftar List Agent yang beroperasi</label>
							</div>
							
								<div class="col-md-2">
									&nbsp								
								</diV>

								<div class="col-md-2">
									<img width="80%" style="border-radius:20%" src="<?php echo base_url().'uploads/profile/1655bcf1497b9ea9c6a25b25a4d30e94.png'; ?>" alt="profile"/>
									<span style="font-size:9px">(format yang didukung JPG, PNG)</span>
									<input type="file" class="form-control" id="picture" name="picture" data-height="110" accept=".jpg, .jpeg, .png"/>
								</div>
								
								<div class="col-md-9">
									
										<div class="form-group">
										  <label for="exampleInputUsername1">Nama Lengkap</label>
										  <input type="text" class="form-control" id="nama_lengkap_new" name="nama_lengkap_new" placeholder="Nama Lengkap">
										</div>
										 <div class="form-group">
										  <label for="exampleInputEmail1">No. Telp</label>
										  <input type="text" class="form-control" id="no_tel_new" name="no_tel_new" placeholder="No. Telp">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Email</label>
										  <input type="text" class="form-control" id="email_new" name="email_new" placeholder="Email">
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
									 
								</div>
								
								<div class="col-md-8">
								&nbsp
								</div>
								<div class="col-md-4">
									<button class="btn btn btn-danger" type="button" onClick="cancel_new_user()">Batal</button>&nbsp <button class="btn btn btn-danger" type="submit" >Simpan</button>
								</diV>
								
								 
						</div>
						</form>
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
								$("#list_user").show('1000');
								$("#create_user").hide('1000');
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
								$("#list_user").show('1000');
								$("#create_user").hide('1000');
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
