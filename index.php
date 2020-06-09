<!DOCTYPE html>
<html>

<head>
	<title>Image Detection Test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
		body{
			font-family: sans-serif;
		}
		#loader {
		  border: 5px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 5px solid #3498db;
		  border-bottom: 5px solid #3498db;
		  width: 100px;
		  height: 100px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
</style>
</head>

<body>
	<div class="white container" style="padding-bottom:500px;height:100%;">
		<div class="container">

			<br><br><br><br><br><br>
			<center>
				<br><br><br><br>
				<form action="authimage.php" method="post" enctype="multipart/form-data">
					Upload an image <br> (preferably a small one)<br> <br>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<br><br><br>
					<input type="submit" onclick="loaderbar();" value="Upload Image" name="submit">
					<br><br>
					<div id="loader"></div>
				</form>
			</center>
		</div>
	</div>
	<script>
	function loaderbar(){
		alert("yes");
	}
	</script>
</body>

</html>
