<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
public function getData($id)
{
	$this->db->where('id', $id);
	//$this->db->where('id', $id);
	$query = $this->db->get('purple');
	 if($query->num_rows()>0)
	 {
		 return $query->result();
	 }
}
 function check_user($email,$password)
 {
   //$query = $this->db->query("select * from profile where email like '%$email%' AND password like '%$password%'");
 
    $this->db->like('email', $email);
	$this->db->like('password', $password);
	$query = $this->db->get('purple');
	   if($query->num_rows()>0)
	   {
			 foreach ($query->result() as $row)
			 {
				 return $row->Id;
			 }
	   }
	   else
	   {
		   return "0";
	   } 
 }
 
 public function newuser($name, $email, $password, $city, $sport, $mobile, $info, $address)
 {
	 $data = array(
		'username'=>$name,
		'email'=>$email,
		'password'=>$password,
		'city'=>$city,
		'sport'=>$sport,
		'mobile'=>$mobile,
		'info'=>$info,
		'address'=>$address
	 );
	  $this->db->insert('purple',$data);
 }
 
 public function updateDetails($id, $city, $sport, $mobile, $address, $info)
 {
	 $query =$this->db->query("Update purple set city='$city',sport='$sport',mobile='$mobile',address='$address',info='$info' where Id = $id");
	 
	 return true;
 }
}
?>