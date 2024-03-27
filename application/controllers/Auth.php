<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
      
        $data = [
            'title' => 'Login'
            ];
                  $this->load->view('Auth/Auth_header',$data);
                  $this->load->view('Auth/Auth_footer',$data);
                  $this->load->view('Auth/Login');
	
}
}