<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agentsupervisor extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('agentsupervisor_model');		
		//$this->load->model('Login_model');
	
	}

	public function index()
	{
		
			$session_val = $this->session->userdata['logged_in'];
			$data['session'] = $session_val;
			
			//print_r($session_val);die;

			$data['user'] = $this->agentsupervisor_model->get_user($session_val['idlokasi']);
			$data['location'] =$this->agentsupervisor_model->get_location($session_val['user_id']);

			$array_kecammatan = [];

			$ii = 0;
			foreach($data['location'] as $location){

				$kecamatan =$this->agentsupervisor_model->get_kecamatan($location);
				$array_kecammatan[$ii]['kota'] = $location['location_name'];
				$array_kecammatan[$ii]['kecamatan'] = $kecamatan;

				$ii++;
			}

			$data['kecamatan'] = $array_kecammatan;

			
			//print_r($data['kecamatan']);die;
		
			//$this->template->load('maintemplate', 'agentsupervisor/views/detail', $data);
			$this->template->load('maintemplate', 'agentsupervisor/views/home', $data);
		
	}
	
	public function add_user() {
		// $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[255]');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|max_length[100]|is_unique[u_user_group.username]', array('is_unique' => 'This %s username already exists.'));
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[100]|is_unique[u_user.email]', array('is_unique' => 'This %s email already exists.'));
		// $this->form_validation->set_rules('group_id', 'Group', 'trim|required');

		// if ($this->form_validation->run() == FALSE) {
			// $pesan = validation_errors();
			// $msg = strip_tags(str_replace("\n", '', $pesan));

			// $result = array(
				// 'success' => false,
				// 'message' => $msg
			// );

			// $this->output->set_content_type('application/json')->set_output(json_encode($result));
		// }else {
			$upload_error = NULL;
			$picture = NULL;

			//var_dump($_FILES);die;

			// if ($_FILES['picture']['name']) {
				// $this->load->library('upload');
				// $config = array(
					// 'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/profile",
					// 'upload_url' => base_url() . "uploads/profile",
					// 'encrypt_name' => TRUE,
					// 'overwrite' => FALSE,
					// 'allowed_types' => 'jpg|jpeg|png',
					// 'max_size' => '10000'
				// );

				// $this->upload->initialize($config);

				// if ($this->upload->do_upload("picture")) { // Success
					// // General result data
					// $result = $this->upload->data();

					// // Load resize library
					// $this->load->library('image_lib');

					// // Resizing parameters large
					// $resize = array
						// (
						// 'source_image' => $result['full_path'],
						// 'new_image' => $result['full_path'],
						// 'maintain_ratio' => TRUE,
						// 'width' => 300,
						// 'height' => 300
					// );

					// // Do resize
					// $this->image_lib->initialize($resize);
					// $this->image_lib->resize();
					// $this->image_lib->clear();

					// // Add our stuff
					// $picture = $result['file_name'];
				// }else {
					// $pesan = $this->upload->display_errors();
					// $upload_error = strip_tags(str_replace("\n", '', $pesan));

					// $result = array(
						// 'success' => false,
						// 'message' => $upload_error
					// );
				// }
			// }
			//die;
			//if (!isset($upload_error)) {
				$user_id = $this->session->userdata['logged_in']['user_id'];
				$idlokasi = $this->session->userdata['logged_in']['idlokasi'];
				$nama = strtolower($this->Anti_sql_injection($this->input->post('nama_lengkap_new', TRUE)));
				$tempat_new = strtolower($this->Anti_sql_injection($this->input->post('tempat_new', TRUE)));
				$tgl = strtolower($this->Anti_sql_injection($this->input->post('tgl', TRUE)));
				$username = strtolower($this->Anti_sql_injection($this->input->post('username_new', TRUE)));
				$kecamatan = $this->Anti_sql_injection($this->input->post('kecamatan_list', TRUE));
				
				//print_r($kecamatan);die;
				
				$email = strtolower($this->input->post('email_new', TRUE));
				$notelp = strtolower($this->input->post('no_tel_new', TRUE));
				$gender = strtolower($this->input->post('gender', TRUE));
				// $group_id = $this->Anti_sql_injection($this->input->post('group_id', TRUE));
				// $dinas_id = $this->Anti_sql_injection($this->input->post('dinas_id', TRUE));
				$password_generated = substr(md5(strtolower($this->Anti_sql_injection($this->input->post('password_new', TRUE)))), 0, 8);
			   // echo $this->input->post('password', TRUE);
			   // echo $password_generated; 
				$password_hash = password_hash($this->Anti_sql_injection($this->input->post('password_new', TRUE)), PASSWORD_BCRYPT);
				  // echo $password_hash; die;
				  
				 // if (password_verify($this->Anti_sql_injection($this->input->post('password', TRUE)), $password_hash)) {
					 // echo "berhasil";
				 // }else{
					 // echo "gagal";
				 // }
				 // die; 
				 
				  $u_id = $this->agentsupervisor_model->get_username($username);
				 
				if($u_id[0]['cnt_user'] == 0){
				 
				$message = "Akun anda dibawah ini sudah terdaftar, <br/>Username : " . $username . "<br/>Password : " . $password_generated;

				$last_id = $this->agentsupervisor_model->get_last_user();
				$last_id_group = $this->agentsupervisor_model->get_last_group();

				$data = array(
					'user_id' => $user_id,
					'picture' => 'user.png',
					'nama' => $nama,
					'last_id' => $last_id[0]['last_id'],
					'username' => $username,
					'email' => '',
					'notelp' => $notelp,
					'lokasi' => $idlokasi,
					'gender' => $gender,
					'tmplahir' => $tempat_new,
					'tgllahir' => $tgl,
					'password_hash' => $password_hash,
					'message' => base64_encode($message)
				);
				// $data = $this->security->xss_clean($data);

				$result = $this->agentsupervisor_model->add_user($data);
				//print_r($result);die;
				
				$data2 = array(
					'user_id' => $user_id,
					'role_id' => 111,
					'id_user' => $last_id[0]['last_id'],
					'last_id' => $last_id_group[0]['last_id'],
					'username' => $username,
					'password_hash' => $password_hash,
					'message' => base64_encode($message)
				);
				
				$result2 = $this->agentsupervisor_model->add_user_group($data2);
				
				$kecamatan_array = explode('|',$kecamatan);
				
				//print_r($kecamatan_array);die;
				
				$array_batch = [];
				$ii = 0;
				foreach($kecamatan_array as $kecamatan_arrays){
					
					$array_batch[$ii]['ID_USER'] = $last_id[0]['last_id']+1;
					$array_batch[$ii]['KECAMATAN'] = $kecamatan_arrays;
					
					$ii++;
				}
				
				$this->agentsupervisor_model->mapping_kecamatan($array_batch);
				$this->agentsupervisor_model->mapping_user($data2);
				
				
				if ($result > 0) {
					
					$location =$this->agentsupervisor_model->get_location($user_id);
					$user = $this->agentsupervisor_model->get_user($idlokasi);
					
					$html = "";
					foreach($user as $users){ 
											
						// $array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
						// $html .= "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$location[0]['location_name']."</td><td><h5 style='cursor: pointer;color:#ff0707'>View Progress</h5></td></tr>";
						
						$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
						$html .= "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$location[0]['location_name']."</td><td><h5 style='cursor: pointer;color:#ff0707'>View Progress</h5></td></tr>";
						
					}
					//$this->log_activity->insert_activity('insert', 'Insert User');
					$result = array('success' => true, 'message' => 'Berhasil menambahkan User ke database', 'html' => $html );
				} else {
					//$this->log_activity->insert_activity('insert', 'Gagal Insert User');
					$result = array('success' => false, 'message' => 'Gagal menambahkan User ke database', 'html' => $html);
				}
			}else{
				
				$location =$this->agentsupervisor_model->get_location($user_id);
					$user = $this->agentsupervisor_model->get_user($user_id);
					
					$html = "";
					foreach($user as $users){ 
											
						// $array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
						// $html .= "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$location[0]['location_name']."</td><td><h5 style='cursor: pointer;color:#ff0707'>View Progress</h5></td></tr>";
						
						$array_akses = ['<span style="color:red">Not Active</span>','<span style="color:green">Active</span>'];
										
						$html .= "<tr><td width='40%'><div class='row'><div class='col-md-1'><img style='border-radius:20%' src='".base_url().'uploads/profile/'.$users['image']."' alt='profile'/></div><div class='col-md-7' style='margin-left:30px'><h4>".$users['nama']."</4><h5>".(date_format(date_create($users['created_at']),"Y/m/d"))."</h5></div></div></td><td>Last Activity <br>".$users['last_activity']."</td><td>".$users['location_name']."</td><td><h5 style='cursor: pointer;color:#ff0707'>View Progress</h5></td></tr>";
						
					}
				
				$result = array('success' => false, 'message' => "Username " . $username . " sudah terdaftar, silahkan pilih username yang lain", 'html' => $html);
				
			}

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		//}
	}
	
	public function edit_user() {

				$user_id = $this->session->userdata['logged_in']['user_id'];
				$nama = strtolower($this->Anti_sql_injection($this->input->post('nama_lengkap', TRUE)));
				$username = strtolower($this->Anti_sql_injection($this->input->post('username', TRUE)));
				$email = strtolower($this->input->post('email', TRUE));
				$notelp = strtolower($this->input->post('no_tel', TRUE));
				$password_generated = substr(md5(strtolower($this->Anti_sql_injection($this->input->post('password', TRUE)))), 0, 8);

				$password_hash = password_hash($this->Anti_sql_injection($this->input->post('password', TRUE)), PASSWORD_BCRYPT);
				
				$message = "Akun anda dibawah ini sudah terdaftar, <br/>Username : " . $username . "<br/>Password : " . $password_generated;

				

				$data = array(
					'user_id' => $user_id,
					//'picture' => $picture,
					'nama' => $nama,
					//'last_id' => $last_id[0]['last_id'],
					'username' => $username,
					'email' => $email,
					'notelp' => $notelp,
					'password_hash' => $password_hash,
					'message' => base64_encode($message)
				);
				// $data = $this->security->xss_clean($data);

				$result = $this->agentsupervisor_model->edit_user($data);

				$data2 = array(
					'user_id' => $user_id,
					'role_id' => 100,
					//'id_user' => $last_id[0]['last_id']+1,
					//'last_id' => $last_id_group[0]['last_id'],
					'username' => $username,
					'password_hash' => $password_hash,
					'message' => base64_encode($message)
				);

				if( $this->input->post('password', TRUE) == "00000000" ){
					$result2 = $this->agentsupervisor_model->edit_group_wop($data2);
				}else{
					$result2 = $this->agentsupervisor_model->edit_group_wp($data2);
				}

				//$result = $this->agentsupervisor_model->edit_user($data);
				

				
				//$result2 = $this->agentsupervisor_model->add_user_group($data2);
				
				if ($result > 0) {
					//$this->log_activity->insert_activity('insert', 'Insert User');
					$result = array('success' => true, 'message' => 'Berhasil Merubah User ');
				} else {
					//$this->log_activity->insert_activity('insert', 'Gagal Insert User');
					$result = array('success' => false, 'message' => 'Gagal Merubah User ');
				}
			

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		//}
	}
	
	function lists() {
		
		 if( !empty($_GET['sess_user_id']) ) {
			  $sess_user_id = $_GET['sess_user_id'];
		  } else {
			  $sess_user_id = NULL;
		  }
		  
		   if( !empty($_GET['sess_token']) ) {
			  $sess_token = $_GET['sess_token'];
		  } else {
			  $sess_token = NULL;
		  }
		  
		    if( $this->input->get_post('draw') != FALSE )   {$draw   = $this->input->get_post('draw');}   else{$draw   = 1;}; 
		  if( $this->input->get_post('length') != FALSE ) {$length = $this->input->get_post('length');} else{$length = 10;}; 
		  if( $this->input->get_post('start') != FALSE )  {$start  = $this->input->get_post('start');}  else{$start  = 0;}; 				
		  $order_fields = array('user_id','user_id','ktp_name','ktp_date_of_birth','ktp_nik','ijazah_institution','ijazah_major','transkrip_gpa','t_val','t_val'); // , 'COST'
		  $order = $this->input->get_post('order');
		  if( ! empty($order[0]['dir']))    {$order_dir    = $order[0]['dir'];}    else{$order_dir    = 'asc';}; 
		  if( ! empty($order[0]['column'])) {$order_column = $order[0]['column'];} else{$order_column = 0;}; 	
		  
		    $params['limit'] 		= (int) $length;
			$params['offset'] 		= (int) $start;
			$params['order_column'] = $order_fields[$order_column];
			$params['order_dir'] 	= $order_dir;
			$params['sess_user_id'] = $sess_user_id;
			$params['sess_token'] 	= $sess_token;
			$params['searchtxt'] 	= $_GET['search']['value'];
		  
		 // print_r($params);die;
		  
			$list = $this->agentsupervisor_model->list_po($params); 
			//print_r($list['data']);die;
			  $data = array();	
				   foreach ( $list['data'] as $k => $v ) {		

						$action = '<button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
            data-original-title="Detail" onClick="detail('.$v['user_id'].')">Detail </button>';			
						
						$validation = 0;
						
						// if($v['ktp_nik_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ktp_date_of_birth_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ktp_nik_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['ijazah_institution_v'] == 'True'){
							// $validation++; 
						// }
						
						
						// if($v['transkrip_gpa_v'] == 'True'){
							// $validation++; 
						// }
						 
						if($v['t_val'] == 0){
							$bval = '<span class="badge badge-round badge-success">Semua Valid</span>';
						}elseif($v['t_val'] < 6){
							$bval = '<span class="badge badge-round badge-warning">Valid Sebagian</span>';
						}else{
							$bval = '<span class="badge badge-round badge-danger">Tidak Valid</span>';
						}
						
						  array_push($data, 
							  array(
								  number_format($v['Rangking'],0,',','.'),
								  $v['user_id'],
								  $v['ktp_name'],
								  $v['ktp_date_of_birth'],
								  $v['ktp_nik'],
								  $v['ijazah_institution'], 
								   $v['ijazah_major'], 
								  $v['transkrip_gpa'],
								 
								  
								  $bval,
								  $action
							  )
							);
							//$idx++;
				   }
		   
			 $result["data"] = $data;
		$result["recordsTotal"] = $list['total'];
		$result["recordsFiltered"] = $list['total_filtered'];
		$result["draw"] = $draw;
		//$result["data"] = $list['data'];
	  
		echo json_encode($result);
	  
				//$this->json_result($result);
		  
	}
	
	public function detail(){
		
			$data = array(
				'id' => $this->Anti_sql_injection($this->input->post('user_id', TRUE)),
			);
			$result = $this->agentsupervisor_model->get_detail($data['id']);

			//print_r($result);die;

			$data = array(
				'detail' 				=> $result[0]
			);

		$this->template->load('maintemplate', 'agentsupervisor/views/detail', $data);
		
	}

	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
}
