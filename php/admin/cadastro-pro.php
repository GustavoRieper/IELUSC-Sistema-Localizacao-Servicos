<?php
include 'conexao.php';
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
        $numero         =$_POST['numero'];
        $profissao      =$_POST['profissoes'];
        $sql            =mysqli_query($conexao, "INSERT INTO profissionais(nm_pro, senha_pro, sm_pro, email_pro, dt_nascimento, cep_pro, rua_pro, bairro_pro, cidade_pro, estado_pro, numero_pro, profissao) VALUES ('$nome', '$senha', '$sobrenome', '$email', '$dt_nascimento', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$numero', '$profissao')");
        
        echo '<script> window.setTimeout(window.location.href = "registrado.php",5000)</script>';
    ?>
    </body>
</html>