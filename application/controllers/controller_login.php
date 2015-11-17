<?php

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
	}
	
	function action_index()
	{
		//$data["login_status"] = "";
		var_dump($_POST);
		
		
		if(isset($_POST['email']) && isset($_POST['password']))
		{
			$data = $this->model->get_data($_POST['email'],hash( 'whirlpool', $_POST['password'] ));
			if (empty($data))
			{
				header('Location:/');
			}
			else
			{				
				session_start();
				$_SESSION['uid'] = $data[0]['id'];
				$this->model->updt_data($_SESSION['uid']);
				//var_dump($_SESSION['uid']);
				header('Location:/');
			}
		}
		else
		{
			header('Location:/404');
		}
	}
	
}
