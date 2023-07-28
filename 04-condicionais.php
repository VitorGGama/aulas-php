<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<style>
.comprar { color: red}
.urgente { 
    color: red;
    background: yellow;
    font-weight: bold;

}
.normal  {color: blue;} 

</style>

<body>
    <h1>Estrutura Condicionais</h1>

    <h2>Simples</h2>

    <?php
    $numero = 5;
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";

        //Sintaxe sem chaves
    if($numero > 1) echo "<p>$numero é maior que</p>";
     }

     ?>

     <h2>Composta</h2>
     <?php
     $produto = "Uktrabool Asus";
     $qtdEmEstoque = 50; //o que temos
     $qtdCritica = 15; //mínimo necessário
     echo "<h3>$produto</h3>";
     echo "<h4>$qtdEmEstoque</h4>";

     echo "<h3>$produto</3>";
     if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class='comprar'> É necessário comprar</p>";
        //condicional aninhada
        if( $qtdEmEstoque ==0){
            echo "<p class='urgente'>URGENTE!</P>"; 
        }
    } else{
        echo "<p class='normal'>Estoque normal";
    }
    ?>

    <h2>Encadeada</h2>
<?php
/* opções para o exemplo:
1 ->Lanche
2 ->pizza
3 ->paçoca
qualquer outra  -> opção invalida*/

$opcaoEscolhida = 2; //comece com qualquer valor

if($opcaoEscolhida == 1){
    echo "<p>Ok, vamos fazer o lanche</p>";
}elseif($opcaoEscolhida == 2){
    echo "<p>Beleza, pizza no formo";
}elseif($opcaoEscolhida == 3){
    echo "<p>Professor gostou</p>";
}else{
    echo "<p>Não entendi... vou chamar a Val</p>";
}

echo "<p><hr></p>";

/* Em resumo, ao comparar com dois sinais de igual
a comparação será feita apenas em relação as valores.

E ao comparar com tres sinais de igual, a comparação será feita 
em relação ao valor e ao tipo de dados. Portanto, ´mais restritivo. */

//Exemplo: == e ===
$a = 10;
$b = 10;
$resultado = $a === $b; //logico / boolean
var_dump($resultado);

echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
?>







?>

</body>
</html>