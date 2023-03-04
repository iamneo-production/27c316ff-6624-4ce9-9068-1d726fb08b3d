<!DOCTYPE html>
<html>
<head>
	<title>Nizamabad AQI</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
			margin: 0;
			padding: 0;
			background-color: #ecf7f9;
			background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLGLmKwjFLk4a18ujOVbmzHuThVomhTZGsjg&usqp=CAU0');
			 background-repeat: no-repeat;
 			 background-attachment: fixed;
  			background-size: 100% 100%;
		}
		
		h1 {
			text-align: center;
			margin: 20px 0;
			color:white;
		}
		h3{
			color: white;
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
			background-color: #black;
		}
	</style>
</head>
<body>
	<h1>Nizamabad AQI Prediction</h1>
	<div align="center">
		<h3>Prediction Image</h3>
		<img src="images/nizama aqi.png" width="400px" height="400px">
	</div>
	<table>
		<h3 align="center">Predicted Output Table</h3>
		<thead>
			<tr>
				<th>Date</th>
				<th>SO2</th>
				<th>PM10</th>
				<th>NOx</th>
				<th>PM10_SubIndex</th>
				<th>NOx_SubIndex</th>
				<th>SO2_SubIndex</th>
				<th>AQI</th>
			</tr>
		</thead>
		<tbody>
			<!-- CSV data will be dynamically populated here -->
			<?php
  // (A) OPEN CSV FILE
  $stream = fopen("AQIdata/nizamabad_aqi_prediction.csv", "r");
 
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
