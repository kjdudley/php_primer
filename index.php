<?php
$title = "Index";
include 'includes/header.php'
?>

    <!-- Basic HTML -->
    
    <h1>Hello HTML - PHP Primer</h1>
    
    <?php
    //Printing to HTML using echo
    echo 'Hello PHP';
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';

    ?>

    <?php
    // declare variable
    $name = 'Kevin Dudley';
    $age = 43;
    // echo variable
    echo $name;
    echo '<h1>My Name Is: ' . $name .'</h1>';
    echo '<h1>My Age Is: ' . $age .'</h1>';

    echo "<h1>My Name is: $name </h1>";

    ?>
    
<?php require 'includes/footer.php' ?>

