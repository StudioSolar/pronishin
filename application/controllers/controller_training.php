<?php

class Controller_Training extends Controller
{
	public $tid;
	function __construct($id)
	{
		$tid = $id;
		$this->model = new Model_Training();
		$this->view = new View();
	}
	
	function action_index()
	{
			$data = $this->model->get_data();
			$this->view->generate('trainings_view.php', 'template_view.php', $data);
	}
		function action_view($tid)
	{
		if($data = $this->model->get_data($tid))
		{
			$this->view->generate('training_view.php', 'template_view.php', $data);
		}
		else
			header('Location:/404');


	}
}
