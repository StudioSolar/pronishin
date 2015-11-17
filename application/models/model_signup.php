<?php

class Model_Signup extends Model
{
	function __construct()
	{
		
	}
	
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
	public function send_email($email,$valid_hash)
	{
		//mail("h1763157@trbvm.com",  "Валидация на ".$_SERVER['SERVER_NAME'], " Эта процедура необходима для предотвращения взлома, спама, а так же мошенничества на сайте. Перейдите по ссылке для дальнейшей регистрации.\n".(string)$_SERVER['SERVER_NAME'].'/validate/'.$valid_hash."\n Спасибо за понимание.","From: yankolovorotny@gmail.com");
		mail($email, "Валидация на ".$_SERVER['SERVER_NAME'], " Эта процедура необходима для предотвращения взлома, спама, а так же мошенничества на сайте. Перейдите по ссылке для дальнейшей регистрации.\n".(string)$_SERVER['SERVER_NAME'].'/validate/'.$valid_hash."\n Спасибо за понимание.","From: yankolovorotny@gmail.com");
		//допилить отправку по почте
	}
	public function set_validate_hash($fname,$lname,$email,$hash)
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
			
			$data = $database->select("users", array("id"),array("AND"=>array("fname"=>$fname,"lname"=>$lname,"email"=>$email)));
			foreach($data as $row)
			{
				$uid=$row['id'];
			}
			$data = $database->insert("validation", array("uid"=>$uid,"hash"=>$hash));
	}
}