<?php
include '../admin/conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../../logo_tcc/ico.png" sizes="192x150">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <link rel="stylesheet" type="text/css" href="../../css/css_usuario/perfil.css">
        <meta charset="utf-8">
        
<!--        Link padrao-->
        <link rel="stylesheet" type="text/css" href="../../css/padroes/menu_lateral.css">
        <title>FIND</title>
        
       
    </head>

    <body>    
<!--        Incluindo menu-->
        <?php include '../link_padroes/menu_lateral.php' ?>
        <?php
            $email = $_SESSION['email']; 
            $dados= mysqli_query($conexao, "SELECT nm_usuario, sm_usuario, email_usuario, dt_nascimento, cep_usuario, rua_usuario, bairro_usuario, cidade_usuario, estado_usuario, numero FROM usuario WHERE '$email'= email_usuario") or die (mysql_error());
            $user = mysqli_fetch_assoc($dados);
        
           
        ?>
        
        <div class="content">
            <h1 id="titulo_pg">Perfil</h1>
            <div class="dados">
                <form method="POST" action="../admin/alter_perfil.php">
                    <h1>Nome:</h1>                    
                        <input type="text" name="nome" id="campo_edit" value="<?php echo $user['nm_usuario'];?>">
                    <h1>Sobrenome:</h1>                    
                        <input type="text" name="sobrenome" id="campo_edit" value="<?php echo $user['sm_usuario'];?>">
                    <h1>Email:</h1>                    
                        <input type="email" name="email" id="campo_edit" disabled value="<?php echo $user['email_usuario'];?>">
                    <h1>CEP:</h1>
                        <input type="text" name="cep" id="campo_edit" value="<?php echo $user['cep_usuario'];?>">
                    <h1>Senha:</h1>
                        <input type="text" name="senha" id="campo_edit" placeholder="Nova Senha">
                    <h1>Confirmar Senha:</h1>
                        <input type="password" name="" id="campo_edit" placeholder="Repetir nova senha">
                     <h1>Data de Nascimento:</h1>
                        <input type="date" name="dt_nascimento" id="campo_edit">
                    <h1>Numero:</h1>
                        <input type="text" name="numero" id="campo_edit" value="<?php echo $user['numero'];?>">
                    <h1>Rua:</h1>
                        <input type="text" name="rua" id="campo_edit" value="<?php echo $user['rua_usuario'];?>">
                    <h1>Bairro:</h1>
                        <input type="text" name="bairro" id="campo_edit" value="<?php echo $user['bairro_usuario'];?>">
                    <h1>Cidade:</h1>
                        <input type="text" name="cidade" id="campo_edit" value="<?php echo $user['cidade_usuario'];?>">
                    <h1>Estado:</h1>
                        <input type="text" name="uf" id="campo_edit" value="<?php echo $user['estado_usuario'];?>">
                    <br>
                    <input type="submit" id="botao" class="botao_centro" value="Salvar">
                </form>
            </div>
            
            
            
        </div
    </body>

</html>