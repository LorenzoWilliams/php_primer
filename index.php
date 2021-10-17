<?php 
    $title = "Home";
    include 'includes/header.php'
?>
    <!--Basic HTML-->
    <h1><?php echo $title ?></h1>
    <h1>Hello World - PHP Primer</h1>

    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

        //declare variable
        $name = 'Lorenzo Williams';
        $age = 30 ;
        //echo variable
        echo $name;

        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';

        echo "<h1>My Name Is: $name </h1>";
    ?>

    <button type="button" class="btn btn-dark">CLICK ME</button>
    <button type="button" class="btn btn-primary">CLICK ME</button>
    <button type="button" class="btn btn-success">CLICK ME</button>
    <a href="https://www.heruko.com " target="_blank" class="btn btn-danger">Heroku.com</a>
    <?php
    require 'includes/footer.php' 
    ?>