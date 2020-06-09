<!-- Load TensorFlow.js. This is required to use MobileNet. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.1"> </script>
<!-- Load the MobileNet model. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet@1.0.0"> </script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=kqPJ0rUe"></script>
<style>
	body {
		font-family: sans-serif;
	}

	.btn {
		border: 2px solid gray;
		color: gray;
		background-color: white;
		padding: 8px 20px;
		border-radius: 8px;
		font-size: 20px;
		font-weight: bold;
		text-decoration: none;
	}

	#loader {
		border: 5px solid #f3f3f3;
		border-radius: 50%;
		border-top: 5px solid #3498db;
		border-bottom: 5px solid #3498db;
		width: 100px;
		height: 100px;
		-webkit-animation: spin 2s linear infinite;
		/* Safari */
		animation: spin 2s linear infinite;
	}

	/* Safari */
	@-webkit-keyframes spin {
		0% {
			-webkit-transform: rotate(0deg);
		}

		100% {
			-webkit-transform: rotate(360deg);
		}
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

</style>
<center><br>
	<div id="loader"></div><br>

	<p id="prediction">Please wait.</p>
	<!-- Replace this with your image. Make sure CORS settings allow reading the image! --><br>
	<a href="./index.php" class="btn">Try with another image.</a>
	<br><br>
	<img width="400px" id="img" src="./<?=$_GET['imageurl']?>">
</center>
<!-- Place your code in the script tag below. You can also use an external .js file -->
<script>
	// Notice there is no 'import' statement. 'mobilenet' and 'tf' is
	// available on the index-page because of the script tag above.
	function speak(k) {
		speaker = "UK English Male";
		speed = 0.90;
		responsiveVoice.speak(k, speaker, {
			rate: speed
		});
	}
	const img = document.getElementById('img');
	var obj;
	// Load the model.
	mobilenet.load().then(model => {
		// Classify the image.
		model.classify(img).then(predictions => {
			document.getElementById("loader").style.display = "none";
			console.log('Predictions: ');
			console.log(predictions);
			obj = predictions;
			var speech = "I think I see <br>" + obj[0].className + "<br> or " + obj[1].className + "<br> or " + obj[2].className + ".";
			var speech2 = "I think I see " + obj[0].className + " or " + obj[1].className + " or " + obj[2].className + ".";
			//alert(speech);
			document.getElementById('prediction').innerHTML = speech;
			speak(speech2);
		});
	});

</script>
