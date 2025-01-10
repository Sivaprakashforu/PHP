<?php
      namespace myArea;

      function myHe(){
        return __NAMESPACE__;
      }

      class Art{
        public function myclass(){
          return Art::class;
        }
      }
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
  <h1>Constants/ Magic Constants</h1>
      <!--https://www.youtube.com/watch?v=OK_JCtrrv-c-->

      <?php

      echo "<h2>Constants</h2>";
      //define function -> define (Name of the constant, Value of the Constant).

      echo "<b>Used Define Keyword for the Constant Value.</b><br>";
      echo "define(name of the Const, Value of the Constant).<br><br>";
      define ("Grape","Welcome to the World of Siva!");
       echo Grape.'<br>';
      //const keyword used for the const variable.
       const MYSar = "VSL"; echo "<br><b>Const Keyword Used for declaring the Variable</b><br>";
       echo "const name= \"value\";<br>";
       echo MYSar; echo "<br><br>";
       
       //used const with the array values using define.

       echo "<b>Define is used for setting the array of the constant</b><br>";
       echo "define (\"name\",['\"Value1\",\"Value2\"];<br>";
       define("sars",[
        "Si",
        "PC",
        "DSP"
       ]);

       echo "<br><b>Foreach used for printing the Const array values.</b><br>";
       echo "foreach(constname as tempvariable){statement;}<br>";
      foreach(sars as $x){
       echo "<br>$x ";}

       echo "<br><br><b>Define/Const are Global Variables.</b><br>";
       echo "Const Varaible declared outide the function. Giving the output.";

       function myt(){
        echo '<br>'.Grape.'<br><br>';
      }

      myt();


      echo "<h2>Magic Constants</h2>";
      //class/Classname::class,dir,file,function/method,line,namespace,trait(classname for inheritance),
      class Fruits {
        public function myV(){
          return __CLASS__;          
        }

        public function myve(){
          return __METHOD__;
        }
      }
        $SI = new Fruits();
        echo "__CLASS__ Shows classname of that function: <b>";
        echo $SI->myV(); echo "</b><br>";

        echo "<br>__DIR__ Shows Directory of the File: <b>";
        echo __DIR__.'</b><br>';
        echo "<br>__FILE__ Shows PATH of the File and directory: <b>";
        echo __FILE__.'</b><br><br>';

        echo '__LINE__ Shows the Line of the Code: <b>'.__LINE__.'</b><br>';


         function my(){
          return __FUNCTION__;
         }

         echo '<br>__FUNCTION__ Shows the function Name: <b>'.my().'</b><br>';

         echo '<br>__METHOD__ Shows the Method/Function with Class Name: <b>'.$SI->myve().'</b><br>';

        echo '<br>__NAMESPACE__ Shows the Namespace of the File: <b>'.myHe().'</b><br><br>';
      
        trait message1{
          public function msg1(){
            echo __TRAIT__;
          }
        }
        echo "__TRAIT__ Shows the Trait Name of the function: <b>";
        class Welcome{          
          use message1;
        }
       
        $obj = new Welcome();
        $obj->msg1();

        echo "</b><br>";
        $kiwi = new Art();
        echo "<br>return Classname::class; used in the Function Statement to return the Class Name: <b>";
        echo $kiwi->myclass().'</b><br>';

    ?>

        
  </body>
</html>
