<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./front.css">
    <title>EXERCICIO 1</title>
</head>
<body>
<form action="exer1.php" method="get">
    <div class="container">
        <h1>CALCULADORA</h1>
        <div class="form">
        <form>
            <label for="v1">Valor 1</label>
            <input type="number" id="v1" name="v1">
            <br><br>
            <label for="v2">Valor 2</label>
            <input type="number" id="v2" name="v2">
            <br><br>
            
            <select name="op" id="op">
               <option value="n">Nenhuma opção</option>
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
            <br><br>
            <input type="submit" value="Calcular" />
            <input type="submit" value="Soma" name="a" />
            <input type="submit" value="Subtração" name="s" />
            <input type="submit" value="Multiplicação" name="m" />
            <input type="submit" value="Divisão" name="d" />

        </div>       
        </form> 
    </div>
    
</body>
</html>