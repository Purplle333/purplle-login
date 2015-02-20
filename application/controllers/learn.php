<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class learn extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 
 public function show()
 {
	 $this->load->view('angular/angular_view');
 }
}
?>