
	<div class="site-gridmenu">
      <div>
        <div>
          <ul>
            <li>
              <a href="apps/mailbox/mailbox.html">
                <i class="icon md-email"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="apps/calendar/calendar.html">
                <i class="icon md-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="apps/contacts/contacts.html">
                <i class="icon md-account"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="apps/media/overview.html">
                <i class="icon md-videocam"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="apps/documents/categories.html">
                <i class="icon md-receipt"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="apps/projects/projects.html">
                <i class="icon md-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="apps/forum/forum.html">
                <i class="icon md-comments"></i>
                <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="index.html">
                <i class="icon md-view-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Resume</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=".javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Resume</li>
        </ol>
        <div class="page-header-actions">
        <!--  <a class="btn btn-sm btn-primary btn-round" href="http://datatables.net" target="_blank">
        <i class="icon md-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span> 
      </a>-->
        </div>
      </div>

        <div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
			<!-- Panel Basic -->
				

			  <div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
				  <div class="card-block p-20 pt-10 green-500">
					<div class="clearfix">
					  <div class="grey-800 float-left py-10">
						<span class="font-size-20">Data Masuk</span>
					  </div>
					</div>
					<div class="mb-20 grey-500  font-size-30" style="">
					<?php echo number_format($header['all_data'],0,',','.'); ?>
					</div>
				  
				  </div>
				</div>
				<!-- End Widget Linearea One -->
			  </div>
			  
					  <div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
				  <div class="card-block p-20 pt-10">
					<div class="clearfix">
					  <div class="grey-800 float-left py-10">
						<span class="font-size-20">Belum Terproses</span>
					  </div>
					</div>
					<div class="mb-20 red-500  font-size-30" style="">
					<?php echo number_format($header['not_process_data'],0,',','.'); ?>
					</div>
				  
				  </div>
				</div>
				<!-- End Widget Linearea One -->
			  </div>
			  
					  <div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
				  <div class="card-block p-20 pt-10">
					<div class="clearfix">
					  <div class="grey-800 float-left py-10">
						<span class="font-size-20">Sudah Terproses</span>
					  </div>
					</div>
					<div class="mb-20 green-500  font-size-30" style="">
					<?php echo number_format($header['process_data'],0,',','.'); ?>
					</div>
				  
				  </div>
				</div>
				<!-- End Widget Linearea One -->
			  </div>
			  
					  <div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
				  <div class="card-block p-20 pt-10">
					<div class="clearfix">
					  <div class="grey-800 float-left py-10">
						<span class="font-size-20">Tanggal</span>
					  </div>
					</div>
					<div class="mb-20 grey-500  font-size-30" style="">
					<?php echo Date('d M Y') ?>
					</div>
				  
				  </div>
				</div>
				<!-- End Widget Linearea One -->
			  </div>
			
			</div>
			
			
					 <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
          </header>
          <div class="panel-body">
		  <div class="col-xl-12 col-md-12">
		  
		  <br>
		  <h3>Jenis Dokumen KTP</h3>
            
			<div class="example-wrap">
              <div class="example table-responsive">
                <table class="table font-size-20" style="">
                  <thead>
                    <tr class="table-active">
                      <th></th>
                      <th><b>Total</b></th>
                      <th><strong>KTP</strong></th>
                      <th><strong>Date of Birth</strong></th>
                      <th><strong>NIK</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-success">
                      <td>TRUE</td>
                      <td align="right"><?php echo number_format($data['ktp_name_valid']+$data['bod_valid']+$data['nik_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['ktp_name_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['bod_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['nik_valid'],0,',','.'); ?></td>
                    </tr>
					<tr class="table-danger">
                      <td>FALSE</td>
                      <td align="right"><?php echo number_format($data['ktp_name_npt_valid']+$data['bod_npt_valid']+$data['nik_npt_valid'],0,',','.'); ?></td>
                     <td align="right"><?php echo number_format($data['ktp_name_npt_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['bod_npt_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['nik_npt_valid'],0,',','.'); ?></td>
                    </tr> 
                    <tr class="table-info">
                      <td>PRECISION</td>
                     <td align="right"><?php echo number_format((($data['ktp_name_valid']+$data['bod_valid']+$data['nik_valid']) / ( ($data['ktp_name_valid']+$data['bod_valid']+$data['nik_valid']) + ($data['ktp_name_npt_valid']+$data['bod_npt_valid']+$data['nik_npt_valid']) ))*100,1,',','.') ; ?> %</td>
                      <td align="right"><?php echo number_format(($data['ktp_name_valid'] / ($data['ktp_name_valid']+$data['ktp_name_npt_valid']))*100,1,',','.'); ?> %</td>
                      <td align="right"><?php echo number_format(($data['bod_valid'] / ($data['bod_valid']+$data['bod_npt_valid']))*100,1,',','.'); ?> %</td>
                      <td align="right"><?php echo number_format(($data['nik_valid'] / ($data['nik_valid']+$data['nik_npt_valid']))*100,1,',','.'); ?> %</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
			
			
			</div>
			
					  <div class="col-xl-12 col-md-12">
		  
		  <h3>Jenis Dokumen Ijazah</h3>
            
			<div class="example-wrap">
              <div class="example table-responsive">
                <table class="table font-size-20">
                  <thead>
                    <tr class="table-active">
                      <th></th>
                      <th><b>Total</b></th>
                      <th><strong>Institusi</strong></th>
                      <th><strong>Fakultas</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-success">
                      <td>TRUE</td>
                      <td align="right"><?php echo number_format($data['ijasah_valid']+$data['vac_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['ijasah_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['vac_valid'],0,',','.'); ?></td>
                    </tr>
					<tr class="table-danger">
                      <td>FALSE</td>
                      <td align="right"><?php echo number_format($data['ijasah_npt_valid']+$data['vac_npt_valid'],0,',','.'); ?></td>
                     <td align="right"><?php echo number_format($data['ijasah_npt_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['vac_npt_valid'],0,',','.'); ?></td>
                    </tr> 
                    <tr class="table-info">
                      <td>PRECISION</td>
                     <td align="right"><?php echo number_format((($data['ijasah_valid']+$data['vac_valid']) / ( ($data['ijasah_valid']+$data['vac_valid']) + ($data['ijasah_npt_valid']+$data['vac_npt_valid']) ))*100,1,',','.') ; ?> %</td>
                      <td align="right"><?php echo number_format(($data['ijasah_valid'] / ($data['ijasah_valid']+$data['ijasah_npt_valid']))*100,1,',','.'); ?> %</td>
                      <td align="right"><?php echo number_format(($data['vac_valid'] / ($data['vac_valid']+$data['vac_npt_valid']))*100,1,',','.'); ?> %</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
			
			
			</div>
			
			
					  <div class="col-xl-12 col-md-12">
		  
		  <h3>Jenis Dokumen Transkrip</h3>
            
			<div class="example-wrap">
              <div class="example table-responsive">
                <table class="table font-size-20">
                  <thead>
                    <tr class="table-active">
                      <th></th>
                      <th><b>Total</b></th>
                      <th><strong>Jurusan</strong></th>
                      <th><strong>IPK</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-success">
                      <td>TRUE</td>
                      <td align="right"><?php echo number_format($data['major_valid']+$data['gpa_valid'],0,',','.'); ?></td>
					  <td align="right"><?php echo number_format($data['gpa_valid'],0,',','.'); ?></td>
                      <td align="right"><?php echo number_format($data['major_valid'],0,',','.'); ?></td>
                      
                    </tr>
					<tr class="table-danger">
                      <td>FALSE</td>
                      <td align="right"><?php echo number_format($data['major_npt_valid']+$data['gpa_npt_valid'],0,',','.'); ?></td>
					  <td align="right"><?php echo number_format($data['gpa_npt_valid'],0,',','.'); ?></td>
                     <td align="right"><?php echo number_format($data['major_npt_valid'],0,',','.'); ?></td>
                      
                    </tr> 
                    <tr class="table-info">
                      <td>PRECISION</td>
                     <td align="right"><?php echo number_format((($data['major_valid']+$data['gpa_valid']) / ( ($data['major_valid']+$data['gpa_valid']) + ($data['major_npt_valid']+$data['gpa_npt_valid']) ))*100,1,',','.') ; ?> %</td>
					  <td align="right"><?php echo number_format(($data['gpa_valid'] / ($data['gpa_valid']+$data['gpa_npt_valid']))*100,1,',','.'); ?> %</td>
                      <td align="right"><?php echo number_format(($data['major_valid'] / ($data['major_valid']+$data['major_npt_valid']))*100,1,',','.'); ?> %</td>
                     
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
			
			
			</div>
			
          </div>
        </div>
			
			
		</div>



		

      </div>
    </div>
    <!-- End Page -->
<script>

	function detail(user_id){ 
		 var url = '<?php echo base_url(); ?>not_process/detail';
		//alert(user_id);
		    var form = $("<form action='" + url + "' method='post'>" +
			  "<input type='hidden' name='user_id' value='" + user_id + "' />" +
			  "</form>");
			$('body').append(form);
			form.submit();
	}

  function listdist() {
    var user_id = '0001';
    var token = '093940349';


    $('#table').DataTable({
      //"dom": 'rtip',
      "bFilter": false,
      "aaSorting": [], 
      "bLengthChange": true,
      'iDisplayLength': 10,
      "sPaginationType": "simple_numbers",
      "Info": false,
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "ajax": "<?php echo base_url() . 'not_process/lists' ?>" + "/?sess_user_id=" + user_id + "&sess_token=" + token,
      "searching": true,
      "language": {
        "decimal": ",",
        "thousands": "."
      },
      "dom": 'l<"toolbar">frtip',
      "initComplete": function() {
        //$("div.toolbar").prepend('<div class="btn-group pull-left"><a href="<?php echo base_url() . 'h/add'; ?>" type="button" class="btn btn-custon-rounded-two btn-primary" > Tambah </a></div>');
      }
    });
  }

  $(document).ready(function() {
	  
	  
	
  });

</script>