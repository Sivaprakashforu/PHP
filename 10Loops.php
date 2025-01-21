<?php

    //while, do..while,for,foeach

    /* While - A block of code as long as the specified condition is true.
    do..while - A block of code once, and then repeats the loop as long as the specified condition is true but it checks after runing the code once.
    for- loops through a block of code a specified number of times.
    foreach- loops through a block of code for each element in an array.

    */
    $i = 1;
    $j = 0;
    $x = 0;
    $y = 0;
    $z = 1;
    $r = 0;

    echo "<h1>Loops in PHP</h1>";

    echo "<h3>While Loop:</h3>";

    echo "Normal While Loop: ";

    while ($i<6){
        echo $i;
        echo " ";
        $i++;
    }
    echo "<br>While Loop With Break at 3: ";

    while ($r<6){
        if($r == 3) break;
        echo $r;echo " ";
        $r++;
    }

    echo "<br>While Loop With Continue at 4: ";

    while ($j<6){
        $j++;
        if($j == 4) {continue;}
        echo $j;echo " ";        
    }
    echo "<br><h3>Do While Loop:</h3>";
    echo "Normal Do While Loop: ";

    do{
        $x++;
        echo $x." ";
    }while($x<6);
    echo "<br>Do While Loop with break at 3: ";


    do{
        if ($z==3) break;
        echo $z." ";
        $z++;
    }while($z<5);
    echo "<br>Do While Loop with continue at 3: ";

    do{
        $y++;
        if ($y == 3) continue;
        echo $y." ";
    }while($y<6);
    echo "<br><h3>For Loop:</h3>";
    echo "Normal For Loop: <br>";

    for($a=0;$a<=10;$a++){
        echo "The number is:$a<br>";
    }
    echo "<br>For Loop with break at 5: <br>";

    for($a=0;$a<=10;$a++){
        if ($a==5) break;
        echo "The number is:$a<br>";
    }
    echo "<br>For Loop with continue at 6: <br>";

    for($a=0;$a<=10;$a++){
        if ($a==6) continue;
        echo "The number is:$a<br>";
    }
    echo "<br>For Loop with multiply of 11 till 352: <br><br>";

    $count = 0;
    for($a=0;$a<=352;$a+=11){        
        echo "$count. Multiply with the Number 11 is: $a<br>";
        $count +=1;
    }
    echo "<br>";

    echo "<br><h3>Foreach Loop:</h3>";
    echo "Normal Foreach Loop(As index Array): <br>";

    $colors = array("red","green","blue","yellow");
  

    foreach($colors as $c){
        echo "$c  ";
    }
    echo "<br><br>Foreach Loop with both Key and Value : <br>";

    $member = array("Karthick"=>"35", "Shoban"=>"35","Shankar"=>"37");

    

    foreach($member as $c => $d){
        echo " $c : $d.  ";
    }
    echo "<br><br>Foreach Loop used to loop properties of Object : <br>";

    class Car{
        public $Color;
        public $Model;
        public function __construct($Color,$Model){
            $this->Color = $Color;
            $this->Model = $Model;
        }
    }
    $mycar = new Car ("Red" , "Swift");

    foreach ($mycar as $x => $y){
        echo "$x: $y<br>";
    }

    echo "<br>Foreach Loop with Break: ";
    foreach($colors as $a){
        if ($a == "blue") break;
        echo "$a  ";
    }
    echo "<br><br>Foreach Loop with Continue: ";

    foreach($colors as $b){
        if ($b == "green") continue;
        echo "$b  ";
    }

    echo "<br><br>Foreach Loop with ByReference(&): ";
    $colors1 = array("red","green","blue","yellow");
    foreach($colors1 as &$x){
        if ($x == "green") $x= "pink";        
    }
    echo "<br>";
    var_dump($colors1);
    echo "<br><br>Foreach Loop with different endforeach; : <br>";

    foreach ($mycar as $w => $v):
        echo "$w: $v<br>";
    endforeach;

?>