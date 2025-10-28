<?php

include 'conexao.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexao, $_GET['id']);
    
    header("Location: ver_cadastros.php?message=Funcionalidade de edição em desenvolvimento!");
    exit();
}
?>

-- conexão com PDO, tipo de conexão com o banco de dados -- 

