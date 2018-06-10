<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php   
            $cd_cidade =$_POST['cd_cidade'];
            $nm_cidade =$_POST['nm_cidade'];
            mysqli_set_charset($conecta,'utf8'); 
            
            $sql = mysqli_query($conecta, "SELECT * FROM cidades WHERE cidade_id='$cd_cidade'");
            $numeros = mysqli_num_rows($sql);
            if ($numeros=="0"){
                $sql_nm = mysqli_query($conecta, "SELECT * FROM cidades WHERE cidade_nome='$nm_cidade'");
                $num_nm = mysqli_num_rows($sql_nm);
                if($num_nm=="0"){
                    $sql = mysqli_query($conecta, "INSERT INTO cidades (cidade_id, cidade_nome) VALUES ('$cd_cidade', '$nm_cidade')") or die (mysqli_error());
                    header('Location: cidade.php');
                }
                $registro = ("<h1>$nm_cidade já possui registro no banco de dados</h1>");
                echo "<script> alert('Nome da cidade $nm_cidade já registrado') </script>";
                echo "$registro <br> <a href='cidade.php'><h2>Voltar ao cadastro</h2></a>";

            }else{
                $registro = ("<h1>Codigo $cd_cidade já possui registro no banco de dados </h1>");
                echo "<script> alert('Código $cd_cidade já registrado') </script>";
                echo "$registro <br> <a href='cidade.php'><h2>Voltar ao cadastro</h2></a>";
            }
        ?>  
    </body>
</html>
