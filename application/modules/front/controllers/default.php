<?php

class Front_default_module extends CI_Module
{

	public function left_1()
	{
		$this->load->view('default/left_1');
	}

	public function center_1()
	{
		$this->load->view('default/center_1');
	}

	public function right_1()
	{
		$this->load->view('default/right_1');
	}

}