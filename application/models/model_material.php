<?php

class Model_Material extends Model
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
				return $data = $database->select("article", array("id","title","text","img","date","time"), array("AND"=>array("state[=]" => 1,"id[=]" => $tid)),array("LIMIT"=>1));
			else
				return $data = $database->select("article", array("id","title","text","img","date","time"), array("state[=]" => 1));

	}
}
