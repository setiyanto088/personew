
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
        <h1 class="page-title">Detail</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=".javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
        <div class="page-header-actions">
        <a class="btn btn-sm btn-primary btn-round" href="<?php echo base_url(); ?>not_process/" >
        <i class="icon md-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Back</span> 
      </a>
        </div>
      </div>

      <div class="page-content container-fluid">
        <div class="row">
		
		  <div class="col-lg-12">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Detail</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
				   <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">User Id</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['user_id']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['nama']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['tanggal_lahir']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['nik']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Universitas</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['universitas']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
				  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Fakultas</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['fakultas']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
				  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Jurusan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['jurusan']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
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
	 // alert('aaaaa');
	  
    //listdist();
  });

</script>