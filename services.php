<title>Nutritious food</title>
<?php

$services = array("Vegetables", "Fruits", "Nuts", "Seeds", "Herbs", "Non Veg Foods", "Immunity Boosting Foods", "Tips for Healthy Life"," BMI Calculators", "Exercise"); 
$arrlength = count($services); ?>


<!DOCTYPE html>
<html>
<head>
  <style>
h{
    font-size: 25px;
}
body{
        background-color: rgb(110, 201, 98);;
    }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
  text-align: center;
  position: absolute;
  top: 50px;
  left: 650px;

}


td, th {
  border: 2px solid red;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
  padding: auto;

}
tr:nth-child(odd) {
  background-color: aqua;
  padding: auto;

}
  </style>
  </head>
<body>
<h><b>This webpage contains the following services</b></h>
<?php 
sort($services);

for($x = 0; $x < $arrlength; $x++) {
  echo "<ul>";
  echo '<h>'."<li>".$services[$x].'</li>';
  echo "</ul>";
}

?>
<table>
  <tr>
    <th>S.NO</th>
    <th>Serivces</th>
  </tr>

<?php
for($x = 0; $x < $arrlength; $x++) {
  echo "<tr>";
  echo "<td>".$x+'1'."."."</td><td>". $services[$x]."</td>"; 
  echo "<br>";
  echo "</tr>";
}
?> 
</table>


</body>
</html>
