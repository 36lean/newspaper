<?php

class Front_text_module extends CI_Module
{
	public function top_1()
	{
		$this->load->view('text/top_1');
	}

	public function right_1()
	{
		$this->load->view('text/right_1');
	}

	public function bottom_1()
	{
		$this->load->view('text/bottom_1');
	}
}