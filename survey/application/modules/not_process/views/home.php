
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
        <h1 class="page-title">Data Belum Terproses</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=".javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
        <div class="page-header-actions">
        <!--  <a class="btn btn-sm btn-primary btn-round" href="http://datatables.net" target="_blank">
        <i class="icon md-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span> 
      </a>-->
        </div>
      </div>

      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
          </header>
          <div class="panel-body">
		  <br><br>
            <table class="table table-hover dataTable table-striped w-full" id="table" >
              <thead>
                <tr>
                  <th>No.</th>
                  <th>User Id</th>
                  <th>Nama</th>
                  <th>Tanggal lahir</th>
                  <th>NIK</th>
                  <th>Universitas</th>
                  <th>Jurusan</th>
                  <th>GPA</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>User Id</th>
                  <th>Nama</th>
                  <th>Tanggal lahir</th>
                  <th>NIK</th>
                  <th>Universitas</th>
				   <th>Jurusan</th>
                  <th>GPA</th>
				  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic -->

        <!-- Panel Table Individual column searching -->
           <!-- End Panel Table Individual column searching -->

        <!-- Panel Table Tools -->
          <!-- End Panel Table Tools -->

        <!-- Panel Table Add Row -->
         <!-- End Panel Table Add Row -->

        <!-- Panel FixedHeader -->
        <!-- End Panel FixedHeader -->

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
	  
    listdist();
  });

</script>