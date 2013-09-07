<?php

class Manage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->template->set_layout('manages.php');
	}

	public function index()
	{
		$this->template->build('manage/index');
	}
}