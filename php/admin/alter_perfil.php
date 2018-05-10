<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Alterando.</title>
    
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
        $numero         =$_POST['numero'];
        $sql = mysqli_query($conexao, "UPDATE usuario SET nm_usuario=$nome WHERE email_usuario=$email" );
        echo ($nome);
        
    ?>
    </body>
</html>