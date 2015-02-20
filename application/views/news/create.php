<h2 style="color:red" >Create A User Profile</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="name">Name:</label>
	<input type="input" name="name" id="1" /><br /><br />
	

	<div id="drpdown" style="margin: inherit">
	Your City:<select id="city" style="margin-left: 20;">
	  <option value="mumbai">Mumbai</option>
	  <option value="delhi">Delhi</option>
	  <option value="jaipur">Jaipur</option>
	  <option value="bangalore">Bangalore</option>
	  	  <option value="chennai">Chennai</option>
	  <option value="agra">Agra</option>
	  <option value="pune">Pune</option>
	  <option value="hydrabad">Hydrabad</option>
	</select>
	</div>
	
	<div id="drpdown" style="margin: inherit">
	favorite Sport:<select id="city" style="margin-left: 20;">
	  <option value="cricket">Cricket</option>
	  <option value="football">Football</option>
	  <option value="hockey">Hockey</option>
	  <option value="chess">Chess</option>
	  <option value="basketball">Basketball</option>
	  <option value="badminton">Badminton</option>
	  <option value="tennis">Tennis</option>
	  
	</select>
	</div>
	
	<label for="email">Email:</label>
	<input type="input" name="email" id="1" /><br /><br />
	
	<label for="password">Password:</label>
	<input type="input" name="password" /><br /><br />

	<label for="text">Text</label>
	<textarea name="text" style="margin-left: 10px"></textarea><br /><br />

	<input type="submit" name="signin" value="Sign In" />
	<input type="submit" name="submit" value="New Account" />
	

</form>