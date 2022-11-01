<?php
$v1 = $_GET['v1'];
$v2 = $_GET['v2'];
$op = $_GET['op'];

//opçoes
switch($op){
    case '+':
        echo "Resultado: ".($v1 + $v2);
        break;
    
    case '-':
        echo "Resultado: ".($v1 - $v2);
        break;
    
    case '*':
        echo "Resultado: ".($v1 * $v2);
        break;

    case '/':
        echo "Resultado: ".($v1 / $v2);
        break;   
    default:
        echo""; 
    }
        
    //botoes
        if(isset($_GET['a'])){
            echo "Resultado: ".($v1 + $v2);
        }else if(isset($_GET['s'])){
            echo "Resultado: ".($v1 - $v2);
        }else if(isset($_GET['m'])){
            echo "Resultado: ".($v1 * $v2);
        }else if(isset($_GET['d'])){
            echo "Resultado: ".($v1 / $v2);
        }

?>