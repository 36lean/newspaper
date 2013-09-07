<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->template->build('home/index');
	}

	public function demo()
	{
		$content = $this->db->get('news')->result_array();

		$this->template->set_layout('content');
		$this->template_cache->view('home/demo' , array('content'=>$content));
	}
}