<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagens de Programação</title>
    <style>
        
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 5px solid ;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: coral;
        }  

        tr:hover {
            background-color: burlywood;
        }
    </style>
</head>
<body>


    <h1>Linguagens de Programação</h1>

    <?php
    $linguagens = [
        "HTML" => "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de dados",
        "Java" => "Softwares",
    ];
    ?>

    <table>        
        <tr>
          <th>ID</th>
          <th>Linguagem</th>
          <th>Descrição</th>
        </tr>        
        
    <?php
        $id = 1;
        foreach ($linguagens as $linguagem => $descricao) {
    ?>
    <tr>
        <td><?= $id ?></td>
        <td><?= $linguagem ?></td>
        <td><?= $descricao ?></td>
    </tr>
    <?php
        $id++;
    }
    ?>
    </table>

</body>
</html>
