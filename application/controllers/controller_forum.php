<?php

class Controller_Forum extends Controller
{
	public $tid;
	function __construct($id)
	{
		$tid=$id;
		$this->model = new Model_Forum();
		$this->view = new View();
		$this->userdata = new Userdata();
	}
	
	function action_index()
	{

		$data = $this->model->get_data();	
		$userdata = $this->userdata->user_data($_SESSION['uid']);	
		$this->view->generate((isset($_SESSION['uid']))?'forum_view.php':'404_view.php', (isset($_SESSION['uid']))?'user_view.php':'template_view.php', $data,$userdata);
	}
	function action_view($forum_id,$topic_id)
	{
		if(!$topic_id)
		{
			$data = $this->model->get_thread($forum_id);
			if(empty($data)) 
				echo '<meta http-equiv="refresh" content="0;URL=/404">';	
			else $this->view->generate((isset($_SESSION['uid']))?'thread_view.php':'404_view.php', (isset($_SESSION['uid']))?'user_view.php':'template_view.php', $data,$userdata = $this->userdata->user_data($_SESSION['uid']));
		}
		else
		{
			$data = $this->model->get_topic($forum_id,$topic_id);
			$this->view->generate((isset($_SESSION['uid']))?'topic_view.php':'404_view.php', (isset($_SESSION['uid']))?'user_view.php':'template_view.php', $data,$userdata = $this->userdata->user_data($_SESSION['uid']));
		}
	}
}
