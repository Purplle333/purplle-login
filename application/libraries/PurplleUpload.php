<?php 

require 'Cloudinary.php';
require 'Uploader.php';
require 'Api.php';

class PurplleUpload {

function upload_image($file)
{	
        $data = \Cloudinary\Uploader::upload($file);
   
        $publicId = $data['public_id'];
		//var_dump($publicId);
   
	     $url = cloudinary_url($publicId,
                          array("effect" => "make_transparent", "background_removal" => 'remove_the_background'));
		 var_dump($url);
		 $file = file_get_contents($url);
         file_put_contents("C:/Image/nail-polish.png",$file);
}

  function show_hello_world()
  {
    echo 'Hello, Implementing Cloudinary library!!   ';
  }
}
?>