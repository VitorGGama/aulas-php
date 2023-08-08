<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>

    <hr>

    <p>Receber e processar dados via <b>POST</b></p>

    <?php
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
        // Campos nome e/ou email estão vazios
    ?>
        
    <p>Preencha nome e e-mail</p>
    <p><a href="10-formulario.html">Voltar</a></p>

    <?php
    } else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        $idade = isset($_POST["idade"]) ? $_POST["idade"] : "";
        $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : array();

        // Mostrar os dados somente se a mensagem não estiver vazia
        $mostrarMensagem = !empty($mensagem);
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>E-mail: <?= $email ?></li>
        <li>Idade: <?= $idade ?></li>
        <li>Interesses: <?= implode(", ", $interesses) ?></li>

        <?php if ($mostrarMensagem) { ?>
            <li>Mensagem: <?= $mensagem ?></li>
        <?php } ?>
    </ul>

    <?php
    }
    ?>
</body>
</html>
