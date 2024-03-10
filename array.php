<?php
$title = "Arrays";
include 'includes/header.php' ?>

  <body>

      <h1><?php echo $title ?></h1>

      <?php

      //a variable
      $num = 3;

      // an array
      // Only one datatype
      $numbers = array(1,2,3,4,5,6,7,8,9,101,2,65,34,2,1,65,897);
      echo $numbers[5];
      echo "<p>$numbers[9]</p>";

      $size=count($numbers);

      echo "<p>Array Numbers is size: $size</p>";

      for($count = 0; $count < $size; $count++){
          echo "<p>$numbers[$count]</p>";
      }
      ?>

<?php require 'includes/footer.php' ?>

