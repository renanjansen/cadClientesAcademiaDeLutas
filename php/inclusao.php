<?php
$idAluno = $_POST['idaluno'];

//conecta com a base de dados
$conect = include 'conect.php';

$buscaClienteNome = "SELECT  nomeAluno FROM alunoexcluido WHERE idaluno=".$idAluno;

foreach ($conect->query($buscaClienteNome) as $value) {
    $nomeAluno = $value['nomeAluno'];
} 

$sql = "INSERT INTO aluno SELECT * FROM alunoexcluido WHERE idaluno =?;
DELETE FROM alunoexcluido WHERE idaluno =?;";

$prepare = $conect->prepare($sql);
$prepare->bindparam(1, $idAluno);
$prepare->bindparam(2, $idAluno);
$prepare-> execute();

if ($prepare-> rowCount()) {
    echo "<h3>Cadastro de ".$nomeAluno." reinserido com sucesso!</h3>";

    include 'inclui_cadastro.php';
}
