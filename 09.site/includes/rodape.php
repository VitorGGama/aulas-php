</main>

<footer>
    <p>Site criado o curso de <b>Tecnico informática para internet</b></p>
</footer>

</body>

</html>

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
