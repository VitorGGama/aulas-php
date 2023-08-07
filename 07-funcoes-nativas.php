<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas </title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>

     <h2>Strings</h2>
     <h3>trim()</h3>
    <?php
    /*função que remove espaços 
    antes e depois de strings */ 
    $nome = "    Vinicius deve 80 paçocas    ";
    $nomeSemEspaço = trim($nome);
    ?>

    <pre> <?=var_dump($nome)?></pre>
    <pre> <?=var_dump($nomeSemEspaço)?></pre>

    <hr>
    <h3>str_replace</h3>
    <?php 
    /*função que permite substituição
    de strings/caracteres.*/ 
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $frasebonita = str_replace(["xarope","bobão "],
    "***** ou 🤬",
    $fraseFeia
    );
    ?>

    <p><?=$fraseFeia?></p>
    <p><?=$frasebonita?></p>

    <hr>

    <h3>explode</h3>
    <?php
    /*função que transforma um string em arrays*/ 
    $linguagens = "html - css - js";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>

    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>


    <h2>Numéricas</h2>

    <h3>min, max, round</h3>

    <?php
    $valores = [10, 5, 50, 1000, 275];
    $valorQualquer = 1259.75;
    ?>

    <p>Menor valor: <?=min($valores)?></p>
    <p>Maior valor: <?=max($valores)?></p>
    <p>Arredondamento: <?=round($valorQualquer)?></p>

    <hr>
   
    <h2>Arrays</h2>
    <h3>implode()</h3>
    <?php
    /*função que transforma array em string*/
    $bandas = ["titãs", "ira!", "legião"];
    $textoBandas = implode(" - ", $bandas);
    ?>

    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>

    <hr>
    <h3>extract</h3>

    <?php
    /*função que extrai chaves associativas
    para variaveis */ 
    
    $aluno = [
        "id" => 1,
        "nome" => "chave do 8",
        "idade" => 25
    ];
    extract($aluno);
    ?>

    <ul>
        <li>id: <?=$id?></li>
        <li>nome: <?=$nome?></li>
        <li>idade: <?=$idade?></li>
    </ul>
    <hr>

    <h3>array_sum()</h3>
    <?php
    /*função para somar os valores
    de um array */ 
    
    $total = array_sum($valores);
    ?>
    <p>Soma dos valores: <?=$total?></p>

    <hr>

    <h3>array_unique()</h3>
    <?php
    /* Função que retorna um novo
    array com dados únicos */ 
    $produtos = ["TV", "Notebook", "TV", "Geladeira",
                "Monitor", "Notebook", "Teclado", "Mouse"
    ];
    $produtosUnicos = array_unique($produtos);
    ?>
    <pre><?=var_dump($produtos)?></pre>
    <pre><?=var_dump($produtosUnicos)?></pre>

       
    <h2>Filtros</h2>
    <p>Recursos de análise 
    e limpeza de dados aplicados através das 
    funções  <code>filter_var()</code>e <code>filter_input()</code>.
    </p>

    <h3>Validação</h3>

    <?php
    $email = "vitorggam@hotmail.com";
    /*Se o e-mail informado for inválido, ou seja, 
    se não seguir o padrão geral de endereços de e-mail,
    a função abaixo retornará "false"*/
    ?>
    <pre>
        <?=var_dump( filter_var($email, FILTER_VALIDATE_EMAIL) )?>
    </pre>
    
    <h3>Sanitização</h3>
    <?php
    $ataque = "<script>
        document.body.innerHTML = '<h1>Sou ráqui!! mwhaha : ( </h1>'
        </script>";

        echo $ataque;

        //Execução sem sanitização (script é válido)
        //echo ataque;

        $ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS );

        //Execução com sanitização (script é anulado)
        echo $ataqueSanitizado;


    ?>


    <hr>
    
    
    <h2>Segurança</h2>

    
</body>
</html>