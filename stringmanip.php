<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php
    //Concatenation of string
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "lorenzo williams";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String'. str_repeat('a',10).'<br/>';
        echo 'Repeat String - Nested String'. strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a Substring: '. substr($name,3,5).'<br/>';

        echo 'Get postition of string'. strpos($name,'w').'<br/>';
        //Returns Null
        //echo 'Get postition of string: ' . strpos($combine,'z').'<br/>';
        echo 'Find character "R": '. strchr($name, 'R').'<br/>';
        echo 'Find character "r": '. strchr($name, 'r').'<br/>';
        echo 'Find character "s": '. strchr($name, 's').'<br/>';
        echo 'Find character "e": '. strchr($name, 'e').'<br/>';

        echo 'Find Length of string: '. strlen($name).'<br/>';
        
        echo 'Without Trim: '. "A" . "B C D". "E".'<br/>';
        echo 'Trim space on both sides: '. "A".trim(" B C D ") . "E" .'<br/>';
        echo 'Trim space on left: '. "A".ltrim(" B C D ") . "E" .'<br/>';
        echo 'Trim space on right sides: '. "A".rtrim(" B C D ") . "E" .'<br/>';

        echo ' Replace string with another: '. str_replace("stand","sit",$phrase2) .'<br/>';


    ?>
    <?php require 'includes/footer.php' ?>