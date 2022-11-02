<?php

$myWork = array("Abia" => "E", "Imo" => "E", "Lagos" => "W", "Enugu" => "E",  "Jos" => "N",  "Ondo" => "W", "Maiduguri" => "N", "Anambra" => "E");
$myCount = 1;

echo "<table border='1px' cellpadding='5px' style='border-collapse: collapse; margin-top: -10%;'>";
echo "<th> S/N </th><th> States </th><th> Region</th>";
foreach($myWork as $myKey => $myValue) {
          echo "<tr><td>";
          echo $myCount++;
          echo "</td>" ;
          echo "<td>" . $myKey . "</td>" . "<td>" . $myValue . "</td><br>";
};
echo "</tr></table>";


?>