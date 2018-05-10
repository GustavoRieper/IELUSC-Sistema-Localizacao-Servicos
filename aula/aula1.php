<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aula 1 de PHP</title>
    </head>
    <body>
        <?php
        date_default_timezone_set("America/Sao_paulo"); 
            echo("<h2> Aula 1 de PHP</h2><br>");
            $data = date("d/m/Y");
            echo("HOJE É: $data");
            $ip = $_SERVER["REMOTE_ADDR"];
            echo("
                <h5><br>IP:  $ip</h5>
            ");
        ?>
    </body>
</html>