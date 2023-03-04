<!DOCTYPE html>
<html>
<head>
	<title>Heatwave or AQI Prediction</title>
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
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
			background-color: white;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
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
		}
		
		input[type="radio"] {
			margin-right: 5px;
			
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
		footer{
			text-align: center;
		}
	</style>
</head>
<body>

        <div class="header">
		<ul class="child">
        <li id="lodestone"><b>T-AIM</b></li>
        <li id="mogstation">The Acadmic Grand Challange On Climate Change</li>
        <li id="user"><b>Team SKY</b></li>
    </ul>
    </div>
    <br>


	<div class="container">
					<h2>Heatwave or AQI?</h2>

		<form id="form">

		<label>
			<input type="radio" name="option" value="heatwave.php"> Heat Wave
		</label>
		<label>
			<input type="radio" name="option" value="AQI.php">‎‎‎‎‎‎A-Q-I
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
