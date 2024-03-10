<?php
$title = "While Loops";
include 'includes/header.php' ?>

  <body>

      <h1><?php echo $title ?></h1>

      <?php

      $grade=0;
      // Infinite Loop!
      // while($grade < 10){
      //    echo'<p>I AM LESS THAN 10!</p>';
      //     
      // }

      //Pre-Condition Loop
      while($grade < 10){

          echo'<p>I AM LESS THAN 10!</p>';
          $grade++;
          
      }

      echo '<h2>EXIT LOOP</h2>';

      ?>

      <h1>DO-While Loop</h1>

      <?php
      // Post-Condition Loop
      $grade = 0;
      do{
          echo '<p>I AM DO WHILE LOOP</p>';
          $grade++;
      }while($grade < 10);
      
      echo '<h2>EXIT LOOP</h2>';
      
      ?>

<?php require 'includes/footer.php' ?>

