<?php
$tempo = $_GET['tem'];
$velocidade = $_GET['vel'];
$distancia = $tempo * $velocidade;
$litUsados = $distancia/12;

echo "Velocidade: $velocidade <br>
        Tempo: $tempo <br>
        Distância: $distancia <br>
        Litros Usados: $litUsados"
?>