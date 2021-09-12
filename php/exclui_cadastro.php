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
    <title>Formulário de exclusão</title>
</head>

<body>

    <form method="POST" 
    action="exclusao.php" 
    enctype="multipart/form-data" 
    id="formEx">
        <div>
            <label form="idaluno">
                Número de aluno a excluir:</label>
            <input type="number" name="idaluno" id="idaluno" required>
            <div>
                <div>
                    <button type="submit" id="excluir" 
                    class="btn btn-outline-light m-5">Excluir</button>
                </div>

    </form>

    <script src="../Js/menu.js"></script>
    <script src="../Js/cadastro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>

</html>