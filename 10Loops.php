<?php

    //while, do..while,for,foeach

    /* While - A block of code as long as the specified condition is true.
    do..while - A block of code once, and then repeats the loop as long as the specified condition is true but it checks after runing the code once.
    for- loops through a block of code a specified number of times.
    foreach- loops through a block of code for each element in an array.

    */
    $i = 1;
    $j = 0;
    while ($i<6){
        echo $i;
        echo "<br>";
        $i++;
    }

    while ($j<6){
        if($j == 3) break;
        echo $j;echo "<br>";
        $j++;
    }


?>