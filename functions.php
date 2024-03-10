<?php
$title = "Functions";
include 'includes/header.php' ?>

  <body>

      <h1><?php echo $title ?></h1>

      <?php

      /*Defining a Function */

      function writemessage(){
          echo "You are a really nice person, have a nice time! </br>";
      }

      /* Call Function */
      
      writemessage();
      writemessage();
      writemessage();

      /*Functions with Parameters */

      function addFunction($num1, $num2){
          $sum = $num1 + $num2;
          echo "$num1 + $num2 = $sum </br>";
      }

      /* Pass by Reference - use ampersand in parameter */
      
      function changeNum(&$num){
          $num = $num + 10;
      }

      function returnProduct($num1, $num2){
          $prod = $num1 * $num2;
          return $prod;
      }

      $num = 500;
      addFunction(10, 20);
      addFunction(10, $num);
      addFunction('10', '50');

      changeNum($num);
      echo $num . '<br>';

      $return_value = returnProduct(10, 200);
      echo $return_value . '</br>';

      ?>
      
<?php require 'includes/footer.php' ?>
