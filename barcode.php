<html>
	<head>
		<title>Barcode</title>
		<script src="JsBarcode.all.min.js"></script>
	</head>
	<body>
		<h1 align="center">Barcode Generator</h1>
		<h2 align="left" style="margin-left:10%">Enter the text below to generate barcode</h2>

		<form action="javascript:generatebarcode()">
			<input type="text" style="margin-left:10%" onunload="generatebarcode()" id="inputtext" autofocus/>
			<button type="button" onclick="generatebarcode()">Generate</button>
		</form>
		<div align="center" id="barcodewindow" style="display:none">
			<h3 align="center">Here is our generated Barcode</h3>
			<img id="barcode" alt="Generated Barcode" height="100" width="400"/>
		</div>
	</body>

	<script type="text/javascript">		
		function generatebarcode()
		{	
			document.getElementById("barcodewindow").style.display = "block";
			var inputtext =  String(document.getElementById("inputtext").value);
			JsBarcode("#barcode", inputtext);
		}
	</script>

</html>