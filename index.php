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
		.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
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

			<br><br><br>
			<center>
				<form action="authimage.php" method="post" enctype="multipart/form-data">
					<p><b>Image Detection Test</b></p>
					<p>With Tensorflow JS pretrained models</p>
					Upload an image <br> (preferably a small one)<br> <br>
					<div class="upload-btn-wrapper"  onclick="showupload()">
						<button class="btn">Choose a file</button>
						<input type="file" name="fileToUpload" id="fileToUpload">
					</div>
					<br><br><br>
					<input  class="btn" type="submit" onclick="loaderbar();" value="Upload" id="submitbtn" name="submit" style="visibility:hidden;">
					<br><br>
					<div id="loader" style="visibility:hidden;"></div>
				</form>
				<br>
				by Pi
			</center>
		</div>
	</div>
	<script>
		function loaderbar() {
			document.getElementById("loader").style.visibility = "visible";
		}
		function showupload() {
			document.getElementById("submitbtn").style.visibility = "visible";
		}

	</script>
	<br>

</body>

</html>
