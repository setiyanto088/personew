<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller {

	private $profile_menu = array();

	public function __construct() {
		parent::__construct();
		$this->load->model('menu/menu_model');
		$this->load->model('users/users_model');
	}

	/**
 	 * anti sql injection
 	 */
	public function Anti_sql_injection($string)
	{
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}

	function _build_menu($parent, $menu, $role_id)
	{
		// print_r($menu);die;
	   $html = "";
	   if (isset($menu['parents'][$parent]))
	   {
		  $html .= '<ul style="list-style:none">';
		   foreach ($menu['parents'][$parent] as $itemId)
		   {
			  if( ! isset($menu['parents'][$itemId]))
			  {
				 if ( $this->is_menu_in_profile($menu['items'][$itemId]['id'], $this->profile_menu) )
					$checked = 'checked';
				 else
					$checked = '';
				 //$html .= "<li>\n  <a href='".$menu['items'][$itemId]['link']."'>".$menu['items'][$itemId]['label']."</a>\n</li> \n";
				 $html .=
				 '<li>
					<div class="checkbox icheck">
						<label>
							<input class="flat" name="menu_id[]" type="checkbox" value="'.$menu['items'][$itemId]['id'].'" '.$checked.'> ' .$menu['items'][$itemId]['label']
						.'</label>
					</div>
                  </li>';
			  }
			  if( isset($menu['parents'][$itemId]) )
			  {
				 if ( $this->is_menu_in_profile($menu['items'][$itemId]['id'], $this->profile_menu) )
					$checked = 'checked';
				 else
					$checked = '';

					 $html .=
					 '<li>
						<div class="checkbox icheck">
							<label>
								<input class="flat" name="menu_id[]" type="checkbox" value="'.$menu['items'][$itemId]['id'].'" '.$checked.'> ' .$menu['items'][$itemId]['label'].
							'</label>
						</div>';

					 $html .= $this->_build_menu($itemId, $menu, $role_id);

					 $html .= '</li>';
			  }
		   }
		   $html .= '</ul>';
	   }
	   return $html;
	}

	public function tambah()
	{

        $result = $this->menu_model->get_all_menu();

        $data = array (
			'menu_all'	=> $result['data']['items']
		);

		$this->template->load('maintemplate', 'menu/views/create', $data);
    }

	public function create()
	{
		// print_r($_POST);die;
		$this->form_validation->set_rules('nama_menu','Nama Menu','trim|required');
		$this->form_validation->set_rules('url_menu','Url Menu','trim|required');
		$this->form_validation->set_rules('icon_menu','Icon Menu','trim|required');
		$this->form_validation->set_rules('sequence_menu','Sequence','trim|required|integer');

		if ($this->form_validation->run() == FALSE)  {

			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$this->session->set_flashdata('msg', array(
				'status' 				=> 'error',
				'message' 				=> $msg));
			redirect(base_url('menu/tambah'));

		} else {

			$icheck			= $this->Anti_sql_injection($this->input->post('iCheck',TRUE));
			$primary_menu	= $this->Anti_sql_injection($this->input->post('primary_menu',TRUE));
			$nama_menu		= ucwords($this->Anti_sql_injection($this->input->post('nama_menu',TRUE)));
			$url_menu		= strtolower($this->Anti_sql_injection($this->input->post('url_menu',TRUE)));
			$icon_menu		= strtolower($this->Anti_sql_injection($this->input->post('icon_menu',TRUE)));
			$squence		= $this->Anti_sql_injection($this->input->post('sequence_menu',TRUE));

			$isprimary = NULL;
			if($icheck == 1){
				$isprimary = $primary_menu;
			} else {
				$isprimary = 0;
			}

			$data = array (
                'primary_menu'	=> $isprimary,
				'nama_menu'		=> $nama_menu,
				'url_menu'		=> $url_menu,
				'icon_menu'		=> $icon_menu,
				'sequence_menu'	=> $squence
			);

			$data = $this->security->xss_clean($data);

			$result = $this->menu_model->create_menu($data);

			if($result > 0){
				$msg	= 'Berhasil menambahkan menu.';

				$this->session->set_flashdata('msg', array(
					'status' 				=> 'success',
					'message' 				=> $msg));
				redirect(base_url('menu/aktivasi'));
			} else {
				$msg	= 'Gagal menambahkan menu ke database.';

				$this->session->set_flashdata('msg', array(
					'status' 				=> 'error',
					'message' 				=> $msg));
				redirect(base_url('menu/tambah'));
			}


            $this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
    }

	function index() {

		$message = '';
		$menu_html = '';

		$role_id = $this->session->userdata['logged_in']['id_role']; // init role
		$roles = $this->users_model->group();

		$data['roles'] = $roles;

		if ( $this->input->post('btn_select_role') != FALSE ) {
			$role_id = $this->input->post('role_id'); // role from select box
		}

		if ( $this->input->post('btn_submit') != FALSE) {
			$api_data['role_id'] = $this->input->post('role_id');
			$api_data['menu_id'] = $this->input->post('menu_id');
			$save_res = $this->menu_model->save_menu($api_data);
			$data['success'] = $save_res['success'];
			$data['pesan'] = $save_res['message'];

			$role_id = $this->input->post('role_id'); // role from select box
		}

		$all_menu = $this->menu_model->get_all_menu();
		$profile_menu = $this->menu_model->get_profile_menu($role_id);
		// print_r($all_menu);exit();
		$this->profile_menu = $profile_menu['data'];

		$menu_html = $this->_build_menu(0, $all_menu['data'], $role_id);

		$data['role_id'] = $role_id;
		$data['menu_html'] = $menu_html;
		// print_r($data);exit();

		$this->template->load('maintemplate', 'menu/views/aktivasi', $data);
	}
	function aktivasi() {

		$message = '';
		$menu_html = '';

		$role_id = $this->session->userdata['logged_in']['id_role'];; // init role
		$roles = $this->users_model->group();

		$data['roles'] = $roles;

		if ( $this->input->post('btn_select_role') != FALSE ) {
			$role_id = $this->input->post('role_id'); // role from select box
		}

		if ( $this->input->post('btn_submit') != FALSE) {
			$api_data['role_id'] = $this->input->post('role_id');
			$api_data['menu_id'] = $this->input->post('menu_id');
			$save_res = $this->menu_model->save_menu($api_data);
			$data['success'] = $save_res['success'];
			$data['pesan'] = $save_res['message'];

			$role_id = $this->input->post('role_id'); // role from select box
		}

		$all_menu = $this->menu_model->get_all_menu();
		$profile_menu = $this->menu_model->get_profile_menu($role_id);
		// print_r($all_menu);exit();
		$this->profile_menu = $profile_menu['data'];

		$menu_html = $this->_build_menu(0, $all_menu['data'], $role_id);

		$data['role_id'] = $role_id;
		$data['menu_html'] = $menu_html;
		// print_r($data);exit();

		$this->template->load('maintemplate', 'menu/views/aktivasi', $data);
	}

	function is_menu_in_profile($menu_id, $profile_menu) {
		//var_dump($profile_menu);
		foreach ($profile_menu['items'] as $item) {
			if ($menu_id == $item['id']) {
				return true;
			}
		}
		return false;
	}
}
