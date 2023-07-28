<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>

    <style>
        body { color: red; }
    </style>
</head>
<body>

   <?php
   $data = "hoje";
   $nome = "Vitor";
   $nomeCurso = "PHP";
   $cargaHoraria = 40;

   $limiteDefaltas = $cargaHoraria / 4;

   echo "<h2> Data de hoje $data</h2>";
   echo "<h2> Nome $nome</h2>";
   echo "<h2> Nome do curso $nomeCurso</h2>";
   echo "<h2> Carga horária $cargaHoraria horas</h2>";

  echo "<p> O limite de faltas é $limiteDefaltas."  
    

   
   ?>

    <p>Meu nome é <?=$nome?> e na data de <?=$data?>, estou no curso de  <?=$nomeCurso?> e o limite de faltas é <?=$limiteDefaltas?></p>

    <p>
        <?php
        $teste = "php intelephense";

        echo $teste

        ?>
    </p>

    <?php

    date_default_timezone_set("America/Sao_Paulo"); // mostrar o horario local


    $data = date("d/m/Y");
    $hora = date("H:i");

    echo "Data: $data";
    echo "<br>";
    echo "Hora: $hora";
    echo "<br><br>";

    //definindo o fuso horário (timezone)

   
    


    ?>



</body>
</html>