<html>
<head>
 
<!--<script type="text/javascript" src="jquery-1.4.2.min.js"></script>-->
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style type="text/css">
	#hint{
		cursor:pointer;
	}
	.tooltip{
		margin:8px;
		padding:8px;
		border:1px solid blue;
		background-color:yellow;
		position: absolute;
		z-index: 2;
	}
</style>
 
</head>
 
<body>
 
<h1>jQuery tooltips example</h1>
 <img src="http://www.gettyimages.in/CMS/StaticContent/1391099215267_hero2.jpg" id="hint" alt="Coffee Cup" style="width:304px;height:228px">
<script type="text/javascript">
 
$(document).ready(function() {
 
	var changeTooltipPosition = function(event) {
	  var tooltipX = event.pageX - 8;
	  var tooltipY = event.pageY + 8;
	  $('div.tooltip').css({top: tooltipY, left: tooltipX});
	};
 
	var showTooltip = function(event) {
	  $('div.tooltip').remove();
	  $('<div class="tooltip" style="height:200px;width:200px;"><p>Please click belw link</p>I\' am tooltips! tooltips! tooltips! :)</div>')
            .appendTo('body').css('position','fixed');
	 // changeTooltipPosition(event);
	};
 
	var hideTooltip = function() {
	   $('div.tooltip').remove();
	};
 
	$("#hint").bind({
	   //mousemove : changeTooltipPosition,
	   mouseenter : showTooltip,
	   mouseleave: hideTooltip
	});
});
 
</script>
 
</body>
</html>