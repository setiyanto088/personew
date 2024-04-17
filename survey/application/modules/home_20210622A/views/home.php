
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 grid-margin ">
              <div class="row">
                <div class="col-md-3 mb-4  " >
                  <div class="card card-light-danger" style="background-color:#ff1414">
                    <div class="card-body">
                      <p class="mb-4">Total Call</p>
                      <p class="fs-30 mb-2"><?php echo number_format($total_call[0]['total_call'],0,',','.'); ?></p>
                      <p><?php echo number_format(($total_call[0]['total_call']/1500),3,',','.'); ?> % </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4  ">
                  <div class="card card-light-danger" style="background-color:#ff1414">
                    <div class="card-body">
                      <p class="mb-4">Bersedia</p>
                      <p class="fs-30 mb-2"><?php echo number_format($total_call_bersedia[0]['total_call'],0,',','.'); ?></p>
                      <p><?php echo number_format(($total_call_bersedia[0]['total_call']/1500),3,',','.'); ?> % </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 mb-lg-0  ">
                  <div class="card card-light-danger" style="background-color:#ff1414">
                    <div class="card-body">
                      <p class="mb-4">Interview</p>
                      <p class="fs-30 mb-2"><?php echo number_format($total_interview[0]['total_call'],0,',','.'); ?></p>
                      <p><?php echo number_format(($total_interview[0]['total_call']/1500),3,',','.'); ?> % </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <div class="card card-light-danger" style="background-color:#ff1414">
                    <div class="card-body">
                      <p class="mb-4">Sisa</p>
                      <p class="fs-30 mb-2"><?php echo number_format(150000 - $total_call[0]['total_call'],0,',','.'); ?></p>
                      <p><?php echo number_format(((150000-$total_call[0]['total_call'])/1500),3,',','.'); ?> % </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

	   <div class="row">
            <div class="col-md-12 mb-10 grid-margin ">
              <div class="card tale">
                <div class="card-people mt-auto" id="chart_day">
                  <div class="card-people mt-auto" id="filter">
                  <div class="row">
                      <div class="col-md-2 grid-margin " style="margin-left:5px" >
                       <select class="form-control" id="type_data" style="" selected="selected" >
                         <option value=1 selected='selected'>Total Call</option>
                         <option value=2 >Bersedia</option>
                         <option value=3 >Intereview</option>
                        <!-- <option value=4 >Sisa</option>-->
                       </select>
                       </div>
                       <div class="col-md-2 grid-margin " style="margin-left:5px" >
                       <select class="form-control" id="kota_data" style="" selected="selected" >
                        <option value=0 selected='selected'>Nasional</option>
                         <?php foreach($get_location as $get_locations){

                          echo "<option value='".$get_locations['location_name']."' value='".$get_locations['location_name']."' >".$get_locations['location_name']."</option>";
 
                         } ?>
                       </select>
                       </div>
                       <div class="col-md-2 grid-margin ">
                      <button type="button" class="  btn btn-danger" onClick="get_resume()" id="btn_filter" style="margin-right:-10px;">Filter</button>
                       </div>
                  </div>
                  </div>
                  <div id="div_chart" > <canvas id="canvas" style="height:300px;"> </canvas> </div>
                </div>
              </div>
            </div>
            </div>

	    <div class="row">
            <div class="col-md-12 mb-10 grid-margin " >
              <div class="card tale" style="padding:20px">
                <div class="card-people mt-auto" id="chart_day">
		<table id="exampless" class="table display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Surveyor</th>
                <th>Supervisor</th>
                <th>Total Call</th>
                <th>Bersedia</th>
                <th>Interview</th>
                <th>Sisa Responden</th>
            </tr>
        </thead>
        <tbody>
	<?php foreach($table_data as $table_datas){ ?>
            <tr>
                <td><?php echo $table_datas['nama']; ?></td>
		<td><?php echo $table_datas['supervisor']; ?></td>
                <td><?php echo number_format($table_datas['total_call'],0,',','.'); ?></td>
                <td><?php echo number_format($table_datas['total_bersedia'],0,',','.');; ?></td>
                <td><?php echo number_format($table_datas['total_interview'],0,',','.');; ?></td>
                <td><?php echo number_format($table_datas['all_resp']-$table_datas['total_call'],0,',','.');; ?></td>
            </tr>
	   <?php } ?>
        </tbody>
        <tfoot>
            <tr>
               <th>Surveyor</th>
                <th>Supervisor</th>
                <th>Total Call</th>
                <th>Bersedia</th>
                <th>Interview</th>
                <th>Sisa Responden</th>
            </tr>
        </tfoot>
    </table>
                </div>
              </div>
            </div>
            </div>

          </div>
	
        <!-- content-wrapper ends -->
 
        <script async >
			
			$( document ).ready(function() { 

				$('#exampless').DataTable({

					responsive: true,
					"scrollX": true
				});
				

        var areaData = {
			labels: [<?php echo $date_da; ?>],
			datasets: [
			  {
				//data: [<?php echo $date_da; ?>],
				//data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350"],
				data: [<?php echo $chart_data; ?>],
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

      var areaOptions = {
			responsive: true,
			maintainAspectRatio: false,
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
				  padding: 2,
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
				  padding: 4,
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
				radius: 2
			  }
			}
		  }
		  var revenueChartCanvas = $("#canvas").get(0).getContext("2d");
		  var revenueChart = new Chart(revenueChartCanvas, {
			  height: 200,
			type: 'line',
			data: areaData,
			options: areaOptions
		  });

				
			});
		
		</script>
<script>

      function get_resume(){

        var formData = new FormData();
				formData.append('type_data',  $("#type_data").val());
        formData.append('kota', $("#kota_data").val());

				$.ajax({
					type:'POST',
					url: '<?php echo base_url('home/get_resume');?>',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					success: function(response) {
						if (response.success == true) {

								 $("#canvas").remove();
								 $("#div_chart").append('<canvas id="canvas"></canvas>');

                 var areaData = {
			labels: response.chart_label,
			datasets: [
			  {
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
			maintainAspectRatio: false,
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
		  var revenueChartCanvas = $("#canvas").get(0).getContext("2d");
		  var revenueChart = new Chart(revenueChartCanvas, {
			type: 'line',
			data: areaData,
			options: areaOptions
		  });

            } else{
							$('#btn-submit').removeAttr('disabled');
							//$('#btn-submit').text("Tambah User");
							swal("Failed!", response.message, "error");
						}
					}
				}).fail(function(xhr, status, message) {
					$('#btn-submit').removeAttr('disabled');
					$('#btn-submit').text("Tambah User");
					swal("Failed!", "Invalid respon, silahkan cek koneksi.", "error");
				});

      }

</script>