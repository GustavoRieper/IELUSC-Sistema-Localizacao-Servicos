<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php   
            $cd_bairro =$_POST['cd_bairro'];
            $nm_bairro =$_POST['nm_bairro'];
            $nm_cidade =$_POST['nm_cidade'];
            mysqli_set_charset($conecta,'utf8');
        
            $cd_cidade = mysqli_query($conecta, "SELECT cidade_id FROM cidades WHERE cidade_nome like '$nm_cidade'");
            $cd_cidade = mysqli_fetch_array($cd_cidade);
            $cd_cidade = $cd_cidade["cidade_id"];
            echo ("$cd_bairro <br> $nm_bairro <br> $nm_cidade <br> $cd_cidade");
            
            $sql = mysqli_query($conecta, "SELECT * FROM bairros WHERE bairro_id='$cd_bairro'");
            $numeros = mysqli_num_rows($sql);
            if ($numeros=="0"){
                $sql_nm = mysqli_query($conecta, "SELECT * FROM bairros WHERE bairro_nome='$nm_bairro'");
                $num_nm = mysqli_num_rows($sql_nm);
                if($num_nm=="0"){
                    $sql = mysqli_query($conecta, "INSERT INTO bairros (bairro_id, cidade_id, bairro_nome) VALUES ('$cd_bairro', '$cd_cidade', '$nm_bairro')") or die (mysqli_error());
                    header('Location: bairros.php');
                }
                $registro = ("<h1>$nm_bairro já possui registro no banco de dados</h1>");
                echo "<script> alert('Nome da cidade $nm_bairro já registrado') </script>";
                echo "$registro <br> <a href='bairros.php'><h2>Voltar ao cadastro</h2></a>";

            }else{
                $registro = ("<h1>Codigo $cd_bairro já possui registro no banco de dados </h1>");
                echo "<script> alert('Código $cd_bairro já registrado') </script>";
                echo "$registro <br> <a href='bairros.php'><h2>Voltar ao cadastro</h2></a>";
            }
        ?>  
    </body>
</html>
