<?php

class Model_Main extends Model
{
	
	public function get_data($uid)
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
			
			 //$data=$database->query("SELECT DISTINCT a.id,b.lname,b.fname,a.title,a.text FROM news a,users b WHERE a.user_id=b.id GROUP BY a.id")->fetchAll();
			 return $data;
	}

}
