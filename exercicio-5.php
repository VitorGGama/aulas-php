<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>

    <style>
       .reprovado { color: red;}
       .aprovado { color: blue;}
    </style>
</head>
<body>
    <h1>Exercicio 5 - Calcular</h1>

    <hr>

    <?php
    function calcularMedia(float $nota1, float $nota2 ):float {
        $total = ($nota1 + $nota2) / 2; 
        return $total;
    }   

    function situacaoAluno(float $total): string {
        if ($total < 7){
            return "reprovado";
        }
        return "aprovado";
    }    

    $media = calcularMedia(2, 10);
     ?>

    <p>Média: <?=$media?></p>
     <p>Situação: <span class="<?=situacaoAluno($media)?>"> <?=situacaoAluno($media)?></span></p>




     

     


    
</body>
</html>