<?php

class Menu_tree {

	private $menu_data;

	function __construct() {
        $this->ci = & get_instance();
        $id_role    =  $this->ci->session->userdata['logged_in']['id_role'];
       $url  = base_url('menu_view/get_menu')."/".$id_role;
         $ch   = curl_init(); 
        
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output  = curl_exec($ch);
        curl_close($ch); 
        $this->menu_data = json_decode($output, TRUE);
	}

	function generate_html() {
       
		return $this->_build_menu(0, $this->menu_data['data']);
	}

	private function _build_menu($parent, $menu)
	{
	   $html = '';
	   if (isset($menu['parents'][$parent]))
	   {

		  foreach ($menu['parents'][$parent] as $itemId)
		  {
			 if( ! isset($menu['parents'][$itemId]))
			 {
				$html .=
				'<li><a href="javascript:void(0);" class="waves-effect" onClick="openMenu(&#34;'.base_url().$menu['items'][$itemId]['url'].'&#34;,&#34;'.$menu['items'][$itemId]['label'].'&#34;);"><i class="'.$menu['items'][$itemId]['icon'].'"></i> <span> '.$menu['items'][$itemId]['label'].' </span> </a></li>';
				// '<li><a href="'.base_url().$menu['items'][$itemId]['url'].'" class="waves-effect" ><i class="'.$menu['items'][$itemId]['icon'].'"></i> <span> '.$menu['items'][$itemId]['label'].' </span> </a></li>';
			 }
			 if( isset($menu['parents'][$itemId]) )
			 {

				$html .=
				'<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="'.$menu['items'][$itemId]['icon'].'"></i> <span> '.$menu['items'][$itemId]['label'].' </span> <span class="menu-arrow"></span></a>
                  <ul class="list-unstyled" style="margin-left: -40px">';

				$html .= $this->_build_menu($itemId, $menu);

				$html .= '</ul></li>';
			 }
		  }
	   }
	   return $html;
	}
}
?>
<script>
	function openMenu(link, valname){
		localStorage.setItem("namamenu", valname);
        window.location.href = link;
	}
	
	
	$( document ).ready(function() {
		var nn = localStorage.getItem("namamenu");
		if(!nn){
			$('#namamenu').html("Dashboard");		
		}else{
			$('#namamenu').html(nn);
		}
	});
	
</script>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo $path;?>assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <!--div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div-->
                        </div>
                        <h5><?php echo $username;?> </h5>
                        <h6 style="font-size: 12px; margin-top: -10px; color: blue"><?php echo $urole;?></h6>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
							<li class="text-muted menu-title">Menu</li>
							<?php
								$menu_tree = new Menu_tree();
								echo $menu_tree->generate_html();
							?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

