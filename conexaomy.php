<?php
$host = getenv("MYSQL_SERVICE_HOST");
$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");
$link=mysqli_connect($host, $user, $pass, $db);

if(!$link) 
{

    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
 }

else
{
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
}

?> 
