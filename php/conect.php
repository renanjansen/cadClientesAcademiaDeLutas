<?php

$username = "root";
$password = "";
$dbname = "cadastroaluno";
$sql = "use aluno; SELECT * FROM aluno";

$conect = null;

try {

    $conect = new PDO('mysql:host=localhost:3306;dbname='.$dbname, $username, $password );
  
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
return $conect;
?>