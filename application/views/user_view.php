<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<style type="text/css">
button#save{
	margin-top: 20px;
color: red;
width: 90;
}

</style>

<?php foreach ($query as $row): ?>
<h2>Welcome <?php echo $row->username ?>,</h2>
<p>Here are your details:</p>
    <div class="main">
        Email: 	<?php echo $row->email ?></br></br>
		City: 	<?php echo $row->city ?></br></br>
		Sport: 	<?php echo $row->sport ?>
    </div>
    <div id="open" style="display:none">
	<p>
    <label for="city" id="city1">Your City:</label>
    <select name="city" id="city">
	<option value="mumbai" <?php echo set_select('city', 'mumbai', TRUE); ?> >Mumbai</option>
	<option value="jaipur" <?php echo set_select('city', 'jaipur'); ?> >Jaipur</option>
	<option value="bangalore" <?php echo set_select('city', 'bangalore'); ?> >Bangalore</option>
	<option value="hydrabad" <?php echo set_select('city', 'hydrabad'); ?> >Hydrabad</option>
	<option value="delhi" <?php echo set_select('city', 'delhi'); ?> >Delhi</option>
	<option value="chennai" <?php echo set_select('city', 'chennai'); ?> >Chennai</option>
	<option value="pune" <?php echo set_select('city', 'pune'); ?> >Pune</option>
	<option value="lucknow" <?php echo set_select('city', 'lucknow'); ?> >Lucknow</option>
	</select>
   </p>
	</div>
	
<?php endforeach ?>
<button class="greenButton" id="save">Edit Details</button>

<script type="text/javascript">

	$(document).ready(function(){
		$("#save").click(function(){
			alert(1);
			$('#open').show();
		});
		
	});
</script>

