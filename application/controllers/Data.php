<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    
	public function index()
	{
		$data = [
			'title' => 'Data'
		];
		$this->template->load('template','Data',$data);
	}
}
