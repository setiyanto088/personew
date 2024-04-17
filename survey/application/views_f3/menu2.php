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
//class="active"
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
				//'<li><a href="javascript:void(0);" onClick="openMenu(&#34;'.base_url().$menu['items'][$itemId]['url'].'&#34;,&#34;'.$menu['items'][$itemId]['label'].'&#34;);"><i class="'.base_url().'/img/'.$menu['items'][$itemId]['icon'].'"></i> <span> '.$menu['items'][$itemId]['label'].' </span> </a></li>';
				//'<li><a title="'.base_url().$menu['items'][$itemId]['label'].'" href="javascript:void(0);" onClick="openMenu(&#34;'.base_url().$menu['items'][$itemId]['url'].'&#34;,&#34;'.$menu['items'][$itemId]['label'].'&#34;);"><span class="mini-sub-pro">'.$menu['items'][$itemId]['label'].'</span></a></li>';
				'
				 <li class="site-menu-item">
                    <a class="animsition-link" href="'.base_url().$menu['items'][$itemId]['url'].'">
                      <span class="site-menu-title">'.$menu['items'][$itemId]['label'].'</span>
                    </a>
                  </li>
				';
			}
			 if( isset($menu['parents'][$itemId]) )
			 {

				// $html .=
				// '<li class="has_sub">
					// <a href="javascript:void(0);" class="waves-effect"><i class="'.base_url().'/img/'.$menu['items'][$itemId]['icon'].'"></i> <span> '.$menu['items'][$itemId]['label'].' </span> <span class="menu-arrow"></span></a>
                  // <ul class="list-unstyled" >';
				  
				 $html .=
				 '
				        <li class="site-menu-item has-sub">
							<a href="javascript:void(0)">
								<i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
								<span class="site-menu-title">'.$menu['items'][$itemId]['label'].'</span>
								<span class="site-menu-arrow"></span>
							</a>
							<ul class="site-menu-sub">
				 ';

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

							
							
    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">Menu</li>
              <?php
									$menu_tree = new Menu_tree();
									echo $menu_tree->generate_html();
							?>
            </ul>
            <!--<div class="site-menubar-section">
              <h5>
                Milestone
                <span class="float-right">30%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
              </div>
              <h5>
                Release
                <span class="float-right">60%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
              </div>
            </div> -->    
			</div>
        </div>
      </div>
    
      <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Settings">
          <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
          <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon md-power" aria-hidden="true"></span>
        </a>
      </div>
	</div>   
						
                 <!--- Sidemenu 
                    <div id="sidebar-menu">
                        <ul>
						
                        </ul>
                        <div class="clearfix"></div>
                    </div>-->
