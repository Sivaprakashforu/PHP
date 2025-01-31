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
  <h1>Array</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php
        
        /*

          Indexed arrays - Arrays with a numeric index
          Associative arrays - Arrays with named keys
          Multidimensional arrays - Arrays containing one or more arrays

          Array Working
          -------------
          Create Arrays
          Access Arrays
          Update Arrays
          Add Array Items
          Remove Array Items
          Sort Arrays

          Array Items
          -----------
          Array items can be of any data type.

          The most common are strings and numbers (int, float), 
          but array items can also be objects, functions or even arrays.

        */

        $cars = array("Volvo","BMW","Toyoto");

        var_dump($cars);
        echo "<br><br>";

        //function example
        function myFunction(){
          echo "<br>This text comes from a function";
        }

        //create array:
        $myArr = array("Volvo",20,["apple","orange"],myFunction);

        var_dump($myArr);

        echo "<br>";

        $myArr[3]();

        echo "<br><br>";

        echo count($myArr);

        echo "<br><br><b>Index Array</b><br>";

        echo "Creating An Index Array<br>";

        $car = array("Swift","Tata Punch","Ignis");

        var_dump($car);
        
        echo "<br><br>Access Index Array: <br>";

        echo $car[2];

        echo "<br><br>Change Index Array Value: <br>";

        $car[2] = "Bolero Neo Plus";

        echo $car[2];

        echo "<br><br>Looping An Index Array<br>";

        $count=0;
        foreach($car as $x){
          $count++;
          echo "$count . $x<br>";
        }

        echo "<br>Index Number<br>";
        
        $carss[0]="Maruti 800";
        $carss[1]="Tata Nano";
        $carss[2]="Maruti Wagon-R";

        var_dump ($carss);
        echo "<br>";

        array_push($carss,"Toyota");
        var_dump($carss);
        echo "<br>";

        echo "<br><br><b>Associative Array: </b><br>";

        $carrs = array("Brand"=>"Ford","Model"=>"Mustang","Year"=>1964);
        var_dump($carrs);

       echo "<br><br>Display an Associative Array: <br>";

        echo $carrs["Model"];

        echo "<br>";

        echo "<br>Change the Value of an Associative Array: <br>";

        $carrs["year"]=2024;

        var_dump($carrs);

        echo "<br><br>";

        foreach($carrs as $x => $y){
          echo "$x:$y <br>";
        }

        echo "<br><br><b>Creating An Array: </b><br>";

        echo "<br>Creating Array using array()<br>";

        $carsss= array("Volvo","BMW","Toyota");

        var_dump($carsss);

        echo "<br><br>";

        echo "Creating Array using []Brackets<br>";

        $carrrs= ["Swift","Volvo","Skoda"];

        var_dump($carrrs);

        echo "<br><br>";

        echo "Creating Array in Multilines<br>";

        $carrrss=[
          "Skoda",
          "BMW",
          "Rolls Royce",
        ];

        var_dump($carrrss);

        echo "<br><br>";

        echo "Array Keys<br>";

        $carrrr=[
          0=> "Volvo",
          1=> "BMW",
          2=> "Toyota"
        ];

        var_dump($carrrr);

        echo "<br><br>";

        echo "Associative Array are same as Index Array but instead of numbers there are names<br>";
        $mycar = [
          "Brand"=> "Maruti",
          "Model"=> "Swift",
          "Year"=> 2007
        ];

        var_dump($mycar);

        echo "<br><br>";

        echo "Declaring Empty Array and Adding Items<br>";

        $mycars = [];
        $mycars[0]="VC";
        $mycars[1]="VC1";
        $mycars[2]="VC2";

        var_dump($mycars);

        echo "<br><br>";

        echo "Same for Associative Arrays<br>";

        $mycarss = [];
        $mycarss["brand"]="Tata";
        $mycarss["Model"]="Nano";
        $mycarss["Year"]= 2009;      
        
        var_dump($mycarss);

        echo "<br><br>Mixing Array Keys<br>";

        $myArrs = [];

        $myArrs[0]="apples";
        $myArrs[1]="bananas";
        $myArrs["fruit"]="cherries";

        var_dump($myArrs);

        echo "<br><br><b>Access Array Item</b><br><br>";

        echo "Index Array : ";

        echo $cars[2];

        echo "<br><br>Associative Array :";

        echo $mycarss["Year"];

        echo "<br><br>Double / Single Quotes : ";

        echo $mycar["Model"];

        echo " / ";

        echo $mycar['Model'];

        echo "<br><br>Excecute a Function Item:<br>";

        echo "<br>Using Index Array: ";

        function myFunction1(){
          echo "<br>I come from a Function<br>";
        } 

        $myArrss = array("Swift", 73, myFunction1);

        $myArrss[2]();

        echo "<br>Using Associative Array: ";

        $myArrsss = array("Car"=>"Swift","Age"=>29,"Message"=>myFunction1);

        $myArrsss["Message"]();

        echo "<br><br>Looping through the Index Array<br>";

       foreach($myArrss as $a){
        echo "$a <br>";
        if($a==myFunction1){
          $a();
        }
       }

       echo "<br><br>Looping through the Associative Array<br>";

       foreach($myArrsss as $b=>$c){
        echo "$b : $c <br>";
        if($c==myFunction1){
          $c();
        }
       }

       echo "<br><br><b>Update Array Item</b>";

       ?>
  </body>
</html>
