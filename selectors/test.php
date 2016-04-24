<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("button").click(function(){
		var v = $("#db1").val();
		if(v=="Select")
		{
			alert("Please select option !!!");
			return false;
		}
		alert(v);
	});
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
<select id="db1">
<option value="Select">--Select--</option>
<option value="Option1">Option1</option>
<option value="Option2">Option2</option>
<option value="Option3">Option3</option>
<option value="Option4">Option4</option>
</select>
<button>Display</button>
</body>
</html>