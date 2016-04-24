<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#btnRed').click(function(){
		var redElmts = $(".red");
		alert("Red Items:" + redElmts.length);
	});
	$('#btnGreen').click(function(){
		var greenElmts = $(".green");
		alert("Green Items:" + greenElmts.length);
	});
	$('#btnYellow').click(function(){
		var yellowElmts = $(".yellow");
		alert("Yellow Items:" + yellowElmts.length);
	});
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
border:2px solid red;
}
</style>
</head>
<body>
<button id="btnRed">RedContent</button>
<button id="btnGreen">GreenContent</button>
<button id="btnYellow">YellowContent</button>
<br/>
<div class="red">Red</div>
<div class="green">Green</div>
<div class="Yellow">Yellow</div>
<div class="green">Green</div>
</body>
</html>