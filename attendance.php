<!DOCTYPE html>
<html lang="en">
<head>
          <title>Attendance Assignment</title>
<style>

          table {
                    border-collapse: collapse;
          }

          .myTable {
                    margin-top: -20%;
          }
          
</style>
</head>

<body>
          <div class="myTable">
                    <table border="2px" cellpadding="7px">
                              <caption> <b>ATTENDANCE FOR AUGUST 23RD, 2022</b></caption>
                              <tr>
                                        <th> S/N </th>
                                        <th> Name Of Student</th>
                                        <th> Present/Absent</th>
                              </tr>
          
<?php
$students = array("Victor" => "Present", "Linda" => "Present", "Victory" => "Present", "Elisha" => "Present", "Tochi" => "Present", "Augustine" => "Present", "David" => "Present", "John K" => "Present", "Onyinye" => "Present", "Kingsley" => "Present", "Emmanuel" => "Present", "Chiazota" => "Present", "Emmanuel N" => "Present", "John" => "Present", "Prince" => "Present", "Beatrice" => "Present");

$myCount = 1;

foreach ($students as $today => $attendance) {
echo "<tr>";
echo "<td>" . $myCount++ . "</td>";
echo "<td> $today </td>";
echo "<td> $attendance </td><br>";
echo "</tr>";
}

?>

</table>
</div>


</body>
</html>