
<style type="text/css">
#logout{
	margin-top: 20px;
width: 100px;
margin-left: auto;
}
#update{
	width: 100px;
}
#edit{
	width: 100px;
}

</style>
<?php foreach ($result as $row): ?>
<h2>Welcome <?php echo $row->username ?>,</h2>
<p class="set">Your Details:</p>
    <div class="main">
      Email: 	<?php echo '<a id="newEmail">'.$row->email.'</a>' ?> </br></br>
	  Mobile: 	<?php echo '<a id="newMobile">'.$row->mobile.'</a>' ?> </br></br>
	  Address: 	<?php echo '<a id="newAddress">'.$row->address.'</a>' ?> </br></br>
	  Info: 	<?php echo '<a id="newInfo">'.$row->info.'</a>' ?> </br></br> 
	  City:     <?php echo '<a id="newCity">'.$row->city.'</a>' ?> </br></br>
	  Sport: 	<?php echo '<a id="newSport">'.$row->sport.'</a>'?> </br></br>
    </div>
    <div id="open" style="display:none">
	<p>
    <label for="city" id="city1">Change City:</label>
    <select name="city" id="city">
	<option value="$row->city"><?php echo $row->city ?></option>
	<option value=""><?php set_select('city', ''); ?>-----</option>
	<option value="mumbai" <?php echo set_select('city', 'mumbai'); ?> >Mumbai</option>
	<option value="jaipur" <?php echo set_select('city', 'jaipur'); ?> >Jaipur</option>
	<option value="bangalore" <?php echo set_select('city', 'bangalore'); ?> >Bangalore</option>
	<option value="hydrabad" <?php echo set_select('city', 'hydrabad'); ?> >Hydrabad</option>
	<option value="delhi" <?php echo set_select('city', 'delhi'); ?> >Delhi</option>
	<option value="chennai" <?php echo set_select('city', 'chennai'); ?> >Chennai</option>
	<option value="pune" <?php echo set_select('city', 'pune'); ?> >Pune</option>
	<option value="lucknow" <?php echo set_select('city', 'lucknow'); ?> >Lucknow</option>
	</select>
   </p>
   <p>
  <label for="sport">Sport Pref:</label>
    <select name="sport" id="sport">
	<option value="$row->sport"> <?php echo $row->sport ?></option>
	<option value=""><?php set_select('sport', ''); ?>-----</option>
	<option value="cricket" <?php echo set_select('sport', 'cricket'); ?> >Cricket</option>
	<option value="football" <?php echo set_select('sport', 'football'); ?> >Football</option>
	<option value="hockey" <?php echo set_select('sport', 'hockey'); ?> >Hockey</option>
	<option value="chess" <?php echo set_select('sport', 'chess'); ?> >Chess</option>
	<option value="basketball" <?php echo set_select('sport', 'basketball'); ?> >Basketball</option>
	<option value="badminton" <?php echo set_select('sport', 'badminton'); ?> >Badminton</option>
	<option value="tennis" <?php echo set_select('sport', 'tennis'); ?> >Tennis</option>
	</select>
  </p>
  <p>
  <label for="mobile">Mobile No: +91</label>
  <input type="text" id="mobile" name="mobile" value="<?php echo $row->mobile ?>" />
  </p>
  <p>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" value="<?php echo $row->address ?>" />
  </p>
  <p>
	<label for="info">About Yourself:</label>
  <input type="text" id="info" style="width: 184px;height: 25px;" name="info" value="<?php echo $row->info ?>"> </input>
  </p>
	</div>
	<input type="submit" id="logout" value="Logout" />
	<input type="submit" id="update" value="Update details" />
	<input type="submit" id="edit" style="display:none;" value="Save" />
	
<?php endforeach ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$("#logout").click(function(){
			//window.location.assign("http://localhost/codeig/user/home");
			$.ajax({
					  url: 'http://localhost/codeig/user/logout',
					  type: 'GET',
					  success: function(result) {
						  var url = "/codeig/user/logout";
						  window.location.href = url;
			  },
			  error: function(e) {
				  alert("Error");
				alert(e.message);
			  }
		});
			
		});
		$('#update').click(function(){
			$('#open').css("display", "");
			$('#edit').css("display", "");
			$('#update').css("display", "none");
			//$("#update").attr('value', 'Save');
		});
		
		$('#edit').click(function(){
			$('#edit').css("display", "none");
			$('#update').css("display", "");
			var isUpdate = false;
			var e = document.getElementById("city");
			var strCity = e.options[e.selectedIndex].text;
			
			var e = document.getElementById("sport");
			var strSport = e.options[e.selectedIndex].text;
			
			var mobile = '';
			if($('#mobile').val().length !=10){
				alert("Please Enter valid mobile number:")
				isUpdate = false;
			}else{
			mobile = $('#mobile').val();
			isUpdate = true;
			}
			
			var address = $('#address').val();
			var info = $('#info').val();
			
			var id = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
		
			  if(isUpdate){
				var object = "id="+id+"&city="+strCity+"&sport="+strSport+"&mobile="+mobile+"&info="+info+"&address="+address;
				
					$.ajax({
					  url: 'http://localhost/codeig/user/update',
					  type: 'GET',
					  data: object,
					  success: function(result) {
				
					if(result == '1'){
						$('#open').css("display", "none");
						$('#edit').css("display", "none");
						$("#newCity").html(strCity);
						$("#newSport").html(strSport);
						$("#newMobile").html(mobile);
						$("#newAddress").html(address);
						$("#newInfo").html(info);
					}
			  },
			  error: function(e) {
				alert(e.message);
			  }
		});
			}
			
		});
		
	});
</script>

