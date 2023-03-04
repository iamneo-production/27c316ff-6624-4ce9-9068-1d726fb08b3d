	<!DOCTYPE html>
	<html>
	<head>
		<title>Warangal Heat Wave</title>
		<style>
			body {
	      font-family: Arial, sans-serif;
	      font-size: 16px;
	      color: #333;
	      margin: 0;
	      padding: 0;
	      background-color: #ecf7f9;
	       background-image: url('https://images.pexels.com/photos/301599/pexels-photo-301599.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
	       background-repeat: no-repeat;
	       background-attachment: fixed;
	       background-size: 100% 100%;
	    }
	    
	    h1 {
	      text-align: center;
	      margin: 20px 0;
	    }
	    
	    table {
	      border-collapse: collapse;
	      width: 100%;
	      margin-bottom: 20px;
	    }
	    
	    th, td {
	      border: 1px solid #ccc;
	      padding: 8px;
	      text-align: center;
	      color: white;
	      background-color: black;
	      opacity: 0.7;

	    }
	    
	    th {
	      background-color:black;
	    }
		</style>
	</head>
	<body>
		<h1>Warangal Heat Wave Prediction</h1>
			  <p align="center"><a href="annualwarangalheat.php">Click here</a> for Annual forecast. </p>

		<table>
			<thead>
				<tr>
					<th>Date</th>
					<th>Temp_Max</th>
					<th>HeatWave</th>
				</tr>
			</thead>
			<tbody>
				<!-- CSV data will be dynamically populated here -->
						<?php
	  // (A) OPEN CSV FILE
	  $stream = fopen("heatwavedata/warangal_heatwave_prediction.csv", "r");
	 
	  // (B) EXTRACT ROWS & COLS
	  while (($row = fgetcsv($stream)) !== false) {
	    echo "<tr>";
	    foreach ($row as $col) { echo "<td>$col</td>"; }
	    echo "</tr>";
	  }
	 
	  // (C) CLOSE CSV FILE
	  fclose($stream);
	?>
			</tbody>
		</table>
		<h3 align="center">No Heat Wave Found</h3>
	  
	  

	</body>
	</html>
