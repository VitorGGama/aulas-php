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


    



   
    <h2>Arrays</h2>
    
    
    <h2>Filtros</h2>
    
    
    <h2>Segurança</h2>

    
</body>
</html>