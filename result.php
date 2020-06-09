<!-- Load TensorFlow.js. This is required to use MobileNet. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.1"> </script>
<!-- Load the MobileNet model. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet@1.0.0"> </script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=kqPJ0rUe"></script>
<center>
	<h3 id="prediction">Please wait.</h3>
	<!-- Replace this with your image. Make sure CORS settings allow reading the image! -->
	<a href="./index.php">Try with another image.</a>
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
			console.log('Predictions: ');
			console.log(predictions);
			obj = predictions;
			var speech = "I think I see " + obj[0].className + " or " + obj[1].className + " or " + obj[2].className + ".";
			//alert(speech);
			document.getElementById('prediction').innerHTML = speech;
			speak(speech);
		});
	});

</script>
