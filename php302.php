<?php
    $x = 200;
    $y = 200.0;
    var_dump ($x);
    var_dump ($y);
    echo "<hr />"
?>

<?php
    $a = true;
    $b = false;
    var_dump ($a);
    var_dump ($b);
    echo "<hr />"
?>

<?php
    $cars = array ("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<hr />";
?>

<?php
    class Auto{
        function Auto(){
            $this->model = "BMW";
        }
    }

    $herble = new Auto();

    echo $herble->model;
?>