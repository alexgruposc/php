<?php
$host = getenv("MYSQL_SERVICE_HOST");

$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");
    
    $conexao = new mysqli($host, $user, $pass, $db);
    echo $host;
    return $conexao;
?>
