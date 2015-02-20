<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Practice extends CI_Controller{
 public function __construct()
 {
	 echo "Constructor calling:";
  parent::__construct();
  //$this->load->model('user_model');
 }
 
 public function basic()
 {
	 $this->load->view('basic/show.php');
	 //$this->load->view('angular/angular_view');
 }
}
?>