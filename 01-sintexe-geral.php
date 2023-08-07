<?php include "recursos.php";
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Sintaxe geral - <?=ESCOLA?></title>
    
    <style>
        p {font-family: "verdana"; }

        .destaque { text-transform: "uppercase"; }

    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    <?php
    //Geração de texto (string)
    echo"Hoje tem Corinthians!";

    echo "<p class='destaque'>Hoje tem Corinthians!</p>";

    //geração de texto estruturado (com tags, atributos)
    echo "<h2>Gerando HTML através do PHP</h2>";

    //CSS in line
    echo "<p style=\"color:red\">O Vinicius está reprovado.</p>";
    echo "<p style='color:orange'>O Vinicius está reprovado.</p>";
    echo '<p style="color:pink">O Vinicius está reprovado.</p>';


    ?>

    <script>
   let destaque = Document.querySelector(".destaque");
   console.log(destaque);     
    </script>
</body>
</html>