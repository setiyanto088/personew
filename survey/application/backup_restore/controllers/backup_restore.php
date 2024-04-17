<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class controller untuk Users
 *
 * @author 		Rizal Haibar
 * @email		rizalhaibar.rh@gmail.com
 * @copyright	2017
 *
 */
class Backup_restore extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('backup_restore/backup_restore_model');
		$this->load->library('log_activity');
	}

	/**
	 * anti sql injection
	 */
	public function Anti_sql_injection($string) {
		$string = strip_tags(trim(addslashes(htmlspecialchars(stripslashes($string)))));
		return $string;
	}
	
	public function restore_data(){
		
		$sas = $this->session->userdata['logged_in']['user_id'];
		
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);

		
		$ids = $sas;
		
		$tz = 'Asia/Jakarta';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$date_now =  $dt->format('Y_d_m_H_i_s');
		$date_now_f =  $dt->format('Y-m-d H:i:s');
		$file_name = 'AUTOSAVE_'.$date_now.'_db_backup.sql';
		$file_loc = '/var/www/html/backup_db/AUTOSAVE_'.$date_now.'_db_backup.sql';
		
		//$command = 'mysqldump -uroot -proot gfgfg > /var/www/html/backup_db/AUTOSAVE_'.$date_now.'_db_backup.sql ';
		$command = 'mysqldump -uroot -proot gfgfg d_stbj d_valas m_eksternal_loc m_list_coa m_material m_type_eksternal m_type_material m_uom m_valas t_bank t_coa t_coa_value t_component_report t_customer m_type_bc t_delivery_order t_do_packing t_eksternal t_gudang t_kartu_hp t_maintenance t_masterdata t_mutasi t_order t_packing t_param t_payment_hp t_pemusnahan t_pemusnahan_detail t_pengiriman t_po_order_coa t_po_packing t_po_quotation t_po_spb t_po_spb_coa t_process_flow t_product t_production t_production_schedule t_purchase_order t_qa t_report_coa t_report_finance t_retur t_schedule_shipping t_scrap t_spb t_stbj t_stbj_packing t_stock t_surat_jalan t_transaksi t_type_gudang t_wip d_bc_list d_price d_scrap t_bom t_cust_spec t_esf > /var/www/html/backup_db/AUTOSAVE_'.$date_now.'_db_backup.sql ';
		$pid = shell_exec($command);
		$result = $this->backup_restore_model->add_backup($ids,$date_now_f,$file_name,$file_loc,"Autosave Backup");
		
		$backup_list = $this->backup_restore_model->get_backup($params['id']);
		
		
		$command = 'mysql -uroot -proot gfgfg < /var/www/html/backup_db/'.$backup_list[0]['file_name'].' ';
		$pid = shell_exec($command);

		$result22 = $this->backup_restore_model->add_backup_his_restore($ids,$result['lastid'],$date_now_f,"Autosave Backup","Backup Auto",$backup_list[0]['id_backup']);
		// $command = 'php /var/www/html/Jobs/backup_db.php 2>&1 ';
		// $pid = shell_exec($command);
		
		$res = array(
			'status' => 'success',
			'message' => 'Backup Selesai'
		);

		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		header("access-control-allow-origin: *");
		echo json_encode($res);
		
		
	}
	
	public function backup_data(){
		
		$sas = $this->session->userdata['logged_in']['user_id'];
		
		//print_r($sas);die;
		
		//['user_id'];
		
		$id = $sas;
		
		$tz = 'Asia/Jakarta';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$date_now =  $dt->format('Y_d_m_H_i_s');
		$date_now_f =  $dt->format('Y-m-d H:i:s');
		$file_name = $date_now.'_db_backup.sql';
		$file_loc = '/var/www/html/backup_db/'.$date_now.'_db_backup.sql';
		
		$command = 'mysqldump -uroot -proot gfgfg d_stbj d_valas m_eksternal_loc m_list_coa m_material m_type_eksternal m_type_material m_uom m_valas t_bank t_coa t_coa_value t_component_report t_customer m_type_bc t_delivery_order t_do_packing t_eksternal t_gudang t_kartu_hp t_maintenance t_masterdata t_mutasi t_order t_packing t_param t_payment_hp t_pemusnahan t_pemusnahan_detail t_pengiriman t_po_order_coa t_po_packing t_po_quotation t_po_spb t_po_spb_coa t_process_flow t_product t_production t_production_schedule t_purchase_order t_qa t_report_coa t_report_finance t_retur t_schedule_shipping t_scrap t_spb t_stbj t_stbj_packing t_stock t_surat_jalan t_transaksi t_type_gudang t_wip d_bc_list d_price d_scrap t_bom t_cust_spec t_esf > /var/www/html/backup_db/'.$date_now.'_db_backup.sql ';
		$pid = shell_exec($command);
		
		$result = $this->backup_restore_model->add_backup($id,$date_now_f,$file_name,$file_loc,"Manual Backup");
		
		$result22 = $this->backup_restore_model->add_backup_his($id,$result['lastid'],$date_now_f,"Buat Backup Baru","Backup Baru");
		// $command = 'php /var/www/html/Jobs/backup_db.php 2>&1 ';
		// $pid = shell_exec($command);
		
		$res = array(
			'status' => 'success',
			'message' => 'Backup Selesai'
		);

		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		header("access-control-allow-origin: *");
		echo json_encode($res);
		
		
	}

	public function index() {
		ini_set('display_errors', 1);
		$sess = $this->session->userdata['logged_in'];
		
		//$sss = $this->log_activity->insert_activity('insert','ket4'); 
		

		
		
		//$asas = $this->input->server(array('HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR')));
		//print_r($user_agent);die;
		
		$this->template->load('maintemplate', 'backup_restore/views/index');
	}

	function list_bc() {
		$draw = ($this->input->get_post('draw') != FALSE) ? $draw = $this->input->get_post('draw') : 1;
		$length = ($this->input->get_post('length') != FALSE) ? $this->input->get_post('length') : 10;
		$start = ($this->input->get_post('start') != FALSE) ? $this->input->get_post('start') : 0;
		$order = $this->input->get_post('order');
		$order_dir = (!empty($order[0]['dir'])) ? $order[0]['dir'] : 'desc';
		$order_column = (!empty($order[0]['column'])) ? $order[0]['column'] : 2;
		$order_fields = array('', 'tanggal_backup', 'file_name');

		$search = $this->input->get_post('search');

		$search_val = (!empty($search['value'])) ? $search['value'] : null;

		$search_value = $this->Anti_sql_injection($search_val);

		// Build params for calling model
		$params['limit'] = (int) $length;
		$params['offset'] = (int) $start;
		$params['order_column'] = $order_fields[$order_column];
		$params['order_dir'] = $order_dir;
		$params['filter'] = $search_value;

		$list = $this->backup_restore_model->list_bc($params);
		//print_r($list);die;

		$result["recordsTotal"] = $list['total'];
		$result["recordsFiltered"] = $list['total_filtered'];
		$result["draw"] = $draw;

		$data = array();
		$i = 0;
		$username = $this->session->userdata['logged_in']['username'];
		foreach ($list['data'] as $k => $v) {
			$i = $i + 1;

			array_push($data, array(
				$i,
				$v['tanggal_backup'],
				$v['file_name'],
				$v['nama'],
				$v['group'],
				$v['status'],
				'<a href ="http://ec2-18-216-193-164.us-east-2.compute.amazonaws.com/backup_db/'.$v['file_name'].'" class="btn btn-primary" target="_blank" download ><i class="fa fa-building-o"></i> Download </a>',
				'<a class="btn btn-primary" onClick="restore('.$v['id_backup'].')" ><i class="fa fa-building-o"></i> Restore </a>'
			));
		}

		$result["data"] = $data;

		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function add_bc() {
		$result_type = $this->backup_restore_model->type_bc();
		$data = array(
			'jenis_bc' => $result_type
		);

		$this->load->view('add_modal_view', $data);
	}

	public function check_nopendaftaran() {
		$this->form_validation->set_rules('nopendaftaran', 'No Pendaftaran', 'trim|required|min_length[4]|max_length[100]|is_unique[t_bc.no_pendaftaran]');
		$this->form_validation->set_message('is_unique', 'No Pendaftaran Already Exists.');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$return = array('success' => false, 'message' => $msg);
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		} else if ($this->form_validation->run() == TRUE) {
			$return = array('success' => true, 'message' => 'No Pendaftaran Available');
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		}
	}

	public function check_nopengajuan() {
		$this->form_validation->set_rules('nopengajuan', 'No Pengajuan', 'trim|required|min_length[4]|max_length[100]|is_unique[t_bc.no_pengajuan]');
		$this->form_validation->set_message('is_unique', 'No Pengajuan Already Exists.');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$return = array('success' => false, 'message' => $msg);
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		} else if ($this->form_validation->run() == TRUE) {
			$return = array('success' => true, 'message' => 'No pengajuan Available');
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		}
	}

	public function save_bc() {
		$this->form_validation->set_rules('jenis_bc', 'Jenis BC', 'trim|required');
		$this->form_validation->set_rules('nopendaftaran', 'No Pendaftaran', 'trim|required|min_length[4]|max_length[100]|is_unique[t_bc.no_pendaftaran]');
		$this->form_validation->set_rules('nopengajuan', 'No Pengajuan', 'trim|required|min_length[4]|max_length[100]|is_unique[t_bc.no_pengajuan]');
		$this->form_validation->set_rules('tglpengajuan', 'Tanggal Pengajuan', 'trim|required|max_length[100]');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$result = array(
				'success' => false,
				'message' => $msg
			);

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}else {
			$jenis_bc = $this->Anti_sql_injection($this->input->post('jenis_bc', TRUE));
			$nopendaftaran = $this->Anti_sql_injection($this->input->post('nopendaftaran', TRUE));
			$nopengajuan = ucwords($this->Anti_sql_injection($this->input->post('nopengajuan', TRUE)));
			$tglinput = $this->Anti_sql_injection($this->input->post('tglpengajuan', TRUE));
			$temptgl = explode("/", $tglinput);
			$tglpengajuan = date('Y-m-d', strtotime($temptgl[2].'-'.$temptgl[1].'-'.$temptgl[0]));
			$type_text = ucwords($this->Anti_sql_injection($this->input->post('type_text', TRUE)));
			$upload_error = NULL;
			$file_bc = NULL;

			if ($_FILES['file_bc']['name']) {
				$this->load->library('upload');
				$new_filename =
					preg_replace('/\s/', '', $type_text) .' '.
					$nopendaftaran .' '.
					date('d-m-Y', strtotime($temptgl[2].'-'.$temptgl[1].'-'.$temptgl[0])).
					'.'.pathinfo($_FILES['file_bc']['name'], PATHINFO_EXTENSION);

				$config = array(
					'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/bc",
					'upload_url' => base_url() . "uploads/bc",
					'encrypt_name' => FALSE,
					'max_filename' => 100,
					'file_name' => $new_filename,
					'overwrite' => FALSE,
					'allowed_types' => 'pdf|txt|doc|docx',
					'max_size' => '10000'
				);
				$this->upload->initialize($config);

				if ($this->upload->do_upload("file_bc")) {
					// General result data
					$result = $this->upload->data();

					// Add our stuff
					$file_bc = 'uploads/bc/'.$result['file_name'];
				}else {
					$pesan = $this->upload->display_errors();
					$upload_error = strip_tags(str_replace("\n", '', $pesan));

					$result = array(
						'success' => false,
						'message' => $upload_error
					);
				}
			}

			if (!isset($upload_error)) {
				$data = array(
					'jenis_bc' => $jenis_bc,
					'no_pendaftaran' => $nopendaftaran,
					'no_pengajuan' => $nopengajuan,
					'tanggal_pengajuan' => $tglpengajuan,
					'file_loc' => $file_bc
				);
				// print_r($data);die;

				$result = $this->backup_restore_model->add_bc($data);

				if ($result > 0) {
					$msg = 'Berhasil menambahkan BC.';

					$result = array(
						'success' => true,
						'message' => $msg
					);
				}else {
					$msg = 'Gagal menambahkan BC ke database.';

					$result = array(
						'success' => false,
						'message' => $msg
					);
				}
			}
			// else {
			// 	$msg = 'Gagal menambahkan BC ke database.';

			// 	$result = array(
			// 		'success' => false,
			// 		'message' => $upload_error
			// 	);
			// }

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
	}

	public function edit_bc($id) {
		$result = $this->backup_restore_model->edit_bc($id);
		$result_type = $this->backup_restore_model->type_bc();
		$temptgl = explode('-', $result[0]['tanggal_pengajuan']);
		$result[0]['tanggal_pengajuan'] = date('d/M/Y', strtotime($temptgl[0].'-'.$temptgl[1].'-'.$temptgl[2]));
		if($result[0]['file_loc'] != '' || $result[0]['file_loc'] != NULL) $result[0]['file_loc'] = explode('uploads/bc/', $result[0]['file_loc'])[1];

		$data = array(
			'bc' => $result,
			'jenis_bc' => $result_type,
			'folder' => 'uploads/bc/',
			'url' => base_url()
		);
		// print_r($data);die;

		$this->load->view('edit_modal_view', $data);
	}

	public function save_edit_bc() {
		$this->form_validation->set_rules('jenis_bc', 'Jenis BC', 'trim|required');
		$this->form_validation->set_rules('nopendaftaran', 'No Pendaftaran', 'trim|required|min_length[4]|max_length[100]');
		$this->form_validation->set_rules('nopengajuan', 'No Pengajuan', 'trim|required|min_length[4]|max_length[100]');
		$this->form_validation->set_rules('tglpengajuan', 'Tanggal Pengajuan', 'trim|required|max_length[100]');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$result = array(
				'success' => false,
				'message' => $msg
			);

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}else {
			$bc_id = $this->Anti_sql_injection($this->input->post('bc_id', TRUE));
			$old_file = $this->Anti_sql_injection($this->input->post('old_file', TRUE));
			$jenis_bc = $this->Anti_sql_injection($this->input->post('jenis_bc', TRUE));
			$nopendaftaran = $this->Anti_sql_injection($this->input->post('nopendaftaran', TRUE));
			$nopengajuan = ucwords($this->Anti_sql_injection($this->input->post('nopengajuan', TRUE)));
			$tglinput = $this->Anti_sql_injection($this->input->post('tglpengajuan', TRUE));
			$temptgl = explode("/", $tglinput);
			$tglpengajuan = date('Y-m-d', strtotime($temptgl[2].'-'.$temptgl[1].'-'.$temptgl[0]));
			$type_text = ucwords($this->Anti_sql_injection($this->input->post('type_text', TRUE)));

			$upload_error = NULL;
			$file_bc = NULL;
			// die;
			if ($_FILES['file_bc']['name']) {
				$this->load->library('upload');
				$new_filename =
					preg_replace('/\s/', '', $type_text) .' '.
					$nopendaftaran .' '.
					date('d-m-Y', strtotime($temptgl[2].'-'.$temptgl[1].'-'.$temptgl[0])).
					'.'.pathinfo($_FILES['file_bc']['name'], PATHINFO_EXTENSION);

				$config = array(
					'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/bc",
					'upload_url' => base_url() . "uploads/bc",
					'encrypt_name' => FALSE,
					'max_filename' => 100,
					'file_name' => $new_filename,
					'overwrite' => FALSE,
					'allowed_types' => 'pdf|txt|doc|docx',
					'max_size' => '10000'
				);
				$this->upload->initialize($config);

				if ($this->upload->do_upload("file_bc")) {
					// General result data
					$result = $this->upload->data();

					// Add our stuff
					$file_bc = 'uploads/bc/'.$result['file_name'];
				}else {
					$pesan = $this->upload->display_errors();
					$upload_error = strip_tags(str_replace("\n", '', $pesan));

					$result = array(
						'success' => false,
						'message' => $upload_error
					);
				}
			}

			if (!isset($upload_error)) {
				if($file_bc == '' || $file_bc == NULL) {
					$file_bc = '/uploads/bc/'.$old_file;
				}else {
					$filepath = dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/bc/" . $old_file;
					if (is_file($filepath)) {
						unlink($filepath);
					}
				}
				$data = array(
					'bc_id' => $bc_id,
					'jenis_bc' => $jenis_bc,
					'no_pendaftaran' => $nopendaftaran,
					'no_pengajuan' => $nopengajuan,
					'tanggal_pengajuan' => $tglpengajuan,
					'file_loc' => $file_bc
				);
				// print_r($data);die;

				$result = $this->backup_restore_model->save_edit_bc($data);

				if ($result > 0) {
					$msg = 'Berhasil merubah BC.';

					$result = array(
						'success' => true,
						'message' => $msg
					);
				} else {
					$msg = 'Gagal merubah BC.';

					$result = array(
						'success' => false,
						'message' => $msg
					);
				}
			}

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
	}

	public function delete_bc() {
		$data 	= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$result = $this->backup_restore_model->edit_bc($params['id']);

		//Delete File if exists
		$filepath = dirname($_SERVER["SCRIPT_FILENAME"]) ."/". $result[0]['file_loc'];
		if (is_file($filepath)) {
			unlink($filepath);
		}
		$list = $this->backup_restore_model->delete_bc($params['id']);

		$res = array(
			'status' => 'success',
			'message' => 'Data telah di hapus'
		);

		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		header("access-control-allow-origin: *");
		echo json_encode($res);
	}

	public function detail_bc($id) {
		$data = array(
			'bc_id' => $id
		);
		// print_r($data);die;

		$this->load->view('detail_bc_view', $data);
	}

	public function list_detail_bc($id) {
		$result = $this->backup_restore_model->detail_bc($id);
		$result_bc = $this->backup_restore_model->edit_bc($id);
		$result_stock = $this->backup_restore_model->stock($id);

		$data = array();
		$i = 0;
		foreach ($result['data'] as $k => $v) {
			$i = $i + 1;
			$bc_stock = '';
			// $status_akses =
			// 	'<div class="btn-group">'.
			// 		'<button class="btn btn-warning" type="button" data-toggle="tooltip" data-placement="top" title="Edit"
			// 			onClick="edit_detail_bc(\'' . $v['id'] . '\')">'.
			// 			'<i class="fa fa-edit"></i>'.
			// 		'</button>'.
			// 	'</div>'.
			// 	'<div class="btn-group">'.
			// 		'<button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"
			// 			onClick="delete_detail_bc(\'' . $v['id'] . '\')">'.
			// 			'<i class="fa fa-trash"></i>'.
			// 		'</button>'.
			// 	'</div>';
			/*foreach ($result_stock as $s => $st) {
				if($st['id'] == $v['kode_stock']) $bc_stock = $st['stock'];
			}*/

			array_push($data, array(
				$i,
				ucwords($v['kode_barang_bc']),
				ucwords($v['kode_barang']),
				number_format($v['uom'],0,",","."),
				number_format($v['valas'],0,",","."),
				'Rp '. number_format($v['price'],0,",","."),
				number_format($v['weight'],0,",","."),
				number_format($v['qty'],0,",","."),
				// $status_akses
			));
		}

		$result['data'] = $data;
		$result['draw'] = 1;
		$result['recordsFiltered'] = 2;
		$result['recordsTotal'] = sizeof($data);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function add_detail_bc() {
		$result_uom = $this->backup_restore_model->search_uom();
		$result_valas = $this->backup_restore_model->search_valas();
		//$result_stock = $this->backup_restore_model->stock();
		
		$data = array(
			'uom' => $result_uom,
			'valas' => $result_valas
			//'stock' => $result_stock
		);

		$this->load->view('add_modal_d_bc_view', $data);
	}

	public function check_kd_brg_bc(){
		$this->form_validation->set_rules('kd_brg_bc', 'KodeBarangBC', 'trim|required|min_length[4]|max_length[20]|is_unique[d_bc_list.kode_barang_bc]');
		$this->form_validation->set_message('is_unique', 'Kode barang BC Already Registered.');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$return = array('success' => false, 'message' => $msg);
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		} else if ($this->form_validation->run() == TRUE) {
			$return = array('success' => true, 'message' => 'Kode Barang BC Available');
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		}
	}
	
	public function check_kd_brg(){
		$this->form_validation->set_rules('kd_brg', 'KodeBarang', 'trim|required|min_length[4]|max_length[20]|is_unique[d_bc_list.kode_barang]');
		$this->form_validation->set_message('is_unique', 'Kode barang Already Registered.');

		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$return = array('success' => false, 'message' => $msg);
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		} else if ($this->form_validation->run() == TRUE) {
			$return = array('success' => true, 'message' => 'Kode Barang Available');
			$this->output->set_content_type('application/json')->set_output(json_encode($return));
		}
	}
	
	public function save_detail() {
		$this->form_validation->set_rules('kd_brg_bc', 'KodeBarangBC', 'trim|required|min_length[4]|max_length[20]|is_unique[d_bc_list.kode_barang_bc]',array('is_unique' => 'This %s Kode Barang BC already exists.'));
		$this->form_validation->set_rules('kd_brg', 'KodeBarang', 'trim|required|min_length[4]|max_length[20]|is_unique[d_bc_list.kode_barang]',array('is_unique' => 'This %s Kode Barang already exists.'));
		//$this->form_validation->set_rules('stock_id', 'Stock', 'trim|required');
		// $this->form_validation->set_rules('prop_id', 'Properties', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$result = array(
				'success' => false,
				'message' => $msg
			);

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}else {
			$bc_id = $this->Anti_sql_injection($this->input->post('bc_id', TRUE));
			$kd_brg_bc = strtoupper($this->Anti_sql_injection($this->input->post('kd_brg_bc', TRUE)));
			$kd_brg = strtoupper($this->Anti_sql_injection($this->input->post('kd_brg', TRUE)));
			$uom_id = $this->Anti_sql_injection($this->input->post('uom_id', TRUE));
			$valas_id = $this->Anti_sql_injection($this->input->post('valas_id', TRUE));
			$price = $this->Anti_sql_injection($this->input->post('price', TRUE));
			$weight = $this->Anti_sql_injection($this->input->post('weight', TRUE));
			$qty = $this->Anti_sql_injection($this->input->post('qty', TRUE));

			$data = array(
				'id_bc' 			=> $bc_id,
				'kode_barang_bc' 	=> $kd_brg_bc,
				'kode_barang' 		=> $kd_brg,
				'uom'		 		=> $uom_id,
				'valas' 			=> $valas_id,
				'price' 			=> $price,
				'weight' 			=> $weight,
				'qty' 				=> $qty
			);
			
			$result = $this->backup_restore_model->add_detail_bc($data);
			
			if($result > 0) {
				$cek_kode_barang = $this->backup_restore_model->search_kode_barang($kd_brg);
				if(count($cek_kode_barang) > 0) {
					$data_material = array(
						'kode_barang_bc' 	=> $kd_brg_bc,
						'kode_barang' 		=> $cek_kode_barang[0]['stock_code'],
						'stock_name' 		=> $cek_kode_barang[0]['stock_name'],
						'stock_description'	=> $cek_kode_barang[0]['stock_description'],
						'unit'		 		=> $uom_id,
						'type'		 		=> $cek_kode_barang[0]['type'],
						'qty' 				=> $qty,
						'treshold'	 		=> $cek_kode_barang[0]['treshold'],
						'id_properties' 	=> $cek_kode_barang[0]['id_properties'],
						'id_gudang' 		=> NULL,
						'status' 			=> 3
					);
				}else{
					$data_material = array(
						'kode_barang_bc' 	=> $kd_brg_bc,
						'kode_barang' 		=> $kd_brg,
						'stock_name' 		=> NULL,
						'stock_description'	=> NULL,
						'unit'		 		=> $uom_id,
						'type'		 		=> NULL,
						'qty' 				=> $qty,
						'treshold'	 		=> 10,
						'id_properties' 	=> NULL,
						'id_gudang' 		=> NULL,
						'status' 			=> 3
					);
				}
				
				$add = $this->backup_restore_model->add_material($data_material);
				
				if($add['result'] > 0) {
					$this->backup_restore_model->add_bc_stock($data['id_bc'],$add['lastid']);
					$this->backup_restore_model->add_bc_price($data['price'],$data['valas'],$add['lastid']);
				}
				
				$msg = 'Berhasil menambahkan detail bea cukai.';

				$result = array(
					'success' => true,
					'message' => $msg
				);
				
			}else{
				$msg = 'Gagal menambahkan detail bea cukai ke database.';

				$result = array(
					'success' => false,
					'message' => $msg
				);
			}

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
	}

	public function edit_detail_bc($id) {
		$result = $this->backup_restore_model->edit_detail_bc($id);
		$result_uom = $this->backup_restore_model->search_uom();
		$result_valas = $this->backup_restore_model->search_valas();
		//$result_stock = $this->backup_restore_model->stock();
		
		$data = array(
			'detail' => $result,
			'uom' => $result_uom,
			'valas' => $result_valas
			//'stock' => $result_stock
		);
		// print_r($data);die;

		$this->load->view('edit_modal_d_bc_view', $data);
	}

	public function save_edit_detail() {
		$this->form_validation->set_rules('kd_brg_bc', 'KodeBarangBC', 'trim|required|min_length[4]|max_length[20]',array('is_unique' => 'This %s Kode Barang BC already exists.'));
		$this->form_validation->set_rules('kd_brg', 'KodeBarang', 'trim|required|min_length[4]|max_length[20]',array('is_unique' => 'This %s Kode Barang already exists.'));
		//$this->form_validation->set_rules('stock_id', 'Stock', 'trim|required');
		//var_dump($this->form_validation->run());die;
		
		if ($this->form_validation->run() == FALSE) {
			$pesan = validation_errors();
			$msg = strip_tags(str_replace("\n", '', $pesan));

			$result = array(
				'success' => false,
				'message' => $msg
			);

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}else {
			$dbc_id = $this->Anti_sql_injection($this->input->post('dbc_id', TRUE));
			$bc_id = $this->Anti_sql_injection($this->input->post('bc_id', TRUE));
			$kd_brg_bc = strtoupper($this->Anti_sql_injection($this->input->post('kd_brg_bc', TRUE)));
			$kd_brg = strtoupper($this->Anti_sql_injection($this->input->post('kd_brg', TRUE)));
			$uom_id = $this->Anti_sql_injection($this->input->post('uom_id', TRUE));
			$valas_id = $this->Anti_sql_injection($this->input->post('valas_id', TRUE));
			$price = $this->Anti_sql_injection($this->input->post('price', TRUE));
			$weight = $this->Anti_sql_injection($this->input->post('weight', TRUE));
			$qty = $this->Anti_sql_injection($this->input->post('qty', TRUE));

			$data = array(
				'id' 				=> $dbc_id,
				'id_bc' 			=> $bc_id,
				'kode_barang_bc' 	=> $kd_brg_bc,
				'kode_barang' 		=> $kd_brg,
				'uom'		 		=> $uom_id,
				'valas' 			=> $valas_id,
				'price' 			=> $price,
				'weight' 			=> $weight,
				'qty' 				=> $qty
			);

			$result = $this->backup_restore_model->save_edit_detail($data);

			if ($result > 0) {
				$msg = 'Berhasil Mengupdate detail bea cukai.';

				$result = array(
					'success' => true,
					'message' => $msg
				);
			}else {
				$msg = 'Gagal Mengupdate detail bea cukai ke database.';

				$result = array(
					'success' => false,
					'message' => $msg
				);
			}

			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
	}

	public function delete_detail_bc() {
		$data 		= file_get_contents("php://input");
		$params 	= json_decode($data,true);
		$list 		= $this->backup_restore_model->delete_detail_bc($params['id']);

		$res = array(
			'status' => 'success',
			'message' => 'Data telah di hapus'
		);

		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
		header("access-control-allow-origin: *");
		echo json_encode($res);
	}
}