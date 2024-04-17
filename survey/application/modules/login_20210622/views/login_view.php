
<?php
    $image = base_url() . 'assets/images/';
    $api   = base_url() . 'api/';
    $path = base_url() . 'assets/material/base/';
    $path2 = base_url() . 'assets/material/';
    $path_dash = base_url() . 'assets/skydash/template/';
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Survey Online</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $path_dash; ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo $path_dash; ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo $path_dash; ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $path_dash; ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo $path_dash; ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
			  <div class="brand-logo" style="margin:auto;text-align:center;width:100%">
                <img src="<?php echo base_url(); ?>assets/survey/bg1.png" alt="logo" style="width:50%">
              </div>
			  
			  <div class="brand-logo" style="margin:auto;text-align:center;width:100%">
                <img src="<?php echo base_url(); ?>assets/survey/logo2.png" alt="logo" style="width:40%">
              </div> 
			  <br><br>
              <h4>Sign In</h4>
              <h6 class="font-weight-light"></h6>
              <form class="pt-3" id="losloginform">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
				
				 <h5 class="font-weight-light" id="loginalert" style="margin:auto;color:red;"></h5>
				
                <div class="mt-3">
					<input type="submit" class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" id="submit" placeholder="Password">
                 <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</a> -->
                </div>
				
				
              <!--  <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> 
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>-->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo $path_dash; ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo $path_dash; ?>js/off-canvas.js"></script>
  <script src="<?php echo $path_dash; ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo $path_dash; ?>js/template.js"></script>
  <script src="<?php echo $path_dash; ?>js/settings.js"></script>
  <script src="<?php echo $path_dash; ?>js/todolist.js"></script>
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
	
	  <script>
      $(document).ready(function () {
        $("#loader").hide();

        $('#username,#password').keypress(function(e) {
          if(e.which == 13) {
              $('#losloginform').trigger('submit');
          }
        });
        
        //$("#login").on("click", function () {
        $("#losloginform").on("submit", function (e) {
			e.preventDefault();
        
          $("#loader").show();
          var vusername   = $('#username').val();
          var vpassword   = $('#password').val();

          var datapost={
            "appkey"    :   123456,
            "username"  :   vusername,
            "password"  :   vpassword
          };

          $.ajax({
            type: "POST",
            url: "api/login/auth",
            data : JSON.stringify(datapost),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
              if (response.status == "success") {
				 // console.log(response.data);
				  
				 // alert(response.data.id_role);
				  
				 // alert('successs');
					if(response.data.id_role == "99"){
						window.location.href = "<?php echo base_url('home');?>";  
					}else if(response.data.id_role == "137"){
						window.location.href = "<?php echo base_url('dashboard');?>";  
					}else if(response.data.id_role == "105"){
						window.location.href = "<?php echo base_url('dashboard_kordinator');?>";  
					}else if(response.data.id_role == "100" || response.data.id_role == "125" || response.data.id_role == "111"){
					 
						window.location.href = "<?php echo base_url('homeagent');?>";
					}else if(response.data.id_role == "126" || response.data.id_role == "127"  ){
					 
						window.location.href = "<?php echo base_url('homesurveyor');?>";
					}else{
					  
						window.location.href = "<?php echo base_url('home');?>";
					}
              } else{
            //alert("Failed!", response.message, "error");
                $("#loginalert").html(response.message);
              }
            }
          });
        });

      });
    </script>
   
  </body>
</html>
