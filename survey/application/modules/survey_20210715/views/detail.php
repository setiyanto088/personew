
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
        <a class="btn btn-sm btn-primary btn-round" href="<?php echo base_url(); ?>home" >
        <i class="icon md-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Back</span> 
      </a>
        </div>
      </div>

      <div class="page-content container-fluid">
        <div class="row">
		
		  <div class="col-lg-6">
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
                    <label class="col-md-3 form-control-label">Nama KTP</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['ktp_name']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ktp_date_of_birth']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ktp_nik']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Institusi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ijazah_institution']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>
		
          <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Nama KTP</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nama KTP</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['ktp_name']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nama KTP Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ktp_name_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nama KTP Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ktp_name_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nama KTP Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ktp_name_v']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>

          <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Tanggal Lahir KTP</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir KTP</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['ktp_date_of_birth']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ktp_date_of_birth_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ktp_date_of_birth_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Tanggal Lahir Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ktp_date_of_birth_v']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>

		
		  <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Nik KTP</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik KTP</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1" value="<?php echo $detail['ktp_nik']; ?>"  readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ktp_nik_r']; ?>"  readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ktp_nik_s']; ?>" readOnly="readOnly"  />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Nik Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ktp_nik_v']; ?>" readOnly="readOnly"  />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>
		
          <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Ijazah</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1"  value="<?php echo $detail['ijazah_institution']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ijazah_institution_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ijazah_institution_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ijazah_institution_v']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>
		  		  
		  <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Fakultas</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Fakultas</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1"  value="<?php echo $detail['ijazah_faculty']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Fakultas Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ijazah_faculty_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Fakultas Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ijazah_faculty_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Fakultas Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ijazah_institution_v']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>
		  
		  <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Jurusan</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Jurusan</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1"  value="<?php echo $detail['ijazah_major']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['ijazah_major_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['ijazah_major_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Ijazah Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['ijazah_major_v']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>

		  <div class="col-lg-6">
            <!-- Panel Basic -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">IPK</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">IPK</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate1"  value="<?php echo $detail['transkrip_gpa']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Jurusan Read</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputDate2" value="<?php echo $detail['transkrip_gpa_r']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Jurusan Stat</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTime" value="<?php echo $detail['transkrip_gpa_s']; ?>" readOnly="readOnly" />
                    </div>
                  </div>
                  <div class="form-group form-material row">
                    <label class="col-md-3 form-control-label">Jurusan Validasi</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="inputTimeDate" value="<?php echo $detail['transkrip_gpa_v']; ?>" readOnly="readOnly" />
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
		 var url = '<?php echo base_url(); ?>home/detail';
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
      "ajax": "<?php echo base_url() . 'home/lists' ?>" + "/?sess_user_id=" + user_id + "&sess_token=" + token,
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