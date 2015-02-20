<h2>Select Image from drive:</h2>
<a href="#" id="upload_widget_opener">Upload multiple images</a>

<script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>  
          
<script type="text/javascript">  
  document.getElementById("upload_widget_opener").addEventListener("click", function() {

    cloudinary.openUploadWidget({ cloud_name: 'purplle-com', upload_preset: 'a5vxnzbp'}, 
      function(error, result) { console.log(error, result) });

  }, false);
</script>