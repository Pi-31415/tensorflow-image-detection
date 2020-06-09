<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<div class="white container" style="padding-bottom:500px;height:100%;">

		<div class="container">

			<br><br><br><br><br><br>
			<center>
				<br><br><br><br>
				<form action="authimage.php" method="post" enctype="multipart/form-data">
					Upload an image : 
					<input type="file" name="fileToUpload" id="fileToUpload">
					<br>
					<input type="submit" value="Upload Image" name="submit">
				</form>
			</center>
		</div>
	</div>
</body>
</html>
