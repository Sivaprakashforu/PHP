<?php

    //if..else statement- when condition is true if statement executes and if false then the else statement executes.

    echo "<h2>If Else and Short hand and Nested If<br></h2>";
    date_default_timezone_set("Asia/Calcutta");
    $t = date ("G.i.s");

    echo "$t<br>";
    
    echo "<br><b>If else:</b><br>";

    if ($t<"20"){
        echo "Have a Good day!<br>";
    }
    else{
        echo "Have a Good Night!<br>";
    }

    echo "<br><b>If elseif else:</b><br>";

    if ($t<="10"){
        echo "Have a Good Morning! Time is $t";
    } elseif ($t<="14"){
        echo "Have a Good Afternoon! Time is $t";
    }
    elseif ($t<="20"){
        echo "Have a Good Evening!!!, Time is $t";

    }
    else{
        echo "Have a Good Night! Time is $t";
    }

    echo "<br><b>Short Hand If:</b><br>";

    $a = 13;

    if ($a > 10) $c = "Hell";

    $b = $a <10 ? "Hello" : "Good Bye";

    echo "$c $b";

    echo "<br><b>Nested If:</b><br>";

    if ($a >10){
        echo "$a, Above 10 ";
    }if ($a>20){
        echo "and also above 20";
    }else{
        echo "but not above 20";
    }


?>