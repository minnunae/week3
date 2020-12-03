<?php
    echo "The PHP Comparison Operators <hr />";
    $x = 100;
    $y = "100";

    var_dump($x == $y);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operators <hr />";
    $a = 100;
    $b = "100";
    var_dump($a === $b);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operators <hr />";
    $x = 5;
    $y = 10;
    echo ($x <=> $y);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operators <hr />";
    $x = 10;
    $y = 10;
    echo ($x <=> $y);
    echo "<hr />";
?>

<?php
    echo "The PHP Comparison Operators <hr />";
    $x = 15;
    $y = 10;
    echo $x <=> $y;
    echo "<hr />";
?>