<?php
    require 'listaDeAlunos.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/cadastro.css" rel="stylesheet">
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
        integrity=
        "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
         crossorigin="anonymous" />
    <title>Altera cadastro</title>
</head>

<body class="bg-dark text-light">
    <form method="POST" action="alteracao.php" enctype="multipart/form-data">
        <div>
            <label form="idaluno">
                Número de aluno a alterar:</label>
            <input type="number" name="idaluno" id="idaluno" required>
        </div>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nomeAluno" required>
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="text" id="email" name="emailAluno" required>
        </div>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefoneAluno" name="telefoneAluno" required>
        </div>
        <div>
            <div>
                <p>Turno :</p>
                <input type="radio" name="turnoAluno" id="manha"
                 value="manha" required>
                <label for="manha">Manhã</label></br>
                <input type="radio" id="tarde" name="turnoAluno"
                 value="tarde" required>
                <label for="tarde">Tarde</label></br>
                <input type="radio" name="turnoAluno" id="noite"
                 value="noite" required>
                <label for="noite">Noite</label>
            </div>
            <div>
                <p>Modalidade: </p>
                <input type="radio" name="modalidadeAluno"
                 id="karate" value="karate" required>
                <label for="karate">Karatê</label></br>
                <input type="radio" name="modalidadeAluno" id="judo"
                 value="judo" required>
                <label for="judo">Judô</label></br>
                <input type="radio" name="modalidadeAluno"
                 id="jiu-jitsu" value="jiu-jitsu" required>
                <label for="Jiu-jitsu">Jiu-jitsu</label>
            </div>
            <div>
                <label form="vencimento">Vencimento:</label>
                <input type="number" name="vencimentoAluno" id="vencimento" required>
            </div>
            <div>
                <button type="submit" id="cadastrar"
                 class="btn btn-outline-light m-5">Alterar</button>
            </div>
    </form>
    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3">
          © 2021 Copyright:
          <a class="text-light" href="https://github.com/renanjansen"
            >Renan Jansen</a
          >
        </div>
        <!-- Copyright -->
      </footer>

</body>

</html>