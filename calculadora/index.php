<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora Multiplicadora</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Núm 1: <input type="text" name="num1"><br><br>
    <input type="submit" value="Multiplicar">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['num1'])){

        $num1 = $_POST['num1'];
        
        // Multiplicação em vez de soma
        $resultado1 = $num1 * 5;
       

        echo "<h3>O resultado da multiplicação de $num1 por 5 é: $resultado1</h3>";
        
    } else{
        echo "<h3>Preencha todos os campos.</h3>";
    }
}
?>
</body>
</html>