<?php

        echo "<h1>PHP Operators.</h1>";

        echo "Operators used to Perform operations on Variables and Values";

        echo "<h2>Operators</h2>";

?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Operators.</title>
        <style>
                li{
                    list-style:none;
                    background-image:url("stop.png");
                    margin:0;
                    padding:12px 0px 10px 15px;
                    background-size:10px;
                    background-position:left center;
                    background-repeat: no-repeat;
                }
        </style>
    </head>

        <body>
            <ul>
                <li>Arithmetic Operators</li>
                <li>Assignment Operators</li>
                <li>Comparison Operators</li>
                <li>Increment/Decrement Operators</li>
                <li>Logical Operators</li>
                <li>String Operators</li>
                <li>Array Operators</li>
                <li>Conditional Assignment Operators</li>
            </ul>
            <?php 
                $x = 10;
                $y = 6;
                
                echo "<b>Arithmetic Operators: <br><br></b>";
                echo "Two Variables: $x, $y<br><br>";
                echo "Addition of Two Numbers: ";
                echo $x + $y;
                echo "<br>Subraction Of Two Numbers: ";
                echo $x - $y;
                echo "<br>Multiplication of Two Numbers: ";
                echo $x * $y;
                echo "<br>Division of Two Numbers: ";
                echo $x / $y;
                echo "<br>Modulas of Two Numbers: ";
                echo $x % $y;
                echo "<br>Exponentiation(Raising a variable to another variable power) of Two Numbers: ";
                echo $y ** $x;

                echo "<b><br><br>Assignment Operators: <br><br></b>";
                
                echo "Basic Assignment Operator: ";
                $x = 4;
                echo $x;
                echo "<br>Addition Assignment Operator: ";
                $x += 100;
                echo $x;
                $x = 50;
                echo "<br>Subraction Assignment Operator: $x";
                $x -= 30;
                echo " -=30 = $x ";   
                $x = 3;
                echo "<br>Multiplication Assignment Operator: $x" ;
                $x *= 6;
                echo " *= 6 = $x";
                echo "<br>Division Assignment Operator: $x";
                $x /= 3;
                echo " /= 3 = $x";
                $x = 15;
                echo "<br>Modulus Assignment Operator: $x";
                $x %=4;
                echo " %= 4 = $x";

                echo "<b><br><br>Comparison Operators: <br><br></b>";

                
                $x = 100;
                $y = "100";
                $z = 50;
                $w = 100;

                echo "Checking Two Varaibles If Equal using == : $x, $y ";

                var_dump($x==$y);

                echo "<br>Checking Two Variables If Identical Equal using === : $x, $y ";

                var_dump($x===$y);

                echo "<br>Checking Two Varaibles If Not Equal != : $x, $y ";

                var_dump($x!=$y);

                echo "<br>Checking Two Varaibles If Not Equal <> : $x, $y ";

                var_dump($x<>$y);

                echo "<br>Checking Two Variables If Not identical !== : $x, $y ";

                var_dump($x!==$y);

                echo "<br>Checking Two Variables If Greater Than > : $x, $z ";

                var_dump($x>$z);

                echo "<br>Checking Two Variables If Lesser Than < : $z, $x ";

                var_dump($z<$x);

                echo "<br>Checking Two Variables IF Greater Than Or Equal to >= : $x, $z ";

                var_dump($x>=$z);

                echo "<br>Checking Two Variables IF Lesser Than Or Equal to <= : $z, $w ";

                var_dump($z<=$w);

                echo "<br><br>Checking Two Variables(Spaceship) IF it less or greater than <=> : $z, $x ";
                //Shows -1 because Value is lesser than second Value.
                echo($z<=>$x);

                echo "<br>Checking Two Variables(Spaceship) IF it less or greater than <=> : $w, $x ";
                //Shows 0 because Value is Equal to second Value.
                echo($w<=>$x);

                echo "<br>Checking Two Variables(Spaceship) IF it less or greater than <=> : $x, $z ";
                //Shows 1 because Value is Greater to Second Value.
                echo($x<=>$z);

                echo "<b><br><br>Increment / Decrement Operators: <br><br></b>";

                echo "Pre-increment the value by 1 :-";

                echo ++$x;

                echo "<br>Post-increment the value by 1 :-";

                echo $x++;

                echo " Value after incremented: $x";

                echo "<br>Pre-decrement the value by 1 :-";

                echo --$x;

                echo "<br>Post-decrement the value by 1 :-";

                echo $x--;

                echo " Value after decremented: $x";

                echo "<b><br><br>Logical Operators: <br><br></b>";

                echo "Writing a message if both conditions are true using and: ";

                if ($x == 100 and $z == 50) {
                    echo "Hello World!";
                }

                echo "<br>Writing a message if both conditions are true using &&: ";
                if ($x == 100 && $z == 50) {
                    echo "Hello World!";
                }

                echo "<br>Writing a message if atleast one of the conditions are true using or: ";
                if ($x == 100 or $z == 80){
                    echo "Hello World!";
                }

                echo "<br>Writing a message if atleast one of the conditions are true using ||: ";
                if ($x == 100 || $z == 80){
                    echo "Hello World!";
                }

                echo "<br>Writing a message if atleast one of the conditions are true,but not if both conditions are true using xor: ";
                if ($x == 100 xor $z == 80){
                    echo "Hello World!";
                }

                echo "<br>Writing a message if the condition is NOT true using !: ";
                if(!($x == 90)){
                    echo "Hello World!";
                }

                echo "<b><br><br>String Operators: <br><br></b>";
                $txt1 = "Hello ";
                $txt2 = "Deepak!";

                echo "Concatenation Operator  .: ";
                echo $txt1.$txt2;

                echo "<br>Concatenation Operator  .=: ";
                $txt1 .=$txt2;
                echo $txt1;

                echo "<b><br><br>Array Operators: <br><br></b>";

                $x1= array("a" => "red", "b" => "green");
                $y1= array("c" => "blue", "d" => "yellow");

                echo "Adding two Array Variables using +: ";

                print_r($x1 + $y1);

                echo "<br>Checking two Array Variables Equal using ==: ";

                var_dump($x1 == $y1);

                echo "<br>Checking two Array Variables Identity Equal using ===: ";

                var_dump($x1 === $y1);


                echo "<br>Checking two Array Variables Not Equal using !=: ";

                var_dump($x1 != $y1);

                echo "<br>Checking two Array Variables Not Equal using <>: ";

                var_dump($x1 <> $y1);

                echo "<br>Checking two Array Variables Not Identity Equal using !==: ";

                var_dump($x1 !== $y1);

                echo "<b><br><br>Conditional Assignment Operators: <br><br></b>";
                //if empty($user) = TRUE, set $status = "anonymous"
                echo $status = (empty($user)) ? "anonymous" : "logged in";

                echo "<br>";
                
                //if empty($user) = FALSE, set $status = "logged in"
                $user = "John";

                echo $status = (empty($user)) ? "anonymous" : "logged in";               

            ?>
        </body> 

</html>

