<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Backup_restore_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function all_type_bc() {
		$sql 	= 'SELECT * FROM m_type_bc';

		$query 	= $this->db->query($sql);
		$return = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}

	public function type_bc() {
		$sql 	= 'SELECT * FROM m_type_bc WHERE type_bc = 0;';

		$query 	= $this->db->query($sql);
		$return = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}

	public function check_userid($params = array()) {
		$sql 	= 'SELECT COUNT(id) AS jumlah FROM u_user WHERE id = ? AND status_akses = 1;';
		$query 	= $this->db->query($sql,
			array($params['user_id'])
		);
		$return = $query->row_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}

	public function list_bc($params = array()) {
		$sql 	= 'CALL backup_list(?, ?, ?, ?, ?, @total_filtered, @total)';

		$out = array();
		$query 	=  $this->db->query($sql,
			array(
				$params['limit'],
				$params['offset'],
				$params['order_column'],
				$params['order_dir'],
				$params['filter']
			));

		$result = $query->result_array();

		$this->load->helper('db');
		free_result($this->db->conn_id);

		$total = $this->db->query('select @total_filtered, @total')->row_array();

		$return = array(
			'data' => $result,
			'total_filtered' => $total['@total_filtered'],
			'total' => $total['@total'],
		);

		return $return;
	}

	public function add_bc($data) {
		$sql 	= 'CALL bc_add(?,?,?,?,?)';

		$query 	=  $this->db->query($sql,
			array(
				$data['jenis_bc'],
				$data['no_pendaftaran'],
				$data['no_pengajuan'],
				$data['tanggal_pengajuan'],
				$data['file_loc']
			)
		);

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}	
	
	public function add_backup($id,$date_file,$file_name,$file_loc,$type) {
		$sql 	= 'CALL backup_add(?,?,?,?,?,?)';

		$query 	=  $this->db->query($sql,
			array(
				$date_file,
				$id,
				$file_loc,
				$file_name,
				$type,
				'Done'
			)
		);

		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid= $row['LAST_INSERT_ID()'];
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;
		
		return $arr_result;
	}
	
	public function add_backup_his($id,$lastid,$datenow,$type1,$type2) {
		$sql 	= 'CALL history_backup_add(?,?,?,?,?,?)';

		$query 	=  $this->db->query($sql,
			array(
				$lastid,
				$id,
				$type1,
				$datenow,
				$type2,
				''
			)
		);

		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid= $row['LAST_INSERT_ID()'];
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;
		
		return $arr_result;
	}
	
	public function add_backup_his_restore($id,$lastid,$datenow,$type1,$type2,$autosave) {
		$sql 	= 'CALL history_backup_add(?,?,?,?,?,?)';

		$query 	=  $this->db->query($sql,
			array(
				$autosave,
				$id,
				$type1,
				$datenow,
				$type2,
				$lastid
			)
		);

		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid= $row['LAST_INSERT_ID()'];
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;
		
		return $arr_result;
	}

	public function edit_bc($id) {
		$sql 	= 'CALL bc_search_id(?)';

		$query 	=  $this->db->query($sql,
			array($id)
		);

		$result	= $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}
	
	public function add_material($data)
	{
		$sql 	= 'CALL material_add(?,?,?,?,?,?,?,?,?,?,?)';

		$query 	=  $this->db->query($sql,
			array(
				$data['kode_barang_bc'],
				$data['kode_barang'],
				$data['stock_name'],
				$data['stock_description'],
				$data['unit'],
				$data['type'],
				$data['qty'],
				$data['treshold'],
				$data['id_properties'],
				$data['id_gudang'],
				$data['status'],
			));
		
		$query = $this->db->query('SELECT LAST_INSERT_ID()');
		$row = $query->row_array();
		$lastid= $row['LAST_INSERT_ID()'];
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		$arr_result['lastid'] = $lastid;
		$arr_result['result'] = $result;
		
		return $arr_result;
	}
	
	public function save_edit_bc($data) {
		$sql 	= 'CALL bc_update(?,?,?,?,?,?)';
		
		$query 	=  $this->db->query($sql,
			array(
				$data['bc_id'],
				$data['jenis_bc'],
				$data['no_pendaftaran'],
				$data['no_pengajuan'],
				$data['tanggal_pengajuan'],
				$data['file_loc']
			)
		);

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function delete_bc($data) {
		$sql 	= 'CALL bc_delete(?)';
		$query 	=  $this->db->query($sql,
			array($data)
		);

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function get_backup($kd_brg) {
		$sql 	= 'CALL backup_id(?)';

		$query 	=  $this->db->query($sql,
			array($kd_brg)
		);

		$result	= $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function search_kode_barang($kd_brg) {
		$sql 	= 'CALL dbc_search_stock_code(?)';

		$query 	=  $this->db->query($sql,
			array($kd_brg)
		);

		$result	= $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}
	
	public function search_uom() {
		$sql 	= 'SELECT * FROM m_uom;';

		$query 	= $this->db->query($sql);
		$return = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}
	
	public function search_valas() {
		$sql 	= 'SELECT * FROM m_valas;';

		$query 	= $this->db->query($sql);
		$return = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}
	
	public function stock() {
		$sql 	= 'SELECT * FROM t_stock;';

		$query 	= $this->db->query($sql);
		$return = $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $return;
	}

	public function detail_bc($id) {
		$sql 	= 'CALL dbc_search_id_bc(?)';

		$query 	=  $this->db->query($sql,
			array($id)
		);

		$result	= $query->result_array();

		$this->db->close();
		$this->db->initialize();

		$return = array(
			'data' => $result
		);

		return $return;
	}

	public function add_detail_bc($data) {
		$sql 	= 'CALL dbc_add(?,?,?,?,?,?,?,?)';
		
		$query 	=  $this->db->query($sql,
			array(
				$data['id_bc'],
				$data['kode_barang_bc'],
				$data['kode_barang'],
				$data['uom'],
				$data['valas'],
				$data['price'],
				$data['weight'],
				$data['qty']
			)
		);
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function add_bc_stock($id,$lastid) {
		$sql 	= 'CALL bcs_add(?,?)';
		
		$query 	=  $this->db->query($sql,
			array(
				$id,
				$lastid
			)
		);
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}
	
	public function add_bc_price($price,$valas,$lastid) {
		$sql 	= 'CALL price_add(?,?,?,?)';
		//$date 	= date('Y-m-d H:i:s');
		$query 	=  $this->db->query($sql,
			array(
				1,
				$price,
				$valas,
				//$date,
				$lastid
			)
		);
		
		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}
	
	public function edit_detail_bc($id) {
		$sql 	= 'CALL dbc_search_id(?)';

		$query 	=  $this->db->query($sql,
			array($id)
		);

		$result	= $query->result_array();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function save_edit_detail($data) {
		$sql 	= 'CALL dbc_update(?,?,?,?,?,?,?,?,?)';
		
		$query 	=  $this->db->query($sql,
			array(
				$data['id'],
				$data['id_bc'],
				$data['kode_barang_bc'],
				$data['kode_barang'],
				$data['uom'],
				$data['valas'],
				$data['price'],
				$data['weight'],
				$data['qty']
			)
		);

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}

	public function delete_detail_bc($data) {
		$sql 	= 'CALL dbc_delete(?)';
		$query 	=  $this->db->query($sql,
			array($data)
		);

		$result	= $this->db->affected_rows();

		$this->db->close();
		$this->db->initialize();

		return $result;
	}
}