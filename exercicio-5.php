<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <h1>Exercicio 5 -> Funções</h1>

    <hr>

    <?php
    function calcularMedia( $nota1, $nota2 ){
        $total = ($nota1 + $nota2) / 2; 
        return $total;
    }   

    function situacaoAluno(int $total): string {
        if ($total < 7){
            return "Aluno reprovado";
        }
        return "Aluno aprovado";
    }    
     ?>
    <p>Média: <?=calcularMedia(8, 7)?></p>
     <p>Situação: <?=situacaoAluno(8, 7)?></p>

     

     


    
</body>
</html>