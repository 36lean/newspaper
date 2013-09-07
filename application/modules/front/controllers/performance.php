<?php

class Front_performance_module extends CI_Module
{
	public function benchmark()
	{
		$this->load->view('performance/benchmark');
	}
}