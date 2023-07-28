<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .dado { display: flex; }

</style>
<body>
    <h1>Dados de pessoas</h1>

    <?php

    $dados1 = [ "Mario João", "mariojoao@hotmail.com", "1234", 45, "masculino", "Santos"];
    
    $dados2 = ["Maria", "maria@hotmail.com", "4321", 36, "feminino"];

    ?>

<div class="dado">
    <ul >
        <li>Nome de usuário: <?=$dados1 [0] ?></li>
        <li>E-mail: <?=$dados1 [1] ?></li>
        <li>Idade: <?=$dados1 [3] ?></li>
        <li>Sexo: <?=$dados1 [4] ?></li>    
    </ul>   
   



    <ul>
        <li>Nome de usuário: <?=$dados2 [0] ?></li>
        <li>E-mail: <?=$dados2 [1] ?></li>
        <li>Idade: <?=$dados2 [3] ?></li>
        <li>Sexo: <?=$dados2 [4] ?></li>    
    </ul>   
</div>


    
   










</body>
</html>