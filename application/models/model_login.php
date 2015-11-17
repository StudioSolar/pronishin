<?php

class Model_Login extends Model
{
	function __construct()
	{
		
	}
	
	public function get_data($email,$pass)
	{	
		    // Include Medoo
			require_once 'adds/medoo.php';
			 
			// Initialize
			$database = new medoo(array(
				'database_type' => DB_TYPE,
				'database_name' => DB_NAME,
				'server' => DB_SERVER,
				'username' => DB_USER,
				'password' => DB_PASS,
				'charset' => DB_CHARSET
			));
			
			return $data = $database->select("users", array("id","fname","lname","email","password"),array("AND"=>array("email"=>$email,"password"=>$pass,"valid"=>1)));

	}
	public function updt_data($uid)
	{	
			require_once 'adds/medoo.php';
			 
			$database = new medoo(array(
				'database_type' => DB_TYPE,
				'database_name' => DB_NAME,
				'server' => DB_SERVER,
				'username' => DB_USER,
				'password' => DB_PASS,
				'charset' => DB_CHARSET
			));
			
			$data = $database->update("users", array("online"=>1),array("id"=>$uid));

	}
}