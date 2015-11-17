<?php

class Model_Logout extends Model
{
	function __construct()
	{
		
	}
	
	public function updt_data($uid)
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
			
			return $data = $database->update("users", array("online"=>0),array("id"=>$uid));

	}
}