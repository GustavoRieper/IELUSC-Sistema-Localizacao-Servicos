<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php   
            $cd_imovel =$_POST['cd_imovel'];
            $cdo_imovel =$_POST['cdo_imovel'];
            $cd_tipo =$_POST['cd_tipo'];
            $preco_imovel = $_POST['preco_imovel'];
            $cd_bairro = $_POST['cd_bairro'];
            $cd_cidade = $_POST['cd_cidade'];
            $nm_contato = $_POST['nm_contato'];
            $nr_telefone = $_POST['nr_telefone'];
            mysqli_set_charset($conecta,'utf8');
            
            /* converte o Nome do Tipo em Código do Tipo */
            $cd_tipo = mysqli_query($conecta, "SELECT tipo_id FROM tipo WHERE tipo_nome like '$cd_tipo'");
            $cd_tipo = mysqli_fetch_array($cd_tipo);
            $cd_tipo = $cd_tipo["tipo_id"];
        
            /* converte o Nome do Bairro em Código do Bairro */
            $cd_bairro = mysqli_query($conecta, "SELECT bairro_id FROM bairros WHERE bairro_nome like '$cd_bairro'");
            $cd_bairro = mysqli_fetch_array($cd_bairro);
            $cd_bairro = $cd_bairro["bairro_id"];
        
            /* converte o Nome da Cidade em Código da Cidade */
            $cd_cidade = mysqli_query($conecta, "SELECT cidade_id FROM cidades WHERE cidade_nome like '$cd_cidade'");
            $cd_cidade = mysqli_fetch_array($cd_cidade);
            $cd_cidade = $cd_cidade["cidade_id"];
            
            
            $sql = mysqli_query($conecta, "SELECT * FROM imoveis WHERE imovel_id='$cd_imovel'");
            $numeros = mysqli_num_rows($sql);
            if ($numeros=="0"){
                
                    $sql = mysqli_query($conecta, "INSERT INTO imoveis (imovel_id, codigo, tipo_id, preco, bairro_id, cidade_id, contato, telefone) VALUES ('$cd_imovel', '$cdo_imovel', '$cd_tipo', '$preco_imovel', '$cd_bairro', '$cd_cidade', '$nm_contato', '$nr_telefone')") or die (mysqli_error());
                    header('Location: imoveis.php');

            }else{
                $registro = ("<h1>Codigo $cd_imovel já possui registro no banco de dados </h1>");
                echo "<script> alert('Código $cd_imovel já registrado') </script>";
                echo "$registro <br> <a href='imoveis.php'><h2>Voltar ao cadastro</h2></a>";
            }
        ?>  
    </body>
</html>
