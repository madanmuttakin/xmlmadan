<!DOCTYPE html>
<html>
	<title> 
		LATIHAN AJAX 1.html
	</title>
<head>
	<script> function loadXMLDoc(){
	var xmlhttp;
	if(window.XMLHttpRequest){ //code untuk IE7+, Firefox, Chrome
		xmlhttp=new XMLHttpRequest();
		}
			else
		{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}}
		xmlhttp.open("GET","data.xml",true);
		xmlhttp.send();
	}
</script>
</head>
<body>
<div id="isi">
	<h2>Kalimat Utama sebelum Diubah</h2></div>
	<button type="button" onclick="loadXMLDoc()">Ubah Tulisan Diatas</button>
</body>
</html>
