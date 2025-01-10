<?php

    echo "<h1>Conditional Statement:</h1> <br>";

    if(5>2){
        echo "Have a Good Day! Checked Greater Than Operator<br>";
    }

    echo "<br><b>If Condition Statement using Comparsion Operators:<br></b>";

    $t = 12;

    if($t==12){
        echo "<br>Variable is equal to the Value Then the Statement is Printed Using ==.<br>";
    }

    $x = 100;
    $y = 100;
    $z = 50;

    if ($x == $y){
        echo "<br>$x First Variable Value is Equal to Second Variable Value $y using ==.";
    }


    if ($x===$y){
        echo "<br>$x First Variable Value is Identitically Equal to Second Variable Value $y using ===.";
    }

    if ($x!=$t){
        echo "<br>$x First Variable Value is Not Equal to the Second Value $t using !=.";
    }

    if ($x<>$t){
        echo "<br>$x First Variable Value is Not Equal to the Second Value $t using <>.";
    }

    if ($x!==$t){
        echo "<br>$x First Variable Value is Not Identitically Equal to Second Variable Value $t using !==.";
    }

    if ($x>$t){
        echo "<br>$x First Variable Value is Greater to Second Variable Value $t using >.";
    }

    if($t<$y){
        echo "<br>$t First Variable Value is Lesser to Second Variable Value $y using <.";
    
    }

    if($x>=$y){
        echo "<br>$x First Variable Value is Greater than or equal to Second Variable Value $y using >=.";
    }

    if($t<=$y){
        echo "<br>$t First Variable Value is Lesser than or Equal to Second Variable Value $y using <=.";
    }

    echo "<br><b>If Condition Statement using Logical Operators:<br></b>";

    if($x == 100 and $z == 50 ){
        echo "<br>$x == 100 Write a message if Both the conditions are equal $z == 50 using and.";
    }

    if($x == 100 && $z == 50 ){
        echo "<br>$x == 100 Write a message if Both the conditions are equal $z == 50 using &&.";
    }

    if($x == 100 or $z == 50 ){
        echo "<br>$x == 100 Write a message if either conditions are true $z == 50 using or.";
    }

    if($x == 100 || $z == 60 ){
        echo "<br>$x == 100 Write a message if either conditions are true $z == 60 using ||.";
    }

    if($x == 100 xor $z == 10 ){
        echo "<br>$x == 100 Write a message if one condition is true, but not the both $z == 10 using xor.";
    }

    if(!($z==60)){
        echo "<br>Wite a Message when value not equal to $z = 60 using !.";
    }

    $a =5;
    
    if ($a==2 || $a==3 || $a==4 || $a==5 || $a==6 || $a==7 || $a==8){
        echo "<br>$a is number between 2 and 8";
    }


?>