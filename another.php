<!DOCTYPE html>
<html lang="en">
<head>
    <title>ANOTHER PHP</title>
</head>
<body>
          

<?php
echo "hello";


echo "<br><br>";


$x = true;
var_dump($x);
echo "<br><br>";


$xx = 12.8;
var_dump($xx);

echo "<br><br>";

$con = 20;
$cat = 20;
$nate = $con + $cat;

echo $nate;

echo "<br><br>";
 $sum = 30;
 echo $sum--;

 echo "<br><br>";

 $toshiba = 1;

 do {
           echo "This is $toshiba <br>";
           $toshiba++;
 }
 while ($toshiba <=10);

 echo "<br><br>";

$linda = array("HTML", "CSS", "JAVASCRIPT", "PHP", "MYSQL");

foreach ($linda as $value) {
echo "$value <br>";
}

echo "<br><br>";

function writeMsg() {
          echo "Hello world!";
}
writeMsg();


echo "<br><br>";


function kingsley($king, $queen) {
          echo "$king <br> $queen <br>";
}


kingsley("This is my function", "this is for queen");
kingsley("This is another kingsley", "this is for queen2");
kingsley("This is the third kingsley", "this is for queen3");
kingsley("This is the last kingsley", "this is for queen4");

?>

</body>
</html>