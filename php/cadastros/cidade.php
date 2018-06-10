
<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cidades</title>  
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
            <form method="post" action="insere_cidade.php">
                <h3>Digite o Código</h3>
                <input type="number" name="cd_cidade" placeholder="Código da Cidade" required>
                <br><br>
                <h3>Digite o nome da Cidade</h3>
                <input type="text" name="nm_cidade" placeholder="nome da Cidade" required>
                <br><br>
                <input type="submit" name="enviar">
            </form>
        </div>
    </body>

</html>

