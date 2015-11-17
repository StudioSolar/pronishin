<?php

class Controller_404 extends Controller
{
	
	function action_index()
	{
		$this->userdata = new Userdata();
		$userdata = $this->userdata->user_data($_SESSION['uid']);
		$this->view->generate('404_view.php', (isset($_SESSION['uid']))?'user_view.php':'template_view.php',null,$userdata);
	}

}
