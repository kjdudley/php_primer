<?php
$title = "Time Manipulation";
include 'includes/header.php' ?>

<body>

      <h1><?php echo $title ?></h1>

      <?php

      $datenow = getdate();
      echo "Today's Date: </br>";
      echo $datenow['mday'] . '</br>';
      echo $datenow['mon'] . '</br>';
      echo $datenow['year'] . '</br>';

      echo "Today's Date: " . $datenow['mday'] . '/'. $datenow['mon'] . '/' . $datenow['year'] . '</br>';
      echo time();

      print date("d/m/y G.i:s<br>", time()) . '</br>';
      print 'Today is :';
      print date("j of F Y, \a\\t g.i a", time());
      ?>

<?php require 'includes/footer.php' ?>

