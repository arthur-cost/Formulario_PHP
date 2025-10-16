<?php

include 'conexao.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexao, $_GET['id']);
    
    
    $sql = "DELETE FROM cadastro WHERE id = $id";
    
    if(mysqli_query($conexao, $sql)) {
        
        header("Location: ver_cadastros.php?delete_success=1");
        exit();
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
} else {
    echo "ID não especificado!";
}

?>
