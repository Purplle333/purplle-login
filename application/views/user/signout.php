<div id="logged">
<h1>You logged out successfully</h1>
<h3>Please login to visit your profile again!!</h3>
  <input type="submit" id="login" value="Login" /> 
  <span id="or">OR</span>
	<input type="submit" id="register" value="Register" />
</div>

<style type="text/css">
#logged{
	margin-left:90px;
}
h1{
	color: grey;
}
h3{
	color: lightcoral;margin-left:28px;
}
#or{
	margin-left:10px;
}
#login{
	width: 88px;
height: 25px;
margin-left: 43px;
font-family: monospace;
font-size: large;
}
#register{
	width: 135px;
height: 25px;
font-family: monospace;
margin-left: 12px;
font-size: large;
}

</style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){
	   $('#login').click(function(){
			var url = "home";
            window.location.href = url;
	   });
	    $('#register').click(function(){
			var url = "signup";
            window.location.href = url;
	   });
	   
   });
  
  </script>