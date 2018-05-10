
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "find";
$conexao = mysqli_connect($host, $user) or die (mysql_error());
mysqli_select_db($conexao, $db) or die (mysql_error());
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Find - Autenticando</title>
    </head>

    <body>
        <?php
            $email      = $_POST['email'];
            $senha      = $_POST['senha'];
            $sql        = mysqli_query($conexao, "SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'") or die (mysql_error);
            $row = mysqli_num_rows($sql);
            if($row > 0){
                session_start(); 
                $_SESSION['email']=$_POST['email'];
                $_SESSION['senha']=$_POST['senha'];
//                echo "Você foi autenticado com sucesso! aguardo um instante.";
                echo "<script> window.location='../index.php';</script>";                
            }
            else{
                echo '';
                echo '<script> window.setTimeout(window.location.href = "erro_login.php",5000)</script>';
            }
            
        ?>
    </body>
</html>
