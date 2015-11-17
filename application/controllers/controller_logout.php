<?php

class Controller_Logout extends Controller
{
	function __construct()
	{
		$this->model = new Model_Logout();
	}
	
	function action_index()
	{
		if(isset($_SESSION['uid']))
		{
			$this->model->updt_data($_SESSION['uid']);
				session_start();
				unset($_SESSION['uid']);
				header('Location:/');
		}
		else
		{
			header('Location:/404');
		}
	}
}
