<?php

require "config.php";

$id = 0;

if(isset($_GET['id']) && !empty(['id'])){

    $id = addslashes($_GET['id']);

}

if(isset($_POST['nome']) && !empty(['nome'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: index.php");

}

$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0){

    $dado = $sql->fetch();

} else {

    header("Location: index.php");

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body>
    <div class="container1">
        <h1>Editar</h1>
        <form class="fr" method="POST">
        
            Nome: <br>
            <input  class="in" type="text" name="nome" value="<?php echo $dado['nome'];?>"> <br>
            E-mail: <br>
            <input class="in" type="email" name="email" value="<?php echo $dado['email'];?>"> <br>

            <input class="bttom1" type="submit" value="Atualizar"> <br><br>
        
        </form>
    </div>
</body>
</html>