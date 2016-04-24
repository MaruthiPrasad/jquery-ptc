<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var elmts = $("div, p.green");
	$("#btnShow").click(function(){
		elmts.show();
	})
	$("#btnHide").click(function(){
		elmts.hide();
	})
	$("#btnToggle").click(function(){
		elmts.toggle();
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
<b>Click the button to view the result</b>
<br/>
<button id="btnShow">show</button>&nbsp;
<button id="btnHide">Hide</button>&nbsp;
<button id="btnToggle">Toggle</button>
<br/>
<b>Enter Text Here</b><input type="text" />
<br />
<div class="green">This is div tag1</div>
<p>This is Paragraph tag1</p>
<div>This is div tag2</div>
<p class="green">This is Paragraph tag2</p>
</body>
</html>