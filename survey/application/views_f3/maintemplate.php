<?php
    $image = base_url() . 'assets/images/';
    $api   = base_url() . 'api/';
    $path = base_url() . 'assets/material/base/';
    $path2 = base_url() . 'assets/material/';
	$path3 = base_url() . 'assets/kiaalap/';
	 $path_dash = base_url() . 'assets/skydash/template/';
	 $path_tab = base_url() . 'assets/table/src/';
	
	
	$username 		= ucwords($this->session->userdata['logged_in']['username']);
	$urole  		= ucwords($this->session->userdata['logged_in']['name_role']);
	$profilepict 	= $this->session->userdata['logged_in']['profile_picture'];

?>

<!DOCTYPE html>
<html>
   
<?php include(APPPATH . 'views/header.php'); ?>	
<?php include(APPPATH . 'views/menu.php'); ?>	
			<?php  include($template_contents.'.php');  ?>

			<?php include(APPPATH . 'views/footer.php');?>
    </body>
</html>