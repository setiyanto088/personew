<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_bulk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	
	public function get_history($data){
		
		$sql 	= '
					SELECT c.status_survey, a.*,DATE_FORMAT(time_call,"%d %M %Y") AS dd,DATEDIFF(date_survey, NOW()) sa, `KOTA_KABUPATEN_DAGRI` `KOTA_X`,b.`NO_HP`,`ALAMAT_NOSS` `ALAMAT`,`NAMA` NAMA_PELANGGAN, b.KECAMATAN_DAGRI, b.KELURAHAN_DESA_DAGRI FROM `t_outbond_call` a
					JOIN `RESPONDENT_SURVEY_CLEAR` b ON a.cardno = b.`NOTEL_INET`
					LEFT JOIN `t_kuisioner` c ON a.id_outbound = c.id_outbound
					WHERE id_user = ?
					AND respond = 7
					GROUP BY a.cardno
					ORDER BY time_call DESC
					
		';

		echo $sql;die;

		$query_all 	=  $this->db->query($sql,array('user_id' => $data));

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}			

	public function get_respondent($data){
		
		$sql 	= "
		SELECT *,KOTA_KABUPATEN_DAGRI AS KOTA_X, NAMA AS NAMA_PELANGGAN, NOTEL_INET AS CARDNO, ALAMAT_NOSS AS ALAMAT FROM RESPONDENT_SURVEY_CLEAR A
		JOIN `TOP_20_PROGRAM_SURVEY_CLEAN` B ON A.NOTEL_INET = B.CARDNO
		WHERE NOTEL_INET = '".$data['id']."'
		ORDER BY `RANK` ASC,DURATION DESC
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	
	
	public function get_outbound2($data){
		
		$sql 	= "
		SELECT * FROM t_outbond_call 
		WHERE CARDNO = '".$data['id']."'
		";
		
		//echo $sql;die;

		$query_all 	=  $this->db->query($sql);

		$result = $query_all->result_array();
		
		$this->db->close();
		$this->db->initialize();
		
		return $result;
		
	}	

}
