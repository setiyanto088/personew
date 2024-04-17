
      <!-- partial:partials/_sidebar.html -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
       <!--   <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">

				
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
                </div> 
              </div>
            </div>
          </div>-->
          <div class="row">
            <div class="col-md-6 grid-margin ">
				
				 <div class="row">
					<div class="col-md-12">
						<div class="card ">
						  <div class="row">
								<div class="col-md-12" style="margin-top:20px;margin-left:20px;">
									<h3>Your Statistic</h3>
								</div>
							</div>
							 <div class="row" style="margin-left:20px;">
								  <div class="col-md-8" style="margin-top:70px;">
									<div class="card-people mt-auto">
									  <img src="<?php echo base_url(); ?>/assets/survey/bg1.png" alt="people">
									  <div class="weather-info">
										<div class="d-flex">
										  <div>
											<h2 class="mb-0 font-weight-normal"><sup></sup></h2> 
										  </div>
										  <div class="ml-2" >
											<h2 class="" style="margin-left:-200px;margin-top:-20px" ><b>Helloo !</b></h2>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  
								  <div class="col-md-1">
								  &nbsp
								  </div>
								  
								   <div class="col-md-3" style="margin-top:100px;" >
										 <div class="row">
										 
											 <div class="col-md-12" style="">
												<h4 class="" style="color:#F1626C" ><b><?php echo $get_summ[0]['konfirmasi']; ?></b></h4>
												<h5 class="" style="color:#AEAEAE" ><b>Pelanggan <br>Terkonfirmasi</b></h5>
												<br>
											 </div>
											 
											  <div class="col-md-12" style="">
												<h4 class="" style="color:#F1626C" ><b><?php echo $get_summ[0]['menolak']; ?></b></h4>
												<h5 class="" style="color:#AEAEAE" ><b>Pelanggan <br> Tidak Menjawab</b></h5>
												<br>
											 </div>
											 
											  <div class="col-md-12" style="">
												<h4 class="" style="color:#F1626C" ><b><?php echo $get_summ[0]['tidak_mejawab']; ?></b></h4>
												<h5 class="" style="color:#AEAEAE" ><b>Pelanggan <br>Menolak</b></h5>
											 </div>
											
										 </div>
								   </div>
						  </div>
						  
						  
						</div>
					</div>
					
					<div class="col-md-12" style="margin-top:20px;">
						<div class="card ">
							 <div class="row">
								  <div class="col-md-12" style="margin-top:10px;">
											<div class="row" id="list_user" style="margin:auto;">
												<div class="col-md-9" >
													<h5 style="margin-left:35px;"><label for="exampleInputEmail1">Call History</label></h5>
												</div>
												
													<div class="col-md-3">
														<h5><label for="exampleInputEmail1" style="text-align:right;color:#F1646E">view more</label></h5>
													</diV>

													<div class="col-md-12" style="display: inline-block">
														 <table id="table_resp_ss" class="" style="margin:auto;">
														  <thead>
															<tr style='border-bottom: 1px solid grey;'>
																<td style='font-size: 12px' colspan=2 width="40%">Pelanggan</td>
																<td style='font-size: 12px'>Phone</td>
																<td style='font-size: 12px'>Date</td>
																<td style='font-size: 12px'>Kota</td>
															</tr>
														  </thead>
														  <tbody>
															<?php foreach($get_history as $users){ 
																
																$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
															
																echo "<tr style='border-bottom: 1px solid grey;'><td width='5%' style='font-size: 12px'><img style='border-radius:10%;background-color:#F1646E;width:20px;height:20px;margin-right:10px' src='".base_url().'assets/survey/Group105.png'."' alt='profile'/></td><td style='font-size: 12px'>".$users['NAMA_PELANGGAN']."</td><td style='font-size: 12px'>".$users['NO_HP']."</td><td style='font-size: 12px'>".$users['dd']."</td style='font-size: 12px'><td style='font-size: 12px'>".$users['KOTA_X']."</td></tr>";
															} ?>
														  </tbody>
														</table>
													</div>
													
													<div class="col-md-12" style='margin-top:15px'>
														 &nbsp
													</div>
											</div>
								  </div>
								  
						  </div>
						  
						  
						</div>
					</div>
					
				</div>
				
            </div>
			
			
            <div class="col-md-6 grid-margin ">
               <div class="card">
                <div class="card-body">
				
					<div class="row" >
					
						<div class="col-md-6">
							<p class="card-title">Call Overview</p>
						</div>
						
						<div class="col-md-6" style="text-align: right;">
							 <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Monthly (2021)</button>
								<div class="dropdown-menu">
								  <a class="dropdown-item">Monthly</a>
								</div> 
						</div>
					  
						<div class="col-md-6" style="margin-top:20px">
							<div class="mr-5 mt-3">
							  <h3 class="text-primary fs-30 font-weight-medium" style="color:#F1646E !important;"><?php echo $get_summ[0]['total']; ?></h3>
							   <p class="text-muted">Total Pelanggan</p>
							</div>
						</div>
						
						<div class="col-md-6" style="text-align: right;margin-top:20px">
							<div class="mr-5 mt-3">
							  <h3 class="text-primary fs-30 font-weight-medium" style="color:#F1646E !important;"><?php if($get_summ[0]['total'] == 0){ echo 0; }else{ echo ($get_summ[0]['konfirmasi']/$get_summ[0]['total'])*100; } ?>%</h3>
							   <p class="text-muted">Rata-Rata Pelanggan<br> Terkonfirmasi</p>
							</div>
						</div>
					  
					  <div class="col-md-12" style="margin-top:100px">
							<canvas id="order_chartss"></canvas>
					  </div>
					  
					</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
 
		<script>
		$(document).ready(function () {
		    var areaData = {
			labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
			datasets: [
			  {
				data: [<?php echo $array_chart; ?>],
				//data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350"],
				borderColor: [
				  '#FFAB2D'
				],
				borderWidth: 2,
				backgroundColor: '#F2C683',
				fill: true,
				label: "Orders"
			  }
			]
		  };
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
		  var revenueChartCanvas = $("#order_chartss").get(0).getContext("2d");
		  var revenueChart = new Chart(revenueChartCanvas, {
			type: 'line',
			data: areaData,
			options: areaOptions
		  });
    
		});
		</script>
