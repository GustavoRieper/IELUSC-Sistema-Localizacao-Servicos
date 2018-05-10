<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../logo_tcc/ico.png" sizes="192x150">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <title>Login - Find</title>
        
    </head>

    <body>    
        
        <div class="box bg-3">
            <a href="site.php">
                <button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Voltar ao Site</button>	
            </a>
        </div>
        
        
        <div class="box_login">
            <form action="admin/autenticacao.php" id="login_box" autocomplete="off" method="post">
                <img id="logo" src="../logo_tcc/ico_branco.png">
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="email" name="email" id="input-4" required/>
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">E-mail</span>
                        </span>
                    </label>                        
                </span>
                    <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="password" name="senha" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Senha</span>
                        </span>
                    </label>                        
                </span>
                    <input type="submit" value="Logar" name="logar" id="Logar">    
                
            </form> 
            <a id="registrar" href="registro.php">
                <input type="submit" value="Registrar" id="Logar" >
            </a>
            
<!--
            <form action="registro.php" id="registro">
                <input type="submit" value="Registrar" name="logar" id="Logar" href="google.com">
            </form>
-->
            
            
        </div>  
    </body>
</html>