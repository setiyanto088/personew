<!DOCTYPE html>
<meta charset="utf-8" />
<html lang="en">
<head>
  <title>INRATE</title>
 <link rel="icon" href="https://inrate.id/wp-content/themes/jupiter/assets/images/favicon.png?ver=2.1.0" type="image/x-icon">
	<!-- Meta Data -->
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato"> 
  
  <!-- Material Icons -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/bootstrap.css">                                               
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <!-- Bootstrap Material Datetime Picker Css -->
  <link rel="stylesheet" href="<?php echo $path; ?>assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css"> 
  <link href="<?php echo $path5;?>plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/layout_useetv.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/buttons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/stats.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/ionicons.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/widget.css?v=1.0.1"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/video-thumbnail.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/panel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/data-set.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/modal.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/alert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/forms.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/table.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/gridstack.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/gridstack-extra.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/grid.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path6;?>dist/css/bootstrap-select.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/tag.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/tree-list.css">      
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/layout_useetv.css">  
  <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/style_ext.css">    

  <!-- JQuery DataTable Css -->
  <link href="<?php echo $path5;?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

  <!-- Sweet Alert -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/sweetalert2.css">
  
  <!-- JsTree -->
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>assets/vendors/jstree/themes/default/style.min.css">    
  
  
  <style>
    body {
        font-family: Lato, sans-serif;
    }
	
	.dropdown-menu {
		color: red;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
		-ms-border-radius: 0;
		border-radius: 0;
		margin-top: 0px !important;
		box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
		border: none; 
  
	}
  .dropdown-menu .divider {
    margin: 5px 0; }
  .dropdown-menu .header {
    font-size: 13px;
    font-weight: bold;
    min-width: 270px;
    border-bottom: 1px solid #eee;
    text-align: center;
    padding: 4px 0 6px 0; }
  .dropdown-menu ul.menu {
    padding-left: 0; }
    .dropdown-menu ul.menu.tasks h4 {
      color: #333;
      font-size: 13px;
      margin: 0 0 8px 0; }
      .dropdown-menu ul.menu.tasks h4 small {
        float: right;
        margin-top: 6px; }
    .dropdown-menu ul.menu.tasks .progress {
      height: 7px;
      margin-bottom: 7px; }
    .dropdown-menu ul.menu .icon-circle {
      width: 36px;
      height: 36px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%;
      color: #fff;
      text-align: center;
      display: inline-block; }
      .dropdown-menu ul.menu .icon-circle i {
        font-size: 18px;
        line-height: 36px; }
    .dropdown-menu ul.menu li {
      border-bottom: 1px solid #eee; }
      .dropdown-menu ul.menu li:last-child {
        border-bottom: none; }
		
		
      .dropdown-menu ul.menu li a {
		  
        padding: 7px 11px;
        text-decoration: none;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        -webkit-transition: 0.5s;
        transition: 0.5s; 
	 }
     .dropdown-menu ul.menu li a:hover {
			
          background-color: #e9e9e9; 
	}
    .dropdown-menu ul.menu .menu-info {
      display: inline-block;
      position: relative;
      top: 3px;
      left: 5px; }
      .dropdown-menu ul.menu .menu-info h4 {
        margin: 0;
        font-size: 13px;
        color: #333; }
      .dropdown-menu ul.menu .menu-info p {
        margin: 0;
        font-size: 11px;
        color: #aaa; }
        .dropdown-menu ul.menu .menu-info p .material-icons {
          font-size: 13px;
          color: #aaa;
          position: relative;
          top: 2px; }
  .dropdown-menu .footer a {
    text-align: center;
    border-top: 1px solid #eee;
    padding: 5px 0 5px 0;
    font-size: 12px;
    margin-bottom: -5px; }
    .dropdown-menu .footer a:hover {
      background-color: transparent; }
  .dropdown-menu > li > a {
    padding: 7px 18px;
    color: #666;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
    font-size: 14px;
    line-height: 25px; }
    .dropdown-menu > li > a:hover {
      background-color: rgba(0, 0, 0, 0.075); }
    .dropdown-menu > li > a i.material-icons {
      float: left;
      margin-right: 7px;
      margin-top: 2px;
      font-size: 20px; }

.dropdown-animated {
  -webkit-animation-duration: .3s !important;
  -moz-animation-duration: .3s !important;
  -o-animation-duration: .3s !important;
  animation-duration: .3s !important; }

.menu_link, .menu_link {
  background-color: white;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  opacity: 0.5;
  font-weight: 600;
	font-size: 14px;
	line-height: 17px;
}

.menu_link:hover, .menu_link:active {
  
  color: black;
  text-decoration: none;
  cursor: pointer;
  opacity: 1;
  font-weight: 600;
	font-size: 14px;
	line-height: 17px;
	border-bottom: solid 3px #FF0000;
}

.menu_link_select {
   padding: 10px 20px;
  text-align: center;
  color: black;
  text-decoration: none;
  cursor: pointer;
  opacity: 1;
  font-weight: 600;
	font-size: 14px;
	line-height: 17px;
	border-bottom: solid 3px #FF0000;
}
  </style>
  <!-- /.LINK -->
  
  <style>
      .urate{
          border: 2px solid #9b9b9b;
          border-radius: 18px;
      }
	  
	  .widget{
		  min-height: 80px !important;
	  }
	  
	
  </style>
  
  <!-- Javascript -->
  <script type="text/javascript" src="<?php echo $path;?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo $path;?>assets/ext/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo $path;?>assets/js/bootstrap.js"></script>    
  <script type="text/javascript" src="<?php echo $path;?>assets/ext/lodash.min.js"></script>
  <script type="text/javascript" src="<?php echo $path;?>assets/js/sidebar.js"></script>
  <script src="<?php echo $path;?>assets/js/gridstack.js"></script>
  <script src="<?php echo $path6;?>dist/js/bootstrap-select.js"></script>           
  
  <!-- Jquery DataTable Plugin Js -->
  <script src="<?php echo $path5;?>plugins/jquery-datatable/jquery.dataTables.js"></script>     
  <script src="<?php echo $path5;?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
  <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>	
  <!-- <script src="<?php echo $path5;?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> -->
  
  <!--typehead-->
  <script src="<?php echo $path7;?>bootstrap3-typeahead.js" type="text/javascript"></script>     
  
  <!-- Bootstrap Material Datetime Picker Plugin Js -->
  <script src="<?php echo $path;?>assets/ext/moment.min.js" type="text/javascript"></script>
  <script src="<?php echo $path5;?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
  
  <!-- Price Format -->
  <script src="<?php echo $path5;?>plugins/Jquery-Price-Format/jquery.priceformat.min.js" type="text/javascript"></script>
  
  <!-- Jquery Cookie -->
  <script src="<?php echo base_url();?>assets/cookie/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/sweetalert/sweetalert2.min.js" type="text/javascript"></script>
  
  <!-- Chart.js -->
  <script type="text/javascript" src="<?php echo $path;?>assets/ext/Chart.bundle.min.js"></script>
  
  <!-- JsTree -->
  <script type="text/javascript" src="<?php echo $path; ?>assets/vendors/jstree/jstree.min.js"></script>
  
  <!-- Parameter Box -->
  <script type="text/javascript" src="<?php echo $path; ?>assets/js/parameter-box.js"></script>
  
  
 
  <?php 
       $user_id = $this->session->userdata('user_id');
      $id_role = $this->session->userdata('id_role');
      $image = $this->session->userdata('image');
      $useetv = $this->session->userdata('id_profile');
      $urban = $this->session->userdata('id_profile2');
      $fta = $this->session->userdata('id_profile3');
      $ptv = $this->session->userdata('id_profile4');
	  
	  // print_r($this->session->userdata);
  ?>
  
  <script>
      // $(document).ready(function () {
        // // handle invalid token
        // $( document ).ajaxSuccess(function( event, request, settings ) {
          // //console.log(request);
          // if (typeof request.responseJSON.success != 'undefined') {
            // if (request.responseJSON.success == false && request.responseJSON.message == 'Invalid Token') {
              // swal({   
                // title: "Invalid Session",   
                // text: "This user logged in from different device or session expired.",   
                // type: "warning",   
                // showCancelButton: false,   
                // confirmButtonColor: "#DD6B55",   
                // confirmButtonText: "OK",   
                // closeOnConfirm: false 
              // }, 
              // function(){   
                // swal("Redirecting..", "Redirecting to login page.", "success"); 
                // $( "#btn_sign_out" ).trigger( "click" );
              // });
              // //sweetAlert('Invalid Token.', 'This user logged in from different device or session expired.', 'error');
            // }
          // }
        // });
        
        // cookie_prefix = '<?php echo $this->config->item('cookie_prefix');?>';
        // var user_id = '<?php echo $this->session->userdata['user_id'];?>';
        // //var nama = $.cookie(window.cookie_prefix + "user_full_name");
		// var nama = '<?php echo $this->session->userdata['username'];?>' ;
        // //console.log(nama);
        
        // $('#namanya').html(nama);
        // $("#btn_profile").on("click", function() {
          // location.replace("<?php echo base_url().'users/profile/'.$id_role;?>");
        // });
        
        // $("#btn_sign_out").on("click", function() {
          // // alert('im out');
          // // var cookies = $.cookie();
          // // for(var cookie in cookies) {		
			 // // if (cookie.substring(0,8) == cookie_prefix) {
			  // // console.log('removing cookie:');
              // // console.log(cookie);
              // // $.removeCookie(cookie, {path: '/'});
            // // }
          // // }
		  
		  
		  
		 // $.ajax({
			// url : '<?php echo base_url().'api_auth/logout/'.$user_id;?>',
			// success: function(response) {								
				// if(response.success == true){
					 // location.replace("<?php echo base_url();?>");
				// }
			// },
			// error: function(obj, response) {
				// $("#main_message").html(response);
			// }							
		 // }); 
         
        // });			
		
		
		
	  $(document).ready(function () {
		 $.ajax({
			url : '<?php echo base_url().'api_auth/check_user/'.$user_id;?>',
			success: function(response) {								
				if(response.success == true){
					$('#userloogg').html(response.data.user_login+' users');
				}else{
					$('#userloogg').html('1 users');
				}
			},
			error: function(obj, response) {
				$("#main_message").html(response);
			}							
		 }); 


		 $.ajax({
			url : '<?php echo base_url().'api_auth/check_profile/'.$user_id;?>',
			success: function(response) {								
				if(response.success == true){
					
					var hm = '';
 					var s = '';
					response.data.forEach(function(entry) {
						
						if(entry.TYPE_TV == 0){
							s = 'Free to Air';
						}else{
							s = 'Pay TV';
						}
						
						hm += "<li>"+
								" <div class='icon-circle bg-light-green'  style='color: red;'>"+
										"    <em class='fa fa-check-square-o'></em>   "+
									 "   </div>"+
									 "   <div class='menu-info'>"+
									 "       <h4> "+ entry.PROFILE_NAME +" </h4>"+
									"        <p>"+ s +" (Done on "+ entry.DATE_DONE +" <br> With Duration "+entry.NOTE+")</p>"+
									 "   </div>"+
							   " </li>"; 
					});
					
					
					$('#statusprofile').html(hm);
					$('#totalprofile').html(response.totalnotifaktif);
				}else{
					
					$('#statusprofile').html();
					$('#totalprofile').html('0');
				}
			},
			error: function(obj, response) {
				$("#main_message").html(response);
			}							
		 }); 
      });			

      var idmenu = 0;     
      
      function openNav(id) {
        $('#menu').empty();
        if(id == 2){           
          document.getElementById("mySidenav").style.width = "250px";
          $('#menu').append('<span id="menu" style="font-size:30px;cursor:pointer; margin-left: 20px; color:white;" onclick="closeNav(1)">&#9776;</span>');    
        }
      }
      
      function closeNav(id) {
        $('#menu').empty();
        if(id == 1){
          document.getElementById("mySidenav").style.width = "0";
          $('#menu').append('<span id="menu" style="font-size:30px;cursor:pointer; margin-left: 20px; margin-top: 10px; color:white;" onclick="openNav(2)">&#9776;</span>');
        }
      }
	  
	   
	
	
    function editUserSelf(id){
        $('#panel-modal').removeData('bs.modal');
        $('#panel-modal  .panel-body').html('<em class="fa fa-cog fa-spin fa-2x fa-fw"></em> Loading...');
        $('#panel-modal  .panel-body').load('<?php echo base_url('createuser/edituserself');?>'+"/"+id);
        $('#panel-modal  .panel-title').html('<em class="fa fa-user"></em> ');
        $('#panel-modal').modal({backdrop:'static',keyboard:false},'show');
    }        
    
    $(document).ready(function () {
        function chk_conectivity(){
            $.ajax({
                url : '<?php echo base_url("index.php"); ?>',
                success: function(response) {								
                    //console.log("SINI!");              
                    //$('#modalOffline').modal('toggle');
                },
                error: function(obj, response) {
                    if(!$( "#modalOffline" ).hasClass("in")){
                        //console.log("SONO!");
                        $('#modalOffline').modal('toggle');
                        $('.modal-backdrop').remove();
                    }
                }							
            }); 
        }
        
        //setInterval(chk_conectivity, 5000);
    });	
	
	
	function totalerased(){
		
		$.ajax({
			url : '<?php echo base_url().'api_auth/update_read/'.$user_id;?>',
			success: function(response) {								
				if(response.success == true){
					$('#totalprofile').html('0');
				}
			},
			error: function(obj, response) {
				
			}							
		 }); 
		
	}
	
	function regional_nas(){


		
			// var url = '<?php echo base_url(); ?>dashboardareauseetv';

		// //var tahun = $('#tahun').val();
		// var tahunss = $('#periode_head').val();
		// var bulan = "";
		// //  console.log(tahun);
		
		// //alert(tahun);
		  
		 // $("#laod").append(' <img id="loading" src="<?php echo base_url();?>assets/urate-frontend-master/assets/images/icon_loader.gif">');
		  // var form = $("<form action='" + url + "' method='post'>" +
			// "<input type='hidden' name='tahun' value='2022-February' />" +
			// "<input type='hidden' name='regional' value='"+ regional +"' />" +
			// "</form>");
		  // $('body').append(form);
		  // form.submit();
		  
		 // // header("Location: <?php echo base_url(); ?>dashboardareauseetv'");
		 window.location.replace("<?php echo base_url(); ?>dashboardareauseetv");
		// // Redirect('<?php echo base_url(); ?>dashboardareauseetv', false);

 
	    
	}

function regional(reg){
	
		var url = '<?php echo base_url(); ?>dashboardareauseetv/regional';
		//var tahun = $('#tahun').val();
		var tahun = $('#periode_head').val();
		var bulan = "";
		//  console.log(tahun);
		  
		 $("#laod").append(' <img id="loading" src="<?php echo base_url();?>assets/urate-frontend-master/assets/images/icon_loader.gif">');
		  var form = $("<form action='" + url + "' method='post'>" +
			"<input type='hidden' name='tahun' value='" + tahun + "' />" +
			"<input type='hidden' name='regional' value='" + reg + "' />" +
			"</form>");
		  $('body').append(form);
		  form.submit();
		  
		   //break;
	    
}

function regional_full(){
	
		var url = '<?php echo base_url(); ?>dashboardareauseetv/regional_full';
		//var tahun = $('#tahun').val();
		var tahun = $('#periode_head').val();
		var bulan = "";
		//  console.log(tahun);
		  
		 $("#laod").append(' <img id="loading" src="<?php echo base_url();?>assets/urate-frontend-master/assets/images/icon_loader.gif">');
		  var form = $("<form action='" + url + "' method='post'>" +
			"<input type='hidden' name='tahun' value='" + tahun + "' />" +
			"<input type='hidden' name='bulan' value='" + bulan + "' />" +
			"</form>");
		  $('body').append(form);
		  form.submit();
		  
	    
}
	
  </script>

</head>
<body>
  <!-- Header -->
	<header>
	
       	<nav class="navbar navbar-fixed-top navbar-urate" style=" height:120px; " >
          	<div class="container-fluid">
			
				<div class="row" >
				
					<div class="col-md-2" >
						<div class="row" >
							<div class="col-md-12" style="display: flex;">
							<?php if($urban <> ''){ ?>	
								<a class="navbar-brand" href="<?php echo base_url();?>tvprogramun3"> <em class="fa fa-arrow-circle-o-left fa-2x" aria-hidden="true" style="color:#000000"></em></a>
							<?php } ?>
								 <span class="" ><img style="margin-top:10px;" src="<?php echo base_url();?>img/Frame152b.png" alt=""></span>
							</div>
						</div>
					
						
						  
						
					</div>
					<div class="col-md-8" >
						<div class="row" style="margin:auto">
						  <div class="col-md-12" >
							  <div class="select-wrapper" style="width:20%;margin:auto;margin-top:20px">
								  <select class="form-control2" name="periode_head" id="periode_head" title='Please Choose Time Schedule ...' style="" onChange="filter_period('0')">
								  </select>
							  </div>
						  </div>
							<div class="col-md-12" style="   display: flex;justify-content: space-around;margin-top:20px">		
									<div style=" margin: auto;">
									<a id="filter2_nas"  onClick="regional_nas()" class="menu_link" style="font-size: 11px;" >NASIONAL</a>
									<a id="filter2_reg"  onClick="regional_full()" class="menu_link" style="font-size: 11px;" >AREA</a>
									<a id="filter2_reg1"  onClick="regional('01')" class="menu_link" style="font-size: 11px;" >AREA 01</a>
									<a id="filter2_reg2"  onClick="regional('02')" class="menu_link" style="font-size: 11px;" >AREA 02</a>
									<a id="filter2_reg3"  onClick="regional('03')" class="menu_link" style="font-size: 11px;" >AREA 03</a>
									<a id="filter2_reg4"  onClick="regional('04')" class="menu_link" style="font-size: 11px;" >AREA 04</a>0	
									</div>
							</div>
						</div>
					</div>
				<div class="col-md-2" >
					<ul class="nav navbar-nav navbar-right"  >

						<li class="dropdown" >
						  
						  <a href="javascript:void(0);" data-toggle="dropdown" role="button" style="background-color: transparent !important;">
							   <span class="ava" ><img style="width:30px; height:30px; margin-top: 0px; margin-left: -20px" src="<?php echo $path;?>assets/images/header_propic.png" alt="urate-ava"></span>
							</a>
						  <ul class="dropdown-menu" >
								<li class="header">Status</li>
								<li class="body">
									<ul class="menu">
										<li>
										  
												<div class="icon-circle bg-light-green"  style="color: red;">
													<em class="fa fa-check-square-o"></em>   
												</div>
												<div class="menu-info">
													<h4> Name </h4>
													<p>
														<?php echo $this->session->userdata['nama'];?> 
													</p>
												</div>
											
										</li>
										
										<li>
										  
												<div class="icon-circle bg-light-green"  style="color: red;">
													<em class="fa fa-check-square-o"></em>   
												</div>
												<div class="menu-info">
													<h4> Loker </h4>
													<p>
														<?php echo $this->session->userdata['nokontak3'];?> 
													</p>
												</div>
											
										</li>
										
										<li>
										  
												<div class="icon-circle bg-light-green"  style="color: red;">
													<em class="fa fa-check-square-o"></em>   
												</div>
												<div class="menu-info">
													<h4> Type User </h4>
													<p>
														<?php 
														
															if($this->session->userdata['id_unit'] == 0){
																echo "Nasional";
															}else{
																echo "Regional ".$this->session->userdata['id_unit'];
															}
														
														?> 
													</p>
												</div>
											
										</li>
									
									  <!--  <li>
											
												<div class="icon-circle bg-light-green"  style="color: red;">
													<em class="fa fa-check-square-o"></em>   
												</div>
												<div class="menu-info">
													<h4> Status Account</h4>
													<p>
														<?php if($this->session->userdata['type_role'] == 1){ echo "Paid"; }elseif($this->session->userdata['type_role'] == 2){ echo "Free Trial"; };?>
													</p>
												</div>
											
										</li>
										<li> 
										  
												<div class="icon-circle bg-cyan"  style="color: red;">
													<em class="fa fa-calendar-check-o" ></em>
												</div>
												<div class="menu-info">
													<h4>Status Activated</h4>
													<p>
														  <em class="fa fa-clock-o"></em> <?php echo $this->session->userdata['day_activation'];?> days more
													</p>
												</div>
											
										</li> -->
										<li>
										   
												<div class="icon-circle bg-cyan" style="color: red;">
													<em class="fa fa-users"></em>
												</div>
												<div class="menu-info">
													<h4>Users Logged</h4>
													<p>
														<span id="userloogg"></span> / 10 users
													</p>
												</div>
											
										</li>
										<li>
										   <a href='javascript:void(0)' onClick='editUserSelf(<?php echo $this->session->userdata['user_id'];?>)' style="width: 100%">
												<div class="icon-circle bg-cyan" style="color: red;">
													<em class="fa fa-lock"></em>
												</div>
												<div class="menu-info"  style="top: 0px; width: 77.5%;">
													<h4>Change Password</h4>
												</div>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url('login/keluar')?>">
												
											
												<div class="icon-circle bg-cyan" style="color: red;">
													<em class="ion-android-exit"></em>
												</div>
												<div class="menu-info" style="top: -1px; width: 77.5%;">
													<h4>Logout</h4>
												</div>
											</a>
										</li>
										
											
									</ul>
								</li>
								 
								<!--li>
									<center>
										<a href='javascript:void(0)' onClick='editUserSelf(<?php echo $this->session->userdata['user_id'];?>)' ><button class='btn btn-info waves-effect' >Change Password</button></a>
										<a href='javascript:void(0)' onClick='editUserSelf(<?php echo $this->session->userdata['user_id'];?>)' ><button class='btn btn-danger waves-effect' >Logout </button></a>		
									</center>
								</li-->
							</ul>
						</li>
					
						<!--li>
							<a class="nav-extra" href="<?php echo base_url('login/keluar')?>">
								<span class="ion-android-exit"></span>
							</a>
							<a class="nav-extra" href="#" data-toggle="dropdown">
								<span class="ion-chevron-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('login/keluar')?>">Logout</a></li>
							</ul>
						</li-->
					</ul>
				</div>
				</div>
          	</div>
        </nav>
   	</header>
	
<!--	<script src="<?php echo $path; ?>assets/js/forms.js"></script>
	 / Header -->
	<!-- Main Container -->
	<div class="main-container">
	    <!-- Forms (in general) -->
  
  <!-- Tables (in general) -->
		<!-- Sidebar -->
    <?php //include(APPPATH . 'views/menu.php');?>