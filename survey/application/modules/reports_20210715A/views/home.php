<style>
 .table-responsive .responsive{
    max-height:300px;
}
</style>
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
	    <div class="row">
            <div class="col-md-12 mb-10 grid-margin " style="" >
              <div class="card tale" style="padding:20px;  overflow-x: auto;">
                <div class="card-people mt-auto" id="chart_day">
				
				<button type="button" class="btn btn-danger" onClick="print_excel()" id="btn_excel" >Export</button><br><br>
				
		<table id="exampless" class="table display responsive nowrap table-striped" style="width:100%">
        <thead>
            <tr style="border: 1px solid black;">
		<th rowspan=2 style="border: 1px solid black;">Wilayah</th>
                <th rowspan=2 style="border: 1px solid black;">Kota</th>
		<th colspan=3 style="border: 1px solid black;">Urban</th>
		<th colspan=3 style="border: 1px solid black;">Rural</th>
		<th colspan=3 style="border: 1px solid black;">Total</th>
	   </tr>
	    <tr>
	   	<th style="border: 1px solid black;text-align: left;">Target</th>
                <th style="border: 1px solid black;text-align: left;">Hasil</th>
                <th style="border: 1px solid black;text-align: left;">%</th>
                <th style="border: 1px solid black;text-align: left;">Target</th>
		<th style="border: 1px solid black;text-align: left;">Hasil</th>
		<th style="border: 1px solid black;text-align: left;">%</th>
		<th style="border: 1px solid black;text-align: left;">Target</th>
		<th style="border: 1px solid black;text-align: left;">Hasil</th>
		<th style="border: 1px solid black;text-align: left;">%</th>
            </tr>
        </thead>
        <tbody>
	<?php $total_urban = 0; $total_rural = 0; $i=0; foreach($array_t1 as $val){ 
	$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
	?>

	<tr>
	<?php if($i == 0 ){ ?>
		<td>Treg 1</td>
	<?php }else{ ?>
		<td></td>
	<?php } ?>
		<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
	</tr>
	<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; 
	
	} ?>

	<?php $i=0; foreach($array_t2 as $val){ 
	$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
	?>

	<tr>
	<?php if($i == 0 ){ ?>
		<td>Treg 2</td>
	<?php }else{ ?>
		<td></td>
	<?php } ?>
	<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
	</tr>
	<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

		<?php $i=0; foreach($array_t3 as $val){ 
		$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
		?>

	<tr>
	<?php if($i == 0 ){ ?>
		<td>Treg 3</td>
	<?php }else{ ?>
		<td></td>
	<?php } ?>
	<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
	</tr>
	<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

	<?php $i=0; foreach($array_t4 as $val){ 
	$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
	?>

<tr>
<?php if($i == 0 ){ ?>
	<td>Treg 4</td>
<?php }else{ ?>
	<td></td>
<?php } ?>
<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
</tr>
<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

<?php $i=0; foreach($array_t5 as $val){ 
$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
?>

<tr>
<?php if($i == 0 ){ ?>
	<td>Treg 5</td>
<?php }else{ ?>
	<td></td>
<?php } ?>
<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
</tr>
<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

<?php $i=0; foreach($array_t6 as $val){ 
$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
?>

<tr>
<?php if($i == 0 ){ ?>
	<td>Treg 6</td>
<?php }else{ ?>
	<td></td>
<?php } ?>
<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
</tr>
<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

<?php $i=0; foreach($array_t7 as $val){ 
$total_pers = (($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100;
?>

<tr>
<?php if($i == 0 ){ ?>
	<td>Treg 7</td>
<?php }else{ ?>
	<td></td>
<?php } ?>
<td><?php echo $val[0]; ?></td>	
		<td style="text-align: right;"><?php echo $val[1]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['URBAN']/$val[1])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[2]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL'] ?></td>
		<td style="text-align: right;"><?php echo number_format(($data_survey[$val[0]]['RURAL']/$val[2])*100,1,',','.'); ?> %</td>
		<td style="text-align: right;"><?php echo $val[3]; ?></td>	
		<td style="text-align: right;"><?php echo $data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'] ?></td>
		<td style="text-align: right;<?php if($total_pers < 31){ echo " color:red;"; }elseif($total_pers > 30 && $total_pers < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($data_survey[$val[0]]['RURAL']+$data_survey[$val[0]]['URBAN'])/($val[2]+$val[1]))*100,1,',','.'); ?> %</td>
</tr>
<?php $i++; $total_urban += $data_survey[$val[0]]['URBAN']; $total_rural += $data_survey[$val[0]]['RURAL']; } ?>

        </tbody>
        <tfoot>
            <tr>
               <th></th>
                <th>Total</th>
                <th>3.435</th>
                <th style="text-align: right;"><?php echo number_format($total_urban,0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format(($total_urban/3435)*100,1,',','.'); ?> %</th>
                <th>1.565</th>
		<th style="text-align: right;"><?php echo number_format($total_rural,0,',','.'); ?></th>
		<th style="text-align: right;"><?php echo number_format(($total_rural/1565)*100,1,',','.'); ?> %</th>
		<th>5.000</th>
		<th style="text-align: right;"><?php echo number_format($total_urban+$total_rural,0,',','.'); ?></th>
		<th style="text-align: right;<?php if((($total_urban+$total_rural)/5000)*100 < 31){ echo " color:red;"; }elseif((($total_urban+$total_rural)/5000)*100 > 30 && (($total_urban+$total_rural)/5000)*100 < 71 ){ echo " color:#FFD523;"; }else{ echo " color:green;"; } ?>"><?php echo number_format((($total_urban+$total_rural)/5000)*100,1,',','.'); ?> %</th>
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

				// $('#exampless').DataTable({
 // "order": [[ 2, "desc" ]],
					// responsive: true,
					// "scrollX": true
				// });
				

    

				
			});
		
		</script>
<script>

function print_excel(){
	
	var form_data = new FormData();  
		//var tahun = $('#tahun').val();
	
		form_data.append('tahun', '');
	
	$.ajax({
			url: "<?php echo base_url().'reports/exports'; ?>", 
			dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(data){
				
				download_file('https://inrate.id/tmp_doc/reports_excel_summary.xls','reports_excel_summary.xlsx');
									
			}, error: function(obj, response) {
				console.log('ajax list detail error:' + response);	
			} 
		});	
		
}


	function download_file(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_target';
        var filename = fileURL.substring(fileURL.lastIndexOf('/')+1);
        save.download = fileName || filename;
	       if ( navigator.userAgent.toLowerCase().match(/(ipad|iphone|safari)/) && navigator.userAgent.search("Chrome") < 0) {
				document.location = save.href; 
// window event not working here
			}else{
		        var evt = new MouseEvent('click', {
		            'view': window,
		            'bubbles': true,
		            'cancelable': false
		        });
		        save.dispatchEvent(evt);
		        (window.URL || window.webkitURL).revokeObjectURL(save.href);
			}	
    }

    // for IE < 11
    else if ( !! window.ActiveXObject && document.execCommand)     {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}

      function get_resume(){

        var formData = new FormData();
				formData.append('type_data',  $("#type_data").val());
        formData.append('kota', $("#kota_data").val());

				$.ajax({
					type:'POST',
					url: '<?php echo base_url('reports/get_resume');?>',
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