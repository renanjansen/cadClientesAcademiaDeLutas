<?php

$nomeAluno = $_POST['nomeAluno'];
$emailAluno = $_POST['emailAluno'];
$telefoneAluno = $_POST['telefoneAluno'];
$turnoAluno = $_POST['turnoAluno'];
$modalidadeAluno = $_POST['modalidadeAluno'];
$vencimentoAluno = $_POST['vencimentoAluno'];


//conecta com a base de dados
$conect = include 'conect.php';

$sql = "INSERT INTO aluno(
    nomeAluno,
    emailAluno,
    telefoneAluno,
    turnoAluno,
    modalidadeAluno,
    vencimentoAluno
) VALUES(?, ?, ?, ?, ?, ?)";

$prepare = $conect->prepare($sql);

$prepare->bindParam(1, $nomeAluno);
$prepare->bindParam(2, $emailAluno);
$prepare->bindParam(3, $telefoneAluno);
$prepare->bindParam(4, $turnoAluno);
$prepare->bindParam(5, $modalidadeAluno);
$prepare->bindParam(6, $vencimentoAluno);

$prepare-> execute();

if ($prepare->rowCount()) {

    echo "<h3>Cadastro realizado com sucesso!</h3><br>";
    
}
