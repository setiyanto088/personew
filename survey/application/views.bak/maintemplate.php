<?php
    $image  = base_url() . 'assets/images/';
    $api    = base_url() . 'api/';
 
    $path = base_url() . 'assets/adminto-14/adminto-14/Admin/Light/';
	$username 		= ucwords($this->session->userdata['logged_in']['username']);
	$urole  		= ucwords($this->session->userdata['logged_in']['name_role']);
	$profilepict 	= $this->session->userdata['logged_in']['profile_picture'];

?>

<!DOCTYPE html>
<html>
   
<?php include(APPPATH . 'views/header.php'); ?>	

			 <?php  include($template_contents.'.php');  ?>

                <footer class="footer text-right">
                    2016 © Adminto.
                </footer>

            </div>
			<?php include(APPPATH . 'views/footer.php');?>
    </body>
</html>