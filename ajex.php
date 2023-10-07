<html>
<head>
<script>
	function showresult(str){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(this.readystate == 4 && this.status == 200) {
			document.getElementById("disp_area").innerHTML = this.responseText();

		}
		

	}	
	xmlhttp.open("GET","livesearch.php>q=" + str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
	<input type="text" name="txt" onkeyup ="showresult(this.value)" >	\
	<div id="disp_area">
	</div>
</body>
</html>