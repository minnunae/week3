<?php
    echo "The logical operators<hr />";
    $x = 100;
    $y = 50;

    if ($x == 100 and $y == 50){
        echo "Hello World!(true)";
    }

    echo "<hr />"
?>

<?php
    $x = 100;
    $y = 50;

    if($x == 100 && $y == 50){
        echo "Thailand!(true)";
    }
    echo "<hr />";
?>

<?php
    $x = 100;
    $y = 50;

    if($x == 100 or $y == 50){
        echo "Maek Sakaberg(true)";
    }
    else{
        echo"false";
    }
    echo "<hr />";
?>

<?php
    $x = 100;
    $y = 50;
    if ($x == 100 || $y == 80){
        echo "Steav(true)";
    }
        else{
            echo"false";
        }
        echo "<hr />";
?>

<?php
    $x = 100;
    if ($x !== 100){
        echo "Jeff Festo(true)";
    }
    else{
        echo"false";
    }
    echo "<hr />";
?>