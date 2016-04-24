<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("img").hide();
	$("#chk1").change(function(){
		if($(this).is(":checked")===true)
		{
			$("img").show();
		} else {
			$("img").hide();
		}
	})
});
</script>
<style>
.dive{
padding:5px;
margin:5px;
border:3px solid red;
background-color:yellow;
width:100px;
height:100px;
}
</style>
</head>
<body>
<input type="checkbox" id="chk1" />
<label for="chk1">Show/Hide</label>
<br />
<img src="img/Winter.jpg" width="200" height="200" alt="Image"/>
</body>
</html>