<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$config = array();

	}

	public function index()
	{
		$this->template->build('home/index');
	}

	public function category( $id)
	{
		$this->template->set_layout('content')->build('home/category');
	}

	public function topic( $id)
	{
		$this->template->set_layout('manages')->build('home/topic');
	}

	public function demo()
	{
		$content = $this->db->get('news')->result_array();

		$this->template->set_layout('content');
		$this->template->build('home/demo' , array('content'=>$content));
	}

	public function view( $mark)
	{

		$content = $this->db->get('news')->row_array();

		$this->template->set_layout('content')->build('home/view' , array('content' => $content));

	}
}