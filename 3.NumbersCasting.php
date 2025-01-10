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
  <h1>Numbers and Casting</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php
        $a=5;
        $b=5.24;
        $c="25";

        echo "<h2>Using var_dump:</h2>";
        echo "Int Value: ";  
        var_dump($a);
        echo "<br> Float Value: ";
        var_dump($b);
        echo "<br> String Value: ";
        var_dump($c);

        $x=5985;
        echo "<br><br><b>Checking Boolean Items:</b><br>";
        echo "Checking whether the variable is Int: $x:-";
        var_dump(is_int($x));
        $x1= 59.85;
        echo"<br>Checking whether the variable is Int: $x1:-";
        var_dump(is_int($x1));

        $x2 = 10.365;
        echo "<br>";
        echo"<br>Checking whether the variable is Float: $x2:-";
        var_dump(is_float($x2));

        echo "<br><br><b>Checking Infinite Items:</b><br>";
        $x3= 1.9e411;
        echo"Checking whether the variable is Infinite: $x3:-";
        var_dump($x3);

        $x4= acos(8);
        echo "<br>";
        echo"Checking whether the variable is Infinite: $x4:-";
        var_dump($x4);

        echo "<br><br><b>Checking Boolean Items, If its numeric:</b><br>";
        $x5="598.5";
        $x6="59.85"+100;
        $x7="Hello";
        echo "$x:-";
        var_dump(is_numeric($x));
        echo "<br>$x5:-";
        var_dump(is_numeric($x5));
        echo "<br>$x6:-";
        var_dump(is_numeric($x6));
        echo "<br>$x7:-";
        var_dump(is_numeric($x7));

        
        echo "<br><br><b>Typecasting</b><br>";
        //Type Casting Changing one varaible type to another type.
        /* Changing Done to String(String), To Int(Int), To Float(float), To Bool(bool), 
         To Array(array), To Object(object) and To Unset/Null/ Deleting the varaible(unset).*/

        // Cast Float to int
        echo "<br><b>Typecasting: Float to int</b><br>";
        $x = 23458.879;
        $int_cast = (int)$x;
        echo "$x -> ";
        echo $int_cast;


        echo "<br><br><b>Normal Variable with types : </b>";

        $a = 8; //Int
        $b = 1.2; //Float
        $c = "Deepak"; //String
        $d = true; //Bool
        $e = NULL; //Null

        var_dump($a,$b,$c,$d,$e);

        echo "<br><br><b>Typecasting: To String</b><br>";
        
        //Casting all Varaibles to String Type.
        $v = (string) $a;
        $w = (string) $b;
        $x = (string) $c;
        $y = (string) $d;
        $z = (string) $e;
        

        //Verifying the Varaible type of Variables changed using var_dump().

        var_dump($v);echo "<br>";
        var_dump($w);echo "<br>";
        var_dump($x);echo "<br>";
        var_dump($y);echo "<br>";
        var_dump($z);

        echo "<br><br><b>Typecasting: To Int</b><br>";

        $q = (int) $a;
        $r = (int) $b;
        $s = (int) $c;
        $t = (int) $d;
        $u = (int) $e;

        var_dump($q);echo "<br>";
        var_dump($r);echo "<br>";
        var_dump($s);echo "<br>";
        var_dump($t);echo "<br>";
        var_dump($u);

        

        echo "<br><br><b>Typecasting: To Float</b><br>";

        $g = (float) $a;
        $h = (float) $b;
        $i = (float) $c;
        $j = (float) $d;
        $k = (float) $e;

        var_dump($g);echo "<br>";
        var_dump($h);echo "<br>";
        var_dump($i);echo "<br>";
        var_dump($j);echo "<br>";
        var_dump($k);

        echo "<br><br><b>Typecasting: To Boolean</b><br>";

        $a1 = (bool) $a;
        $b1 = (bool) $b;
        $c1 = (bool) $c;
        $d1 = (bool) $d;
        $e1 = (bool) $e;

        var_dump($a1);echo "<br>";
        var_dump($b1);echo "<br>";
        var_dump($c1);echo "<br>";
        var_dump($d1);echo "<br>";
        var_dump($e1);

        echo "<br><br><b>Typecasting: To Array</b><br>";

        $a2 = (array) $a;
        $b2 = (array) $b;
        $c2 = (array) $c;
        $d2 = (array) $d;
        $e2 = (array) $e;

        var_dump($a2);echo "<br>";
        var_dump($b2);echo "<br>";
        var_dump($c2);echo "<br>";
        var_dump($d2);echo "<br>";
        var_dump($e2);

        echo "<br><br><b>Typecasting: Unset / </b><br>";

        $a4 = (unset) $a;
        $b4 = (unset) $b;
        $c4 = (unset) $c;
        $d4 = (unset) $d;
        $e4 = (unset) $e;
        
        var_dump($a4);echo "<br>";
        var_dump($b4);echo "<br>";
        var_dump($c4);echo "<br>";
        var_dump($d4);echo "<br>";
        var_dump($e4);

        echo "<br><br><b>Typecasting: To Object</b><br>";

        $a3 = (object) $a;
        $b3 = (object) $b;
        $c3 = (object) $c;
        $d3 = (object) $d;
        $e3 = (object) $e;
        
        var_dump($a3);echo "<br>";
        var_dump($b3);echo "<br>";
        var_dump($c3);echo "<br>";
        var_dump($d3);echo "<br>";
        var_dump($e3);

        echo "<br><br><b>Converting Objects into Array</b><br>";

        class Car{
          public $color;
          public $model;
          public function __construct ($color,$model){
            $this -> color = $color;
            $this -> model = $model;
          }
          
          public function message(){
            return "My car is a " . $this->color . " " . $this->model . "!";
          }
        }

        $mycar = new Car("black","Volvo");
        echo $mycar -> message();
        echo "<br><br>";
        var_dump($mycar);
        echo "<br><br>";

        $mycar = (array) $mycar;
        var_dump($mycar);echo "<br><br>";

        $ab = array("Siraj", "Bumrah", "Manayak");
        $bc = array("Rahul"=>"78", "Kohli"=>"10", "Rohit"=>"5");

        var_dump($ab);echo "<br><br>";
        var_dump($bc);echo "<br><br>";

        $ab = (object) $ab;
        $bc = (object) $bc;

        var_dump($ab);echo "<br><br>";
        var_dump($bc);

       ?>
  </body>
</html>
