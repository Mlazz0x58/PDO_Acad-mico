<!DOCTYPE html>
<?php require 'config.php'; ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar</title>
</head>
<body>
    <div class="container1">
        <h1>Adicionar</h1>
<?php
    
if(isset($_POST['nome']) && empty($_POST['nome']) == false){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = sha1(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $pdo->query($sql);

    header("Location: index.php");

}

?>

        <form class="fr" method="POST">
        
            Nome: <br>
            <input class="in" type="text" name="nome" placeholder="Digite o nome..."><br>
            Email: <br>
            <input class="in" type="email" name="email" placeholder="Digite o email..."><br>
            Senha: <br>
            <input class="in" type="password" name="senha" placeholder="Digite uma senha forte..."><br>
            <input class="bttom1" type="submit" value="Cadastrar">

        </form>
    </div>    
</body>
</html>