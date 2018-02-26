<!DOCTYPE html>
<html>
<head>
	<title>ajax http</title>
</head>
<body>
	<p id="demo">hello world...!</p>
	<button type="button" onclick="myFunc()">change content</button>
	<script>
		function myFunc() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					document.getElementById('demo').innerHTML = xhttp.responseText;
				}
			};

			xhttp.open("GET","text.txt",true);
			xhttp.send();
		}
	</script>
</body>
</html>