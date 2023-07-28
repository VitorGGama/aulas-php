<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
    <?php
    //Variaveis

    //String
    $curso = "Tecnico em informatica para internet";

    //inteiro(integer)
    $ano = 2013;

    //float (real)
    $preco = 2500.25;

    echo "<h2>Saída de dados usando echo</h2>";

    echo "<h2>Saída de dados usando echo na sintaxe completa </2>";
    
    echo $curso; //sem estrutura/tag
    echo "<p>$curso</p>"; //interpolação (somente com aspas duplas)
    echo "<p>".$curso."</p>"; //concatenação

    echo "<p>Ano letivo: $ano</>";
    echo "<p><b>Preço</b>: $preco</p>";
    ?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso ?></p>
    <p> <?=$curso?></p>

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?>.</p>

    <?php
    //constantes

    //1ª forma: usando a função define()
    define("MEU_NOME", "Vitor Gama");

    //2ª forma: usando a palavra chave const
    const UNIDADE = "Penha";

    //Saída de dados constantes
    echo    MEU_NOME;
    echo "<p><b>". MEU_NOME."</b></p>";

    ?>

    <!--Saída simplificada-->

    <p>Me chamo <b> <?= MEU_NOME?> </b>e estou no Senac <?= UNIDADE?> </p>
    
</body>
</html>