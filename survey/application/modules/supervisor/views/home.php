
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
					
					<div class="col-md-8" style="margin-top:40px;">
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
							  <form class="forms-sample" id="edit_user" role="form" action="<?php echo base_url('supervisor/edit_user');?>" method="post" >
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
