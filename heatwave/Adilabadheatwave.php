<!DOCTYPE html>
<html>
<head>
	<title>Adilabad Heat Wave</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #333;
      margin: 0;
      padding: 0;
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
      text-align: left;
    }
    
    th {
      background-color: #eee;
    }
  </style>
</head>
<body>
  <h1>Alidabad Heat Wave Prediction</h1>
    <p align="center"><a href="annualadilabadheat.php">Click here</a> for Annual forecast. </p>
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
  $stream = fopen("C:/xampp/htdocs/heatwave/heatwavedata/adilabad_heatwave_prediction.csv", "r");
 
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
