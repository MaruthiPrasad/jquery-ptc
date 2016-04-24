<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("button").click(function(){
		var v = $("input:radio[name=rdbOptions]:checked").val();
		if(v!=undefined)
		{
			alert("The value is:" +v);
		} else {
			alert("Please select any option");
			return false;
		}
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
<b>Select Option:</b>
<br />
<input type="radio" id="rdb1" name="rdbOptions" value="Option1"/>
<lable for="rdb1">Option1</label>&nbsp;
<input type="radio" id="rdb2" name="rdbOptions" value="Option2"/>
<lable for="rdb2">Option2</label>&nbsp;
<br>
<button>Click</button>
</body>
</html>