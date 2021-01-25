<!DOCTYPE html>
<?php require 'config.php'; ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Usuários</title>
</head>
<body>
    <div class="container">

        <h1>Cadastros</h1>
        
        <table class="tb">

            <tr class="tl">

                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
                
                
            </tr>           
            <br>
            <?php

                $sql = "SELECT * FROM usuarios";
                $sql = $pdo->query($sql);

                if ($sql->rowCount() > 0){

                    foreach($sql->fetchAll() as $usuario){
                        echo '<tr>';
                        echo '<td>'.$usuario['nome'].'<hr></td>';
                        echo '<td>'.$usuario['email'].'<hr></td>';
                        echo '<td><a class="bttom" href="editar.php?id='.$usuario['id'].'">Editar</a> - <a class="bttom" href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';                    
                        echo '</tr>';
                    }

                }

            ?>

            
        </table>
        
        <a class="bttom" href="adicionar.php">Adicionar</a>
    </div>
</body>
</html>