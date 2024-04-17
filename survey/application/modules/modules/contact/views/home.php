
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card" >
              <div class="card">
			  <br>
				<div class="row">
					
						<div class="col-md-12" style="margin-top:20px" >
							<h3 class="font-weight-normal mb-0">All Contacts</h3>
						</div>
						<div class="col-md-5" style="margin-top:20px" >
							<h6 class="font-weight-normal mb-0">Database Pelanggan Indihome</h6>
						</div>
						<div class="col-md-5" >
							&nbsp
						</div>
						<div class="col-md-2" style="margin-top:20px" >
							<h6 class="font-weight-normal mb-0" id="cnt_contact">1000 Contact</h6>
						</div>
						
						<div class="col-md-12" style="margin-top:20px" >
						<select class="form-control js-example-basic-multiple" name="kota[]" id="kota" multiple="multiple" style="width:100%"> 
												<?php  foreach($kota as $kotas){
													
													echo "<option value='".$kotas['KOTA_X']."'>".$kotas['KOTA_X']." </option>";
													
												} ?>
											</select>
						</div>
							<div class="col-md-12" style="margin-top:20px;height:500px;overflow-y: auto; width:250px " >
										 <table id="table_resp_ss" class="table table-hover" style="font-size:9" >
										 <thead>
											
										 </thead>
										  <tbody id ="body_table">
											<?php foreach($contact as $contact){ 
																							
												echo "<tr onclick=\"select_cont('".$contact['NAMA_PELANGGAN']."|".$contact['NO_HP']."|".$contact['CARDNO']."|".$contact['ALAMAT']."')\" ><td style=\"width:100px\">".$contact['NAMA_PELANGGAN']."</td><td>+62".$contact['NO_HP']."</td><td>".$contact['KOTA_X']."</td></tr>";
											} ?>
										  </tbody>
										</table>
							</div>
				 </div>
				  
				  
              </div>
            </div>
			
			<div class="col-md-8 grid-margin ">
			
			<div class="col-md-12 grid-margin">
              <div class="card">
			  <br>
			  <div class="row">
			  <div class="col-md-6" >
					<div class="col-md-12" style="margin-left:10px">
						<div class="row" >
							<div class="col-md-9">
								<h4><label for="exampleInputEmail1" id="nama_contact">-</label></h4>
								<label for="exampleInputEmail1">-</label>
							</div>
							
								<div class="col-md-3" id="status_label">
									Status 
								</diV>

								<div class="col-md-12" style="margin-top:30px" >
									<h4><label for="exampleInputEmail1">Data Pelanggan</label></h4>
									<label for="exampleInputEmail1">(data sewaktu-waktu dapat berubah)</label>
									<br>
									<br>
								</div>
								
								<div class="col-md-12" id="list_user">
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
									 Operator Belum Memilih Salah Satu Data <br>
									 Pelanggan, Silahkan Pilih Salah Satu Data <br> Lalu Lanjutkan
									 <br>
								<br>
								<br>
								<br>
								<br>
								<br>
								</div>
						</div>
						
						<div class="row" id="create_user" style="display: none;">

								<div class="col-md-12">
									 <form class="forms-sample">
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
										  <input type="password" class="form-control" id="no_whats" placeholder="Diketik Ketika Konfirmasi" readOnly="ReadOnly">
										</div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Alamat Lengkap</label>
										  <textarea  class="form-control" id="alamat" placeholder="Alamat" readOnly="ReadOnly"></textarea>
										</div>
									  </form>
								</div>
								
								<div class="col-md-12">
								&nbsp
								</div>

						</div>
					</div>
					</div>
					<div class="col-md-6" style="border-left: thin solid #009;">
						<div class="row" >
							<div class="col-md-10">
								<h4><label for="exampleInputEmail1">Response</label></h4>
								<label for="exampleInputEmail1">Activity Operator</label>
							</div>
							
								<div class="col-md-2">
									 
								</diV>
								
								<div class="col-md-12" id="list_user2">
									 <br>
								<br>
								<br>
								<br>
								<br>
								<br>
									 Operator Belum Memilih Salah Satu Data <br>
									 Pelanggan, Silahkan Pilih Salah Satu Data <br> Lalu Lanjutkan
									 <br>
								<br>
								<br>
								<br>
								<br>
								<br>
								</div>
						</div>
						
						<div class="row" id="create_user2" style="display: none;">

								<div class="col-md-12">
									 <form class="forms-sample">
										<div class="form-group">
										  <label for="exampleInputUsername1">Hasil Respon</label>
										  <select class="form-control" id="respond" placeholder="respond" >
											<option value="" selected disabled="disabled">Hasil Respond</option>
											<option value="1">Nomor Tidak Dapat Dihubungi</option>
											<option value="2">RNA</option>
											<option value="3">Diangkat tapi Tidak Bersedia bicara</option>
											<option value="4">Salah Sambung</option>
											<option value="5">Tidak Bersedia jadi Responden</option>
											<option value="6">Bersedia jadi Responden</option>
										  </select>
										</div>
										
										<br>
										
										<div class="form-group">
										  <label for="exampleInputEmail1">Keterangan</label>
										  <textarea  class="form-control" id="ket" placeholder="Keterangan" rows="6"  ></textarea>
										</div>

										
									  </form>
								</div>
								
								<div class="col-md-4">
								&nbsp
								</div>
								
								<div class="col-md-8">
								<button class="btn btn btn-danger" type="button" onClick="save_new_user()">Lanjut Untuk Konfirmasi</button>
								</div>

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
		
		});
		
		</script>
<script>

			function select_cont(val){
				
				var vals = val.split("|");
				
				$("#nama_lengkap_new").val(vals[0]);
				$("#nama_contact").html(vals[0]);
				$("#no_cardno").val(vals[2]);
				$("#no_tel_new").val("+62 "+vals[1]);
				$("#alamat").val(vals[3]);
				$("#status_label").html("Status: Berlangganan");
				
				$("#list_user").hide('1000');
				$("#list_user2").hide('1000');
				$("#create_user").show('1000');
				$("#create_user2").show('1000');
				
				
				
			}
			
			function cancel_new_user(){
				$("#list_user").show('1000');
				$("#create_user").hide('1000');
			}
			
			

</script>
