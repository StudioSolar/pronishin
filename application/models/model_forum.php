<?php

class Model_Forum extends Model
{
	
	public function get_data()
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
			
			return $data = $database->select("forum", array("id","name","description"));
	}
	
	public function get_thread($tid)
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
			
			return $data = $database->select("topic", array("id","name","description","thread"), array("thread[=]" => $tid));
			//допилить в topic кто открыл тикет+когда и доабвить таблицу сообщений
				/*return array(
				'Year' => $tid,
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Lowenbrau выпускаемого в России пивоваренной компанией "CАН ИнБев".'
				);*/
	}
	public function get_topic($forum_id,$topic_id)
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
			$data = //$database->select(array("topic_msg a"",users b"), array("id","uid","text"), array("topic_id[=]" => $topic_id));
			 $database->query("SELECT a.text,b.lname,b.fname FROM `topic_msg` a, `users` b WHERE a.topic_id= ".$topic_id." AND a.id=b.id")->fetchAll();
			if(empty($data))header('Location:/404');
			else return $data;
	}
}