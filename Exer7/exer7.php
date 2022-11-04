<?php
$valor = $_POST['v'];
$taxa = $_POST['ta'];
$tempo = $_POST['te'];

$prestacao = $valor + ($valor*($taxa/100)*$tempo);

echo "Valor da Prestção: $prestacao"
?>