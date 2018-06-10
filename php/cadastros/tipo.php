<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tipo</title>  
        <style>
            body{
                margin: 0px;
            }
            .conteudo{
                width: 300px;
                left: 50%;
                margin-left: 40%;
                text-align: center;
            }
            h1{
                width: 200px;
                padding: 7px;
                background-color: dodgerblue;
                border-radius: 10px;
                font-size: 20px;
                left: 0;
                position: fixed;
            }
            h1:hover{
                background-color: #5da9f3;
            }
            a{
                text-decoration: none;
                color: #FFF;
                font-family: sans-serif;
            }
        
        </style>
    </head>
    <body>
        <div class="conteudo">
            <h1><a href="inicio.html">Voltar</a></h1>
            <form method="post" action="insere_tipo.php">
                <h3>Digite o Código</h3>
                <input type="text" name="cd_tipo" placeholder="Código do Tipo" required>
                <br><br>
                <h3>Digite o nome do Tipo</h3>
                <input type="text" name="nm_tipo" placeholder="Nome do Tipo" required>
                <br><br>
                <input type="submit" name="enviar">
            </form>
        </div>
    </body>

</html>