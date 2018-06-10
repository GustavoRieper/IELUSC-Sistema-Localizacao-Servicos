<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
        <?php
            
        
            $cd_tipo =$_POST['cd_tipo'];
            $nm_tipo =$_POST['nm_tipo'];
            mysqli_set_charset($conecta,'utf8'); 
            
            $sql = mysqli_query($conecta, "SELECT * FROM tipo WHERE tipo_id='$cd_tipo'");
            $numeros = mysqli_num_rows($sql);
            if ($numeros=="0"){
                $sql_nm = mysqli_query($conecta, "SELECT * FROM tipo WHERE tipo_nome='$nm_tipo'");
                $num_nm = mysqli_num_rows($sql_nm);
                if($num_nm=="0"){
                    $sql = mysqli_query($conecta, "INSERT INTO tipo (tipo_id, tipo_nome) VALUES ('$cd_tipo', '$nm_tipo')") or die (mysqli_error());
                    header('Location: tipo.php');
                }
                $registro = ("<h1>$nm_tipo já possui registro no banco de dados</h1>");
                echo "<script> alert('Nome do tipo $nm_tipo já registrado') </script>";
                echo "$registro <br> <a href='tipo.php'><h2>Voltar ao cadastro</h2></a>";

            }else{
                $registro = ("<h1>Codigo $cd_tipo já possui registro no banco de dados </h1>");
                echo "<script> alert('Código $cd_tipo já registrado') </script>";
                echo "$registro <br> <a href='tipo.php'><h2>Voltar ao cadastro</h2></a>";
            }
        ?>  
</html>
