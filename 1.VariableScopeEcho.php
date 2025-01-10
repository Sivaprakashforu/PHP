<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php
        //https://www.youtube.com/watch?v=OK_JCtrrv-c  -Single line
        /*
          https://www.youtube.com/watch?v=OK_JCtrrv-c  -Multi line
        */
        echo /*middle comments*/("Hello Siva<br><br>");

        $x=5;
        $y=15;

        echo "<b>Variables: </b><br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br><br>";

        $txt = "Siva";
        echo "My name is: ". $txt . "!<br><br>";

        echo "Addition of Two Numbers: ";
        echo $x + $y;

        $b = 7;
        echo "<br><br>Variable Type:";
        var_dump($b);

        $a = $c = $d = "Deepak";
        echo "<br><br>";
        var_dump($a,$b,$c,$d);

        //Global scope
        $z = 11;

        function mytest(){
          //using z inside this function will generate an date_get_last_errors
          echo "<p>Variable Z inside function is: $z</p>";
        }
        mytest();

        echo "<p>Variable Z outside funtion is: $z</p>";

        function mytest1(){
          $l = 6;
          echo "<p>Variable l inside function is: $l</p>";
        }

        mytest1();

        //using l outside the funtion will generate errror;
        echo "<p>Variable l outside function is:$l</p>";

        $x1 = 3;
        $y1 = 6;

        function mytest2(){
          global $x1, $y1;
          $y1 = $x1 * $y1;
        }

        mytest2();

        echo "Global varaiable: ".$y1;

        $x2= 1;
        $y2= 2;

        function mytest3(){
          $GLOBALS['y2'] = $GLOBALS['x2'] +$GLOBALS['y2']  ;
        }

        echo "<br><br>GLOBALS Addition: ";
        mytest3();

        echo $y2;
        echo "<br><br>";

        function mytest4(){
          //static Varaible
          static $s =0;
          echo $s;
          $s++;
        }

        echo "<br>Static Varaibles<br>";
        mytest4();
        echo "<br>";
        mytest4();
        echo "<br>";
        mytest4();
        echo "<br>";
        mytest4();
        echo "<br>";
        mytest4();
        echo "<br>";

        echo "<br><b>Print Statements</b><br>";

        $txt1 = "Learn PHP";
        $txt2 = "BIGPRIME";

        echo '<h4>' . $txt1 . '</h4>';
        echo '<p>Study PHP at '.$txt2. '</p>';

        print "Hello<br><br>";
        print ("Hello<br><br>");

        print "<h4> PHP is fun!</h4>";
        print "Hello!<br>";
        print "I'm about to learn PHP";

        print "<h4>$txt1</h4>";
        print "<p>Study PHP at $txt2</p>";

        print '<h4>' . $txt1. '</h4>';
        print '<p>Study PHP at ' . $txt2 . '</p>';
        
       ?>
  </body>
</html>
