<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#btnView').click(function(){
	var divElements = $('div');
	var divContents = "";
	for(i=0;i<divElements.length;i++){
		divContents += divElements[i].innerHTML + "\n";
	}
	alert(divContents);
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
}
</style>
</head>
<body>
<button id="btnView">Click the button to view the contents of below box</button>
<br/>
<div>This is div1</div>
<div>This is div2</div>
<div>This is div3</div>
<div>This is div4</div>
</body>
</html>