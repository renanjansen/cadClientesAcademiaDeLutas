<?php

$username = "epiz_29699132";
$password = "DHPsmWssYEJO";
$dbname = "epiz_29699132_cadastroaluno";
$sql = "use aluno; SELECT * FROM aluno";

$conect = null;

try {

    $conect = new PDO('mysql:host=sql110.epizy.com:3306;dbname='.$dbname, $username, $password );
  
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
return $conect;
?>