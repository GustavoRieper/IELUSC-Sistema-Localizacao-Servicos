
<?php
include 'conexao.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Imoveis</title>    
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
             hr{
                 width: 100%;
             }
        </style>
    </head>
    <body>
        <div class="conteudo">
            <h1><a href="inicio.html">Voltar</a></h1>
            <form method="post" action="insere_imovel.php">
                <h3>Digite o Código do Imovel</h3>
                <input type="number" name="cd_imovel" placeholder="Código do Imovel" required>
                <hr>
                <h3>Selecione o Código do Imovel</h3>
                <select name="cdo_imovel">
                    <option>Selecione um código para o imovel</option>
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT codigo FROM imoveis"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $cdo_imovel = $linha["codigo"];
                            echo("<option>$cdo_imovel</option>");


                        }
                    ?>
                </select>
                <hr>
                <h3>Selecione o tipo do Imovel</h3>
                <select name="cd_tipo">
                    <option>Selecione um tipo para o Imovel</option>
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT tipo_nome FROM tipo"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $nm_tipo = $linha["tipo_nome"];
                            echo("<option>$nm_tipo</option>");


                        }
                    ?>
                </select>
                <hr>
                <h3>Digite o preço do Imovel</h3>
                <input type="number" name="preco_imovel" placeholder="preço do Imovel" required>
                <br>
                <hr>
                <h3>Selecione o bairro</h3>
                <select name="cd_bairro">
                    <option>Selecione um bairro</option>
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT bairro_nome FROM bairros"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $cd_bairro = $linha["bairro_nome"];
                            echo("<option>$cd_bairro</option>");


                        }
                    ?>
                </select>
                <hr>
                <h3>Selecione a Cidade</h3>
                <select name="cd_cidade">
                    <option>Selecione a Cidade</option>
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT cidade_nome FROM cidades"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $cd_cidade = $linha["cidade_nome"];
                            echo("<option>$cd_cidade</option>");


                        }
                    ?>
                </select>
                <hr>
                <h3>Digite o nome do Contato</h3>
                <input type="text" name="nm_contato" placeholder="Nome do Contato" required>
                <br>
                <hr>
                <h3>Digite o Numero de Telefone</h3>
                <input type="number" name="nr_telefone" placeholder="Numero do telefone" required>
                <br><br>
                <input type="submit" name="enviar">
            </form>
        </div>
    </body>

</html>

