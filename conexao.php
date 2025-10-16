<?php

$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "meucadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}


mysqli_set_charset($conexao, "utf8");

?>
