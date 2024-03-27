<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'Form'
		];
		$this->template->load('template','Form',$data);
	}
}
