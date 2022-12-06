<?php

if(isset($_POST['submit'])){

    require('config.php');

    $nome = $_POST['nome'];

    $resultado = mysqli_query($conectar, "INSERT INTO teste(nome) values('$nome') ");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Teste</title>
</head>
<body>
    
    <form action="aula.php" method="POST">
        <fieldset>
            <label>Nome</label>
            <input type="text" name="nome" id="nome" class="nome"/>
            <input type="submit" name="submit" id="submit" class="submit" />
        </fieldset>
    </form>
</body>
</html>