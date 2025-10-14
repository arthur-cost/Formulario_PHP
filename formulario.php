<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>📝 Formulário de Cadastro</h2>

    <form action="cadastrar.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="ra">RA (Registro Acadêmico):</label>
            <input type="text" id="ra" name="ra" maxlength="9" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="11 99999-8888">
        </div>

        <div class="form-group">
            <label for="curso">Curso:</label>
            <select id="curso" name="curso" required>
                <option value="">Selecione um curso</option>
                <option value="Administração">Administração</option>
                <option value="Engenharia">Engenharia</option>
                <option value="Medicina">Medicina</option>
                <option value="Direito">Direito</option>
                <option value="Ciência da Computação">Ciência da Computação</option>
            </select>
        </div>

        <button type="submit">📤 Cadastrar</button>
    </form>

    <br>
    <a href="ver_cadastros.php" class="back-link">👀 Ver todos os cadastros</a>
</body>
</html>