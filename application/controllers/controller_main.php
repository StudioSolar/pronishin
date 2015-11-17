<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
			$this->userdata = new Userdata();
			$this->model = new Model_Main();
			$data = $this->model->get_data($_SESSION['uid']);
			$userdata = $this->userdata->user_data($_SESSION['uid']);	
		$this->view->generate((isset($_SESSION['uid']))?'main_view.php':'guest_view.php', (isset($_SESSION['uid']))?'user_view.php':'template_view.php', $data,$userdata);
	}
}