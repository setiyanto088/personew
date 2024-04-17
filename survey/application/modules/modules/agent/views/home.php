
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
			  <br>
				<div class="row">
					<div class="col-md-12">
					   <div class="col-12 col-xl-8 mb-4 mb-xl-0">
						  <h3 class="font-weight-bold">My Profile</h3>
						  <h6 class="font-weight-normal mb-0">Data diri anda <?php echo $session['username']; ?></h6>
						</div> 
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
					
					<div class="col-md-12" style="margin-top:40px;">
					   <div class="col-12 col-xl-12 mb-4 mb-xl-0">
						  <h3 class="font-weight-bold">Detail Profile</h3>
						  <form class="forms-sample">
							<div class="form-group">
							  <label for="exampleInputUsername1">Nama Lengkap</label>
							  <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
							</div>
							 <div class="form-group">
							  <label for="exampleInputEmail1">No. Telp</label>
							  <input type="text" class="form-control" id="no_tel" placeholder="No. Telp">
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Email</label>
							  <input type="text" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Password</label>
							  <input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						  </form>
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
									
									<div class="progress-bar bg" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color:#dc3545 !important" > </div>
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
									<button class="btn btn-sm btn-danger" type="button" onClick="new_user()">Tambah +</button>
								</diV>

								<div class="col-md-12">
									 <table id="table_resp_ss" class="table table-striped">
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
									 <form class="forms-sample">
										<div class="form-group">
										  <label for="exampleInputUsername1">Nama Lengkap</label>
										  <input type="text" class="form-control" id="nama_lengkap_new" placeholder="Nama Lengkap">
										</div>
										 <div class="form-group">
										  <label for="exampleInputEmail1">No. Telp</label>
										  <input type="text" class="form-control" id="no_tel_new" placeholder="No. Telp">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Email</label>
										  <input type="text" class="form-control" id="email_new" placeholder="Email">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Password</label>
										  <input type="password" class="form-control" id="password_new" placeholder="Password">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Retype Password</label>
										  <input type="password" class="form-control" id="re_password_new" placeholder="Password">
										</div>
									  </form>
								</div>
								
								<div class="col-md-8">
								&nbsp
								</div>
								<div class="col-md-4">
									<button class="btn btn btn-danger" type="button" onClick="cancel_new_user()">Batal</button>&nbsp <button class="btn btn btn-danger" type="button" onClick="save_new_user()">Simpan</button>
								</diV>
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
 
<script>

			function new_user(){
				$("#list_user").hide('1000');
				$("#create_user").show('1000')
			}
			
			function cancel_new_user(){
				$("#list_user").show('1000');
				$("#create_user").hide('1000')
			}

</script>
