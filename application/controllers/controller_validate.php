<?php

class Controller_Validate extends Controller
{
	public $tid;
	
		function __construct($id)
	{
		$tid = $id;
		$this->model = new Model_Validate();
		$this->view = new View();
	}
	function action_index()
	{
		//if($_SESSION['validate'])
			$this->view->generate('validate_view.php', 'template_view.php');
		//else 
		//	header('Location:/404');
	}
	function action_user($tid)
	{
		if($tid)
		{
			try{
			$data = $this->model->u_valid($tid);
			if($data)
				$this->view->generate('success_view.php', 'template_view.php');
			else
				header('Location:/404');
			}
			catch (Exception $e)
			{
				header('Location:/404');
			}
		}
		else
		{
			$this->view->generate('validate_view.php', 'template_view.php');
		}
			//var_dump($tid);
	}
}
