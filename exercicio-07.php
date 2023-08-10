<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <?php
    if (isset($_POST["cadastrar"]) ) {
        $nome = $_POST["nome"];
        $fabricante = $_POST["fabricante"];
        $preco = $_POST["preco"];
        $disponibilidade = $_POST["disponibilidade"];
        $descricao = $_POST["descricao"];
    ?>
    
    
        <h2>Dados do Produto Cadastrado:</h2>
        <p><b>Nome:</b> <?= htmlspecialchars($nome)?> </p>
        <p><b>Fabricante:</b>  <?=htmlspecialchars($fabricante)?> </p>
        <p><b>Preço:</b> R$ <?= number_format($preco, 2, ',', '.')?></p>
        <p><b>Disponibilidade:</b> <?= htmlspecialchars($disponibilidade)?> </p>
        <p><b>Descrição:</b><br> <?=nl2br(htmlspecialchars($descricao)) ?></p>

    

    <?php 
    }else {
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" required placeholder="digite o produto">
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <?php
                $fabricantes = array(" ", "Fabricante 1", "Fabricante 2", "Fabricante 3", "Fabricante 4");
                foreach ($fabricantes as $fabricante) {
                    echo "<option value='" . htmlspecialchars($fabricante) . "'>$fabricante</option>";
                }
                ?>
            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01" required placeholder="preço">
        </p>

        <p>
            <label>Disponibilidade:</label>
            <input type="radio" name="disponibilidade" value="sim" id="disponibilidade_sim" required>
            <label for="disponibilidade_sim">Sim</label>
            <input type="radio" name="disponibilidade" value="nao" id="disponibilidade_nao">
            <label for="disponibilidade_nao">Não</label>
        </p>

        <p>
            <label for="descricao">Mensagem:</label>
            <textarea name="descricao" id="descricao" rows="4" placeholder="mensagem"></textarea>
        </p>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
    <?php
    }
    ?>

    
</body>
</html>
