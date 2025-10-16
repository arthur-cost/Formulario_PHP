<?php
include 'conexao.php';

if(isset($_GET['success']) && $_GET['success'] == '1') {
    $mensagem_sucesso = "Cadastro realizado com sucesso!";
}

if(isset($_GET['delete_success']) && $_GET['delete_success'] == '1') {
    $mensagem_sucesso = "Cadastro excluído com sucesso!";
}

$sql = "SELECT * FROM cadastro ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cadastros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>📋 Lista de Cadastros</h2>
    
    <?php if(isset($mensagem_sucesso)): ?>
        <div class="success">✅ <?php echo $mensagem_sucesso; ?></div>
    <?php endif; ?>
    
    <a href="formulario.php" class="back-link">📝 Fazer novo cadastro</a>
    
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>RA</th>
                <th>Telefone</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['ra']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td><?php echo $row['curso']; ?></td>
                <td class="actions">
                    <a href="editar.php?id=<?php echo $row['id']; ?>" class="action-link">✏️ Editar</a> | 
                    <a href="excluir.php?id=<?php echo $row['id']; ?>" class="action-link delete-link" onclick="return confirm('Tem certeza que deseja excluir <?php echo $row['nome']; ?>?')">🗑️ Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div style="margin-top: 20px; text-align: center;">
        <p><strong>Total de cadastros:</strong> <?php echo mysqli_num_rows($resultado); ?></p>
    </div>

</body>
</html>

<?php

mysqli_close($conexao);

?>
