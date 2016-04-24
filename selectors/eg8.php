<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#chk1").change(function(){
		if($(this).is(":checked")==true) {
			$("input:checkbox[name=chkOptions]").prop("checked","checked");
			$("#lbl1").text("De-Select All");
		} else {
			$("input:checkbox[name=chkOptions]").prop("checked", "");
			$("#lbl1").text("Select All");
		}
	});
	$("input:checkbox[name=chkOptions]").change(function(){
		var chckdElmts = $("input:checkbox[name=chkOptions]:checked").length;
		var allElmts = $("input:checkbox[name=chkOptions]").length;
		if(chckdElmts==allElmts) {
			$("#chk1").prop("checked","checked");
			$("#lbl1").text("De-Select All");
		} else {
			$("#chk1").prop("checked","");
			$("#lbl1").text("Select All");
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
<label id="lbl1" for="chk1">Select All</label>
<br><br>
<input type="checkbox" name="chkOptions" />Option1
<br>
<input type="checkbox" name="chkOptions" />Option2
<br>
<input type="checkbox" name="chkOptions" />Option3
<br>
</body>
</html>