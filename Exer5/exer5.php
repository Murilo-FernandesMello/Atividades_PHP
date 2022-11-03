<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$m = ($a + $b + $c)/3;
$m = number_format($m,2,'.',"");

echo "Média: $m";
?>