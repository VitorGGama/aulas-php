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
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        
        // Pega o valor do campo 'email' do formulário e atribui à variável $email
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
        // Pega o valor do campo 'mensagem' do formulário e atribui à variável $mensagem
        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
        
        // Verifica se o campo 'idade' foi preenchido no formulário
        // Se preenchido, atribui o valor à variável $idade, senão atribui uma string vazia
        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
        
        // Verifica se o campo 'interesses' foi preenchido no formulário
        // Se preenchido, atribui os valores a um array na variável $interesses, senão atribui um array vazio
        
        //$interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : array();
        $interesses = filter_var_array(
            $_POST["interesses"] ?? [],
            FILTER_SANITIZE_SPECIAL_CHARS
        );

        // Define uma variável para determinar se a mensagem deve ser mostrada
        // A mensagem deve ser mostrada se o campo 'mensagem' não estiver vazio
        $mostrarMensagem = !empty($mensagem);
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>E-mail: <?= $email ?></li>
        <li>Idade: <?= $idade ?></li>  
        
        <?php
        if ( !empty($interesses) ){        
        ?>
        
        <li>Interesses: <?= implode(", ", $interesses) ?></li>
        

        <li>Interesses: 
            <ul>
                <?php foreach( $interesses as $interesses ){ ?>
                <li><?=$interesses?></li>
                <?php  } ?>
            </ul>
        </li>

        <?php
        }
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

