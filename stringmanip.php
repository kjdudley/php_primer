<?php
$title = "String Manipulations";
include 'includes/header.php' ?>

  <body>

      <h1><?php echo $title ?></h1>

      <?php

      //Concatenation of strings
      $phrase1 = "Student who came late";
      $phrase2 = "in class, stand with Rock";
      $name = "kevin dudley";
      echo $phrase1 . ", named Tiffany, " . $phrase2;

      echo '<br/>';
      echo'<hr/>';

      //String transformation
      echo 'Uppercase first letter: ' . ucfirst($name) . '</br>';
      echo 'Uppercase first letter of each word: ' . ucwords($name) . '</br>';
      echo 'Uppercase: ' . strtoupper($name) . '</br>';
      echo 'Lowercase: ' . strtolower("THIS WAS ALL UPPERCASE") . '</br>';

      echo '<hr/>';
      echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
      echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
      echo 'Get a Substring: ' . substr($name, 1, 10) . '</br>';

      echo 'Get position of string: ' . strpos($name, 'n') . '</br>';

      echo 'Find Character "k": ' . strchr($name, 'k') . '</br>';
      echo 'Find Character "K": ' . strchr($name, 'K') . '</br>';

      echo 'Find length of String: ' . strlen($name) . '</br>';

      echo 'Without Trim: ' . "A" . " B C D " . "E" . '</br>';
      echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '</br>';
      echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '</br>';
      echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '</br>';

      echo ' Replace string with another: ' . str_replace("stand", "sit", $phrase2 ) . '</br>';
      ?>

<?php require 'includes/footer.php' ?>

