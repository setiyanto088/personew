
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.ico">

	<title>Inventory</title>

	<!--Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo $path;?>assets/plugins/morris/morris.css">

	<!-- App css -->
	<link href="<?php echo $path;?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/core.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/components.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/pages.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/menu.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!-- DataTables -->
	<link href="<?php echo $path;?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $path;?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Sweet Alert 2 -->
	<link href="<?php echo base_url();?>assets/sweetalert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo $path;?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $path;?>assets/js/bootstrap.min.js"></script>
    
	<!-- Sweet Alert 2 -->
	<script src="<?php echo base_url();?>assets/sweetalert/sweetalert2.min.js"></script>
	<script src="<?php echo base_url();?>assets/interact.min.js"></script>
      
	<script src="<?php echo $path;?>assets/js/modernizr.min.js"></script>
	<style>
	.tengah {
		display: block;
		margin-left: 100%;
		width: 100%;
		
	}
	
	.mm{
		width:auto; 
		height: 60px
	}
		
	@media only screen and (max-width: 768px) {
		.topbar .topbar-left{
			background: #4a8cf7;
		}
		
		
		.mm{
			width:70px; 
			height: auto;
			margin-left: 10px
		}
	}
	</style>
</head>

<body class="smallscreen fixed-left-void">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

               
				<!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?php echo base_url();?>" class="logo">
						<h3>Inventory</h3>
					</a>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation" style="background: #4a8cf7;">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title" style="color: white" id="namamenu"></h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none" style="color: white;"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li> 
							<li style="margin-left: 20px">
                                <!-- Notification -->
                                <div >
                                    <ul class="list-inline m-b-0">
                                        <li style="margin-top: 15%">
										
										<a  href="<?php echo base_url('logout')?>" class="btn btn-custom btn-rounded waves-effect waves-light w-md m-b-5">Logout</a>
                                          
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
				
            </div>
            <!-- Top Bar End -->
			
			<?php include(APPPATH . 'views/menu.php');?>