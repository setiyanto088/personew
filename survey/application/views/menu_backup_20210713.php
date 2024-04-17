<?php

class Menu_tree {

	private $menu_data;

	function __construct() {
        $this->ci = & get_instance();
        $id_role    =  $this->ci->session->userdata['logged_in']['id_role'];
		// $url  = base_url('menu_view/get_menu')."/".$id_role;
         // $ch   = curl_init(); 
        
		//print_r($id_role);die;
		
        // curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        // curl_setopt($ch, CURLOPT_URL, $url); 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // $output  = curl_exec($ch);
        // curl_close($ch); 
		
		$url = $this->getMenu($id_role);
		
        $this->menu_data = json_decode($url, TRUE);
	}
	
		function getMenu($role_id) {
		$uid = '86 	'; $rid = '25';

			$sql 	=	'SELECT
						b.id,
						b.url,
						b.label,
						b.parent_id,
						b.icon,
						b.sequence
					FROM
						u_menu_group a, 
						u_menu b 
					WHERE
						a.status = 1 
						AND b.status = 1 	
						AND a.menu_id = b.id 
						AND a.group_id = ?
					ORDER BY 
						b.parent_id, 
						b.sequence,
						b.label;';
							
			
							
			$query 	=	$this->ci->db->query($sql, array($role_id));
			$result =	$query->result_array();
			// echo "<script>alert(rian);</script>";
			
			// print_r($sql);die;
			
		 
		// $result =	$query->result_array();
		
		// if ( ! empty($result) ) {
			$menu = array(
				'items' => array(),
				'parents' => array()
			);
			
			// Builds the array lists with data from the menu table
			
			foreach ($result as $items)
				{
				// Creates entry into items array with current menu item id ie. $menu['items'][1]
				$menu['items'][$items['id']] = $items;
				// Creates entry into parents array. Parents array contains a list of all items with children
				$menu['parents'][$items['parent_id']][] = $items['id'];
				}
			//echo 'menu: ';		var_dump($menu);
            
            $result["data"] = $menu;
			return json_encode($result,JSON_FORCE_OBJECT);
			//return $menu;
			
			
		// } else  {
		// return null;
		// }	
			
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
				  
				  <li class="nav-item">
					<a class="nav-link" href="'.base_url().$menu['items'][$itemId]['url'].'">
					  <i class="'.$menu['items'][$itemId]['icon'].' menu-icon"></i>
					  <span class="menu-title">'.$menu['items'][$itemId]['label'].'</span>
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
				      
							
							 <li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							  <i class="'.$menu['items'][$itemId]['icon'].' menu-icon"></i>
							  <span class="menu-title">'.$menu['items'][$itemId]['label'].'</span>
							  <i class="menu-arrow"></i>
							</a>
							<div class="collapse" id="ui-basic">
							  <ul class="nav flex-column sub-menu">
							
				 ';

				$html .= $this->_build_menu($itemId, $menu);

				$html .= '</ul></div></li>';
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
	
	
	// $( document ).ready(function() {
		// var nn = localStorage.getItem("namamenu");
		// if(!nn){
			// $('#namamenu').html("Dashboard");		
		// }else{
			// $('#namamenu').html(nn);
		// }
	// });
	
</script>

	 <nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
<!--
	  
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav> -->

  <?php
									$menu_tree = new Menu_tree();
									echo $menu_tree->generate_html();
							?>

	   </ul>
      </nav>
<!--	
    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">Menu</li>
            
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
            </div>   
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
	</div>   -->
						
                 <!--- Sidemenu 
                    <div id="sidebar-menu">
                        <ul>
						
                        </ul>
                        <div class="clearfix"></div>
                    </div>-->
