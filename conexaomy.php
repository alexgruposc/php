<?php

$host = getenv("MYSQL_SERVICE_HOST");
$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");

$con=mysqli_connect($host, $user, $pass, $db);

if(!$con) 
{
        echo("Sem sucesso");
 }

else
{
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
}

?> 
