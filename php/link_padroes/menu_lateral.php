<?php
    include '../admin/conexao.php';

?>
<?php
    session_start();
    $email = $_SESSION['email']; 

    $dados= mysqli_query($conexao, "SELECT nm_usuario, sm_usuario FROM usuario WHERE '$email'= email_usuario") or die (mysql_error());
    $nome = mysqli_fetch_assoc($dados);
    if($email == NULL){
        
        header("location: ../login.php");
        echo "<script>alert('Email não encontrado')</script>";
    }else{
        
    }
    
?>

<head>
    <meta charset="utf-8">
</head>
<div class="menu_superior">    
    <img id="logo_menu" src="../../logo_tcc/find.png" title="FIND"/>
    
    <div id="perfil">
        <div id="opc_perfil">            
            <span id="nm_usuario"><?php echo $nome['nm_usuario'], ' ', $nome['sm_usuario']; ?></span>
        </div>
        <img id="foto_perfil" src="../../imagens/padroes/icon_user.png">
        <div id="opc_perfil">
            <ul>
                <li><a href="#">Opções</a></li>
                <li><a href="../../php/link_padroes/logout.php">Sair</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="lateral">
        <span id="ico_menu">&equiv;</span>
        <div id="menu">
            <h3 class="link-titulo"><a id="menu_unico" href="index.php">Início</a></h3><br />
            <!-- <h3 class="link-titulo">Cursos</h3> -->
            <h3 class="link-titulo"><a id="menu_unico" href="#">Chamados</a></h3><br />
            <ul class="box">					
                <li><a href="chamados.php">Chamados</a></li>
                <li><a href="avaliados.php">Avaliados</a></li>
                <li><a href="nao_avaliados.php">Não Avaliados</a></li>
            </ul>
            <h3 class="link-titulo">Meus dados</h3>
            <ul class="box">
                <li><a href="minha_agenda.php">Minha Agenda</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="contatos.php">Lista de Contatos</a></li>
                <li><a href="#">Endereço cadastrado</a></li>
            <!-- mais links -->
            </ul>
            
            <h3 class="link-titulo"><a id="menu_unico" href="#">Contato</a></h3>
            <br>            
            <h3 class="link-titulo" style="margin-bottom:50px;"><a id="menu_unico" href="#">Parceiros</a></h3>
            
        </div> <!-- /#menu -->
    </div> <!-- /#lateral -->