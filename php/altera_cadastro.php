<?php
    require 'listaDeAlunos.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cadastro.css" rel="stylesheet">
    <title>Altera cadastro</title>
</head>

<body>
    <form method="POST" action="alteracao.php" enctype="multipart/form-data">
        <div>
            <label form="idaluno">
                Número de aluno a alterar:</label>
            <input type="number" name="idaluno" id="idaluno">
        </div>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nomeAluno">
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="text" id="email" name="emailAluno">
        </div>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefoneAluno" name="telefoneAluno">
        </div>
        <div>
            <div>
                <p>Turno :</p>
                <input type="radio" name="turnoAluno" id="manha" value="manha">
                <label for="manha">Manhã</label></br>
                <input type="radio" id="tarde" name="turnoAluno" value="tarde">
                <label for="tarde">Tarde</label></br>
                <input type="radio" name="turnoAluno" id="noite" value="noite">
                <label for="noite">Noite</label>
            </div>
            <div>
                <p>Modalidade: </p>
                <input type="radio" name="modalidadeAluno" id="karate" 
                value="karate">
                <label for="karate">Karatê</label></br>
                <input type="radio" name="modalidadeAluno" id="judo" 
                value="judo">
                <label for="judo">Judô</label></br>
                <input type="radio" name="modalidadeAluno" id="jiu-jitsu" 
                value="jiu-jitsu">
                <label for="Jiu-jitsu">Jiu-jitsu</label>
            </div>
            <div>
                <label form="vencimento">Vencimento:</label>
                <input type="number" name="vencimentoAluno" id="vencimento">
            </div>
            <div>
                <button type="submit" id="cadastrar">Cadastrar</button>
            </div>
    </form>

</body>

</html>