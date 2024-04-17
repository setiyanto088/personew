
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">CUSTOMER PROFILING SURVEY - 2021</h3>
				 
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
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <button type="button" class="btn btn-success btn-md" onClick="start_survey()">Mulai Survey</button>
                </div>
              </div>
            
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
		
		
		<script>
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
		</script>
 

