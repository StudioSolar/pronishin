<?
class Userdata
{
	public function user_data($uid)
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
			
			$data = $database->select("users", array("id","fname","lname","email"),array("id"=>$uid));
			//var_dump($data);
			return $data;
	}
	
}