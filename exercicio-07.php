<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        /* Estilos para melhorar a aparência do formulário */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <?php
    if (isset($_POST["cadastrar"]) ) {
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);

        $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
        $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

    if( empty($_POST["nome"]) || empty($_POST["preco"]) ){
        ?>
        <p>Preencha o nome do produto e preço</p> 
        <p><a href="javascript:history.back()">Voltar</a></p>
        
    <?php
    }else {
    ?>
    
        
    
        <h2>Produto cadastrado com sucesso</h2>
        <p><b>Nome:</b> <?= $nome?> </p>
        <p><b>Fabricante:</b>  <?=($fabricante)?> </p>
        <p><b>Preço:</b> R$ <?= number_format($preco, 2, ',', '.')?></p>
        <p><b>Disponibilidade:</b> <?= $disponibilidade?> </p>
        <p><b>Descrição:</b><br> <?=$descricao ?></p>

       

    

    <?php }
    }else {
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            <label for="nome">Produto:</label>
            <input type="text" name="nome" id="nome" required placeholder="digite o produto">
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <?php
                $fabricantes = array(" ", "Ford", "GM", "Volkswagem", "Honda");
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
