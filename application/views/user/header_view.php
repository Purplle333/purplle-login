<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "My CI Site" ?> </title>

 <!-- <link rel="stylesheet" type="text/css" href="../view/user.css" /> -->
 
 <script type="text/javascript" >
 
 	$(document).ready(function(){
		
		$('#search').click(function(){
			var isRequest = false;
				var email = $('#email').val();
				var password = $('#pass').val();
				
				if(email != ""){
					if(password != ""){
						isRequest = true;
					}
					else{
							alert("Please Enter Your Password");
					}
				}
				else{
					alert("Please Enter Your Email Id");
				}
				
				if(isRequest){
					$.ajax({
						url: "login",
						type: "GET",
						data: { 'email': email, 'password':password},
						success: function (result) {
							 if(result == 0){
								 alert("Incorrect Email and Password");
							 }
							 else{
								 var url = "profile/"+result;
								 window.location.href = url;
							 }
						}
					});  
				}else{
				//Kuch Kuch Hoga;
				}
		});
		
			function IsEmail(email) {
			var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}$/;
			if(!regex.test(email))
             return true;
			else
			return false;			
			}
		
		$('#save').click(function(){
					
					var request = false;
			var e = document.getElementById("city");
			var strCity = e.options[e.selectedIndex].text;
			
			var e = document.getElementById("sport");
			var strSport = e.options[e.selectedIndex].text;
			
			var name = $('#user_name').val();
			
			var email = $('#email_address').val();
			var mobile = $('#mobile').val();
			var address = $('#address').val();
			var info = $('#info').val();
			var password = $('#password').val();
			var passRepeat = $('#con_password').val();
			
			if(name.length < 3){
				request = false;
				if(name.length == 0){
					alert("Please Enter Your Name");
				}else{
					alert("Name should contain more than 2 letters");
				}
			}else if(IsEmail(email)){
				request = false;
				if(email.length ==0){
					alert("Please Enter Your Email Id");
				}else{
					alert("Please Enter Valid Email Id");
				}
			}else if(mobile.length !=10){
				request = false;
				if(mobile.length ==0){
					alert("Please Enter Your Mobile Number:");
				}else{
					alert("Please Enter valid mobile number:");
				}
			}else{
				if(password.length == 0){
						alert("Please Enter Your Password!!")
					}else if(password.length > 6){
						if(password == passRepeat){
						request = true;	
						}
						else{
							alert("Password doesn't match!!")					
						}
					}else{
							alert("Password Length should be greater than 6");
					}
			}
				if(request)
				{
				$.ajax(
					{
					url: "signup",
					type: "GET",
					data: { 'user_name': name, 'user_email': email, 'password':password, 'passRepeat':passRepeat, 'city':strCity, 'sport':strSport, 'mobile':mobile, 'address':address, 'info':info},
					success: function (result) {
						 
						 if(result == 1){
							 var url = "thank"
							  window.location.href = url;
						 }
						 else{
							 alert("Error");
						 }
					}
				});   
				}
				else{
					console.log(0);
				}			
					
		});
		
		$('#signup').click(function(){
			var url = "signup"; 
            window.location.href = url; 
		});
	});
 </script>
 <style>
body{
background-color:#FFF;
font-family:Monaco,Consolas,'Lucida Grande','Lucida Console';
font-size:16px;
text-shadow:rgba(0,0,0,0.01) 0 0 0;
}
#wrapper{
width:960px;
margin:0 auto;
}
#content{
width:960px;
margin:5px;
float:left;
}
/************************************************/
.signup_wrap{
height:160px;
width:100%;
padding:5px;
background-color:#AD8533;
}
.signin_form{
float:right;
}
.signin_form input{
width:175px;
height:20px;
}
#signup{
	
}

input.submit {
width: 75px;
margin-left:50px;
margin-right : 200px;
}
.reg_form{
width:460px;
padding:20px;
margin:0 auto;
border:3px solid #DFDFDF;
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#cbd4e5));
background: -moz-linear-gradient(top,  #fff,  #cbd4e5);
filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#cbd4e5');
}
.form_title,
.form_sub_title{
	color: purple;
font-size:20px;

font-family:"Lucida Grande",Tahoma,Verdana,Arial,sans-serif;
font-size:20px;
font-weight:bold;
}
.form_sub_title{
font-weight:normal;
padding:6px 0 15px 0;
}
.reg_form p{
width: 300px;
clear: left;
margin: 0;
padding: 5px 0 8px 0;
padding-left: 155px; /*width of left column containing the label elements*/
border-top: 1px dashed gray;
height: 1%;
}
.reg_form label{
float: left;
margin-left: -155px; /*width of left column*/
width: 150px; /*width of labels. Should be smaller than left column (155px) to create some right margin*/
}
input{
padding:3px;
color:#333333;
border:1px solid #96A6C5;
margin-top:2px;
width:180px;
font-size:11px;
}
.greenButton{
width:auto;
margin:10px 0 0 2px;
padding:3px 4px 3px 4px;
color:white;
background-color:#CC3300;
outline:none;
border:1px solid #006600;
font-weight:bold;
}
.greenButton:active{
background-color:#006600;
padding:4px 3px 2px 5px;
}
.error{
color:#F00;
}
#footer{
color:#fff;
padding-top:20px;
text-align:center;
background: #454546; 
height: 20px;
clear:both;
}

</style>
 
</head>
<body>

 <div id="wrapper">
 </body>