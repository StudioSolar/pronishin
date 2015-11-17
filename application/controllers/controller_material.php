<?php

class Controller_Material extends Controller
{
	public $tid;
	function __construct($id)
	{
		$tid = $id;
		$this->model = new Model_Material();
		$this->view = new View();
	}
	
	function action_index()
	{
			$data = $this->model->get_data();
			$this->view->generate('materials_view.php', 'template_view.php', $data);
	}
		function action_view($tid)
	{
		if($data = $this->model->get_data($tid))
		{
			$this->view->generate('material_view.php', 'template_view.php', $data);
		}
		else
			header('Location:/404');


	}
}
