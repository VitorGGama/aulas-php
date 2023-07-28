<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>Estrutura de repetição</h1>

    <h2>WHILE (enquanto)</h2>

    <?php
    $i = 1;
    while ($i <= 5) {
    ?>
        <p>$i</p>
    <?php
        $i++;
    }
    ?>

    <hr>



    <h2>DO/WHILE (repita/até)</h2>

    <?php
    $j = 1;
    do {
    ?>

        <div>
            <h3>título...<h3>
                    <p>loren ipsum dolor sit amet.</p>
        </div>

    <?php
        $j++;
    } while ($j <= 10);

    ?>

    <hr>

    <h2>FOR(para)</h2>

    <?php
    //variavel de controle; condição, atualização
    for ($i = 1; $i <= 3; $i++) {
    ?>
        <p><code>i</code> vale:<b> <?= $i ?></b></p>
    <?php
    }
    ?>

    <hr>

    <!--Mini exercicios
     1-) crie um array com os nomes dos meses do ano
     2-)Usando um loop (qualquer um), acesse e mostre os nomes dos meses dentro de uma 
     lista ordenada-->

    <?php
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
    ?>
    <ol>
        <?php
        for ($i = 0; $i < 12; $i++) {
        ?>
            <li> <?= $meses[$i] ?></li>
        <?php
        }
        ?>
    </ol>

    <hr>
    <hr>

<!--Guardamos em "cache" (memória) a quantidade de elementos, evitando
assim a contagem a cada interaçãodo loop e mehorando a performance-->
    <?php
    $alunos = ["Melissa", "Tanaka", "Zimbo" ];


    $quantidade = count($alunos);
    for($i = 0; $i < $quantidade; $i++){
        ?>

        <p>Nome: <b><?=$alunos[$i]?></b></p>
    <?php    
    }
    ?>

    <hr>

    <h2>foreach (para cada)</h2>
    <p>Útil (e mais fácil) para lidar com 
        <code>arrays</code>.</p>

        <ol>
            <?php foreach($meses as $mes) { ?>
            <li> <?=$mes?> </li>
            <?php } ?>
        </ol>
        
        <?php
        //Array associativo

        $clubes = [
            "Corinthians" => "Timão",
            "Palmeiras" => "porcu",
            "São Paulo" => "trikas",
            "Santos" => "peixe",
        ];

        foreach($clubes as $clube => $apelido){
        ?>
        <p>O <?=$clube?> é conhecido como <?=$apelido?></p>
        <?php    
        }
        ?>
        <hr>

        <h2>Loop com matriz</h2>

        <?php
        $planoDeestudos = [
            [ "HTML", "CSS", "JS"],
            [ "React", "React native"],
        ];

        //Usando FOR aninhado

        for($linha = 0; $linha < count($planoDeestudos); $linha++){
            for($coluna = 0; $coluna < count ($planoDeestudos[$linha]); $coluna++){
        ?>
            <p><b><?=$planoDeestudos[$linha] [$coluna]?></b></p>
        <?php    
                
            }
        }
        ?>

        <hr>

        <?php
        //Usando foreach aninhado
        foreach($planoDeestudos as $linha){
            foreach($linha as $coluna){
        ?>
        <p> <i><?=$coluna?> </i> </p>
        <?php        
            }
        }
        ?>
<hr>

<h3>Loop com matriz associativa</h3>

<?php
$clientes = [
    [
        "nome" => "Chaves",
        "idade" => 8,
    ],
    [
        "nome" => "Chapolin",
        "idade" => 25,
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10,
    ],
];

foreach($clientes as $cliente){
?>

    <p>Nome: <?=$cliente["nome"]?></p>
    <p>Idade: <?=$cliente["idade"]?></p>
<?php
}
/* lembrete sobre sintaxe de estruturas de controle
(condicionais e loops)

if(){
} else {
}

if():
else:
endif;*/
?>

<hr>












        
</body>

</html>