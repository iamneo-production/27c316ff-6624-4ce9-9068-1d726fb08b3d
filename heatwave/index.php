<!DOCTYPE html>
<html>
<head>
	<title>Heatwave or AQI Prediction</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
			margin: 0;
			padding: 0;
		}
		header{
			background-color: black;
			color: white;
		}
		
		h1,h2 {
			text-align: center;
			margin: 20px 0;
		}
		
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #eee;
			border-radius: 10px;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
		}
		
		input[type="radio"] {
			margin-right: 5px;
		}
		
		button {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		button:hover {
			background-color: #3E8E41;
		}
		footer{
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Team SKY</h1>
	</header>
	<h2>Heatwave or AQI?</h2>
	<div class="container">
		<form id="form">
		<label>
			<input type="radio" name="option" value="heatwave.php"> Heat Wave
		</label>
		<label>
			<input type="radio" name="option" value="AQI.php"> AQI 
		</label>
		<br>
		<button type="submit">Submit</button>
	</form>

	<script>
		// Get form element
		const form = document.querySelector("#form");

		// Add submit event listener
		form.addEventListener("submit", event => {
			// Prevent default form submission
			event.preventDefault();

			// Get selected radio button value
			const option = form.querySelector("input[name='option']:checked").value;

			// Redirect to selected page
			window.location.href = option;
		});
	</script>
	</div>
	<footer>
		<p>Made By<br> <b>Team SKY</b></p>
	</footer>
</body>
</html>
