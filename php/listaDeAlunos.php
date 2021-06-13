<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/listadecadastro.css" rel="stylesheet">
    <title>Lista de cadastro</title>
</head>

<body>
    <header>
        <button onclick="menu()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="../index.html">Home</a>
            <a href="../cadastro.html">Cadastro de alunos</a>
            <a href="../planos.html">Planos de atividades</a>
            <a href="listaDeAlunos.php">Lista de Alunos cadastrados</a>
            <a href="exclui_cadastro.php">Excluir Aluno cadastrado</a>
        
        </div>
    </header>
    <main>
        <div id="lista">
            <?php

                $conect = include 'conect.php';
                $sql = "SELECT * FROM aluno";

            foreach ($conect->query($sql) as $value) {
   
                echo "<h1>Número de cadastro : ".$value['idaluno'].
                " ".$value['nomeAluno']."</h1>";

            }
            
            ?>
        </div>
    </main>
</body>
<script src="../js/menu.js"></script>
<script src="../Js/cadastro.js"></script>

</html>