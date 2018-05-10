<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "find";
$conexao = @mysqli_connect($host, $user) or die (mysql_error());
mysqli_select_db($conexao, $db) or die (mysql_error());

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrando.</title>
    
    </head>
    
    <body>
        <?php
        $nome           =$_POST['nome'];
        $senha          =$_POST['senha'];
        $sobrenome      =$_POST['sobrenome'];
        $email          =$_POST['email'];
        $dt_nascimento  =$_POST['dt_nascimento'];
        $cep            =$_POST['cep'];
        $rua            =$_POST['rua'];
        $bairro         =$_POST['bairro'];
        $cidade         =$_POST['cidade'];
        $estado         =$_POST['uf'];
        $sql            =mysqli_query($conexao, "INSERT INTO usuario(nm_usuario, senha_usuario, sm_usuario, email_usuario, dt_nascimento, cep_usuario, rua_usuario, bairro_usuario, cidade_usuario, estado_usuario) VALUES ('$nome', '$senha', '$sobrenome', '$email', '$dt_nascimento', '$cep', '$rua', '$bairro', '$cidade', '$estado')");
        
        echo '<script> window.setTimeout(window.location.href = "registrado.php",5000)</script>';
    ?>
    </body>
</html>