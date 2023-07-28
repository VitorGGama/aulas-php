<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    ul li:nth-child(odd) { color: blue;}
    ul li:nth-child(even) {color: red;}
</style>
<body>

<h1>Trabalhando com arrays (vetores e matrizes)</h1>
<hr>

<h2>Arrays com índice numérico</h2>

<?php
//sintaxe com colchetes 
$bandas = ["Savatage", "Dio", "Rush"];


//sintaxe com função array()
$cursos = array("HTML", "Node", "PHP");

//sintaxe de atribuição manual
$buteco[0] = "bolinho de bacalhau";
$buteco[1] = "pastel";
$buteco[2] = "esfiha";

//constantes de array (PHP 7+)
define("UNIDADE", ["Penha", "Tatupé"]);
const FRUTAS = ["morango", "abacaxi"];

?>

<h3>Acessando os dados</h3>

<ol>
    <li>Banda que mais gosto: <?=$bandas[2]?>

    <li>Curso basico de: <?=$cursos[2]?></li>

    <li>Quero comer: <?=$cursos[0]?></li>
    
    <li>Estamos no Senac <?=UNIDADE[0]?></li>

    <li>Fruta para vitamina: <?=FRUTAS[0]?> </li>

</ol>

<hr>

<h2>Array associativo</h2>

<?php
$curso = [
    //cahve associativa
    //identificador => valor

    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver agua"
];

?>

<h3>Acessando os dados (array associativo)</h3>
<p>Nome do curso: <?=$curso["titulo"]?></p>
<p>Carga Horária: <?=$curso["carga_horaria"]?> horas</p>
<p>descritivo: <?=$curso ["descritivo"]?></p>

<hr>
<h2>Matriz (array dentro de array)</h2>

<?php
$planoDeestudos = [
    ["Js avançado", "Node Js", "React"],
    ["PHP", "POO", "MySQL", "Python"],
    ["Teoria das cores", "Photoshop", "UX/UI"],
    
];
?>

<h3>Acessando os dados da matriz</h3>


<ul>
    <li class="blue"><?=$planoDeestudos[0] [2]?></li>
    <li class="red"><?=$planoDeestudos[1] [2]?></li>
    <li class="blue"><?=$planoDeestudos[2] [1]?></li>
    <li class="red"><?=$planoDeestudos[2] [0]?></li>
</ul>


<hr>

<h2>Funções de analise de estruturas de dados (debug/depuração)</h2>


<pre>
   <h3>var_dump()</h3>
   <?=var_dump($bandas)?> 
</pre>

<pre>
    <h3>var_dump()</h3>
    <?=var_dump($planoDeestudos)?>;
</pre>



 





    
</body>
</html>