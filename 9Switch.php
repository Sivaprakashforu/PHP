<?php

    //Select one of many blocks of code to be executed.

    //switch(value){case 1: echo"stmet"; break; ... default:echo"";}

    //default block be used any where but not recommended.

    //if we dont made break in statement then the statement will do till the break occurs.

    //if no break done in the swtich case all the statement printed

    echo "<h1>Switch Case</h1>";

    $favcolor ="red";

    switch ($favcolor){
        case "red":
            echo "Your favorite color is red!<br>";
            break;
        case "blue":
            echo "Your favorite color is blue!<br>";
            break;
        case "green":
            echo "Your favorite color is green!<br>";
            break;
        default:
            echo "Your favorite color  is neither red, blue, nor green!";
    }

    $d=5;
    echo "<br>";
    switch($d){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "The week feels so Long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";

    }
    echo "<br>";

    switch($d){
        default:
            echo "Looking forward for the Weekend!!!";
            break;
        case 6:
            echo "It's a Weekend, Saturday";
            break;
        case 0:
            echo "It's a Weekend and It's a Sunday";
        
    }

    

?>