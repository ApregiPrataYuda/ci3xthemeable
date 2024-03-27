<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horizontal_page extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'Horizontal_page'
		];
		$this->load->view('Horizontal_page');
	

	}
}



