<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');

	}

	public function index()
	{
        if(isset($this->session->userdata['logged_in']))
        {
			if($this->session->userdata['logged_in']['id_role'] == 99){
				 redirect(base_url('home'));
			}elseif($this->session->userdata['logged_in']['id_role'] == 98){
				 redirect(base_url('home'));
			}else{
				redirect(base_url('home')); 
			}
           
        } else {
			$this->load->view('login_view');
        }
	}

	function get_login()
	{
		$request 	= array();
		$postdata 	= file_get_contents("php://input");
		$request 	= json_decode($postdata,true);


		$username = $request['username'];
		$groupfungsi = $request['id_role'];
		$id_group = $request['id_group'];
		$password = $request['password'];

		$result = $this->login_model->get_login($username,$password,$groupfungsi );

		//print_r($result);die;

		$record = count($result);

		 if ( $record > 0 ) {
			$msg = array ('status' => "success");

			foreach($result as $newhasil){
				$newdata = array
						(
							'user_id'		=> $newhasil['user_id'],
							'username' 		=> $username,
							'id_role' 		=> $groupfungsi,
							'name_role'		=> $newhasil['name_role']



				);
			}
			$this->session->set_userdata($newdata);
		}
		else {

				$msg = array ('status' => "notvalid", "Message"=>"Username dan password salah");


		}
		$this->output->set_content_type('application/json')->set_output(json_encode($msg));
	}

}
