<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/listadecadastro.css" rel="stylesheet">
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
        integrity=
        "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
         crossorigin="anonymous" />
    
    <title>Lista de cadastro</title>
    
  </nav>




</head>
<body class="bg-dark text-light">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CadSystem</a>
      <button class="navbar-toggler" type="button"
       data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false"
         aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="../index.html">Home</a>    
          <a class="nav-link" href="../cadastro.html">Cadastro de alunos</a>
          <a class="nav-link" href="../planos.html">Planos de atividades</a>
          <a class="nav-link" href="listaDeAlunos.php">
              Lista de Alunos cadastrados</a>
          <a class="nav-link" href="altera_cadastro.php">
              Altera Alunos cadastrados</a>
          <a class="nav-link" href="inclui_cadastro.php">
              Reinsere Aluno cadastrado</a>
          <a class="nav-link" href="altera_cadastro.php">
              Altera Alunos cadastrados</a>
          
        </div>
      </div>
    </div>
    </header>
    <main>
        <div id="lista">
            <?php

                $conect = include 'conect.php';
                $sql = "SELECT * FROM alunoexcluido";

            foreach ($conect->query($sql) as $value) {
   
                echo "<br><br>Número de cadastro : ".$value['idaluno'].
                "<br>Nome do aluno: ".$value['nomeAluno'].
                "<br>Email do aluno: "
                .$value['emailAluno'].
                "<br>Telefone do aluno: "
                .$value['telefoneAluno'].
                "<br>Turno do aluno: "
                .$value['turnoAluno'].
                "<br>Modalidade: "
                .$value['modalidadeAluno'].
                "<br>Vencimento do aluno: "
                .$value['vencimentoAluno'].
                "<hr>";

            }
            
            ?>
        </div>
    </main>
</body>
<script src="../js/menu.js"></script>
<script src="../Js/cadastro.js"></script>

</html>