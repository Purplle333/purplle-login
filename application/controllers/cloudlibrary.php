<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cloudlibrary extends CI_Controller
{
    function index()
    {
		 //$this->load->view('cloudinary/select_image');
        $this->load->library('purplleupload');
        echo $this->purplleupload->show_hello_world();
		echo $this->purplleupload->upload_image("C:/Image/nail-polish.jpg");
		echo "File Uploaded successfully!!";
    }
}
?>