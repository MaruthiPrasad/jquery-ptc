<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btnSubmit").prop("disabled", "disabled");
	$("#chk1").change(function(){
		if($(this).is(":checked")==true) {
			$("#btnSubmit").prop("disabled", "");
		} else {
			$("#btnSubmit").prop("disabled", "disabled");
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
<input type="checkbox" id="chk1" />
<label id="lbl1" for="chk1">I Agree ...</label>
<br><br>
<input type="submit" id="btnSubmit" value="Submit"/>
</body>
</html>