<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {
	public function index()
	{
		echo "method Calling";
		$this->load->view('welcome_message');
	}
}