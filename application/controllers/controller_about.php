<?php

class Controller_About extends Controller
{

	function __construct()
	{
		$this->model = new Model_About();
		$this->view = new View();
	}
	
	function action_codex()
	{
		$data = $this->model->get_data();		
		$this->view->generate('codex_view.php', 'template_view.php', $data);
	}
	function action_company()
	{
		$data = $this->model->get_data();		
		$this->view->generate('company_view.php', 'template_view.php', $data);
	}
	function action_pronishin()
	{
		$data = $this->model->get_data();		
		$this->view->generate('pronishin_view.php', 'template_view.php', $data);
	}

}
