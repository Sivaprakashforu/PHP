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
  <h1>Math</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php
        
        echo "PI Value: ";
        echo (pi()); echo "<br><br>Minimum Value: ";
        echo (min(0,150,30,20,-8,-200)); echo "<br>Maximum Value: ";
        echo (max(0,150,30,20,-8,-200)); echo "<br><br>Absolute Value: ";

        echo (abs(-6.7)); echo "<br><br>square root: ";

        echo (sqrt(144)); echo "<br><br>Round off(0.60): ";
        echo (round(0.60)); echo "<br>Round off(0.49): ";
        echo (round(0.49)); echo "<br>Round off(0.5): ";
        echo (round(0.5)); echo "<br><br>Random Number(10 numbers): ";

        echo (rand()); echo "<br>Random Number from 1 to 10000: ";
        echo (rand(1,10000)); echo "<br>";
       ?>
  </body>
</html>
