<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$nameErr = $emailErr = $passwordErr= "";
     $name = $email = $passwordErr = "";
	 require 'h2o/h2o.php';
class Django extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 
 public function email()
 {   				
						$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_auth' => true,
			  'smtp_user' => 'theycallmeakki',
			  'smtp_pass' => 'azadakki',
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

					$message = 'Something';
					$this->load->library('email', $config);
				  //$this->email->set_newline("\r\n");
				  $this->email->from('theycallmeakki@gmail.com'); // change it to yours
				  $this->email->to('jugal.singh007@gmail.com');// change it to yours
				  $this->email->subject('Testing Local mail');
				  $this->email->message($message);
				  if($this->email->send())
				 {
				  echo 'Email sent Successfully.';
				 }
				 else
				{
				 show_error($this->email->print_debugger());
				}	
 } 
 public function django()
 {
	 $h2o = new h2o('templates/index.html');
	 $person =array(
                'name' => 'Jugal Singh', 'age' => 23
        );
		//var_dump($person);
        echo $h2o->render(compact('person'));
        //echo $h2o->render(array('name'=>'Jugal Singh'));
 }
 
 public function template()
 {
	 $data = array(
        'title' => 'Building Templates In CodeIgniter',
			);
 
		$this->load->library('templates');
		$this->templates->load('default', 'content', $data);
 }
 
 public function logout()
 {	 
	    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'logged_in_user') {
                $this->session->unset_userdata($key);
            }
        }
		$this->load->view('user/signout.php');
 }
 public function home()
 {
	 if($this->session->userdata("logged_in_user")){
		 //Redirect to profile page
		 $id = $this->session->userdata('logged_in_user');
			 redirect('/user/profile/'.$id);
		}
	 $data['title']= 'Home';
	 $this->load->view('user/header_view',$data);
	 $this->load->view("user/registration_view.php", $data);
 }
 public function profile($id)
 {
	 $this->load->helper('url');
	 if(!$this->session->userdata("logged_in_user")){
		  //redirect to home page
		 redirect('/user/home');
	}	 
	
	 $data['title']= 'Home';
     $this->load->view('user/header_view',$data);
	 $data['result'] = $this->user_model->getData($id);
	
	  $h2o = new h2o('templates/profile.html');
         echo $h2o->render(compact('data'));
	 //$this->load->view("user/user_view.php", $data);
 }
 public function login()
 {
	 if($this->input->is_ajax_request())
	 {
		  $email = $this->input->get('email');
		  $password = $this->input->get('password');
		  
		  $result=$this->user_model->check_user($email,$password);
			
		  if(!$result)
			  echo"0";
		  else{
			  $this->session->set_userdata("logged_in_user",$result);
			  //var_dump($this->session->userdata("logged_in_user"));
			   echo $result;
			
		  }
			 
	 } else{
		 echo "No Ajax request fired";
		 //$email = $this->input->get('email');
		 //echo $email;
	 }
 }
 public function signup()
 {
	 if($this->input->is_ajax_request()){
		  $name = $this->input->get('user_name');
		  $email = $this->input->get('user_email');
		  $password = $this->input->get('password');
		  $city = $this->input->get('city');
		  $sport = $this->input->get('sport');
		  $mobile = $this->input->get('mobile');
		  $info = $this->input->get('info');
		  $address = $this->input->get('address');
		
		  $this->user_model->newuser($name, $email, $password, $city, $sport, $mobile, $info, $address);
		  echo "1";
	 }else{
		 if($this->session->userdata("logged_in_user")){
			 //redirect to profile page
		 }
		 $data['title'] = 'New User Sign Up';
		$this->load->view('user/header_view',$data);
		$this->load->view('user/signup',$data);
	 }
 }
 public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('user/header_view',$data);
  $this->load->view('user/thank_view.php', $data);
 }
 
 public function update()
 {
	  if($this->input->is_ajax_request())
		 {
			  $id = $this->input->get('id');
			  $city = $this->input->get('city');
			  $sport = $this->input->get('sport');
			  $mobile = $this->input->get('mobile');
			  $address = $this->input->get('address');
			  $info = $this->input->get('info');
			  $result=$this->user_model->updateDetails($id, $city, $sport, $mobile, $address, $info);
					  
			  if(!$result)
				  echo"0";
			  else
				  echo $result;
		 }
 }
 
 public function forget()
 {
	 echo "Wait please, Code is under development!!";
	 $this->load->view('user/header_view.php');
	 $this->load->view('user/forget_view.php');
 }
 }

?>