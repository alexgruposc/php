<?php
$host = getenv("MYSQL_SERVICE_HOST");
$post = getenv("MYSQL_SERVICE_POST");

$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");
    
 echo "teste";
 echo $host;
 echo $post;
 echo $user;
    
?>
