<a id="tip" href="#"><img src="http://s32.iamwire.com.s3.amazonaws.com/wp-content/uploads/2015/01/purplle.jpg" style="width:100px;height:100px;"></a>
<div id="tooltip">
<table>
<tbody>
<tr>
<td>
<a href="http://www.purplle.com" target="_blank"><img src="http://s32.iamwire.com.s3.amazonaws.com/wp-content/uploads/2015/01/purplle.jpg" style="width:100px;height:100px;"></a>
</td>
<td>
<a href="http://www.purplle.com" target="_blank">Visit Purplle</a></br><br>
 Cost : 200Rs.</br>
<a href="http://www.purplle.com" target="_blank">Like this item</a></br>
<a href="http://www.purplle.com" target="_blank">purchase this item</a>
</td>
</tr>
</tbody>
</table>
</div>

<style type="text/css">
td { 
    padding: 10px;
}
	#tooltip { 
    display: none; 
    background-color: 'yellow';
    border: 1px solid black;
    width: 265px;
	height:165px;
    <!--padding: 10px;-->
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
var timeout;

function hide() {
    timeout = setTimeout(function () {
        $("#tooltip").hide('fast');
    }, 500);
};

$("#tip").mouseover(function () {
    clearTimeout(timeout);
    $("#tooltip").stop().show('fast');
}).mouseout(hide);

$("#tooltip").mouseover(function () {
    clearTimeout(timeout);
}).mouseout(hide);


</script>