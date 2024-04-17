<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//        $user_id = $this->session->userdata['logged_in']['user_id'];
//        $token = NULL;
//        $set_token = $this->db->query('select set_token(?, ?) as is_token', array($user_id, $token));
        $nama = $this->session->userdata['logged_in']['nama'];

        log_activity('Logout','Nama user '.$nama.'.');
        $this->session->sess_destroy();
		redirect(base_url());
	}



}
