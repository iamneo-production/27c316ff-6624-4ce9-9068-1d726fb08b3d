<!DOCTYPE html>
<html>
<head>
	<title>Heatwave Prediction</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
			margin: 0;
			padding: 0;
			background-color: #ecf7f9;

		}
		
		.header {
    background-color:#18474e;
    color: white;
    border: black;
    display: block;
    box-sizing: border-box;
}

.header ul {
    display: inline-block;
    width:100%;
}

.header > ul > li {
    display: inline-block;
    position:relative;
    vertical-align:top;
    width:30%;
}

#lodestone {
    text-align: left;
}

#user {
   text-align: right;
}

#mogstation {
    text-align: center;
}
	 	h2 {
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
			text-align: center;
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
			background-color: #37a0ae;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		button:hover {
			background-color:  #1f5961;
		}
	</style>
</head>
<body>
	
	 <div class="header">
		<ul class="child">
        <li id="lodestone"><b>T-AIM</b></li>
        <li id="mogstation">The Academic Grand Challange On Climate Change</li>
        <li id="user"><b>Team SKY</b></li>
    </ul>
    </div>
    <br>

	<h2>Heatwave Prediction</h2>
	<div class="container">
		<form id="form">
		<label for="options">Select a City:</label>
		<select id="options">
				<option value="Adilabadheatwave.php">Adilabad</option>
				<option value="Khammamheatwave.php">Khammam</option>
				<option value="Karimnagarheatwave.php">Karimnagar</option>
				<option value="Nizamabadheatwave.php">Nizamabad</option>
				<option value="Warangalheatwave.php">Warangal</option>
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
</body>
</html>
