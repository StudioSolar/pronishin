<?php

class Model_Training extends Model
{
	
	public function get_data($tid=null)
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
			 
			// Enjoy
			/*$database->insert('forum', array(
				'name' => 'foo',
				'description' => 25,
				'active' => 1
			));*/
			if(isset($tid))
				return $data = $database->select("training", array("id","title","description","place","start_date","end_date","time","price"), array("AND"=>array("state[=]" => 1,"id[=]" => $tid)),array("LIMIT"=>1));
			else
				return $data = $database->select("training", array("id","title","description"), array("state[=]" => 1));

	}
}
