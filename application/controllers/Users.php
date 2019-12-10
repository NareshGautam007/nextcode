<?php
use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR 	exit('NO Directory access allowed');


require APPPATH .'libraries/RestController.php';
require APPPATH .'libraries/Format.php';

/**
 * 
 */
class Users extends RestController
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->model('users_model');
	}

	public function register_post()
	{

		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$mobile=$this->input->post('mobile');
		$address=$this->input->post('address');
		$passwrod=$this->input->post('passwrod');

		$registration->$this->users_model->register($name,$email,$mobile,$address,$passwrod);

		if($registration)
		{
			$this->respone(array('status'=>$registration,'message'=>'Registration Success'), RestController::HTTP_OK);
		}
		else{

			$this->response(array('status'=>$registration,'message'=>'Registration Error'),RestController::HTTP_OK);

		}



	}


}


?>