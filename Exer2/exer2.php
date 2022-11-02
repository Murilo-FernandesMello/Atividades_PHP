<?php
$num = $_POST['num'];
$imprimir = $_POST['imprimir'];

for($i = 1; $i <= $num; $i++){

if($i%2 == 0){
    echo"<p style='color: red'> $i <br> </p>";   
}else{
    echo"<p style='color: blue'> $i <br> </p>";
}
}

?>