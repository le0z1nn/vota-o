<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votação</title>
</head>
<body>
    <h2>Votação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Idade: <input type="text" name="idade"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['idade'])){

        $idade = $_POST['idade'];
        
        if ($idade < 16) {
            echo "<h3>Você não pode votar</h3>";
        } else {
            echo "<h3>Você pode votar</h3>";
        }
        
    } else{
        echo "<h3>Preencha o campo de votação</h3>";
    }
}
?>
</body>
</html>