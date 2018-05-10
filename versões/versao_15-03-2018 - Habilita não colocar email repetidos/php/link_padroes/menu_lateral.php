<?php
    include 'admin/conexao.php';

?>
<?php
    session_start();
    $email = $_SESSION['email']; 

    $dados= mysqli_query($conexao, "SELECT nm_usuario, sm_usuario FROM usuario WHERE '$email'= email_usuario") or die (mysql_error());
    $nome = mysqli_fetch_assoc($dados);
    
    
?>
<div class="menu_superior">    
    <img id="logo_menu" src="../logo_tcc/find.png" title="FIND"/>
    <div id="perfil">
        <span id="nm_usuario"><?php echo $nome['nm_usuario'], ' ', $nome['sm_usuario']; ?>&#94;</span>
        <img id="foto_perfil" src="../imagens/padroes/perfil_m.png">
    </div>
</div>

<div id="lateral">
        <span id="ico_menu">&equiv;</span>
        <div id="menu">
            <h3 class="link-titulo"><a id="menu_unico" href="inicio.php">Início</a></h3><br />
            <!-- <h3 class="link-titulo">Cursos</h3> -->
            <h3 class="link-titulo"><a id="menu_unico" href="#">Chamados</a></h3><br />
            <ul class="box">					
                <li><a href="anuncie.php">Profissionais Chamados</a></li>
                <li><a href="alugar.php">Profissionais Avaliados</a></li>
                <li><a href="#">Profissionais ainda não Avaliados</a></li>
                <li><a href="#">Temporada</a></li>
            </ul>
            
                 
            
            
            <h3 class="link-titulo">Apartamentos</h3>
            <ul class="box">
                <li><a href="#">Anunciar</a></li>
                <li><a href="#">Alugar</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Temporada</a></li>
            <!-- mais links -->
            </ul>
            
            <h3 class="link-titulo"><a id="menu_unico" href="#">Contato</a></h3>
            <br>            
            <h3 class="link-titulo" style="margin-bottom:50px;"><a id="menu_unico" href="#">Parceiros</a></h3>
            
        </div> <!-- /#menu -->
    </div> <!-- /#lateral -->