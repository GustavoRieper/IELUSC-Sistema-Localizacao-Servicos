<?php
include '../admin/conexao.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../../logo_tcc/ico.png" sizes="192x150">
        <link rel="stylesheet" type="text/css" href="../../css/index.css">
        <meta charset="utf-8">
        
<!--        Link padrao-->
        <link rel="stylesheet" type="text/css" href="../../css/padroes/menu_lateral.css">
        <title>FIND</title>
        <script>
        function mapa(){
            var LOCALIDADE = l.value;
            LOCALIDADE = LOCALIDADE.replace(/ /g,"+");
            local.innerHTML = "<iframe width='600' height='450' frameborder='0' style='border:0' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBTsT3BQAGJ1DbmUnrRHZIrV9DfJBiikJk=" + LOCALIDADE + "' allowfullscreen></iframe>";
        }
        

    </script>
    </head>

    <body onload="mapa();">     
<!--        Incluindo menu-->
        <?php include '../link_padroes/menu_lateral.php' ?>
        <?php
            $email = $_SESSION['email']; 
//            $dados= mysqli_query($conexao, "SELECT cep_usuario FROM usuario WHERE '$email'= email_usuario") or die (mysql_error());
//            $cep = mysqli_fetch_assoc($dados);
//            
             $dados= mysqli_query($conexao, "SELECT nm_usuario, sm_usuario, email_usuario, dt_nascimento, cep_usuario, rua_usuario, bairro_usuario, cidade_usuario, estado_usuario, numero FROM usuario WHERE '$email'= email_usuario") or die (mysql_error());
            $user = mysqli_fetch_assoc($dados);
        
        ?>
        <div class="content">
            <br>
                <span id="seu_local">Seu local cadastrado </span><br>
                <input type="text" id="l" value="<?php echo $user['cidade_usuario'] . ', ' . $user['rua_usuario'] . ', ' . $user['numero'];?>">                
                <input type="button" value="ir" id="busca_local" onclick="ir();" >            
                <br>
                <div id="local">

                </div>
        </div
    </body>

</html>