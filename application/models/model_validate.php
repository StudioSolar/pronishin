<?php

class Model_Validate extends Model
{
	
	public function get_data($fname,$lname,$email,$pass)
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
			
			return $data = $database->select("users", array("id","fname","lname","email","password"),array("AND"=>array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"password"=>$pass)));

	}
	public function set_data($fname,$lname,$email,$pass)
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
			
			return $data = $database->insert("users", array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"password"=>$pass));

	}
	public function u_valid($tid)
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
			$data = $database->select("validation", array("uid"),array("AND"=>array("hash"=>$tid)));
			foreach($data as $row)
			{
				$uid = $row['uid'];
			}
			try{
			$data = $database->update("users", array("valid"=>1),array("id"=>$uid));
			$data = $database->delete("validation",array("AND"=>array("uid"=>$uid,"hash"=>$tid)));
			}
			catch(Exception $e)
			{
				
			}
			return $data;
	}
}