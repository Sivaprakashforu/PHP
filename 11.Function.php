<?php declare (strict_types=1);
function addNumber(float $a, float $b){
  return $a + $b;
}
echo addNumber(1.2,3.2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1{text-align:center;}
      </style>

  </head>
  
  <body>
  <h1>Functions</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      
       <?php 
        
          function mymsg(){
            echo "Hello World!<br>";
          }

          mymsg();

          function familynames($fname){
            echo "$fname Reference.<br>";
          }

          familynames("John");
          familynames("Deepak");
          familynames("Harish");

          function familyname($fname,$year){
            echo "$fname Reference. Born in $year. <br>";
          }

          familyname("Lakshmi","1980");
          familyname("Santhosh","1981");
          familyname("Suresh","1995");

          function setHeight($minHeight = 50){
          echo "The height is : $minHeight <br>";}

          setHeight(350);
          setHeight();
          setHeight(10);
          setHeight(80);

          function sum($x,$y){
            $z = $x + $y;
            return $z;
          }

          echo "5 + 10 = " . sum(5,10) . "<br>";
          echo "7 + 13 = " . sum(7,13) . "<br>";
          echo "2 + 4 = " . sum(2,4) . "<br>";

          function add_five(&$value){
            $value += 5;
          }

          $num = 2;
          add_five($num);
          echo $num."<br>";
          add_five($num);
          echo $num."<br>";
          add_five($num);
          echo $num."<br>";

          function sumMyNumber(...$x){
            $n = 0;
            $len = count($x);
            for($i = 0; $i< $len; $i++){
              $n += $x[$i];
            }
            return $n;
          }
          $a = sumMyNumber(6,2,1,5,8,9,2);
          echo $a;

          function myFamily($lastname, ...$firstname){
            $txt = "";
            $len = count($firstname);
            for($i = 0; $i < $len; $i++){
              $txt = $txt."Hi, $firstname[$i] $lastname.<br>"; 
            }
            return $txt;
          }
          $a = myFamily("Kartick","Santhosh","Surya","Arya");
          echo $a;

          function addNumbers(int $a,int $b){
            return $a + $b;
          }
          echo addNumbers(5,"5 days");
                    
       ?>
  </body>
</html>
