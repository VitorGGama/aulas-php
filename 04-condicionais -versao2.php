<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais (VERSÃO 2) </title>
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
    ?>    
        <p><?=$numero?> é maior que 1</p>
    <?php    

        //Sintaxe sem chaves
    if($numero > 1) echo "<p>$numero é maior que</p>";
     }

     ?>

     <h2>Composta</h2>
     <?php
     $produto = "Ultrabool Asus";
     $qtdEmEstoque = 0; //o que temos
     $qtdCritica = 15; //mínimo necessário
     ?>
     
     <h3> <?=$produto?> </h3>

     <h4> <?=$qtdEmEstoque?> </h4>

    <h3> <?=$produto?> </3>

    <?php
     if ($qtdEmEstoque < $qtdCritica) {
     ?>   
        <p class="comprar"> É necessário comprar</p>

    <?php
        //condicional aninhada
        if( $qtdEmEstoque ==0){
    ?>        
            <p class="urgente">URGENTE!</P>
    <?php         
        }

    } else{
    ?>    
        <p class="normal">Estoque normal"
    <?php        
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
?>
    <p>Ok, vamos fazer o lanche</p>
<?php    
}elseif($opcaoEscolhida == 2){
?>
    <p>Beleza, pizza no forno"
<?php        
}elseif($opcaoEscolhida == 3){
?>    <p>Professor gostou</p>
<?php
}else{
?>
<p>Não entendi... vou chamar a Val</p>
<?php
}
?>
<hr>

<?php
/* Em resumo, ao comparar com dois sinais de igual
a comparação será feita apenas em relação as valores.

E ao comparar com tres sinais de igual, a comparação será feita 
em relação ao valor e ao tipo de dados. Portanto, ´mais restritivo. */
?>

<?php
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

</body>
</html>