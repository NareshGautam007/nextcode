<?php



/**
 * 
 */
class Users_model extends CI_Model
{
	
	function __construct()
	{
		
		parent::__construct();

	}


	public function register($name,$email,$mobile,$address,$password){

			if($name=="" || $email=="" || $mobile=="" || $address=="" || $password="")
			{

				return false;

			}
			else{

				$arraySave = array(
										'name' =>$name , 
										'email'=>$email,
										'mobile'=>$mobile,
										'address'=>$address,
										'password'=>password_hash($password, PASSWORD_BCRYPT),	
				);


					$result=$this->db->insert('users',$arraySave);

					if($result)
					{
						return true;
					}
					else{

						return false;
					}

			}


	}

}








?>