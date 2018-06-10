
<?php
include 'conexao.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bairros</title> 
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
            <form method="post" action="insere_bairro.php">
                <h3>Digite o Código</h3>
                <input type="number" name="cd_bairro" placeholder="Código do Bairro" required>
                <br><br>
                <h3>Selecione a Cidade</h3>
                <select name="nm_cidade">
                    <option>Selecione uma Cidade</option>
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT cidade_nome FROM cidades"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $cd_cidade = $linha["cidade_nome"];
                            echo("<option>$cd_cidade $re</option>");


                        }
                    ?>
                </select>
                <br><br>
                <h3>Digite o nome do Bairro</h3>
                <input type="text" name="nm_bairro" placeholder="Nome do Bairro" required>
                <br><br>
                <input type="submit" name="enviar">
            </form>
        </div>
    </body>

</html>

