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
    // Verifica se os campos nome e email estão vazios
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
        // Se estiverem vazios, exibe uma mensagem de erro
    ?>
        
    <p>Preencha nome e e-mail</p>
    <p><a href="10-formulario.html">Voltar</a></p>

    <?php
    } else {
        // Se os campos não estiverem vazios, pega os valores do formulário
        
        // Pega o valor do campo 'nome' do formulário e atribui à variável $nome
        $nome = $_POST["nome"];
        
        // Pega o valor do campo 'email' do formulário e atribui à variável $email
        $email = $_POST["email"];
        
        // Pega o valor do campo 'mensagem' do formulário e atribui à variável $mensagem
        $mensagem = $_POST["mensagem"];
        
        // Verifica se o campo 'idade' foi preenchido no formulário
        // Se preenchido, atribui o valor à variável $idade, senão atribui uma string vazia
        $idade = isset($_POST["idade"]) ? $_POST["idade"] : "";
        
        // Verifica se o campo 'interesses' foi preenchido no formulário
        // Se preenchido, atribui os valores a um array na variável $interesses, senão atribui um array vazio
        $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : array();

        // Define uma variável para determinar se a mensagem deve ser mostrada
        // A mensagem deve ser mostrada se o campo 'mensagem' não estiver vazio
        $mostrarMensagem = !empty($mensagem);
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>E-mail: <?= $email ?></li>
        <li>Idade: <?= $idade ?></li>
        <li>Interesses: <?= implode(", ", $interesses) ?></li>

        <?php
        // Verifica se a mensagem deve ser mostrada e exibe se necessário
        if ($mostrarMensagem) {
        ?>
            <li>Mensagem: <?= $mensagem ?></li>
        <?php
        }
        ?>
    </ul>

    <?php
    }
    ?>
</body>
</html>

