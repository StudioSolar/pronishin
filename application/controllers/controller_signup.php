<?php

class Controller_Signup extends Controller
{
	function __construct()
	{
		//require_once('application/models/model_signup.php');
		$this->model = new Model_Signup();
		
	}
	function action_index()
	{
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pass']) && isset($_POST['email']))
		{
			$data = $this->model->get_data($_POST['fname'],$_POST['lname'],$_POST['email'],hash( 'whirlpool', $_POST['pass'] ));
			if (empty($data))
			{
				$this->model->set_data($_POST['fname'],$_POST['lname'],$_POST['email'],hash( 'whirlpool', $_POST['pass'] ));
				$this->userdata = new Userdata();
				$valid_hash = hash( 'whirlpool',$_POST['email'].$_POST['fname'].$_POST['lname']);
				$this->model->set_validate_hash($_POST['fname'],$_POST['lname'],$_POST['email'],$valid_hash);
				$this->model->send_email($_POST['email'],$valid_hash);
				header('Location:/validate');
			}
			else
			{
				echo "error";
			}
			/*if($login=="admin" && $password=="12345")
			{
				$data["login_status"] = "access_granted";
				
				session_start(); echo $_SESSION['admin'];
				$_SESSION['admin'] = $password;
				header('Location:/admin/');
			}
			else
			{
				$data["login_status"] = "access_denied";
			}*/
		}
		else
		{
			header('Location:/404');
		}
		
		//$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	
}
