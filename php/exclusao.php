<?php
$idAluno = $_POST['idaluno'];

//conecta com a base de dados
$conect = include 'conect.php';

$buscaClienteNome = "SELECT  nomeAluno FROM aluno WHERE idaluno=".$idAluno;

foreach ($conect->query($buscaClienteNome) as $value) {
    $nomeAluno = $value['nomeAluno'];
} 

$sql = "DELETE FROM aluno WHERE idaluno =?";

$prepare = $conect->prepare($sql);
$prepare->bindparam(1, $idAluno);
$prepare-> execute();

if ($prepare-> rowCount()) {
    echo "<h3>Cadastro de ".$nomeAluno." deletado com sucesso!</h3>";

    include 'exclui_cadastro.php';
}
