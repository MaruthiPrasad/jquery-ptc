<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("div").click(function(){
		alert($(this).html());
	})
});
</script>
<style>
div{
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
<b>Click below box to view the contents</b>
<br/>
<div>This is div1</div>
<div>This is div2</div>
<div>This is div3</div>
<div>This is div4</div>
</body>
</html>