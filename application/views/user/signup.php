<div class="reg_form">
<div class="form_title">Welcome to Purplle.com</div>
<div class="form_sub_title">If You dont have an account, please register</div>
  <p>
  <label for="user_name">User Name:</label>
  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
   <span class="error">*</span>
  </p>
  <p>
  <label for="email_address">Your Email:</label>
  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
 <span class="error">*</span>
  </p>
  <p>
  <label for="mobile">Mobile No:    +91</label>
  <input type="text" id="mobile" name="mobile" value="<?php echo set_value('mobile'); ?>" />
 <span class="error">*</span>
  </p>
  <p>
  <label for="city" id="city1">Your City:</label>
    <select name="city" id="city">
	<option value="none" <?php echo set_select('city', '', TRUE); ?> ></option>
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
  <label for="sport">Sport You Like:</label>
    <select name="sport" id="sport">
	<option value="none" <?php echo set_select('sport', '', TRUE); ?> ></option>
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
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" value="<?php echo set_value('address'); ?>" />
  </p>
  <p>
	<label for="info">About Yourself:</label>
  <textarea type="text" id="info" style="width: 184px;height: 25px;" name="info" value="<?php echo set_value('info'); ?>"> </textarea>
  </p>
  <p>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  <span class="error">*</span>
  </p>
  <p>
  <label for="con_password">Confirm Password:</label>
  <input type="text" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  <span class="error">*</span>
  </p>
 
  <p>
  <input type="submit" class="greenButton" id="save" value="Submit" />
  </p>
 
</div>