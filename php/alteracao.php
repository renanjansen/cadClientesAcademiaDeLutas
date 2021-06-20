<?php

$idAluno = $_POST['idaluno'];


$nomeAluno = $_POST['nomeAluno'];
$emailAluno = $_POST['emailAluno'];
$telefoneAluno = $_POST['telefoneAluno'];
$turnoAluno = $_POST['turnoAluno'];
$modalidadeAluno = $_POST['modalidadeAluno'];
$vencimentoAluno = $_POST['vencimentoAluno'];


//conecta com a base de dados
$conect = include 'conect.php';

$buscaClienteNome = "SELECT  nomeAluno FROM aluno WHERE idaluno=".$idAluno;
;

foreach ($conect->query($buscaClienteNome) as $value) {
    $nomeAluno = $value['nomeAluno'];
} 

$sql = "UPDATE aluno 
SET 
nomeAluno = ? ,
emailAluno = ?, 
telefoneAluno = ?,
turnoAluno = ?,
modalidadeAluno = ?,
vencimentoAluno = ?
WHERE idaluno =".$idAluno;

$prepare = $conect->prepare($sql);

$prepare->bindParam(1, $nomeAluno);
$prepare->bindParam(2, $emailAluno);
$prepare->bindParam(3, $telefoneAluno);
$prepare->bindParam(4, $turnoAluno);
$prepare->bindParam(5, $modalidadeAluno);
$prepare->bindParam(6, $vencimentoAluno);

$prepare-> execute();

if ($prepare->rowCount()) {

    echo "<h3>Cadastro atualizado com sucesso!</h3><br>";
    include 'listaDeAlunos.php';

}

    
    
?>
