<?php

include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $ra = mysqli_real_escape_string($conexao, $_POST['ra']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $curso = mysqli_real_escape_string($conexao, $_POST['curso']);

    
    $sql = "INSERT INTO cadastro (nome, email, ra, telefone, curso) 
            VALUES ('$nome', '$email', '$ra', '$telefone', '$curso')";

    
    if (mysqli_query($conexao, $sql)) {
        
        header("Location: ver_cadastros.php?success=1");
        exit();
    } else {
        echo "Erro no cadastro: " . mysqli_error($conexao);
        echo "<br><a href='formulario.php' class='back-link'>← Voltar ao formulário</a>";
    }

   
    mysqli_close($conexao);
} else {
    echo "Método inválido!";
    echo "<br><a href='formulario.php' class='back-link'>← Voltar ao formulário</a>";
}
?>