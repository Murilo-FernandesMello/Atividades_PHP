<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$x = (- $b + (sqrt(pow($b,2)) - 4 * ($a * $c) )) / (2*$a);

echo "Resultado: ".$x;
?>