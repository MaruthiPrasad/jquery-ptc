<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("input:radio[name=rdbOptions]").change(function(){
		var v = $(this).val();
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
<b>Select Option:</b>
<br />
<input type="radio" id="chk1" name="rdbOptions" value="Option1"/>
<lable for="rdb1">Option1</label>&nbsp;
<input type="radio" id="chk2" name="rdbOptions" value="Option2"/>
<lable for="rdb2">Option2</label>&nbsp;
</body>
</html>