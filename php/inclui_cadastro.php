<?php

 require 'listaDeAlunosExcluidos.php';
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity=
      "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
     <link href="../css/cadastro.css" rel="stylesheet">
     <title>Formulário de exclusão</title>
 </head>
 <body>

 <form method="POST" action="inclusao.php" enctype="multipart/form-data" id="formEx">
 <div >
    <label form="idaluno">
    Número de aluno a excluir:</label>
    <input type="number" name="idaluno" id="idaluno">
<div>
<div>
        <button type="submit" id="reincluir">Reincluir</button>
</div>
         
 </form> 
 
<script src="../Js/menu.js"></script>
<script src="../Js/cadastro.js"></script>   
 </body>
 </html>
