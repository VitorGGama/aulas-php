<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <style>
        
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" required>
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <?php
                $fabricantes = array("Fabricante 1", "Fabricante 2", "Fabricante 3", "Fabricante 4");
                foreach ($fabricantes as $fabricante) {
                    echo "<option value='" . htmlspecialchars($fabricante) . "'>$fabricante</option>";
                }
                ?>
            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01" required>
        </p>

        <p>
            <label>Disponibilidade:</label>
            <input type="radio" name="disponibilidade" value="sim" id="disponibilidade_sim" required>
            <label for="disponibilidade_sim">Sim</label>
            <input type="radio" name="disponibilidade" value="nao" id="disponibilidade_nao">
            <label for="disponibilidade_nao">Não</label>
        </p>

        <p>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4"></textarea>
        </p>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $fabricante = $_POST["fabricante"];
        $preco = $_POST["preco"];
        $disponibilidade = $_POST["disponibilidade"];
        $descricao = $_POST["descricao"];

        echo "<h2>Dados do Produto Cadastrado:</h2>";
        echo "<p><b>Nome:</b> " . htmlspecialchars($nome) . "</p>";
        echo "<p><b>Fabricante:</b> " . htmlspecialchars($fabricante) . "</p>";
        echo "<p><b>Preço:</b> R$ " . number_format($preco, 2, ',', '.') . "</p>";
        echo "<p><b>Disponibilidade:</b> " . htmlspecialchars($disponibilidade) . "</p>";
        echo "<p><b>Descrição:</b><br>" . nl2br(htmlspecialchars($descricao)) . "</p>";
    }
    ?>
</body>
</html>
