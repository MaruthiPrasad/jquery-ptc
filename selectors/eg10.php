<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("input:checkbox[name=chkOptions]").change(function(){
		var strCheckedItems = "";
		$("input:checkbox[name=chkOptions]:checked").each(function(){
			strCheckedItems += $(this).val() + ",";
		});
		strCheckedItems = strCheckedItems.substring(0, strCheckedItems.length-1);
		$("#spanResult").html("<b>Checked Items Are:<b>" + strCheckedItems);
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
<b>Select Options:</b>
<br />
<input type="checkbox" id="chk1" name="chkOptions" value="Option1"/>
<lable for="chk1">Option1</label>&nbsp;
<input type="checkbox" id="chk2" name="chkOptions" value="Option2"/>
<lable for="chk2">Option2</label>&nbsp;
<input type="checkbox" id="chk3" name="chkOptions" value="Option3"/>
<lable for="chk3">Option3</label>&nbsp;
<br /><br />
<span id="spanResult"></span>
</body>
</html>