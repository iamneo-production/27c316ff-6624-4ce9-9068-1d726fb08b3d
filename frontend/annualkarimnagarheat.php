<!DOCTYPE html>
<html>
<head>
	<title>Nizamabad Heat Wave</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
			margin: 0;
			padding: 0;
			background-color: #ecf7f9;
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
		}
		
		th {
			background-color: #eee;
		}
	</style>
</head>
<body>
	<h1>Karimnagar Annual Temperature Prediction</h1>
	<div align="center">
		<h3>Prediction Graph</h3>
		<img src="images/karimnagar temperature graph.png" width="400px" height="400px">
	</div>
	<table>
		<h3 align="center">prediction Table</h3>
		<thead>
			<tr>
				<th>Date</th>
				<th>Temp_Max</th>
			</tr>
		</thead>
		<tbody>
			<!-- CSV data will be dynamically populated here -->
			<?php
  // (A) OPEN CSV FILE
  $stream = fopen("heatwavedata/karimnagar_prediction_temp.csv", "r");
 
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
	
  
 
</body>
</html>
