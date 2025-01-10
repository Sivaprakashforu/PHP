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
  <h1>String</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php
        //https://www.youtube.com/watch?v=OK_JCtrrv-c  -Single line
        /*
          https://www.youtube.com/watch?v=OK_JCtrrv-c  -Multi line
        */
        echo "";
        echo "<h2>Quatation\" and  '</h2>";
        echo "Double Quatation Hello<br>";
        echo 'Single Quatation Hello<br><br>';


        //Variables inside the echo/print with single and double quotes.

        $x = "John";
        echo "Double Quatation Variable Using ECHO $x<br>";
        echo 'Single Quatation Variable Using ECHO $x<br>';

        $y="Hello me Siva";

        print "Double Quatation Variable USING PRINT $x<br>";
        print 'Single Quatation Variable USING PRINT$x<br>';
        print("Double Quatation Variable USING PRINT()$x<br>");
        print('Single Quatation Variable USING PRINT() $x<br><br>');

        //String Length, Word count, String Position.
        echo "<h2>String Length(strlen), Word Count(str_word_count)</h2>";
        echo "String Length:(Hello World!): ";
        echo strlen("Hello World!");
        echo "<br><br>";

        echo "String Word Count:(Hello World!): ";
        echo str_word_count("Hello World!");
        echo "<br><br>";

        echo "<h2>String Position</h2>";
        echo "String Position:Hello i Siva(Siva): ";
        echo strpos("Hello i Siva", "Siva");
        echo "<br><br>";

        //String to Upper and lower Case.
        echo "<h2>String Upper(strtoupper) and Lower(strtolower) Case</h2>";
        echo "String to Upper Case:(John): ";
        echo strtoupper($x);
        echo "<br><br>";

        echo "String to Lower Case:(John): ";
        echo strtolower($x);
        echo "<br><br>";

        //string replacement, Reverse, trim, explode(changing a string into array).
        echo "<h2>String Replace(str_replace) and Reverse(strrev) </h2>";
        echo "String Replace($x) (hn) to (y): ";
        echo str_replace(hn, y, $x);
        $x = str_replace(hn,y,$x);
        echo "<br><br>";

        echo "String Reverse($x): ";
        echo strrev($x);
        echo "<br><br>";

        echo "<h2>String Trim(trim(),ltrim(),rtrim())</h2>";
        echo "String Trim \"$y\" by He<br>";
        echo trim($y,"He");
        echo "<br><br>";
        echo "String Trim \"$y\" by va<br>";
        $y1 = trim($y,"va");
        echo "$y1<br><br>";

        $str = "Hello World!";
        echo $str . "<br>";
        echo $str1=ltrim($str,"Hello");
        echo "<br>";
        echo $str1=rtrim($str1,"!");
        echo "<br>$str1";

        echo "<h2>String to Array Using Explode</h2>";
        echo "String \"$y\" to: ";
        $y2= explode(" ",$y);
        print_r($y2);
        
        //String Concatenation,Slicing, Ecsape Character
        echo "<h2>String Concatenation- Joining two Variable/String.</h2>";
        echo "Variable1 \"$x\" and Variable 2 \"$y\" Using . : ";
        $y3= $x." ".$y;
        echo "$y3<br>";

        echo "Variable1 \"$x\" and Variable 2 \"$y3\" Using Space : ";
        $y4= "$x $y3";
        echo "$y4<br>";

        echo "<h2>String Slicing: Printing the Range of the Character where you want. </h2>";
        echo "Slicing First 6 Leters and having next 6 letters($y): ";
        echo substr($y, 6, 6);

        echo "<br>Slicing First 6 letters and having all letters in ($y): ";
        echo substr($y,6);
        echo "<br>";

        echo "Slicing First 5 letters and last 2 letters in ($y): ";
        echo substr($y,5,-2);
        echo "<br>";

        echo "<h2>Escape Character Using \</h2>";        
        $x1="We are the so-called \"Vikings\"from the north";
        
        echo $x1;
       ?>
  </body>
</html>
