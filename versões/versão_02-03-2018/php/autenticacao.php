<?php 
    session_start(); 
?>
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
                echo "Você foi autenticado com sucesso! aguardo um instante.";
                echo "<script> window.location='index.php';</script>";
                
            }
            else{
                echo '<script> alert("Usuario ou senha incorreta.");</script';
                echo '<script> window.location="login.php";</script>';            
            }
        ?>
    </body>
</html>














<?php

/* 
    include 'conexao.php';
    // session_start inicia a sessão
    session_start();
    // as variáveis login e senha recebem os dados digitados na página anterior
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    // A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
    $result = mysql_query("SELECT * FROM `usuario` WHERE `email_usuario` = '$login' AND `senha_usuario`= '$senha'");
//    $link = mysql_connect($mysql_hostname , $mysql_username);
    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login 
    if(mysql_num_rows ($result) > 0 )
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:index.php');
    }
    else{
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('location:login.php');

    }
 */
?>
