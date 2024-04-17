
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
                        <option value=0 selected='selected'>Semua Kota</option>
                         <?php foreach($get_location as $get_locations){

                          echo "<option value='".$get_locations['id_location']."' value='".$get_locations['location_name']."' >".$get_locations['location_name']."</option>";

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
				<th>Supervisor</th>
                <th>Surveyor</th>
                <th>Total Call</th>
                <th>Bersedia</th>
                <th>Interview</th>
                <th>Sisa Responden</th>
            </tr>
        </thead>
        <tbody>
	<?php foreach($table_data as $table_datas){ ?>
            <tr>
				<td><?php echo $table_datas['nama_spv']; ?></td>
                <td><?php echo $table_datas['nama_s']; ?></td>
                <td><?php echo number_format($table_datas['total_call'],0,',','.'); ?></td>
                <td><?php echo number_format($table_datas['total_bersedia'],0,',','.');; ?></td>
                <td><?php echo number_format($table_datas['total_interview'],0,',','.');; ?></td>
                <td><?php echo number_format($table_datas['all_resp']-$table_datas['total_call'],0,',','.');; ?></td>
            </tr>
	   <?php } ?>
        </tbody>
        <tfoot>
            <tr>
				<th>Supervisor</th>
                <th>Surveyor</th>
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

	    <div class="row">
            <div class="col-md-12 mb-10 grid-margin " style="" >
              <div class="card tale" style="padding:20px;  overflow-x: auto;">
                <div class="card-people mt-auto" id="chart_day">
				
			<!--	<button type="button" class="btn btn-danger" onClick="print_excel()" id="btn_excel" >Export</button><br><br> -->
				
		<table id="exampless" class="table display responsive nowrap table-striped" style="width:100%">
        <thead>
            <tr style="border: 1px solid black;">
		<th rowspan=2 style="border: 1px solid black;text-align: center;">Supervisor</th>
                <th rowspan=2 style="border: 1px solid black;text-align: center;">Surveyor</th>
		<th colspan=3 style="border: 1px solid black;text-align: center;">Urban</th>
		<th colspan=3 style="border: 1px solid black;text-align: center;">Rural</th>
		<th colspan=3 style="border: 1px solid black;text-align: center;">Total</th>
	   </tr>
	    <tr>
	   	<th style="border: 1px solid black;text-align: center;">Target</th>
                <th style="border: 1px solid black;text-align: center;">Hasil</th>
                <th style="border: 1px solid black;text-align: center;">%</th>
                <th style="border: 1px solid black;text-align: center;">Target</th>
		<th style="border: 1px solid black;text-align: center;">Hasil</th>
		<th style="border: 1px solid black;text-align: center;">%</th>
		<th style="border: 1px solid black;text-align: center;">Target</th>
		<th style="border: 1px solid black;text-align: center;">Hasil</th>
		<th style="border: 1px solid black;text-align: center;">%</th>
            </tr>
        </thead>
        <tbody>
	<?php $total_urban = 0; $total_rural = 0; $urban_s = 0; $rural_s = 0; $i=0; 
	foreach($array_t1 as $val){ 
	
	?>

	<?php if($val['header'] == 1 ){ 
	$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
	
	?>
	<tr style="background-color:#FBC6A4">
		
		<td colspan=2 style="text-align: center;"><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><strong><h6><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</strong></h6></td>
	</tr>
	<?php
	
	$i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; 
	$urban_s += $val[1];
	$rural_s += $val[2];
	
	}else{ ?>
	
	<tr style="">
		<td><?php echo $val[4]; ?></td>
		<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>
		<td style="text-align: right;"> %</td>
		<td style="text-align: right;"></td>	
		<td style="text-align: right;"><?php echo $val[2]; ?></td>
		<td style="text-align: right;"> %</td>
		<td style="text-align: right;"></td>	
		<td style="text-align: right;"><?php echo $val[3]; ?></td>
		<td style="text-align: right;"></td>
	</tr>
	
	<?php } ?>
		
	<?php 
	} ?>


        </tbody>
        <tfoot>
            <tr>
               <th></th>
                <th>Total</th>
                <th style="text-align: right;"><?php echo number_format(($urban_s),0,',','.'); ?></th>
                <th style="text-align: right;"><?php echo number_format($total_urban,0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format(($total_urban/$urban_s)*100,1,',','.'); ?> %</th>
                 <th style="text-align: right;"><?php echo number_format(($rural_s),0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format($total_rural,0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format(($total_rural/$rural_s)*100,1,',','.'); ?> %</th>
		 <th style="text-align: right;"><?php echo number_format(($urban_s+$rural_s),0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format($total_urban+$total_rural,0,',','.'); ?></th>
		<th style="text-align: right;<?php if((($total_urban+$total_rural)/($urban_s+$rural_s))*100 < 31){ echo " color:red;"; }elseif((($total_urban+$total_rural)/5000)*100 > 30 && (($total_urban+$total_rural)/5000)*100 < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($total_urban+$total_rural)/($urban_s+$rural_s))*100,1,',','.'); ?> %</th>
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
					url: '<?php echo base_url('home_supervisor/get_resume');?>',
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