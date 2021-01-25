<?php

$dns = "mysql:dbname=users;host=localhost";
$dbuser = "root";
$dbpass = "";

try{

    $pdo = new PDO($dns, $dbuser, $dbpass);


}catch(PDException $e){

    echo "Falhou: ".$e->getMessage();

}

?>