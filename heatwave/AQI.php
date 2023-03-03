<!DOCTYPE html>
<html>
<head>
	<title>Air Quality Index (AQI) Prediction</title>
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
		
		select {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
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
	</style>
</head>
<body>
	<header>
		<h1>Team SKY</h1>
	</header>
	<h2>Air Quality Index (AQI) Prediction</h2>
	<div class="container">
		<form id="form">
		<label for="options">Select a City:</label>
		<select id="options">
				<option value="AdilabadAQI.php">Adilabad</option>
				<option value="KhammamAQI.php">Kammam</option>
				<option value="KarimnagarAQI.php">Karimnagar</option>
				<option value="NizamabadAQI.php">Nizamabad</option>
				<option value="WarangalAQI.php">Warangal</option>
			</select>
		</select>
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

			// Get selected option value
			const option = document.querySelector("#options").value;

			// Redirect to selected page
			window.location.href = option;
		});
	</script>
	</div>
</body>
</html>
