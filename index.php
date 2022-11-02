<!DOCTYPE html>
<html>
<head>
    <title> MY PHP </title>
</head>
<body>


<?php

//tryouts for variables, constants, sewitch, loop, if statements...

          $toshiba = "Hello ";
          $tochi = "world!";
          
          echo $toshiba .=$tochi;
          echo "<br><br>";
          
          define("debugger" , "He is a full stack developer!");

          echo "Who is Toshiba?" . "<br>" . "Ans: " . debugger;
          echo "<br><br>";

          echo strrev("TOSHIBA") . "<br>";
          echo strlen("TOSHIBA") . "<br><br>";


          $myTime = date("H");

          if ($myTime < "11") {
                    echo "Good day!";
          }
          else if ($myTime < "16") {
                    echo "Good afternoon!";
          }
          else {
                    echo "Good night!";
          }

          echo "<br><br>";

          $myStyle = "yellow";
          switch ($myStyle) {
                    case ("blue"):
                              echo "You chose blue!";
                    case ("yellow"):
                              echo "You chose yellow!";
                    case ("red"):
                              echo "Correct color!";
          }

          echo "<br><br>";

          define("myConstant", "This is my declared constant");
          echo myConstant;

          echo "<br><br>";

          for($i = 0; $i <= 10; $i++){
          echo $i. ".". "<br>";
          }

          echo "<br><br>";

          $x = 0;

          do {
                    echo "This number is ". $x. "<br>";
                    $x++;
          }
          while 
                    ($x <= 10);
          
//array loop with number loop attached! :)

echo "<br><br>";

echo "All these are the SE states in Nigeria: ". "<br>";
$myArray = array("Abia", "Imo", "Enugu", "Anambra", "Ebonyi" );
$numb = 1;


foreach ($myArray as $value) {
echo $numb++. ".". " ". $value. "<br>";
}

//
echo "<br><br>";

function favStates($diffState) {
          echo $diffState . " " . "State" . "<br>";
      }
      
      favStates("Lagos");
      favStates("Cross-River");
      favStates("Enugu");
      favStates("Imo");
      
      echo "<br><br>";
      
//+ is used to add values in a variable that contains numbers ...
      function sum($x, $y) {
          echo $x + $y . "<br>";
      }
      
      sum(5, 10);
      sum(7, 13);
      sum(2, 4);

      echo "<br><br>";


      //...........................................###................................................................
      $cars = array("Volvo", "BMW", "Toyota");
      $arrlength = count($cars);
      
      for($x = 0; $x < $arrlength; $x++) {
          echo $cars[$x];
          echo "<br>";
      }

      echo "<br><br>";

      $cars = array("Volvo", "BMW", "Toyota");
      foreach($cars as $value) {
                echo $value . "<br>";
      }
      //...........................................###...............................................................
      echo "<br><br>";

      $fish = "75";
      $meat = "25";


        function chopStuff() {
            $GLOBALS['periwinkle'] = $GLOBALS['fish'] + $GLOBALS['meat'];
        }

      chopStuff();
        echo $periwinkle;
        echo "<br><br>";


?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
      </form>
      
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collect value of input field
          $name = $_POST['fname'];
          if (empty($name)) {
              echo "Name is empty";
          } else {
              echo $name;
          }
      }
      echo "<br><br>";

//,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,NOT CLEAR ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
//...............................  VERY CLEAR NOW! THANKS TO MR GODSWILL  ..............................................
      ?>






</body>
</html>