<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.12.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("button").click(function(){
		var elmts = $("*");
		alert("No of Elements:" + elmts.length);
		var nodes = "";
		var divContents = "";
		var pContents = "";
		for(var i=0;i<elmts.length;i++){
			nodes += elmts[i].nodeName + ",";
			switch(elmts[i].nodeName)
			{
				case "DIV": divContents += elmts[i].innerHTML + "\n";
				break;
				case "P": pContents += elmts[i].innerHTML + "\n";
				break;
			}
		}		
		nodes = nodes.substring(0, nodes.length-1);
 		alert("Nodes are : \n" + nodes);
		alert("Div Contents: \n" + divContents);
		alert("P Contents: \n" + pContents);
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
<button>Click here</button>
<br/>
<div>This is div1</div>
<div>This is div2</div>
<p>This is Paragraph1</p>
<span>This is Span1</span>
<p>This is Paragraph2</p>
</body>
</html>