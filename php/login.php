<?php

$senha = $_POST['senhaLogin'];
$usuario = $_POST['usuarioLogin'];

$senhaValida = 000001;
$usuarioValido = 'Tester';

if ($senha == $senhaValida && $usuario === $usuarioValido) {
    header('Location:../home.html');
} else {

    
    echo "<script>
            alert('Senha inválida');
         </script>";

        include "../index.html";

}
