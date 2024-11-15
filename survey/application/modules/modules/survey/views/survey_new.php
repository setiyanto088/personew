
  
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
                  <h3 class="font-weight-bold">CUSTOMER PROFILING SURVEY - 2021</h3>
				 <h6>(Jika ada yang tidak terisi maka kuesioner ini dianggap TIDAK SAH) (Tulis “NA” pada jawaban kosong)</h6>
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
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">KRITERIA RESPONDEN : (Jika ada yang tidak terpenuhi, maka kuesioner ini dianggap TIDAK SAH)</p>
				   <ul>
                 <li> <h6 class="font-weight-normal mb-0"> Responden berlangganan INDIHOME 2 PLAY (Internet+USee TV) atau INDIHOME 3 PLAY (Telepon+Internet+USee TV);</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden setiap hari aktif mengakses/ menonton tayangan USee TV;</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden dan keluarga sering mengakses/ menonton 20 tayangan USee TV berikut (SHOWCARD);</h6></li>
				<li>	<h6 class="font-weight-normal mb-0">Responden berusia antara 17 tahun hingga 60 tahun.</h6></li>
					</ul>
                </div>
              </div>
            </div>
			
			 <div class="col-md-6 grid-margin stretch-card" class="survey_page_1">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">INFO</p>

				<form class="forms-sample">
                    <div class="form-group">
					<label for="exampleInputUsername1">ID Pelanggan</label>
						<div class="input-group">
							  
							 <!-- <input type="text" class="form-control" id="id_pelanggan" placeholder="ID Pelanggan">
							  <div class="input-group-append">
								<button class="btn btn-sm btn-primary" type="button" onClick="get_respondent()">Search</button>
								 </div>-->
								 
								<select class="form-control js-example-basic-single w-100" id="id_pelanggan" onChange="get_respondent()">
								<option value='' selected disabled='disabled'>-- id_pelanggan --</option>
								<?php  foreach($data_cardno as $data_cardnos){
									
									echo "<option value='".$data_cardnos['CARDNO']."'>".$data_cardnos['CARDNO']."</option>";
									
								} ?>
								  
								</select>
								
							 
						</div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kota Survey</label>
                      <input type="text" class="form-control" id="kota_survey" placeholder="Kota Survey">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telkom Regional</label>
                      <input type="text" class="form-control" id="telkom_regional" placeholder="Telkom Regional">
                    </div>
                  </form>
					
                </div>
              </div>
            </div>
         
          
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_identiatas_responden" style="display: none;" >
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">IDENTITAS RESPONDEN</h4>

                  <form class="forms-sample">
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
                  </form>
                </div>
              </div>
            </div>
			
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_demografi_responden" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DEMOGRAFI RESPONDEN</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">R1. Jenis Kelamin</label>
					    <div class="row">
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r1" id="r11" value="L">
								  Laki-laki
								</label>
							  </div>
						  </div>
						   <div class="col-md-6">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r1" id="r12" value="P" >
								  Perempuan
								</label>
							  </div>
						   </div>
						</div>
					</div>
                    <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R2. Usia</label>
					    <div class="row">
						 <div class="col-md-2">
							  <div class="form-group">
								<select class="form-control" id="r2lainnya" onChange="selectAge()">
								<option value=''selected disabled='disabled'>-- Usia --</option>
								<?php  for($in=17;$in<61;$in++){
									
									echo "<option value='".$in."'>".$in." Tahun</option>";
									
								} ?>
								  
								</select>
							  </div>
						  </div>
						  <div class="col-md-2">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r21" value="17-25">
								  17-25 Tahun
								</label>
							  </div>
						  </div>
						   <div class="col-md-2">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r22" value="26-39" >
								  26-39 Tahun
								</label>
							  </div>
						   </div>
						    <div class="col-md-2">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r23" value="40-55">
								  40-55 Tahun
								</label>
							  </div>
						  </div>
						   <div class="col-md-2">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r2" id="r24" value="56-60" >
								  56-60 Tahun
								</label>
							  </div>
						   </div>
						</div>
					</div>
                     <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R3. Pendidikan Terakhir</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r31" value="SD">
								  SD
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r32" value="SMP" >
								  SMP
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r33" value="SMA">
								  SMA
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r34" value="D1" >
								  D1
								</label>
							  </div>
						   </div>
						     <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r35" value="D3" >
								  D3
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r36" value="D4/S1">
								  D4/S1
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r37" value="S2" >
								  S2
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r3" id="r38" value="S3">
								  S3
								</label>
							  </div>
						  </div>
						 
						   
						</div>
					</div>
					<div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">R4. Pekerjaan Utama</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r41" value="Pelajar">
								  Pelajar/ Mahasiswa
								  
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r42" value="art">
								  Ibu Rumah Tangga
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r43" value="pensiunan" >
								  Pensiunan
								</label>
							  </div>
						   </div>
						      <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r44" value="bumn" >
								  BUMN atau BUMD
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r45" value="asn" >
								  ASN (PNS)/ TNI/ POLRI
								  
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jabatanASN" placeholder="Jabatan ASN (PNS)/ TNI/ POLRI">
							</div>
						   </div>
						   
						  
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r46" value="swasta" >
								  Pegawai Swasta
								</label>
							  </div>
						   </div>
						     <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jabatanswasta" placeholder="Jabatan Swasta">
							</div>
						   </div>
						   
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r47" value="mandiri">
								  Pekerja mandiri (tanpa karyawan)
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="bidangmandiri" placeholder="Bidang Usaha Mandiri">
							</div>
						   </div>
						
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="r4" id="r48" value="wiraswasta">
								  Wiraswasta (memiliki karyawan)
								</label>
							  </div>
						  </div>
						     <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="bidangwiraswasta" placeholder="Bidang Usaha Wiraswasta">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>

		  
            
            <div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_profile_rumah_tangga" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROFIL RUMAH TANGGA</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">A1. Bagaimana status pernikahan Bpk/ Ibu/ Sdr?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="statusNikah" id="statusNikaha" value="single">
								  Belum menikah
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="statusNikah" id="statusNikah2" value="married" >
								  Menikah
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="statusNikah" id="statusNikah3" value="mcm" >
								  Menikah – Cerai mati
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="statusNikah" id="statusNikah4" value="mch" >
								  Menikah – Cerai Hidup
								</label>
							  </div>
						   </div>
						</div>
					</div>
                    <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A2. Sebagai apa posisi Bpk/ Ibu/ Sdr di keluarga ini?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel1" value="kk">
								  Kepala Keluarga (KK)
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel12" value="ik" >
								  Isteri dari Kepala Keluarga
								</label>
							  </div>
						   </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel13" value="ak">
								  Anak dari Kepala Keluarga
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel14" value="oki" >
								  Orang tua dari Kepala Keluarga/ Isteri KK
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel15" value="ski" >
								  Saudara dari Kepala Keluarga/ Isteri KK
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="posisiKel" id="posisiKel16" value="fs_ll" >
								  Lainnya
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="posisiKelLain" placeholder="Posisi Keluarga ">
							</div>
						   </div>
						</div>
					</div>
                     <div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A3. Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel1" value="count_1">
								  1
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel2" value="count_2">
								  2
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel3" value="count_3">
								  3
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel4" value="count_4">
								  4
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel5" value="count_5">
								  5
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="jumlahKel" id="jumlahKel6" value="count_5+">
								  >5
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="jumlahKel5p" placeholder="Jumlah Keluarga">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					<div class="form-group" class="page_1">
                      <label for="exampleInputUsername1">A4. (Showcard-A) Siapa saja keluarga inti Bpk/ Ibu/ Sdr yang tinggal di rumah ini? Sebutkan jenis kelamin dan usianya!</label>
					    <div class="row">
						
						  <div class="col-md-12">
						  <table id="table_resp">
							  <thead>
								<tr>
								  <th scope="col">Anggota Keluarga</th>
								  <th scope="col">Jenis Kelamin</th>
								  <th scope="col">Usia</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_kk_chek" value="family_kk" class="form-check-input tft" >Kepala keluarga KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input tft" name="a4_kk_gen" id="a4_kk_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input tft" name="a4_kk_gen" id="a4_kk_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text" class="tft" id="a4_kk_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_ik_chek" value="family_ik" class="form-check-input" >Isteri dari  Kepala <br> Keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ik_gen" id="a4_ik_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ik_gen" id="a4_ik_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ik_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_ak1_chek" value="family_ak1" class="form-check-input" >Anak pertama dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak1_gen" id="a4_ak1_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak1_gen" id="a4_ak1_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak1_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_ak2_chek" value="family_ak2" class="form-check-input" >Anak kedua dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak2_gen" id="a4_ak2_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak2_gen" id="a4_ak2_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak2_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_ak3_chek" value="family_ak3" class="form-check-input" >Anak ketiga dari <br> kepala keluarga
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ak3_gen" id="a4_ak3_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ak3_gen" id="a4_ak3_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ak3_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_oki_chek" value="family_oki" class="form-check-input" >Orang tua dari Kepala <br> keluarga/ Isteri KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_oki_gen" id="a4_oki_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_oki_gen" id="a4_oki_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_oki_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
								
								<tr>
								  <td scope="row" data-label="Anggota Keluarga">
											<input type="checkbox" name="a4_check" id="a4_ski_chek" value="family_ski" class="form-check-input" >Saudara dari Kepala <br> keluarga/ isteri KK
								  </td>
								  <td data-label="Jenis Kelamin">
												  <input type="radio" class="form-check-input" name="a4_ski_gen" id="a4_ski_genl" value="L">
												  Laki-laki&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												  <input type="radio" class="form-check-input" name="a4_ski_gen" id="a4_ski_genp" value="P" >
												  Perempuan
								  </td>
								  <td data-label="Usia">
									
									  <input type="text"  id="a4_ski_usia" placeholder="Usia" maxlength="4" size="20">
								  </td>
								</tr>
							  </tbody>
							</table>
						</div>
					</div>
					</div>
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A5. Berapakah jumlah anggota keluarga Bpk/ Ibu/ Sdr yang tinggal dalam satu rumah yang memiliki penghasilan?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a51" value="count_1_ff">
								  1 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a52" value="count_2_ff">
								  2 Orang
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a53" value="count_3_ff">
								  3 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a54" value="count_4_ff">
								  4 Orang
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a55" value="count_5_ff">
								  5 Orang
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a5" id="a56" value="count_5_ff+">
								  >5 Orang
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="a5p" placeholder="Jumlah Keluarga Berpenghasilan">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A6. Berapakah rata-rata PENGELUARAN RUTIN KELUARGA Bpk/ Ibu/ Sdr perbulannya untuk keperluan sehari-hari, tetapi tidak termasuk pengeluaran untuk rekreasi, pakaian, sepatu & pengeluaran non-rutin lain serta juga kredit-kredit seperti: mobil, rumah, elektronik, dll?</label>
					    <div class="row">
						    <div class="col-md-4">
							 <div class="form-group">
							  Pengeluaran per bulan: <input type="text" class="form-control" id="a6p" onkeyup="expense_family()" placeholder="Pengeluaran per bulan">
							</div>
						   </div>
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a61" value="2-">
								  Dibawah Rp 2.0 Juta
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a62" value="2-3">
								  Rp 2.0 Juta – Rp 3.0 Juta
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a63" value="3-4.5">
								  Rp 3.1 Juta – Rp 4.5 Juta
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a64" value="4.5-6">
								  Rp 4.6 Juta – Rp 6.0 Juta
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a65" value="6-9">
								  Rp 6.1 Juta – Rp 9.0 Juta
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a6" id="a66" value="9+">
								  Diatas Rp 9.0 Juta
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">A7. Bagaimana status kepemilikan rumah yang Bpk/ Ibu/ Sdr tempati saat ini?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a71" value="rs">
								  Milik sendiri
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a72" value="rd">
								  Rumah dinas
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a73" value="rs">
								  Rumah saudara
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a74" value="sk">
								  Sewa/ kontrak
								</label>
							  </div>
						  </div>
						       <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a75" value="rot">
								  Rumah Orang tua
								</label>
							  </div>
						  </div>
						      <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="a7" id="a76" value="ho_ll">
								  Lainnya
								</label>
							  </div>
						  </div>
						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="a7p" placeholder="Tempat Tinggal Lainnya">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			<div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_internet_dan_data" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INTERNET DAN DATA</h4>

                  <form class="forms-sample">
                    <div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B1. Provider PAKET DATA INTERNET SELULER (Mobile Broadband) apa saja yang digunakan oleh Bpk/ Ibu/ Sdr?</label>
					    <div class="row">
						
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="axis" class="form-check-input" >
									Axis
								  </label>
								</div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="indosat" class="form-check-input" >
									Indosat
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="smartfren" class="form-check-input" >
									SmartFren
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="telkomsel" class="form-check-input" >
									Telkomsel
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="three" class="form-check-input" >
									Three (3)
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="xl" class="form-check-input" >
									XL
								  </label>
								</div>
						  </div> 
						  <div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="b1" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
						  </div> 

						    <div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="b1lainnya" placeholder="Provider Lainnya">
							</div>
						   </div>
						 
						   
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B2. Berapa pengeluaran Bpk/ Ibu/ Sdr untuk berlangganan PAKET DATA INTERNET SELULER (Mobile Broadband) per-bulannya?</label>
					    <div class="row">
						    <div class="col-md-4">
							 <div class="form-group">
							  Pengeluaran per bulan: <input type="text" class="form-control" id="b2lainnya" onkeyup="data_expense()"  placeholder="Pengeluaran per bulan">
							</div>
						   </div>
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b11" value="<50">
								  Dibawah Rp 50 Ribu
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b12" value="50-100">
								  Rp 50 Ribu – Rp 100 Ribu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b13" value="100-150">
								  Rp 100 Ribu – Rp 150 Ribu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b14" value="150-200">
								  Rp 150 Ribu – Rp 200 Ribu
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b15" value="200-300">
								  Rp 200 Ribu – Rp 300 Ribu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b1" id="b16" value=">300">
								  Diatas Rp 300 Ribu
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B3. Bagaimana frekuensi Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband) dalam sebulan?</label>
					    <div class="row">
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b31" value="data_very_high">
								  Setiap hari
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b32" value="data_high">
								  4-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b33" value="data_medhigh">
								  2-3 hari dalam seminggu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b34" value="data_med">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b35" value="data_low">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b3" id="b36" value="data_very_low">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						 </div>
						   </div>
						</div>
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">B4. Kapan terakhir kali Bpk/ Ibu/ Sdr memanfaatkan PAKET DATA INTERNET SELULER (Mobile Broadband)?</label>
					    <div class="row">
						    <div class="col-md-8">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b41" value="1">
								  Hari ini
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b42" value="1-3">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b43" value="4-6">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b44" value="7">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="b4" id="b45" value="7+">
								  Lebih dari seminggu yang lalu
								</label>
							  </div>
						  </div>
						    
						 </div>
						   </div>
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			
			<div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_menonton_televisi" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MENONTON TELEVISI  </h4>

                  <form class="forms-sample">
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C1. Seberapa sering Bpk/ Ibu/ Sdr menonton acara TV di rumah?</label>
					    <div class="row">

						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c11" value="1-2mg">
								  1-2 kali seminggu
								</label>
							  </div>
							</div>
							 <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c14" value="3-6mg">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c12" value="1hari">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c15" value="2-3hari">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c13" value="3+hari">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c1" id="c16" value="1mg-">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						 </div>
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C2. Berapa jam dalam sehari Bpk/ Ibu/ Sdr mononton acara TV di rumah?</label>
					    <div class="row">
						    <div class="row">
							
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c2lainnya" onkeyup="tv_duration()" placeholder="Durasi Menonton Tv">
							</div>
						   </div>
							
						     <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c21" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c22" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c23" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c24" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c25" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c2" id="c26" value="8+">
								  > 8 Jam
								</label>
							  </div>
						  </div>
						 </div>
						</div>
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C3-1. Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKDAY?</label>
					    <div class="row">
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c3-1" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C3-2. Siapa saja anggota keluarga yang mononton acara TV di rumah Saat WEEKEND?</label>
					    <div class="row">
						    
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c3-2" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						</div>
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C4. Pada waktu berikut ini, siapa saja anggota keluarga yang mononton acara TV di rumah?</label>
					    <div class="row">
						<div class="col-md-2">
						<h5>Pagi Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						   <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-1" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Siang Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						<?php foreach($array_family as $array_familys){ ?>
						     <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-2" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>						   
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Sore Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						    
							<?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-3" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Malam Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						  
						  <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-4" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
						<br>
						<div class="row">
						<div class="col-md-2">
						<h5>Dini Hari</h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						  
						  <?php foreach($array_family as $array_familys){ ?>
						    <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c4-5" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C5. Siapa saja anggota keluarga yang mononton acara TV di rumah dengan Genre berikut ini?</label>
					  <br>
					  <br>
					  <?php $c5int = 1; foreach($array_genre as $array_genres){ ?>
					  
					    <div class="row">
						<div class="col-md-2">
						<h5><?php echo $array_genres; ?></h5>
						</div>
						<div class="col-md-10">
						    <div class="row">
						   
						   <?php foreach($array_family as $array_familys){ ?>
						   <div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c5-<?php echo $c5int; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>
						    
						 </div>
						</div>
						</div>
						<br>
					  <?php $c5int++; } ?>
						
					</div>
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C6. Dalam 1 bulan terakhir, apakah Bpk/ Ibu/ Sdr sering atau pernah menonton siaran TV dengan menggunakan antena luar?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c6" id="c61" value="Tidak">
								  Tidak
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c6" id="c62" value="Ya">
								  Ya
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c7-pg" style="display:none">
                      <label for="exampleInputUsername1">C7. Jika jawaban C6 : Ya, siaran TV jenis apa yang lebih sering Bpk/ Ibu/ Sdr tonton?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c7" id="c71" value="digital">
								  TV Digital
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c7" id="c72" value="analog">
								  TV Analog
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c81-pg" style="display:none">
                      <label for="exampleInputUsername1">C8. Jika jawaban C7 : TV Digital, maka: (C8-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Digital?</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c81lainnya" placeholder="Lama Menonton" onkeyup="tv_duration_digital()" />
							</div>
						   </div >
						   
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c81" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c82" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c83" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c84" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c85" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c8" id="c86" value="8+">
								  > 8 Jam
								</label>
							  </div>
						  </div>	
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c82-pg" style="display:none">
                      <label for="exampleInputUsername1">C8. Jika jawaban C7 : (C8-2) Sebutkan 5 Channel TV Digital apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_s" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Channel</th>
									  <th scope="col">Urutan</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $uc = 1; foreach($array_channel as $array_channels){ ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="c82-<?php echo $uc; ?>" value="<?php echo $array_channels; ?>" class="form-check-input" >
											<?php echo $array_channels; ?>
										  </label>
										</div>
									  </td>
									  <td><input type="text" class="form-control" id="c82u-<?php echo $uc; ?>" placeholder="Urutan" size=5> </td>
									</tr>
								  <?php $uc++; } ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" class="form-check-input" >
											Lainnya
										  </label>
										</div>
									  </td>
									  <td>
									   <div class="row">
									    <div class="col-md-6">
											<input type="text" class="form-control" id="c82channelLainnya" placeholder="Channel" > 
										</div>
										
									   <div class="col-md-6">
											<input type="text" class="form-control" id="c82urutanLainnya" placeholder="Urutan" size=5>
									  </div>
									  </div>
									  </td>
									</tr>
								  </tbody>
								</table>
							</div>
						   </div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c9-pg" style="display:none">
                      <label for="exampleInputUsername1">C9. Jika jawaban C7 : TV Digital, apakah Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan UseeTV?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						    <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c9" id="c91" value="Tidak">
								  Tidak
								</label>
							  </div>
							</div>
						   <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c9" id="c92" value="Ya">
								  Ya
								</label>
							  </div>
							</div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c10-pg" style="display:none">
                      <label for="exampleInputUsername1">C10. Jika jawaban C9: Ya, apa alasan Bpk/ Ibu/ Sdr lebih suka menonton channel TV Nasional melalui TV Digital dibandingkan UseeTV?</label>
					  <br>
					  <br>
					  
					    <div class="row">

						<div class="col-md-12">
						    <div class="row">
						     <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" value="praktis" class="form-check-input" >
									Lebih praktis
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" value="Kualitas" class="form-check-input" >
									Kualitas suara dan gambar lebih jernih
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" value="Tidak ade" class="form-check-input" >
									Tidak ada alasan khusus
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c10" value="other" class="form-check-input" >
									Lainnya
								  </label>
								</div>
						  </div> 
						  <div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c10_alasan" placeholder="Alasan Lainnya">
							</div>
						   </div>
						  
						    
						 </div>
						</div>
						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c111-pg" style="display:none">
                      <label for="exampleInputUsername1">C11. Jika jawaban C7 : TV Analog, maka: (C11-1) Berapa lama dalam sehari Bpk/ Ibu/ Sdr menonton TV Analog?</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-4">
							 <div class="form-group">
							  <input type="text" class="form-control" id="c111lainnya" placeholder="Lama Menonton" onkeyup="tv_duration_analog()"> 
							</div>
						   </div>

						
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c111" value="1-">
								  < 1 Jam
								</label>
							  </div>
							</div>
							
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c112" value="1-2">
								  1 – 2 Jam
								</label>
							  </div>
						  </div>
						      <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c113" value="2-4">
								  2.1 – 4.0 Jam
								</label>
							  </div>
						  </div>
						    <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c114" value="4-6">
								  4.1 – 6.0 Jam
								</label>
							  </div>
						  </div>
						       <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c115" value="6-8">
								  6.1 – 8.0 Jam
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="c11" id="c116" value="8+">
								  > 8 Jam
								</label>
							  </div>
						  </div>		

						</div>
						
					</div>
					
					<div class="form-group" class="page_2" id="c112-pg" style="display:none">
                      <label for="exampleInputUsername1">C11. Jika jawaban C7 : TV Analog,(C11-2) Sebutkan 5 Channel TV Analog apa saja yang sering Bpk/ Ibu/ Sdr tonton? Urutkan dari yang paling sering ditonton!</label>
					  <br>
					  <br>
					  
					    <div class="row">
							<div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_s" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Channel</th>
									  <th scope="col">Urutan</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $uc = 1;foreach($array_channel as $array_channels){ ?>
									<tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="c112-<?php echo $uc; ?>" value="<?php echo $array_channels; ?>" class="form-check-input" >
											<?php echo $array_channels; ?>
										  </label>
										</div>
									  </td>
									  <td><input type="text" class="form-control" id="c112u-<?php echo $uc; ?>" placeholder="Urutan" size=5> </td>
									</tr>
								  <?php } ?>
								  <tr>
									  <td>
									  <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" class="form-check-input" >
											Lainnya
										  </label>
										</div>
									  </td>
									  <td>
									   <div class="row">
									    <div class="col-md-6">
											<input type="text" class="form-control" id="channelLainnyaanalog" placeholder="Channel" > 
										</div>
										
									   <div class="col-md-6">
											<input type="text" class="form-control" id="urutanLainnyaanalog" placeholder="Urutan" size=5>
									  </div>
									  </div>
									  </td>
									</tr>
								  </tbody>
								</table>
							</div>
						   </div>
						</div>
						
					</div>
					
					
					<div class="form-group" class="page_2">
                      <label for="exampleInputUsername1">C12. Dari 20 program acara TV yang sering Bpk/ Ibu/ Sdr dan keluarga tonton di 2 bulan terakhir berikut ini, sebutkan siapa saja (sesuai jawaban A4) yang menonton?</label>
					  <br>
					  <br>
					  <?php for($ii=1;$ii<21;$ii++){ ?>
					  
					    <div class="row">
						<div class="col-md-4">
						<h5 id="program_name_<?php echo $ii; ?>"></h5>
						<input type="hidden" id="c12_channel<?php echo $ii; ?>" value="" />
						</div>
						<div class="col-md-8">
						    <div class="row">
						   
 
						   <?php foreach($array_family as $array_familys){ ?>
							<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="c12_fam<?php echo $ii; ?>" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
									<?php echo $array_familys[0]; ?>
								  </label>
								</div>
							</div>
							<?php } ?>						   
						    
						 </div>
						</div>
						</div>
						<br>
					  <?php } ?>
						
					</div>
					
				
					
                  </form>
                </div>
              </div>
            </div>
			
			<div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_program_acara_televisi" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROGRAM ACARA TELEVISI</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">D1. Seberapa seringkah (pilih skala 1 Untuk Paling Jarang - 10 Untuk Sering) Bpk/ Ibu/ Sdr  menonton program acara TV berikut? </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Program</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php $iii = 1;for($iii=1;$iii <21;$iii++){ ?>
									<tr>

									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="progra_skala_<?php echo $iii; ?>">
										  Program <?php echo $iii; ?>
										  <input type="hidden" id="d1_program_skala<?php echo $ii; ?>" value="" />
										  </label>
											<select class="form-control" id="d1_skala_prog_<?php echo $iii; ?>">
											<option value=''selected>-- Skala --</option>
											<?php  for($in=1;$in<11;$in++){
												
												echo "<option value='".$in."'>".$in." </option>";
												
											} ?>
											  
											</select>
										  </div>
									 
									  </td>
									</tr>
								  <?php } ?>
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1">D2. Hal apa yang menjadi perhatian utama Bpk/ Ibu/ Sdr dalam menilai kualitas program acara TV?</label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d21" value="1">
								  Bisa menambah pengetahuan
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d22" value="2" >
								  Bersifat pengawasan atau memberi peringatan
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d23" value="3" >
								  Membangkitkan empati sosial
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d24" value="4" >
								  Meningkatkan daya kritis
								</label>
							  </div>
						   </div>
						   
						    <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d25" value="5">
								  Memberi model perilaku yang baik
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d26" value="6" >
								  Menghibur
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d2" id="d27" value="7" >
								  Lainnya, sebutkan:
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							   <div class="form-group">
									<input type="text" class="form-control" id="d2lainnya" placeholder="Nilai Kualitas">
								</div>
						   </div>
						   
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>D3. Menurut Bpk/ Ibu/ Sdr, adakah program acara TV baru yang perlu ditambahkan? Jika ada, program seperti apa yang perlu ditambahkan?</b> </label>
					    <div class="row">
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d3" id="d31" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="d3" id="d32" value="Ya" >
								  Ada:
								</label>
							  </div>
						   </div>
						   <div class="col-md-3">
							   <div class="form-group">
									<input type="text" class="form-control" id="d3lainnya" placeholder="program seperti">
								</div>
						   </div>
						   
						</div>
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-6 grid-margin stretch-card" class="page_1" id="page_kesan_pemirsa" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KESAN PEMIRSA</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">E1. Channel TV yang SERING DITONTON DALAM 2 MINGGU TERAKHIR apa saja? </label>
					    <div class="row">
						  
						  <?php $c5int = 1; foreach($array_channel_h as $array_channel_hs){ ?>
						  
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="e1" value="<?php echo $array_channel_hs; ?>" class="form-check-input" >
									<?php echo $array_channel_hs; ?>
								  </label>
								</div>
							</div>
						  
						  <?php $c5int++; } ?>
							
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="e1_other" value="other" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							 <div class="form-group">
							  <input type="text" class="form-control" id="e1_other_input" placeholder="Channel Lainnya">
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1">E2. Menurut Bpk/ Ibu/ Sdr dari channel TV yang sering ditonton, kategori / genre / jenis tayangan mana yang sesuai dengan channel TV tersebut?</label>
					   
						
						 <?php $ii=1; foreach($array_channel_h as $array_channel_hs){ ?>
						
						<br><br>
						 <div class="row">
						 <div class="col-md-3">
							 <?php echo $array_channel_hs; ?>
						 </div>
						 <div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="movies" class="form-check-input" >
										Film (Movies)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="musik" class="form-check-input" >
										Musik
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="kids" class="form-check-input" >
										Kids (Kartun/ program anak)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="religi" class="form-check-input" >
										Religi
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="lifestyle" class="form-check-input" >
										Lifestyle/ Fashion/ Selebritis
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="sport" class="form-check-input" >
										Olah Raga (Sport)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="technology" class="form-check-input" >
										Pengetahuan & Teknologi
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="news" class="form-check-input" >
										Berita (News)
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="drama_series" class="form-check-input" >
										Drama Series / Sinetron
									  </label>
									</div>
								</div>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="e2-<?php echo $ii; ?>" value="ftv" class="form-check-input" >
										FTV / Sinetron Pendek
									  </label>
									</div>
								</div>
							</div>
						 </div>
						 </div>
						 <?php $ii++; } ?>
						 
						
						
					</div>
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_kegemaran_dan_perilaku" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KEGEMARAN & PERILAKU</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1"><b>F1. Apakah Bpk/ Ibu/ Sdr suka nonton film di BIOSKOP? </b> </label>
					    <div class="row">

							
							<div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f1" id="f11" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f1" id="f12" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>

						</div>
					</div>
					
					<div class="form-group" id="f2-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F2. Jika jawaban F1:“YA”, Seberapa sering Bpk/ Ibu/ Sdr atau keluarga menonton BIOSKOP?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f21" value="0">
								  1 kali sebulan
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f22" value="1">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f23" value="2">
								  Lebih dari 2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f24" value="3">
								  2-3 kali sebulan
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f2" id="f25" value="4">
								  Seminggu 2 kali
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f3-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F3. Jika jawaban F1:“YA”,  Dimana Bpk/ Ibu/ Sdr biasanya nonton film dibioskop?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="studio21" class="form-check-input" >
									Studio 21
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="studio21" class="form-check-input" >
									Cinema XXI
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="cgv_blitz" class="form-check-input" >
									CGV*Blitz
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="cinemaxx" class="form-check-input" >
									Cinemaxx
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="platinum" class="form-check-input" >
									Platinum Cineplex
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f3" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f3lain" placeholder="Bioskop Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					
					<div class="form-group" id="f4-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F4. Jika jawaban F1:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr menonton film dibioskop?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f41" value="0">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f42" value="1">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f43" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f44" value="3">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f45" value="4">
								  2 – 3 minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f4" id="f46" value="5">
								  Lebih dari sebulan yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F5. Dimana biasanya Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="tamankota" class="form-check-input" >
									Taman Kota
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="perpustakaan" class="form-check-input" >
									Perpustakaan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="gym" class="form-check-input" >
									Tempat olah raga / Klub kebugaran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="kafe" class="form-check-input" >
									Kafe / Resto
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="sekolah" class="form-check-input" >
									Sekolah / Kampus
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f5" value="lainnya" class="form-check-input" >
									Lainnya
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f5lain" placeholder="Hangout Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F6. Kapan terakhir kali Bpk/ Ibu/ Sdr kumpul – kumpul/ hangout/ nongkrong dengan teman / rekan / sahabat?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f61" value="0">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f62" value="1">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f63" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f64" value="3">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f65" value="4">
								  2 – 3 minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f6" id="f66" value="5">
								  Lebih dari sebulan yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F7. Apakah Bpk/ Ibu/ Sdr ikut dalam sebuah Klub Olahraga yang rutin mengikutinya? Jika ”Ya”, sebutkan nama klub-nya! </b> </label>
					    <div class="row">

							
							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f7" id="f71" value="Tidak">
								  Tidak
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f7" id="f72" value="Ya">
								  Ya,sebut nama klub 
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-group">
								<input type="text" class="form-control" id="f7lain" placeholder="Nama Klub">
								</div>
						  </div>

						</div>
					</div>
					
					<div class="form-group" id="f8-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F8. Jika jawaban F7:“YA”,  Sebutkan jenis olahraganya? </b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f81" value="Futsal">
								  Futsal
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f82" value="Tennis">
								  Tennis
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f83" value="Badminton">
								  Bulu Tangkis
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f84" value="Running">
								  Running
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f85" value="Volly">
								  Volly
								</label>
							  </div>
						  </div>
						   <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f86" value="Sepeda">
								  Sepeda
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f8" id="f87" value="Lainnya">
								  Lainnya
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							   <div class="form-group">
								<input type="text" class="form-control" id="f8lain" placeholder="Olahraga Lainnya">
								</div>
							</div> 

						</div>
						
					</div>
					
					<div class="form-group" id="f9-pg" style="display:none">
	                     <label for="exampleInputUsername1"><b>F9. Jika jawaban F7:“YA”,  Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan aktivitas bersama klub olahraga yang diikuti?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f91" value="0">
								  1-3 hari yang lalu
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f92" value="1">
								  Seminggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f93" value="2">
								  Sebulan yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f94" value="3">
								  4-6 hari yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f95" value="4">
								  2 – 3 minggu yang lalu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F9" id="f96" value="5">
								  Lebih dari sebulan yang lalu
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F10. (F10-1) Saluran media yang Bpk /Ibu /Sdr gunakan (menonton, mendengar, membaca) hingga sebulan terakhir, apa saja? <br> 
					  (F10-2) Sebutkan beragam media yang Bpk / Ibu/ Sdr konsumsi dan kapan terakhir kali Bpk / Ibu/ Sdr mengonsumsi?</b> </label>
					   <div class="row">
						   <div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<h4>Konvensional</h4>
									  </label>
									</div>
						   </div>
						   <div class="col-md-9">
						   <?php $ffd=1; foreach($array_ragam_media as $array_ragam_medias){ ?>
						   
							<br>
								<div class="row">
							   <div class="col-md-3">
								<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" id="f10-k<?php echo $ffd; ?>" value="<?php echo $array_ragam_medias; ?>" class="form-check-input" >
											<?php echo $array_ragam_medias; ?>
										  </label>
										</div>
							   </div>
							   <div class="col-md-9">
								 <div class="row">

								 <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>1" value="0">
										  Tadi pagi/siang/sore
										</label>
									  </div>
								  </div>
									<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>2" value="1">
										  1-3 hari yang lalu
										</label>
									  </div>
								  </div>
								  <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>3" value="2">
										  Seminggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>4" value="3">
										  Sebulan yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>5" value="4">
										  4-6 hari yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>6" value="5">
										  2 – 3 minggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F101<?php echo $ffd; ?>" id="F101<?php echo $ffd; ?>7" value="6">
										  Lebih dari sebulan yang lalu
										</label>
									  </div>
								  </div>

									</div>
								</div>
								</div>

						   <?php $ffd++; }  ?>
						   </div>
							
						</div>
						
						<div class="row">
						   <div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<h4>Digital / Online</h4>
									  </label>
									</div>
						   </div>
						   <div class="col-md-9">
						   <?php $ffd=1; foreach($array_ragam_media2 as $array_ragam_medias){ ?>
						   
							<br>
								<div class="row">
							   <div class="col-md-3">
								<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" id="f10-d<?php echo $ffd; ?>" value="<?php echo $array_ragam_medias; ?>" class="form-check-input" >
											<?php echo $array_ragam_medias; ?>
										  </label>
										</div>
							   </div>
							   <div class="col-md-9">
								 <div class="row">
								 <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>1" value="0">
										  Tadi pagi/siang/sore
										</label>
									  </div>
								  </div>
									<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>2" value="1">
										  1-3 hari yang lalu
										</label>
									  </div>
								  </div>
								  <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>3" value="2">
										  Seminggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>4" value="3">
										  Sebulan yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>5" value="4">
										  4-6 hari yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>6" value="5">
										  2 – 3 minggu yang lalu
										</label>
									  </div>
								  </div>
								   <div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F102<?php echo $ffd; ?>" id="F102<?php echo $ffd; ?>7" value="6">
										  Lebih dari sebulan yang lalu
										</label>
									  </div>
								  </div>

									</div>
								</div>
								</div>

						   <?php $ffd++; }  ?>
						   </div>
							
						</div>
						
					</div>
					
					
					<div class="form-group" id="f11-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F11. Jika jawaban F10-2:“KORAN”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan koran yang dibaca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="0" id="f11-0"  class="form-check-input" >
									Berlangganan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="1" class="form-check-input" >
									Beli eceran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f11" value="2" class="form-check-input" >
									Pinjam
								  </label>
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f12-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F12. Jika jawaban F11:“BERLANGGANAN”, berapa biaya berlangganan koran yang Bpk/ Ibu/ Sdr baca tersebut?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="F12" placeholder="Biaya Berlangganan">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f13-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F13. Jika jawaban F10-2:“KORAN”, Seberapa sering Bpk/ Ibu/ Sdr membaca koran?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F131" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F132" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F133" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F134" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F135" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="f13" id="F136" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f14-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F14. Jika jawaban F10-2:“KORAN”, Koran apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Jawa Pos"  class="form-check-input" >
										Jawa Pos
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Kompas" class="form-check-input" >
									Kompas
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Bisnis Indonesia" class="form-check-input" >
									Bisnis Indonesia
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Radar" class="form-check-input" >
										Radar
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Investor Daily" class="form-check-input" >
										Investor Daily
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Jakarta Post" class="form-check-input" >
										Jakarta Post
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Sindo" class="form-check-input" >
										Sindo
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox"name="f14" value="Tempo"  class="form-check-input" >
										Tempo
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Republika" class="form-check-input" >
										Republika
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f14" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="f14lainnya" placeholder="Koran Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f15-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F15. Jika jawaban F10-2:“KORAN”, (Showcard-I) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Politik"  class="form-check-input" >
										Politik
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Ekonomi" class="form-check-input" >
									Ekonomi/Bisnis
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Sosial" class="form-check-input" >
									Sosial/ Budaya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Teknologi" class="form-check-input" >
										Teknologi
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Properti" class="form-check-input" >
										Properti
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Otomotif" class="form-check-input" >
										Otomotif
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Olahraga" class="form-check-input" >
										Olahraga
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Kesehatan" class="form-check-input" >
										Kesehatan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Hiburan"  class="form-check-input" >
										Hiburan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Fashion" class="form-check-input" >
										Fashion
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="nasional" class="form-check-input" >
										Berita daerah/ nasional
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f15" value="Berita Luar Negeri" class="form-check-input" >
										Berita Luar Negeri
								  </label>
								</div>
							</div> 
						
						
						</div>
						
					</div>
					
					<div class="form-group" id="f16-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F16. Jika jawaban F10-2:“ MAJALAH/ TABLOID”, bagaimana cara Bpk/ Ibu/ Sdr mendapatkan majalah/ tabloid yang dibaca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f16" value="Berlangganan" id="f16-0" class="form-check-input" >
									Berlangganan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f16" value="Beli eceran"  class="form-check-input" >
									Beli eceran
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox"name="f16" value="Pinjam"   class="form-check-input" >
									Pinjam
								  </label>
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f17-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F17. Jika jawaban F16:“BERLANGGANAN”, berapa biaya berlangganan majalah/ tabloid yang Bpk/ Ibu/ Sdr baca tersebut?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="f17" placeholder="Biaya Berlangganan">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					<div class="form-group" id="f18-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F18. Jika jawaban F10-2:“MAJALAH/ TABLOID”, Majalah / Tabloid apa yang sering Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Trubus"   class="form-check-input" >
											Trubus
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Wanita Indonesia" class="form-check-input" >
										Wanita Indonesia
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Bintang" class="form-check-input" >
										Bintang
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Nova" class="form-check-input" >
											Nova
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Chip" class="form-check-input" >
											Chip
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="SWA" class="form-check-input" >
											SWA
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Intisari" class="form-check-input" >
											Intisari
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Rumah" class="form-check-input" >
										Rumah
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Gadis" class="form-check-input" >
										Gadis
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f18" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="f18lainnya" placeholder="Tabloid Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f19-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F19. Jika jawaban F10-2:“ MAJALAH/ TABLOID”, (Showcard-J) rubrik apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Politik"  class="form-check-input" >
												Politik
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Ekonomi/Bisnis"  class="form-check-input" >
											Ekonomi/Bisnis
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Sosial/ Budaya"  class="form-check-input" >
											Sosial/ Budaya
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Teknologi"  class="form-check-input" >
												Teknologi
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Properti"  class="form-check-input" >
												Properti
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Properti"  class="form-check-input" >
											Otomotif
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Olahraga"  class="form-check-input" >
												Olahraga
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Kesehatan"  class="form-check-input" >
											Kesehatan
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Hiburan"  class="form-check-input" >
											Hiburan
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Fashion"  class="form-check-input" >
											Fashion
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Agro"   class="form-check-input" >
											Agro
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f19" value="Lainnya"  class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F19lainnya" placeholder="Koran Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f20-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F20. Jika jawaban F10-2:“RADIO”? Sebutkan nama Radio yang paling sering didengarkan!</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							   <div class="form-group">
								<input type="text" class="form-control" id="F20" placeholder="Nama Radio">
								</div>
							</div> 
						
						</div>
						
					</div>
					
					
					<div class="form-group" id="f21-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F21. Jika jawaban F10-2:“RADIO”, dimana biasa Bpk/ Ibu/ Sdr mendengarkan Radio?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" value="Rumah" class="form-check-input" >
													Rumah
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" value="Kantor" class="form-check-input" >
											Kantor
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" value="Sekolah" class="form-check-input" >
											Sekolah
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" value="Mobil" class="form-check-input" >
													Mobil
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f21" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F2lainnya" placeholder="Radio Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f22-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F22. Jika jawaban F10-2:“RADIO”, seberapa sering Bpk/ Ibu/ Sdr mendengarkan radio?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F221" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F222" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F223" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F224" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F225" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F22" id="F226" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					<div class="form-group" id="f23-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F23. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, apakah Bpk/ Ibu/ Sdr berlangganan Koran /Majalah /Tabloid /Situs berita Online?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F231" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F232" value="Kdang">
								  Kadang
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F23" id="F233" value="Tidak">
								  Tidak / Gratisan
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group" id="f24-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F24. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, Seberapa sering Bpk/ Ibu/ Sdr membaca Online?</b> </label>
					   
						 <div class="row">

							<div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F241" value="0">
								  Kurang dari seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F242" value="1">
								  3-6 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F243" value="2">
								  2-3 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F244" value="3">
								  1-2 kali seminggu
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F245" value="4">
								 1 kali sehari
								</label>
							  </div>
						  </div>
						   <div class="col-md-4">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F24" id="F246" value="5">
								  Lebih dari 3 kali sehari
								</label>
							  </div>
						  </div>

						</div>
						
					</div>
					
					
					<div class="form-group" id="f25-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F25. Jika jawaban F10-2: “KORAN/ MAJALAH/ TABLOID/ SITUS”, media online apa yang biasa Bpk/ Ibu/ Sdr baca?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="detik.com"  class="form-check-input" >
													detik.com
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="tirto.id"class="form-check-input" >
												tirto.id
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="tempo.com"class="form-check-input" >
												tempo.com
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="kumparan.com"class="form-check-input" >
													kumparan.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="okezone.com"class="form-check-input" >
													okezone.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="liputan6.com"class="form-check-input" >
												liputan6.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="kompas.com"class="form-check-input" >
													kompas.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="tribunnews.com"class="form-check-input" >
												tribunnews.com
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="kapanlagi.com"class="form-check-input" >
												kapanlagi.com
								  </label>
								</div>
							</div> 
							
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f25" value="Lainnya"class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F25lainnya" placeholder="Media Online Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					
					<div class="form-group" id="f26-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F26. Jika jawaban F10-2: “SOCIAL MEDIA”, media apa yang biasa Bpk/ Ibu/ Sdr baca berita / informasinya?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" value="Facebook" class="form-check-input" >
												Facebook
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" value="twitter" class="form-check-input" >
												twitter
								  </label>
								</div>
							</div> 
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" value="Line" class="form-check-input" >
												Line
								  </label>
								</div>
							</div>
							<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" value="Instagram" class="form-check-input" >
													Instagram
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-check mx-sm-2">
								  <label class="form-check-label">
									<input type="checkbox" name="f26" value="Lainnya" class="form-check-input" >
										Lainnya
								  </label>
								</div>
							</div> 
<div class="col-md-3">
							  <div class="form-group">
								<input type="text" class="form-control" id="8F26lainnya" placeholder="Media Online Lainnya">
								</div>
							</div> 							
						
						</div>
						
					</div>
					
					<div class="form-group" id="f27-pg">
                      <label for="exampleInputUsername1"><b>F27. Akun media sosial apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan? Urutkan dari yang paling sering digunakan!</b> </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Akun Media Sosial</th>
									</tr>
								  </thead>
								  <tbody>
								  
									<?php $iii=1;foreach($array_social_media as $array_social_medias){ ?>
								  
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmed_skala_<?php echo $iii; ?>">
										
										 <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" id="f27_chk<?php echo $iii; ?>" name="f27_chk<?php echo $iii; ?>" value="<?php echo $iii; ?>" class="form-check-input" > 
												<?php echo $array_social_medias; ?>
										  </label>
										</div>
										
										<input type="hidden" id="f27_socmed<?php echo $iii; ?>" value="<?php echo $array_social_medias; ?>" />
										  <?php //echo $array_social_medias; ?>
										  </label>
											<input type="text" class="form-control" id="f27_rank_<?php echo $iii; ?>" placeholder="Urutan">
				
										  </div>
									  </td>
									</tr>
									
									<?php $iii++;} ?>
									
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmed_skala_<?php echo $iii; ?>">
										 
										  </label>
										   <div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f27_chk_lainnya" value="Lainnya" class="form-check-input" >
												lainnya
										  </label>
										</div>
											<input type="text" class="form-control" id="f27channel_lainnya" placeholder="Media Sosial Lainnya">
											<input type="text" class="form-control" id="f27rank_lainnya" placeholder="Rank Lainnya">
				
										  </div>
									  </td>
									</tr>
									
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group" id="f28-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F28. Jika jawaban F27: “YOUTUBE”, Apakah Bpk/ Ibu/ Sdr memiliki Channel YOUTUBE pribadi dan aktif mengupdate atau mengisi contentnya?</b> </label>
					   
						 <div class="row">

							<div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F28" id="F281" value="Tidak">
								  Tidak 
								</label>
							  </div>
						  </div>
						  <div class="col-md-6">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F28" id="F282" value="Ya">
								  Ya
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group" id="f29-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F29. Jika jawaban F27: “YOUTUBE”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr menonton Channel YOUTUBE orang lain?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F291" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F292" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F293" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F294" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F295" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F296" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F29" id="F297" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					
					<div class="form-group" id="f30-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F30. Jika jawaban F27: “YOUTUBE”, F30.jenis tayangan apa yang sering Bpk/ Ibu/ Sdr tonton?</b> </label>
					   
						 <div class="row">

							<?php $ii=1; foreach($array_jenis_tayangan as $array_jenis_tayangans){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f30" value="<?php echo $array_jenis_tayangans; ?>" class="form-check-input" >
											<?php echo $array_jenis_tayangans; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
						</div>
						
					</div>
					
					<div class="form-group" id="f31-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F31. Jika jawaban F27: “FACEBOOK”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun facebook yang dimiliki?</b> </label>
					   
						 <div class="row">

							<?php $penggunaan_s = ['Berdagang / Jualan / Berbisnis','Menyimpan kenangan','Update Informasi','Update Status','Silaturahmi / Bertemu Teman Lama ','Berdiskusi','Memberi Comment / Like','Diary / Catatan Harian','Lainnya']; 
							foreach($penggunaan_s as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f31" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F31lainnya" placeholder="Kegunaan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					
						<div class="form-group" id="f32-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F32. Jika jawaban F27: “FACEBOOK”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun FACEBOOK yang dimiliki?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F321" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F322" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F323" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F324" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F325" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F326" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F32" id="F327" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group" id="f33-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F33. Jika jawaban F27: “INSTAGRAM”, Bpk/ Ibu/ Sdr gunakan untuk apa saja akun instagram yang dimiliki?</b> </label>
					   
						 <div class="row">

							<?php 
							foreach($penggunaan_s as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f33" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F33lainnya" placeholder="Kegunaan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
				
					<div class="form-group" id="f34-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F34. Jika jawaban F27: “INSTAGRAM”, Dalam 3 bulan terakhir, seberapa sering Bpk/ Ibu/ Sdr mengakses akun INSTAGRAM yang dimiliki?</b> </label>
					   
						 <div class="row">

							<div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F341" value="0">
								  Setiap hari 
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F342" value="1">
								  5-6 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F343" value="2">
								  2-4 hari dalam seminggu
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F344" value="3">
								  Seminggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F345" value="4">
								  2-3 minggu sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F346" value="5">
								  Sebulan sekali
								</label>
							  </div>
						  </div>
						  <div class="col-md-3">
							  <div class="form-check" >
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="F34" id="F347" value="6">
								  Lebih dari sebulan sekali
								</label>
							  </div>
						  </div>
						</div>
						
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F35. Akun social messenger apa yang Bpk/ Ibu/ Sdr miliki dan aktif digunakan?</b> </label>
					    <div class="row">
						  
						  <div class="col-md-12">
							 <div class="form-group">
								<table id="table_resp_ss" class="table table-striped">
								  <thead>
									<tr>
									  <th scope="col">Akun Social Messenger</th>
									</tr>
								  </thead>
								  <tbody>
								  
									<?php 
									$array_social_msg = ['Line','IMO','WeChat','Skype','Whatsapp','Telegram','FB Messenger','Yahoo Messenger']; 
									$iii = 1;
									foreach($array_social_msg as $array_social_medias){ ?>
								  
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmsg_skala_<?php echo $iii; ?>">
										  <?php echo $array_social_medias; ?>
										  </label>
											<input type="text" class="form-control" id="f35_rank_<?php echo $array_social_medias; ?>" placeholder="Urutan">
											<input type="hidden" id="f35_socmes<?php echo $iii; ?>" value="<?php echo $array_social_medias; ?>" />
										  </div>
									  </td>
									</tr>
									
									<?php $iii++; } ?>
									
									<tr>
									  <td>
									 
										<div class="form-group">
										<label class="form-check-label" id="socmsg_skala_<?php echo $iii; ?>">
										 Lainnya
										  </label>
											<input type="text" class="form-control" id="channel_lainnya" placeholder="Channel Lainnya">
											<input type="text" class="form-control" id="rank_lainnya" placeholder="Rank Lainnya">
				
										  </div>
									  </td>
									</tr>
									
								  </tbody>
								</table>
							</div>
						   </div>
						  
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F36. Apa saja yang Bpk/ Ibu/ Sdr lakukan dalam seminggu terakhir saat terhubung dengan internet?</b> </label>
					   
						 <div class="row">

							<?php $penggunaan_lakukan = ['1. Akses situs berita dan informasi  ','2. Akses situs pembelajaran (mis: ruang guru)','3. Akses situs gaya hidup (mis: detikhot, kapanlagi)','4. Akses situs hobi','5. Akses situs hiburan','6. Akses belanja online (mis: tokopedia, shoppe, blibli, dll) ','7. Akses situs games','8. Akses situs media sosial','9. Akses situs video streaming (mis: Youtube, Netflix, Vidio)','10. Akses situs musik/ audio streaming (mis: JOOX, Spotify)','11. Akses situs video call (mis: Skype, bluejeans)','12. Melakukan chatting/ instan messaging','13. Download','14. Upload','15. Email ','16. Lainnya']; 
							$ii = 1;
							foreach($penggunaan_lakukan as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f36" id="f36<?php echo $ii; ?>" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php $ii++; } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F36lainnya" placeholder="Lakukan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f37-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F37. Jika jawaban F36:“AKSES SITUS BERITA DAN INFORMASI”, (Showcard-L) berita dan informasi apa yang sering Bpk/Ibu/Sdr cari?</b> </label>
					   
						 <div class="row">

							<?php $berita_informasi = ['Publikasi hasil penelitian atau jurnal','Berita terbaru/ terkini','Informasi produk atau jasa','Informasi film dan hiburan','Informasi Ekonomi','Informasi Politik','Informasi Kuliner','Informasi Otomotif','Informasi Properti','Informasi Kesehatan & Olahraga','Informasi Teknologi Informasi','Lainnya']; 
							foreach($berita_informasi as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f37" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F36lainnya" placeholder="Lakukan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group"  id="f38-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F38. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, genre atau jenis musik apa yang sering Bpk/ Ibu/ Sdr dengarkan?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Pop','Funk/Rock','Dangut','Jazz','Hip hop','Rap','Keroncong','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f38" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F38lainnya" placeholder="Genre Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f39-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F39. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, aplikasi Musik Streaming apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Sound Cloud','JOOX Music','MelOn','Spotify Music','MusixMatch','Vortex Music Player','Guvera Music','Deezer Music','Apple Music (iTunes)','Langit Musik','Amazon Music with Prime Music','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="39" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F39lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					
						<div class="form-group" id="f40-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F40. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses musik streaming per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$i = 1;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F40" id="F40<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F40lainnya" onkeyup="expense_audio()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f41-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F41. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi music streaming tersebut?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Tersedia akses gratis','Tampilan / interface-nya','Katalog musiknya','Sinkronisasi antar perangkat','Kualitas audio','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f41" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F41lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f42-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F42. Jika jawaban F36:“AKSES SITUS MUSIK/ AUDIO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi musik streaming?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F42" id="F42<?php echo $i; ?>" value=" <?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php } ?>
							
								
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f43-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F43. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, Genre atau jenis tayangan apa yang biasa Bpk/ Ibu/ Sdr tonton?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Adventure','Action','Komedi','Drama','Mistic','Horor & Thriller','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f43" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f44-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F44. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, aplikasi/ layanan Video/ Movie Streaming apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Catchplay','Iflix','Netflix','Genflix','Hooq','Youtube','Google play movie','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f44" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f45-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F45. Jika jawaban F36:“ AKSES SITUS VIDEO STREAMING”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses video streaming per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$i = 1;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F45" id="F45<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F45lainnya" onkeyup="expense_video()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f46-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F46. Jika jawaban F36:“AKSES SITUS VIDEO STREAMING”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr menggunakan aplikasi Video Streaming tersebut?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Tarif berlangganan','Jumlah device untuk menikmati','Konten film','Bisa bermacam device untuk menikmati','Resolusi video','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f46" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F46lainnya" placeholder="Pertimbangan Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f47-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F47. Jika jawaban F36:“ AKSES SITUS VIDEO STREAMING”, seberapa sering Bpk/ Ibu/ Sdr memanfaatkan aplikasi/ layanan Video/ Movie Streaming?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F47" id="F47<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php } ?>
							
								
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f48-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F48. Jika jawaban F36:“AKSES SITUS GAMES”, situs game apa yang sering Bpk/ Ibu/ Sdr akses?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Steam','Garena','GOG','OnePlay','Origin','Uplay','Ocean of games','Acid Play','GameTop','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f48" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
								<div class="col-md-3">
								  <div class="form-group">
									<input type="text" class="form-control" id="F48lainnya" placeholder="Situs Musik Lainnya">
									</div>
								</div> 
							
							
						</div>
						
					</div>
					
						<div class="form-group" id="f49-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F49. Jika jawaban F36:“AKSES SITUS GAMES”, berapa biaya yang Bpk/ Ibu/ Sdr keluarkan untuk akses situs games per-bulannya?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Free/ gratis ','< Rp 25.000','Rp 25.000 – Rp 50.000','Rp 50.001 – Rp 75.000','Rp 75.001 – Rp 100.000','Rp 100.001 – Rp 150.000','Lebih dari Rp 150.000'];
							$i = 1;							
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check" >
									<label class="form-check-label">
									  <input type="radio" class="form-check-input" name="F49" id="F49<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
									 <?php echo $penggunaan_ss; ?>
									</label>
								  </div>
							  </div>
							
							<?php $i++; } ?>
							
								<div class="col-md-3">
									  <div class="form-group">
											<input type="text" class="form-control" id="F49lainnya" onkeyup="expense_game()" placeholder="Sebutkan">
										</div>
								  </div>
							
							
						</div>
						
					</div>
					
					<div class="form-group" id="f50-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F50. Jika jawaban F36:“AKSES SITUS GAMES”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr mengakses situs game tersebut?</b> </label>
						 <div class="row">
								<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F50" placeholder="Pertimbangan">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group" id="f51-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F51. Jika jawaban F36:“ AKSES SITUS GAMES”, seberapa sering memanfaatkan situs game yang sering Bpk/ Ibu/ Sdr akses?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Kurang dari seminggu sekali','1-2 kali seminggu','3-6 kali seminggu','1 kali sehari','2-3 kali sehari','Lebih dari 3 kali sehari']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F51" id="F51<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
						
					</div>
					
					<div class="form-group" id="f52-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F52. Jika jawaban F36:“AKSES SITUS GAMES”, game online apa saja yang sering Bpk/ Ibu/ Sdr mainkan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Mobile Legends','Arena of Valor','PUBG Mobile','Clash of Clans','Clash Royale','Vainglory','Space Comander','Lineage2 Revolution','DOTA','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f52" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F43lainnya" placeholder="Game Online Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f53-pg" >
                      <label for="exampleInputUsername1"><b>F53. Dimanakah dan kapankan biasanya Bpk/ Ibu/ Sdr belanja untuk kebutuhan rumah tangga?</b> </label>
					   
						 <div class="row">
							<div class="col-md-12">
							<?php $situs_musik = ['Toko/ warung klontong','Minimarket','Pasar tradisional','Supermarket','Hipermarket']; 
							$iii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-9">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f53<?php echo $iii; ?>" id="f53<?php echo $iii; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
									
									<div style="margin-left:20px">
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_day_<?php echo $iii; ?>" value="1" class="form-check-input" style="margin-left:20px;" >
												Harian
										  </label>
										</div>
										
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_week_<?php echo $iii; ?>" value="1" class="form-check-input" style="margin-left:20px;">
												Mingguan
										  </label>
										</div>
										
										<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="f53_month_<?php echo $iii; ?>" value="1" class="form-check-input" style="margin-left:20px;">
												Bulanan
										  </label>
										</div>
									</div>
								</div> 
 
							</div>
							<?php $iii++; } ?>
						</div>
						</div>
					</div>
					
					<div class="form-group" id="f54-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F54. Jika jawaban F53:“MINIMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Alfamart','Alfamidi','Bright','Circle K','Indomaret','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f54" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F54lainnya" placeholder="MINIMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f55-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F55. Jika jawaban F53:“SUPERMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Giant','Indogrosir','Lottemart','Superindo','Ranchmarket','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f55" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F55lainnya" placeholder="SUPERMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f56-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F56. Jika jawaban F53:“HIPERMARKET”, Dimanakah biasanya Bpk/ Ibu/ Sdr belanja?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Giant','Hypermart','Lotte ','Transmart','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f56" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F56lainnya" placeholder="HIPERMARKET Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f57-pg" >
                      <label for="exampleInputUsername1"><b>F57. Berapa anggaran rutin rumah tangga per bulan untuk belanja rumah tangga?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['< Rp 500rb','Rp 500rb – Rp 1juta','Rp 1juta – Rp 2juta','Rp 2juta – Rp 5juta ','> Rp 5juta ']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F57" id="F57<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>

							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f58-pg" >
                      <label for="exampleInputUsername1"><b>F58. Dalam 6 bulan terakhir, barang elektronik dan Home Appliance apa saja yang Bpk /Ibu /Sdr beli. Apa mereknya?</b> </label>
						 
							<?php 
							$situs_musik = ['Pendingin Udara (misal: kipas angin)','Vacuum Cleaner','Water Heater','Pompa Air','Bolam Lampu','Kompor','Televisi','Air Conditioning (AC)','Kulkas/ Lemari Es','Microwave','Penanak Nasi']; 
							$field_merk = ['merk_fan','merk_vc','merk_waterhtr','merk_pump','merk_lamp','merk_stump','merk_ledtv','merk_ac','merk_refri','merk_mcwave','merk_riceckr']; 
							//$situs_musik = ['Pendingin Udara (misal: kipas angin)']; 
							//$field_merk = ['merk_fan']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
									<div class="col-md-6">
										  <div class="form-group" >
										  <select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>[]" id="<?php echo $field_merk[$in]; ?>" multiple="multiple" style="width:100%">
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
												} ?>
												<option value="oo" >Merk Lainnya</option>
											</select>
											<!--<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>[]" id="<?php echo $field_merk[$in]; ?>" style="width:100%"> 
												
												  
											</select>-->
										  </div>
									</div>
							</div>
							<?php $in++; $i++; } ?>
						
					</div>
					
					<div class="form-group" id="f59-pg" >
                      <label for="exampleInputUsername1"><b>F59. Dalam 2 bulan terakhir, apakah Bpk/ Ibu/ Sdr pernah belanja online?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak pernah belanja online','Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F59" id="F59<?php echo $i; ?>" value="<?php echo $i; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f60-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F60. Jika jawaban F59:“TIDAK PERNAH”, mengapa Bpk/ Ibu/ Sdr tidak berbelanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Sering salah kirim','Barang rusak saat diterima','Salah ukuran','Stok tidak tersedia','Salah spec','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f60" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F60lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f61-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F61. Jika Jawaban F59: “YA”, Produk/ Barang apa saja yang pernah Bpk/ Ibu/ Sdr beli melalui belanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Fashion','Gadget','Perlengkapan rumah tangga','Kosmetik','Kebutuhan sehari-hari','Perlengkapan bayi','Elektronik','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f61" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F61lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f62-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F62. Jika Jawaban F59: “YA”, Dimana Bpk/ Ibu/ Sdr sering belanja online?</b> </label>
					   
						 <div class="row">

							<?php $situs_musik = ['Facebook','Instagram','Shopee','Lazada','Tokopedia','Zalora','Blibli','Bukalapak','JD.id','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f62" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							
							<?php } ?>
							
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F62lainnya" placeholder="Alasan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f63-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F63. Jika Jawaban F59: “YA”, Dalam 2 bulan terakhir berapa kali Bpk/ Ibu/ Sdr belanja online?</b> </label>
						 <div class="row">
								<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F63lainnya" placeholder="Berapa Kali">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group" id="f64-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F64. Jika jawaban F59:“YA”, apa yang menjadi pertimbangan Bpk/ Ibu/ Sdr dalam berbelanja online?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Diskon','Free Ongkir','Cashback','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f64" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F64lainnya" placeholder="Pertimbangan">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f65-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F65. Jika Jawaban F59: “YA”, jenis pembayaran apa yang biasa Bpk/ Ibu/ Sdr gunakan saat belanja online?</b> </label>
						 <div class="row">
							<?php $ii=1; $situs_musik = ['Kartu Kredit','Transfer','E-Wallet','COD','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f65" id="f65<?php echo $ii; ?>"  value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F65lainnya" placeholder="Pertimbangan">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f66-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F66. Jika Jawaban F65: “e-Wallet”,  e-Wallet apa yang saat ini Bpk/ Ibu/ Sdr gunakan saat belanja online?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Gopay','jenius','OVO','Go Mobile','DANA','PayTren','LinkAja','DOKU','i-saku','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f66" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F66lainnya" placeholder="E-Wallet Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F67. Dalam kurun waktu satu tahun terakhir ini, berapa kali Bpk/ Ibu/ Sdr melakukan traveling (bepergian untuk tujuan berlibur / wisata)?</b> </label>
						 <div class="row">
								<div class="col-md-12">
									  <div class="form-group">
											<input type="text" class="form-control" id="F67lainnya" placeholder="Berapa Kali">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F68. Kapan terakhir kali Bpk/ Ibu/ Sdr melakukan traveling (bepergian untuk tujuan berlibur / wisata)? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['1-3 hari yang lalu','4-6 hari yang lalu','Seminggu yang lalu','2-3 minggu yang lalu','Sebulan yang lalu','Lebih dari sebulan yang lalu']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F68" id="F68<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F69. Saat melakukan traveling apakah Bpk/ Ibu/ Sdr sebelumnya melakukan perencanaan ?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F69" id="F69<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F70. Jenis wisata apa yang sering Bpk/ Ibu/ Sdr kunjungi? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Alam','Religi','Sejarah','Budaya','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f70" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F70lainnya" placeholder="jenis Wisata Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F71. Sebutkan tempat wisata atau obyek wisata yang sering Bpk/ Ibu/ Sdr kunjungi?</b> </label>
						 <div class="row">
								<div class="col-md-6">
									  <div class="form-group">
											<input type="text" class="form-control" id="F71dalam" placeholder="Dalam Negeri">
										</div>
								  </div>
								  <div class="col-md-6">
									  <div class="form-group">
											<input type="text" class="form-control" id="F71luar" placeholder="Luar Negeri">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F72. Untuk menuju ke tempat wisata, alat trasnportasi apa yang Bpk/ Ibu/ Sdr gunakan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Pesawat','Kereta api','Bus','Mobil pribadi','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f72" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F72lainnya" placeholder="Transportasi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F73. Bagaimana cara Bpk/ Ibu/ Sdr membeli tiket perjalanan wisata?</b> </label>
						 <div class="row">
							<?php $ii=1; $situs_musik = ['Melalui online / Aplikasi','Agen travel','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f73" id="f73<?php echo $ii; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F73lainnya" placeholder="Membeli Tiket Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f74-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F74. Jika Jawaban F73: “ONLINE”, aplikasi atau situs apa yang Bpk /Ibu /Sdr pilih?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Traveloka','Agoda','TIKET.COM','Mr Aladin','pegi pegi','IndiTravel','wego','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f74" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F74lainnya" placeholder="Transportasi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F75. Untuk beberapa aktifitas berikut ini, mana yang Bpk/ Ibu/ Sdr lakukan secara rutin atau sudah menjadi kebiasaan di 3 bulan terakhir ini?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Rekreasi ke kolam renang','Rekreasi ke spa','Rekreasi ke pijat urut tradisional','Pergi ke gym','Pergi ke Mall','Pergi ke Cafe','Rekreasi ke Karaoke','Rekreasi ke Taman kota','Rekreasi ke Taman bermain']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f75" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F76. Apakah dalam 3 bulan terakhir ini, dalam perjalanan wisata Bpk /Ibu /Sdr menginap di hotel? Jika ”Ya”, sebutkan hotelnya:</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F76" id="F76<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
							<div class="col-md-4">
									  <div class="form-group">
											<input type="text" class="form-control" id="F76lainnya" placeholder="Sebutkan">
										</div>
								  </div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F77. Apakah Bpk/ Ibu/ Sdr dalam 1 tahun terakhir ini melakukan medical check-up (pemeriksaan kesehatan)?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F77" id="F77<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F78. Dimana tempat yang biasanya Bpk /Ibu /Sdr untuk mendapatkan tindakan / perawatan / konsultasi medis?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Puskesmas','Klinik','RS Negeri','RS Swasta','Online','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f78" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F78lainnya" placeholder="Konsultasi Medis Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F79. Dimana biasanya Bpk/ Ibu/ Sdr membeli obat?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Apotik','Toko Obat','Minimarket','Online','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f79" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F79lainnya" placeholder="Beli Obat Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F80. Dimanakah Bpk/ Ibu/ Sdr 	menyekolahkan anak? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Sekolah swasta','Sekolah negeri','Sekolah diluar ','Boarding ','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f80" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F80lainnya" placeholder="Sekolah Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F81. Penguasaan bahasa apa saja yang diajarkan di sekolah anak Bpk/ Ibu/ Sdr?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Bahasa Indonesia','Bahasa Daerah','Bahasa Inggris','Bahasa Arab','Bahasa Mandarin','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f81" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F81lainnya" placeholder="Sekolah Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F82. Selain buku pelajaran yang ditentukan oleh sekolah, apakah Bpk/ Ibu/ Sdr juga membelikan buku pelajaran tambahan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F82" id="F82<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f83-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F83. Jika Jawaban F82: “YA”, Untuk keperluan membeli buku pelajaran tambahan, berapa rupiah uang yang Bpk/ Ibu/ Sdr anggarkan dalam 1 tahun?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['< Rp 500rb','Rp 500rb – Rp 1juta','Rp 1juta – Rp 2juta ','Rp 2juta – Rp 5juta','> Rp 5juta']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F83" id="F83<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F84. Apakah Bpk/ Ibu/ Sdr memberikan les tambahan kepada anak?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F84" id="F84<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f85-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F85. Jika Jawaban F84: “YA”, (Showcard-O) kegiatan les tambahan berikut ini, manakah yang Bpk/ Ibu/ Sdr berikan kepada anak?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Les Bimbingan Belajar','Les Olahraga','Les Musik','Les Mengaji/ agama ','Les Bahasa','Les Ketrampilan','Les Sains dan Teknologi','Les Beladiri','Les Budaya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f85" id="f85<?php echo $ii; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f86-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F86. Jika Jawaban F85: “Bimbingan Belajar”, bimbingan belajar Offline mana sajakah yang Bpk/ Ibu/ Sdr daftarkan untuk anak?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Primagama','GO (Ganesha Operation)','SSC (Sony Sugema College','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f86" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F86lainnya" placeholder="Bimbingan Belajar Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f87-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F87. Jika jawaban F85: “Bimbingan Belajar”, apakah juga memanfaatkan bimbingan belajar ONLINE?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-6">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F87" id="F87<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
					
					<div class="form-group" id="f88-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F88. Jika Jawaban F87: “YA”, bimbingan belajar ONLINE mana sajakah yang Bpk/ Ibu/ Sdr daftarkan untuk anak?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Ruang Guru ','Quipper ','Kelas Kita','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="f88" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F87lainnya" placeholder="Bimbingan Belajar Online Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  F89.(F89-1) (Showcard-P) Barang kebutuhan sehari-hari berikut ini, mana yang Bpk/Ibu/ Sdr dan atau keluarga beli dalam 1 bulan terakhir; <br>
						(F89-2) sebutkan brand/ merk yang Bpk/ Ibu/ Sdr konsumsi? <br>
						(F89-3) Siapa saja anggota keluarga yang mengonsumsi barang dan brand tersebut?</b> </label><br>
						<b>Kebutuhan Makan dan Minum</b>
							<?php $situs_musik = ['Air Mineral (AMDK)','Air berasa','Sereal','Biskuit','Roti','Permen','Mie Instan']; 
							$field_merk = ['merk_amdk','merk_softdrink','merk_cereal','merk_biscuit','merk_bakery','merk_candy','merk_instant_noodle']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												<option value="oo" >Merk Lainnya</option>
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Dapur</b>
							<?php $situs_musik = ['Susu','Kopi','Teh','Penyedap rasa','Kecap','Saus']; 
							$field_merk = ['merk_milk','merk_coffee','merk_tea','merk_flavoring','merk_soy_sauce','merk_ketchup']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												  <option value="oo" >Merk Lainnya</option>
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Mandi dan Cuci</b>
							<?php $situs_musik = ['Pasta gigi','Sabun mandi','Sabun muka','Sabun cuci tangan','Shampo','Body Lotion','Pengharum pakaian','Deterjen','Pelembut pakaian']; 
							$field_merk = ['merk_toothpaste','merk_body_wash','merk_face_wash','merk_hand_wash','merk_shampoo','merk_body_lotion','merk_cloth_deo','merk_detergen','merk_softener']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
							<br>
							<b>Kebutuhan Rumah Tangga</b>
							<?php $situs_musik = ['Bola lampu','Baterai','Alat cukur','Obat nyamuk','Pengharum ruangan','Alat tulis','Kertas']; 
							$field_merk = ['merk_lamp','merk_battery','merk_shaver','merk_insectrepell','merk_airfresh','merk_stationary','merk_paper']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												<option value="oo" >Merk Lainnya</option>  
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
					</div>
					
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  F90.(F90-1) (Showcard-Q) Dari produk kecantikan/ kosmetik berikut ini mana yang Bpk/ Ibu/ Sdr dan atau keluarga gunakan?<br>
						(F90-2) Sebutkan brand/ merek yang Bpk/ Ibu/ Sdr gunakan?<br>
						(F90-3) Siapa saja anggota keluarga yang menggunakan produk dan brand tersebut?</b> </label><br>
						<b>Produk Kecantikan dan Kosmetik</b>
							<?php $situs_musik = ['Conditioner','Hair mask','Hair spray','Vitamin rambut','BB Cream','Krim malam','Krim pemutih',
							'Bedak','Pensil alis','Maskara','Foundation','Eye Shadow','Sunblock','Body Scrub','Body Butter','Eau de toilette','Eau de parfume','Pelangsing']; 
							$field_merk = ['merk_hair_cond','merk_hair_mask','merk_hair_spray','merk_hair_vit','merk_cream_bb','merk_cream_night','merk_cream_white','merk_face_powder','merk_eyebrow','merk_mascara','merk_foundation','merk_eyeshadow','merk_sunblock','merk_body_scrub','merk_body_butter','merk_parf_edt','merk_parf_edp','merk_slimming']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
							<div class="col-md-3">
								<h4 style="margin-left:-10px"><?php echo $penggunaan_ss; ?></h4>
									
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
									  <!--<div class="form-check mx-sm-2">
										  <label class="form-check-label">
											<input type="checkbox" name="<?php echo $field_merk[$in]; ?>_fam" value="<?php echo $array_familys[1]; ?>" class="form-check-input" >
											<?php echo $array_familys[0]; ?>
										  </label>
										</div>-->
										
										 <div class="form-group" >
										 <h4><?php echo $array_familys[0]; ?></h4>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F91. Seberapa sering Bpk /Ibu /Sdr menggunakan kosmetik dan perawatan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Setiap hari','Pada acara tertentu','Pada momen khusus','Lainnya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F91" id="F91<?php echo $i; ?>" value="<?php echo $i; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++;} ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F91lainnya" placeholder="Penggunaan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F92. Seberapa sering Bpk /Ibu /Sdr membeli produk Fashion? (sebutkan pilihan jawabannya: sebulan sekali, setiap acara besar, hanya pada penawaran khusus, mengikuti trend)</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Sebulan sekali','Setiap acara besar','Bila ada penawaran khusus','Tergantung tren','Lainnya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F92" id="F92<?php echo $i; ?>" value="<?php echo $i; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php $i++;} ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F92lainnya" placeholder="Penggunaan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F93. Media apa yang digunakan untuk mengetahui  Tren Fashion Bpk/ Ibu/ Sdr dan keluarga dapatkan?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Televisi','Internet','Majalah','Social Media','Billboard / Baliho','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F93" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F93lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F94. Alat transportasi apa yang Bpk/ Ibu/ Sdr atau keluarga gunakan dalam aktifitas sehari-hari?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Mobil','Mobil dinas','Motor','Motor dinas','Bemo/ Mikrolet','Bus kota','Becak','Bajai','Go/ Grab Car','Go Ride/ Grab Bike','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F94" value="<?php echo $penggunaan_ss; ?>"  class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F94lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F95. Untuk tujuan apa Bpk/ Ibu/ Sdr menggunakan alat transportasi?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Bertemu teman lama','Kegiatan komunitas','Bisnis','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F95" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F95lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>F96. Apakah Bpk/ Ibu/ Sdr mau atau bersedia untuk membeli produk yang baru di launching atau ditawarkan perdana?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tidak','Kadang-kadang','Ya']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="F96" id="F96<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					<div class="form-group" id="f97-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F97. Jika jawaban F96: “YA” atau “Kadang-kadang”, Apa pertimbangan Bpk /Ibu /Sdr membeli produk yang baru di launching tersebut?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Bisa ikut tren / Jadi trensetter','Agar eksis di komunitas','Biasanya diskon besar','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F97" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="F97lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="f98-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>F98. Jika jawaban F96: “YA” atau “Kadang-kadang”, Produk apa yang Bpk /Ibu /Sdr pernah beli saat launching tersebut?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Properti ','Mobil','Gadget','Elektronik','Fashion','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="F98" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="F98lainnya" placeholder="Media Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					
					
                  </form>
                </div>
              </div>
            </div>
			
			
			<div class="col-md-12 grid-margin stretch-card" class="page_1" id="page_product_ownership" style="display: none;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PRODUCT OWNERSHIP   </h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  G1. (G1-1) (Showcard-R) Barang-barang tahan lama berikut ini, mana yang Bpk/ Ibu/ Sdr miliki? <br>
						(G1-2) Sebutkan brand/ merek yang Bpk/ Ibu/ Sdr miliki?<br>
						(G1-3) Siapa saja anggota keluarga yang menggunakan barang dan brand tersebut?</b> </label><br>
						<b>Produk Kendaraan dan Elektronik</b>
													
							<?php $situs_musik = ['Mobil','Motor']; 
							$field_merk = ['merk_car','merk_mb']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style='margin-left:-5px;'><?php echo $penggunaan_ss; ?></h4>
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							
										
										 <div class="form-group" >
										 <?php echo $array_familys[0]; ?>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%" onChange="change_<?php echo $field_merk[$in]; ?>('<?php echo $array_familys[1]; ?>','<?php echo $array_familys[0]; ?>')"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."|".$array_merks['LABEL']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
						
							<?php $situs_musik = ['Home Theater','LED TV','Air Conditioner','Water Heater','Mesin Cuci',
							'Alat-alat Kebugaran','Microwave Oven','Lemari es (Kulkas)','Audio','Desktop PC','Laptop','Tablet','Smartphone','Printer','Video game','Rice Cooker','DVD player','Kipas Angin','Sepeda']; 
							$field_merk = ['merk_hometht','merk_ledtv','merk_ac','merk_waterhtr','merk_washmch','merk_gym_tools','merk_mcwave','merk_refri','merk_audio','merk_pc','merk_laptop','merk_tablet','merk_smphone','merk_printer','merk_vidgame','merk_riceckr','merk_dvd','merk_fan','merk_bike']; 
							$i = 1;
							$in = 0;
							foreach($situs_musik as $penggunaan_ss){ ?>
							<div class="row">
								<div class="col-md-3">
								<h4 style='margin-left:-5px;'><?php echo $penggunaan_ss; ?></h4>
								</div>
								<div class="col-md-9">
									<div class="row">
									
									<?php foreach($array_family as $array_familys){ ?>
									<div class="col-md-3 <?php echo $array_familys[1]; ?>" style="display: none;">
							
										
										 <div class="form-group" >
										 <?php echo $array_familys[0]; ?>
											<select class="form-control js-example-basic-multiple" name="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>[]" id="<?php echo $field_merk[$in]; ?>_<?php echo $array_familys[1]; ?>" multiple="multiple" style="width:100%"> 
												<?php  foreach($array_merk[$field_merk[$in]]['VALUE'] as $array_merks){
													
													echo "<option value='".$array_merks['FIELD']."'>".$array_merks['LABEL']." </option>";
													
												} ?>
												 <option value="oo" >Merk Lainnya</option> 
											</select>
										  </div>
										
									</div>
									<?php } ?>
									
								 </div>
								</div>
							</div>
							<br>
							<?php $in++; } ?>
							
	
							
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>
					  G2. Untuk kepemilikan Mobil dan Motor, Sebutkan tahun perakitan mobil dan motor yang Bpk/ Ibu/ Sdr miliki?</b>
					  <br><br>
							<div class="row">
									<div class="col-md-6">
										<div class="row" id="list_car_own_kk">
												
										</div>
										<div class="row" id="list_car_own_ik">
												
										</div>
										<div class="row" id="list_car_own_ak1">
												
										</div>
										<div class="row" id="list_car_own_ak2">
												
										</div>
										<div class="row" id="list_car_own_ak3">
												
										</div>
										<div class="row" id="list_car_own_oki">
												
										</div>
										<div class="row" id="list_car_own_ski">
												
										</div>
										
									</div> 
									<div class="col-md-6">
										
										<div class="row" id="list_mb_own_kk">
												
										</div>
										<div class="row" id="list_mb_own_ik">
												
										</div>
										<div class="row" id="list_mb_own_ak1">
												
										</div>
										<div class="row" id="list_mb_own_ak2">
												
										</div>
										<div class="row" id="list_mb_own_ak3">
												
										</div>
										<div class="row" id="list_mb_own_oki">
												
										</div>
										<div class="row" id="list_mb_own_ski">
												
										</div>
									</div>
							</div>
							<br>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G3. Produk perbankan atau keuangan (Financial Literacy) berikut ini mana yang Bpk/ Ibu/ Sdr miliki atau manfaatkan? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Tabungan ','Saham','Deposito','Reksadana','Kartu Kredit','Obligasi','KPR / KPA','Asuransi','Kredit Kepemilikan Mobil','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G3" id="G3<?php echo $ii; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G3lainnya" placeholder="Perbankan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G4. Layanan perbankan apa yang Bpk/ Ibu/ Sdr miliki atau manfaatkan?  </b> </label>
						 <div class="row">
							<?php $situs_musik = ['ATM','Phone Banking','Internet Banking','Mobile Banking','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G4" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G4lainnya" placeholder="Perbankan Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G5. Bpk /Ibu /Sdr tercatat sebagai nasabah bank apa saja? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['BRI','CIMB Niaga','Bank Mandiri','BTPN','BCA','Danamon','BNI','BTN','Bank Syariah Indonesia','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G5" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G5lainnya" placeholder="Bank Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g6-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G6. Jika Jawaban G3: “ASURANSI”, asuransi apa saja yang Bpk/ Ibu/ Sdr miliki atau manfaatkan?  </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Asuransi Kesehatan','Asuransi Jiwa','Asuransi Pendidikan','Asuransi Kendaraan','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G6" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G6lainnya" placeholder="Asuransi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g7-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G7. Jika Jawaban G3: “ASURANSI”, Bpk /Ibu /Sdr tercatat sebagai nasabah asuransi apa saja?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['AIA Financial','FWD','Allianz','Manulife','AXA Mandiri','Jiwasraya','Cigna','Prudential','Sequislife Indonesia','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G7" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G7lainnya" placeholder="Nama Asuransi Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G8. Jenis alat pembayaran Non Tunai apa saja yang masih Bpk/ Ibu/ Sdr gunakan hingga saat ini? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['e-Money (uang elektronik – berwujud kartu)','e-Wallet (dompet virtual – berbasis aplikasi)','Kartu ATM / Debit','Kartu Kredit','Kartu Prabayar (prepaid)','Lainnya']; 
							$ii = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-4">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G8" id="G8<?php echo $ii; ?>" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php $ii++; } ?>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" id="G8lainnya" placeholder="Pembayaran Lainnya">
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group" id="g9-pg" style="display:none">
                      <label for="exampleInputUsername1"><b>G9. Jika Jawaban G8: “E-WALLET”, Sebutkan e-Wallet yang MASIH AKTIF Bpk/ Ibu/ Sdr gunakan hingga saat ini?</b> </label>
						 <div class="row">
							<?php $situs_musik = ['Gopay','LinkAja','OVO','Dana','DOKU','Sakuku','Paytren','i.saku','Flip','Lainnya']; 
							foreach($situs_musik as $penggunaan_ss){ ?>
								<div class="col-md-3">
								  <div class="form-check mx-sm-2">
									  <label class="form-check-label">
										<input type="checkbox" name="G9" value="<?php echo $penggunaan_ss; ?>" class="form-check-input" >
											<?php echo $penggunaan_ss; ?>
									  </label>
									</div>
								</div> 
							<?php } ?>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" id="G9lainnya" placeholder="E-WALLET Lainnya">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
                      <label for="exampleInputUsername1"><b>G10. Dalam melakukan pembayaran Non Tunai, Bpk/ Ibu/ Sdr lebih sering memanfaatkan pembayaran dengan debit, kartu kredit atau e-wallet? </b> </label>
						 <div class="row">
							<?php $situs_musik = ['Debit','Kartu Kredit','E-Wallet']; 
							$i = 1;
							foreach($situs_musik as $penggunaan_ss){ ?>
							
								<div class="col-md-4">
									  <div class="form-check" >
										<label class="form-check-label">
										  <input type="radio" class="form-check-input" name="g10" id="g10<?php echo $i; ?>" value="<?php echo $penggunaan_ss; ?>">
										  <?php echo $penggunaan_ss; ?>
										</label>
									  </div>
								</div>
							<?php } ?>
						</div>
					</div>

                  </form>
                </div>
              </div>
            </div>
			
			
          </div>
		  
		  <div class="row" id="survey_page_3">
            
		   </div>
		  
		    <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
				 <button type="button" class="btn btn-success btn-md" onClick="next_survey(0)">Sebelumnya</button>
                  <button type="button" class="btn btn-success btn-md" id="btn_next" onClick="next_survey(1)">Selanjutnya</button>
                 
                </div>
              </div>
            
            </div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name" placeholder="">
					<input type="hidden" class="form-control" id="field_name12" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item2" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya2" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name2" placeholder="">
					<input type="hidden" class="form-control" id="field_name3" placeholder="">
					<input type="hidden" class="form-control" id="field_name4" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item2">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<div class="modal" tabindex="-1" role="dialog" id="modal_new_item3" >
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title">Tambah Item</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<input type="text" class="form-control" id="item_lainnya3" placeholder=" Merk Produk ">
					<input type="hidden" class="form-control" id="field_name33" placeholder="">
					<input type="hidden" class="form-control" id="field_name34" placeholder="">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" id="save_new_item3">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>
			
        </div>
        <!-- content-wrapper ends -->
		
		<script async >
		
		$( document ).ready(function() { 
		
		/*	$("#merk_stump").on("change", function () {
				id = $(this).val();

				var dre = ['stump_rinnai','stump_hock']
				$("#merk_stump option[value = '" + dre + "']").prop("selected",true);

				alert(id);
			}) */
			<?php 
				$field_merk = ['merk_fan','merk_vc','merk_waterhtr','merk_pump','merk_lamp','merk_stump','merk_ledtv','merk_ac','merk_refri','merk_mcwave','merk_riceckr']; 
				$field_merk_raw = ['fan','vc','wh','pump','lp','stump','led','ac','refri','mcw','riceckr']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			

			var firstSelect<?php echo $is; ?> = <?php echo '$("#'.$penggunaan_ss.'")'; ?>;
			firstSelect<?php echo $is; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelect<?php echo $is; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name").val(<?php echo '"'.$penggunaan_ss.'"'; ?>);
					 $("#field_name12").val(<?php echo '"'.$field_merk_raw[$is].'"'; ?>);
					 $("#item_lainnya").val("");
					$("#modal_new_item").modal("show");
				}
				
			});
			
			<?php $is++; } ?>
			
					
			$("#save_new_item").click(function() {
				var field = $("#field_name").val();
				var field2 = $("#field_name12").val();
				var item_new = $("#item_lainnya").val();
				var res = field.split("_");
				
				$("#"+field+" option[value='oo']").remove();
				
				var html = "<option value='"+field2+"_"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
				
				$("#"+field).append(html);
				
				var selects= $("#"+field);
				var merk_vals = $("#"+field).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = field2+"_"+item_new;				
				selects.val(array_suh).trigger("change");
				
				 $("#modal_new_item").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				
				
				formData.append('field', field);
				formData.append('value', field2+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
			
			
			<?php 
				$field_merk = ['merk_amdk','merk_softdrink','merk_cereal','merk_biscuit','merk_bakery','merk_candy','merk_instant_noodle','merk_milk','merk_coffee','merk_tea','merk_flavoring','merk_soy_sauce','merk_ketchup','merk_toothpaste','merk_body_wash','merk_face_wash','merk_hand_wash','merk_shampoo','merk_body_lotion','merk_cloth_deo','merk_detergen','merk_softener','merk_lamp','merk_battery','merk_shaver','merk_insectrepell','merk_airfresh','merk_stationary','merk_paper','merk_hair_cond','merk_hair_mask','merk_hair_spray','merk_hair_vit','merk_cream_bb','merk_cream_night','merk_cream_white','merk_face_powder','merk_eyebrow','merk_mascara','merk_foundation','merk_eyeshadow','merk_sunblock','merk_body_scrub','merk_body_butter','merk_parf_edt','merk_parf_edp','merk_slimming','merk_hometht','merk_ledtv','merk_ac','merk_waterhtr','merk_washmch','merk_gym_tools','merk_mcwave','merk_refri','merk_audio','merk_pc','merk_laptop','merk_tablet','merk_smphone','merk_printer','merk_vidgame','merk_riceckr','merk_dvd','merk_fan','merk_bike']; 
				$field_raw_merk = ['amdk','sd','cr','bsc','bsc','brd','nd','m','coffee','tea','fl','kcp','ketchup','tp','bw','fw','hw','shm','bl','cd','dg','softener','lp','bt','shv','instc','af','st','ppr','hc','hm','hsp','hv','bb','cn','cw','fp','eyb','msc','fdn','eys','sb','bds','bdb','edt','edp','slimming','ht','led','ac','wh','wn','gt','mcw','rfr','au','pc','lap','tab','smp','prnt','vg','rck','dvd','fan','bike']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			
			<?php foreach($array_family as $array_familys){ ?>
			var firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?> = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'")'; ?>;
			firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelect<?php echo $is; ?><?php echo $array_familys[1]; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name2").val(<?php echo '"'.$penggunaan_ss.'"'; ?>);
					 $("#field_name3").val(<?php echo '"'.$array_familys[1].'"'; ?>);
					 $("#field_name4").val(<?php echo '"'.$field_raw_merk[$is].'"'; ?>);
					  $("#item_lainnya2").val("");
					$("#modal_new_item2").modal("show");
				}
			
			});
			
			<?php } $is++; } ?>
			
						
			$("#save_new_item2").click(function() {
				var field = $("#field_name2").val();
				var field3 = $("#field_name3").val();
				var field4 = $("#field_name4").val();
				var item_new = $("#item_lainnya2").val();
				var res = field.split("_");
			
				<?php foreach($array_family as $array_familys){ 
				
					echo '$("#"+field+"_'.$array_familys[1].' option[value=\'oo\']").remove();';
					?>
									
					var html = "<option value='"+field4+"_"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
				
				<?php 
					echo '$("#"+field+"_'.$array_familys[1].'").append(html);';
				} ?>
				
				var selects= $("#"+field+"_"+field3);
				var merk_vals = $("#"+field+"_"+field3).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = field4+"_"+item_new;				
				
				//console.log(array_suh);
				
				selects.val(array_suh).trigger("change");
				
				$("#modal_new_item2").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				formData.append('field', field);
				formData.append('value', field4+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
	
	
	
			<?php 
				$field_merk = ['merk_car','merk_mb']; 
				$is = 0;
				foreach($field_merk as $penggunaan_ss){ 
			?>
			
			<?php foreach($array_family as $array_familys){ ?>
			var firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?> = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'")'; ?>;
			firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?>.on("select2:select", function (e) {
				var value = e.params.data.id;
				var text = e.params.data.text;
				//alert(value);
				//console.log("firstSelect selected value: " + value);
				var merk_vals = <?php echo '$("#'.$penggunaan_ss.'_'.$array_familys[1].'").val()'; ?>;
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}
				
				//console.log("firstSelect<?php echo $is; ?> selected value: " + array_suh);
				
				var new_item_int = 0;
				firstSelectss<?php echo $is; ?><?php echo $array_familys[1]; ?>.val(array_suh).trigger("change");
				
				if (int_lainnya == 1 ) {
					//new_item_int++;
					 $("#field_name33").val(<?php echo '"'.$penggunaan_ss.'_'.$array_familys[1].'"'; ?>);
					 $("#field_name34").val(<?php echo '"'.$array_familys[1].'"'; ?>);
					  $("#item_lainnya3").val("");
					$("#modal_new_item3").modal("show");
				}
				
			});
			
			<?php } $is++; } ?>
			
						
			$("#save_new_item3").click(function() {
				var field = $("#field_name33").val();
				var field2 = $("#field_name34").val();
				var item_new = $("#item_lainnya3").val();
				var res = field.split("_");
				
				<?php foreach($array_family as $array_familys){ 
				
					echo '$("#"+res[0]+"_"+res[1]+"_'.$array_familys[1].' option[value=\'oo\']").remove();';
					?>
				
					$("#"+res[0]+"_"+res[1]+" option[value='oo']").remove();
					
					var html = "<option value='"+res[0]+"_"+res[1]+"_"+item_new+"|"+item_new+"'>"+item_new+"</option><option value='oo' >Merk Lainnya</option>";
					
					$("#"+res[0]+"_"+res[1]).append(html);
				
				
				<?php 
					echo '$("#"+res[0]+"_"+res[1]+"_'.$array_familys[1].'").append(html);';
				} ?>
				
				var selects= $("#"+field);
				var merk_vals = $("#"+field).val();
				var array_suh = new Array();
				int_lainnya = 0;
				for(var i=0; i<merk_vals.length; i++){
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						array_suh[i] = merk_vals[i];	
					}
				}
				array_suh[i] = res[0]+"_"+res[1]+"_"+item_new+"|"+item_new;				
				
				//console.log(array_suh);
				
				selects.val(array_suh).trigger("change");
				
				 $("#modal_new_item3").modal("hide");
				 
				var formData = new FormData();
				var urls = "<?php echo base_url('survey/insert_new_item'); ?>";
				
				formData.append('field', res[0]+"_"+res[1]);
				formData.append('value', res[0]+"_"+res[1]+"_"+item_new);
				formData.append('label', item_new);
				 
				 $.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										//window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								
				//alert('dsfdsd');
			});
			


			$("#a4_kk_chek").change(function() {
				if(this.checked) {
					$(".kk").show();
				}else{
					$(".kk").hide();
				}
			});
			
			$("#a4_ik_chek").change(function() {
				if(this.checked) {
					$(".ik").show();
				}else{
					$(".ik").hide();
				}
			});
			
			$("#a4_ak1_chek").change(function() {
				if(this.checked) {
					$(".ak1").show();
				}else{
					$(".ak1").hide();
				}
			});
			
			$("#a4_ak2_chek").change(function() {
				if(this.checked) {
					$(".ak2").show();
				}else{
					$(".ak2").hide();
				}
			});
			
			$("#a4_ak3_chek").change(function() {
				if(this.checked) {
					$(".ak3").show();
				}else{
					$(".ak3").hide();
				}
			});
			
			$("#a4_oki_chek").change(function() {
				if(this.checked) {
					$(".oki").show();
				}else{
					$(".oki").hide();
				}
			});
			
			$("#a4_ski_chek").change(function() {
				if(this.checked) {
					$(".ski").show();
				}else{
					$(".ski").hide();
				}
			});
		
		//id_pelanggan
		
			var $selectAll = $( "input:radio[name=c6]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Tidak'){
					$("#c7-pg").hide();
						$("#c81-pg").hide();
					$("#c82-pg").hide();
					$("#c9-pg").hide();
					//$("#c10-pg").hide();
					$("#c111-pg").hide();
					$("#c112-pg").hide();
				}else{
					$("#c7-pg").show();
					/*$("#c81-pg").show();
					$("#c82-pg").show();
					$("#c9-pg").show();
					$("#c10-pg").show();
					$("#c111-pg").show();
					$("#c112-pg").show();*/
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=c7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'analog'){
					$("#c81-pg").hide();
					$("#c82-pg").hide();
					$("#c9-pg").hide();
					$("#c10-pg").hide();
					$("#c111-pg").show();
					$("#c112-pg").show();
				}else{
					$("#c81-pg").show();
					$("#c82-pg").show();
					$("#c9-pg").show();
					//$("#c10-pg").show();
					$("#c111-pg").hide();
					$("#c112-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=c9]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#c10-pg").show();
				}else{
					$("#c10-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=f1]" );
			$selectAll.on( "change", function() {
				//alert($(this).val());
				if( $(this).val() == 'Ya'){
					$("#f2-pg").show();
					$("#f3-pg").show();
					$("#f4-pg").show();
				}else{
					$("#f2-pg").hide();
					$("#f3-pg").hide();
					$("#f4-pg").hide();
				}
									 
			});
			
			/*var $selectAll = $( "input:radio[name=f7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f8-pg").show();
					$("#f9-pg").show();
					$("#f4-pg").show();
				}else{
					$("#f8-pg").hide();
					$("#f9-pg").hide();
					$("#f4-pg").hide();
				}
									 
			});*/
			
			var $selectAll = $( "input:radio[name=f7]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f8-pg").show();
					$("#f9-pg").show();
				}else{
					$("#f8-pg").hide();
					$("#f9-pg").hide();
				}
									 
			});
			
			$("#f10-k5").change(function() {
				if(this.checked) {
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f11-pg").hide();
					$("#f12-pg").hide();
					$("#f13-pg").hide();
					$("#f14-pg").hide();
					$("#f15-pg").hide();
						$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#f10-d5").change(function() {
				if(this.checked) {
					$("#f11-pg").show();
					// $("#f12-pg").show();
					$("#f13-pg").show();
					$("#f14-pg").show();
					$("#f15-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f11-pg").hide();
					$("#f12-pg").hide();
					$("#f13-pg").hide();
					$("#f14-pg").hide();
					$("#f15-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#f10-k2").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#f10-d2").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#f10-d7").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
					
				}
			});
			
			$("#f10-k7").change(function() {
				if(this.checked) {
					$("#f16-pg").show();
					// $("#f12-pg").show();
					$("#f18-pg").show();
					$("#f19-pg").show();
						$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f16-pg").hide();
					$("#f17-pg").hide();
					$("#f18-pg").hide();
					$("#f19-pg").hide();
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});

			
			$("#f10-k1").change(function() {
				if(this.checked) {
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
				}else{
					$("#f22-pg").hide();
					$("#f21-pg").hide();
					$("#f20-pg").hide();
				}
			});
			
			$("#f10-d1").change(function() {
				if(this.checked) {
					$("#f20-pg").show();
					// $("#f12-pg").show();
					$("#f21-pg").show();
					$("#f22-pg").show();
				}else{
					$("#f22-pg").hide();
					$("#f21-pg").hide();
					$("#f20-pg").hide();
				}
			});
			
			$("#f10-d4").change(function() {
				if(this.checked) {
					$("#f23-pg").show();
					$("#f24-pg").show();
					$("#f25-pg").show();
				}else{
					$("#f23-pg").hide();
					$("#f24-pg").hide();
					$("#f25-pg").hide();
				}
			});
			
			$("#f10-d6").change(function() {
				if(this.checked) {
					$("#f26-pg").show();
				}else{
					$("#f26-pg").hide();
				}
			});
			
			$("#f11-0").change(function() {
				if(this.checked) {
					$("#f12-pg").show();
				}else{
					$("#f12-pg").hide();
				}
			});
			
			$("#f16-0").change(function() {
				if(this.checked) {
					$("#f17-pg").show();
				}else{
					$("#f17-pg").hide();
				}
			});

			$("#f27_chk3").change(function() {

				if(this.checked) {
					$("#f28-pg").show();
					$("#f29-pg").show();
					$("#f30-pg").show();
				}else{
					$("#f28-pg").hide();
					$("#f29-pg").hide();
					$("#f30-pg").hide();
				}
			});

			$("#f27_chk1").change(function() {

				if(this.checked) {
					$("#f31-pg").show();
					$("#f32-pg").show();
				}else{
					$("#f31-pg").hide();
					$("#f32-pg").hide();
				}
			});

			$("#f27_chk4").change(function() {

				if(this.checked) {
					$("#f33-pg").show();
					$("#f34-pg").show();
				}else{
					$("#f33-pg").hide();
					$("#f34-pg").hide();
				}
			});
			
			$("#f361").change(function() {
				if(this.checked) {
					$("#f37-pg").show();
				}else{
					$("#f37-pg").hide();
				}
			});
			
			$("#f3610").change(function() {
				if(this.checked) {
					$("#f38-pg").show();
					$("#f39-pg").show();
					$("#f40-pg").show();
					$("#f41-pg").show();
					$("#f42-pg").show();
				}else{
					$("#f38-pg").hide();
					$("#f39-pg").hide();
					$("#f40-pg").hide();
					$("#f41-pg").hide();
					$("#f42-pg").hide();
				}
			});
			
			$("#f369").change(function() {
				if(this.checked) {
					$("#f43-pg").show();
					$("#f44-pg").show();
					$("#f45-pg").show();
					$("#f46-pg").show();
					$("#f47-pg").show();
				}else{
					$("#f43-pg").hide();
					$("#f44-pg").hide();
					$("#f45-pg").hide();
					$("#f46-pg").hide();
					$("#f47-pg").hide();
				}
			});
			
			$("#f367").change(function() {
				if(this.checked) {
					$("#f48-pg").show();
					$("#f49-pg").show();
					$("#f50-pg").show();
					$("#f51-pg").show();
					$("#f52-pg").show();
				}else{
					$("#f48-pg").hide();
					$("#f49-pg").hide();
					$("#f50-pg").hide();
					$("#f51-pg").hide();
					$("#f52-pg").hide();
				}
			});	
			
			$("#f532").change(function() {
				if(this.checked) {
					$("#f54-pg").show();
				}else{
					$("#f54-pg").hide();
				}
			});
			
			$("#f534").change(function() {
				if(this.checked) {
					$("#f55-pg").show();
				}else{
					$("#f55-pg").hide();
				}
			});
			
			$("#f535").change(function() {
				if(this.checked) {
					$("#f56-pg").show();
				}else{
					$("#f56-pg").hide();
				}
			});
			
			$("#f653").change(function() {
				if(this.checked) {
					$("#f66-pg").show();
				}else{
					$("#f66-pg").hide();
				}
			});
			
			$("#f731").change(function() {
				if(this.checked) {
					$("#f74-pg").show();
				}else{
					$("#f74-pg").hide();
				}
			});
			
			$("#F822").change(function() {
				if(this.checked) {
					$("#f83-pg").show();
				}else{
					$("#f83-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F82]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f83-pg").show();
				}else{
					$("#f83-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=F84]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f85-pg").show();
				}else{
					$("#f85-pg").hide();
				}
									 
			});
			
			$("#f851").change(function() {
				if(this.checked) {
					$("#f86-pg").show();
					$("#f87-pg").show();
				}else{
					$("#f86-pg").hide();
					$("#f87-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F87]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Ya'){
					$("#f88-pg").show();
				}else{
					$("#f88-pg").hide();
				}
									 
			});
			
			var $selectAll = $( "input:radio[name=F96]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == 'Tidak'){
					$("#f97-pg").hide();
					$("#f98-pg").hide();
				}else{
					$("#f97-pg").show();
					$("#f98-pg").show();
				}
									 
			});
			
			$("#G38").change(function() {
				if(this.checked) {
					$("#g6-pg").show();
					$("#g7-pg").show();
				}else{
					$("#g6-pg").hide();
					$("#g7-pg").hide();
				}
			});
			
			$("#G82").change(function() {
				if(this.checked) {
					$("#g9-pg").show();
				}else{
					$("#g9-pg").hide();
				}
			});
			
			var $selectAll = $( "input:radio[name=F59]" );
			$selectAll.on( "change", function() {
				
				if( $(this).val() == '1'){
					$("#f60-pg").show();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f65-pg").hide();
				}else if( $(this).val() == '3'){
					$("#f61-pg").show();
					$("#f62-pg").show();
					$("#f63-pg").show();
					$("#f64-pg").show();
					$("#f65-pg").show();
					$("#f60-pg").hide();
				}else{
					$("#f60-pg").hide();
					$("#f61-pg").hide();
					$("#f62-pg").hide();
					$("#f63-pg").hide();
					$("#f64-pg").hide();
					$("#f65-pg").hide();
				}
									 
			});

// $("#page_identiatas_responden").hide();
						 // $("#page_demografi_responden").hide();
						 // $("#page_profile_rumah_tangga").hide();
						 // $("#page_internet_dan_data").hide();
						 // $("#page_menonton_televisi").hide();
						 // $("#page_program_acara_televisi").hide();
						 // $("#page_kesan_pemirsa").hide();
						 // $("#page_kegemaran_dan_perilaku").hide();
						 // $("#page_product_ownership").hide();
						//swal.close();

		
			
		
		});
		
		
		</script>
		
		<script>

			var page_curr = 1;

			function merk_item(){
				var merk_vals = $('#merk_stump').val();
				var array_suh = new Array();
				var int_lainnya = 0;
				
				for(var i=0; i<merk_vals.length; i++){
					
					if(merk_vals[i] == 'oo'){
						int_lainnya = 1;
					}else{
						//alert(merk_vals[i]);
						array_suh[i] = merk_vals[i];	
					}
											
					
				}		
				//$('#merk_stump').select2("val", array_suh);
				/*setTimeout(function() {
					$('#merk_stump').val(array_suh).change();
					
					if(int_lainnya==1){
						alert('new_item');
					}
				}, 0);*/

				

			}

			function selectAge(){
				var age = $('#r2lainnya').val();
				
				if(age > 17 && age < 26){
					$("#r21").prop("checked", true);
				}else if(age > 26 && age < 40){
					$("#r22").prop("checked", true);
				}else if(age > 40 && age < 56){
					$("#r23").prop("checked", true);
				}else{
					$("#r24").prop("checked", true);
				}
			}

			function get_respondent(){
				
			//alert('asasaa');
				
				var datapost = {
				"id": $('#id_pelanggan').val()
			  };
				
				      $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>survey/get_respondent",
						data: JSON.stringify(datapost),
						dataType: 'json',
						contentType: 'application/json; charset=utf-8',
						success: function(response) {
						//obj = jQuery.parseJSON(response);
						
							$('#kota_survey').val(response[0].KOTA_X);
							$('#telkom_regional').val("0"+response[0].REG);
						
							$('#nama_respondent').val(response[0].NAMA_PELANGGAN);
							$('#alamat_rumah').val(response[0].ALAMAT);
							$('#kelurahan').val(response[0].KELURAHAN);
							$('#kecamatan').val();
							$('#no_tel').val(response[0].NO_HP_MYIH);
							$('#no_hp').val(response[0].NO_HP);
							$('#email').val();
							
							//alert(length.response);
							
							for(var i=0;i<response.length;i++){
								
								var numbers = i+1;
								$('#program_name_'+numbers).html(response[i].PROGRAM);
								$('#c12_channel'+numbers).val(response[i].PROGRAM);
								$('#c12_program_skala'+numbers).val(response[i].PROGRAM);
								$('#progra_skala_'+numbers).html(numbers+'. '+response[i].PROGRAM);
								
							}
							//console.log(response[0].NAMA_PELANGGAN);
						  // swal({
							// title: 'Success!',
							// text: response.message,
							// type: 'success',
							// showCancelButton: false,
							// confirmButtonText: 'Ok'
						  // }).then(function() {
							// window.location.href = "<?php echo base_url('jurnal'); ?>";
						  // })

						  // if (response.status == "success") {

						  // } else {
							// swal("Failed!", response.message, "error");
						  // }
						}
					  });
				
			}

			function change_merk_car(fm,sm_str){

				//alert('asasasa');

				var vals = '';
				var merk_vals = $('#merk_car_'+fm).val();
				
				console.log(merk_vals);
			 
				var html = '<div class="col-md-12"><span id="mobilheader'+idn+'"><b>Mobil '+sm_str+'</b></span></div> ';

				for(var i=0; i<merk_vals.length; i++){

					var spl =merk_vals[i].split("|");

					var idn = 1+1;
						html += '<div class="col-md-6">	<span id="mobil'+idn+'">'+spl[1]+'</span></div> ';
						html += '<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="G21lainnya'+idn+'" placeholder="Tahun Perakitan"></div></div>';
				}

				$('#list_car_own_'+fm).html(html);


			}

			function change_merk_mb(fm,sm_str){

//alert('asasasa');

				var vals = '';
				var merk_vals = $('#merk_mb_'+fm).val();

				var html = '<div class="col-md-12"><span id="motorheader'+idn+'"><b>Motor '+sm_str+'</b></span></div> ';

				for(var i=0; i<merk_vals.length; i++){

					var spl =merk_vals[i].split("|");

					var idn = 1+1;
						html += '<div class="col-md-6">	<span id="mb'+idn+'">'+spl[1]+'</span></div> ';
						html += '<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="G22lainnya'+idn+'" placeholder="Tahun Perakitan"></div></div>';
				}

				$('#list_mb_own_'+fm).html(html);


			}

			function expense_family(){
				
				//alert('sssss');
				
								var age = $('#a6p').val();
								
								if(age >= 1 && age < 2000000){
									$("#a61").prop("checked", true);
								}else if(age >= 2000000 && age < 3000000){
									$("#a62").prop("checked", true);
								}else if(age >= 3000000 && age < 4500000){
									$("#a63").prop("checked", true);
								}else if(age >= 4500000 && age < 6000000){
									$("#a64").prop("checked", true);
								}else if(age >= 6000000 && age < 9000000){
									$("#a65").prop("checked", true);
								}else{
									$("#a66").prop("checked", true);
								}
								

							}	
			function expense_video(){
				
				//alert('sssss');
				
								var age = $('#F45lainnya').val();
								
								if(age < 0){
									$("#F451").prop("checked", true);
								}else if(age >= 1 && age < 25000){
									$("#F452").prop("checked", true);
								}else if(age >= 25000 && age < 50000){
									$("#F453").prop("checked", true);
								}else if(age >= 50000 && age < 75000){
									$("#F454").prop("checked", true);
								}else if(age >= 75000 && age < 100000){
									$("#F455").prop("checked", true);
								}else if(age >= 100000 && age < 150000){
									$("#F456").prop("checked", true);
								}else{
									$("#F457").prop("checked", true);
								}
								
							}	


			function expense_audio(){
				
				//alert('sssss');
				
								var age = $('#F40lainnya').val();
								
								if(age < 0){
									$("#F401").prop("checked", true);
								}else if(age >= 1 && age < 25000){
									$("#F402").prop("checked", true);
								}else if(age >= 25000 && age < 50000){
									$("#F403").prop("checked", true);
								}else if(age >= 50000 && age < 75000){
									$("#F404").prop("checked", true);
								}else if(age >= 75000 && age < 100000){
									$("#F405").prop("checked", true);
								}else if(age >= 100000 && age < 150000){
									$("#F406").prop("checked", true);
								}else{
									$("#F407").prop("checked", true);
								}
								
							}	

			function expense_game(){
				
//alert('sssss');

				var age = $('#F49lainnya').val();
				
				if(age < 0){
					$("#F491").prop("checked", true);
				}else if(age >= 1 && age < 25000){
					$("#F492").prop("checked", true);
				}else if(age >= 25000 && age < 50000){
					$("#F493").prop("checked", true);
				}else if(age >= 50000 && age < 75000){
					$("#F494").prop("checked", true);
				}else if(age >= 75000 && age < 100000){
					$("#F495").prop("checked", true);
				}else if(age >= 100000 && age < 150000){
					$("#F496").prop("checked", true);
				}else{
					$("#F497").prop("checked", true);
				}
				
			}	

			function data_expense(){
				
				var age = $('#b2lainnya').val();
				
				if(age < 50000){
					$("#b11").prop("checked", true);
				}else if(age >= 50000 && age < 100000){
					$("#b12").prop("checked", true);
				}else if(age >= 100000 && age < 150000){
					$("#b13").prop("checked", true);
				}else if(age >= 150000 && age < 200000){
					$("#b14").prop("checked", true);
				}else if(age >= 200000 && age < 300000){
					$("#b15").prop("checked", true);
				}else{
					$("#b16").prop("checked", true);
				}
				
			}
			
			function tv_duration(){
				
				var age = $('#c2lainnya').val();
				
				if(age < 1){
					$("#c21").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c22").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c23").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c24").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c25").prop("checked", true);
				}else{
					$("#c26").prop("checked", true);
				}
				
			}

			function tv_duration_analog(){
				
				var age = $('#c111lainnya').val();
				
				if(age < 1){
					$("#c111").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c112").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c113").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c114").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c115").prop("checked", true);
				}else{
					$("#c116").prop("checked", true);
				}
				
			} function tv_duration_digital(){
			
				var age = $('#c81lainnya').val();
				
				if(age < 1){
					$("#c81").prop("checked", true);
				}else if(age >= 1 && age <= 2){
					$("#c82").prop("checked", true);
				}else if(age > 2 && age <= 4){
					$("#c83").prop("checked", true);
				}else if(age > 4 && age <= 6){
					$("#c84").prop("checked", true);
				}else if(age > 6 && age <= 8){
					$("#c85").prop("checked", true);
				}else{
					$("#c86").prop("checked", true);
				}
				
			}

			function start_survey(){
				
				swal({
					title: 'Akan Memulai Survey ?',
					text: '',
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Ya',
					cancelButtonText: 'Tidak'
				  }).then(function() {

						 window.location.href = "<?php echo base_url() . 'survey/new_survey'; ?>";

				  });
				
				//alert('start');
				
			}
			
			function next_survey(page){
				
				//alert(page_curr);
				
					if(page_curr > 0 || page_curr < 9){
					
					if(page == 0){
						page_curr--;
					}else{
						page_curr++;
					}
					
					//alert(page_curr);
					if(page_curr == 2){
						// $("#survey_page_1").hide('1000');
						// $("#page_identiatas_responden").show('1000');
						// $("#page_demografi_responden").show('1000');
						// $("#page_profile_rumah_tangga").show('1000');
						// $("#page_internet_dan_data").show('1000');
						// $("#page_menonton_televisi").show('1000');
						// $("#page_program_acara_televisi").show('1000');
						// $("#page_kesan_pemirsa").show('1000');
						// $("#page_kegemaran_dan_perilaku").show('1000');
						// $("#page_product_ownership").hide('1000');
						
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").show('1000');
						$("#page_demografi_responden").show('1000');
						$("#page_profile_rumah_tangga").show('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 3){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").show('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 4){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").show('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 5){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").show('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 6){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").show('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 7){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").show('1000');
						$("#page_product_ownership").hide('1000');
						
						$("html, body").animate({scrollTop: 0}, 400);
					}else if(page_curr == 8){
						$("#survey_page_1").hide('1000');
						$("#page_identiatas_responden").hide('1000');
						$("#page_demografi_responden").hide('1000');
						$("#page_profile_rumah_tangga").hide('1000');
						$("#page_internet_dan_data").hide('1000');
						$("#page_menonton_televisi").hide('1000');
						$("#page_program_acara_televisi").hide('1000');
						$("#page_kesan_pemirsa").hide('1000');
						$("#page_kegemaran_dan_perilaku").hide('1000');
						$("#page_product_ownership").show('1000');

						$("#btn_next").html('Selesai');
						
						$("html, body").animate({scrollTop: 0}, 400);
						
					}else if(page_curr == 9){					
					//}else{					
						swal({
							title: 'Akan Menyelesaikan Survey ?',
							text: '',
							type: 'warning',
							showCancelButton: true,
							confirmButtonText: 'Ya',
							cancelButtonText: 'Tidak'
						}).then(function() {
							
								var formData = new FormData();
								var urls = "<?php echo base_url('survey/insert_survey'); ?>";
							
								
								
								//console.log(vals);
							
								formData.append('id_pelanggan', $('#id_pelanggan').val());
								formData.append('kota_survey', $('#kota_survey').val());
								formData.append('telkom_regional', $('#telkom_regional').val());
								
								
								formData.append('nama_respondent', $('#nama_respondent').val());
								formData.append('alamat_rumah', $('#alamat_rumah').val());
								formData.append('kecamatan', $('#kecamatan').val());
								formData.append('kelurahan', $('#kelurahan').val());
								formData.append('no_tel', $('#no_tel').val());
								formData.append('no_hp', $('#no_hp').val());
								formData.append('email', $('#email').val());
																
								<?php foreach($field_r1 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r2 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r3 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r4 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r5 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r6 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>

								<?php foreach($field_r7 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								<?php foreach($field_r8 as $r1){ 
									
									if($r1['type_input'] == 0){
										echo "formData.append('".$r1['code_question']."',$('input[name=\"".$r1['code_question']."\"]:checked').val());";
									}else if($r1['type_input'] == 1){
										echo "formData.append('".$r1['code_question']."', $('#".$r1['code_question']."').val());";
									}else if($r1['type_input'] == 3){ ?>
										var vals = '';
										var merk_vals = <?php echo "$('#".$r1['code_question']."').val();"; ?>
										
										if(merk_vals == ''){
											<?php echo "formData.append('".$r1['code_question']."', '');"; ?>
										}else{
											for(var i=0; i<merk_vals.length; i++){
												var spl =merk_vals[i].split("|");
												vals += spl[0]+',';
											}
											<?php echo "formData.append('".$r1['code_question']."', vals);"; ?>
										}
										
										
									<?php
									}else{ ?>
										var values = '';
										<?php echo '$("input:checkbox[name='.$r1['code_question'].']:checked").each(function(){' ?>
											values += $(this).val()+',';
										});
										var values_rel = values.slice(0, -1) ;
										formData.append(<?php echo "'".$r1['code_question']."'";  ?>, values_rel);
									<?php	
									}
									
								} ?>
								
								$.ajax({
									type: 'POST',
									url: urls,
									data: formData,
									cache: false,
									contentType: false,
									processData: false,
									success: function(response) {
										window.location.href = "<?php echo base_url() . 'survey'; ?>";
									}
								});
								

						});
					
					}

					
					
				}
				 // $("#survey_page_1").hide('1000');
				 // $("#survey_page_2").show('1000');
				//alert('start');
				
			}	
			
			function prev_survey(page){
								page_curr--;
				//alert('aaa');
				// $("#survey_page_2").hide('1000');
				 // $("#survey_page_1").show('1000');
				//alert('start');
				
			}
		</script>
 

