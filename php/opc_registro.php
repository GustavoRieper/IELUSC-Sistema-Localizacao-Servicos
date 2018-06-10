<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../logo_tcc/ico.png" sizes="192x192">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <title>Login - Find</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            h2{
                margin: 70px;
                text-align: center;
                color: #FFF;
                font-family: 'Montserrat', sans-serif;
            }
            
            #error{
                width: 50px;
                position: absolute;
                margin-left: 225px;                
                margin-top: 20px;
                animation: animacao_erro 2s infinite;
            }
            @keyframes animacao_erro{ 
                0%{opacity: 0.5;}
                50%{opacity: 1.0;}
                100%{opacity: 0.5;}
                
            }
            a{
                text-decoration: none;
            }
            #Logar{
                width: 200px;
                margin-left: 30px;;
                
            }
            #erro:focus, Logar::after{
                -webkit-animation: anim-1 0.3s forwards all;
                animation: anim-2 0.3s forwards ;   
                transition: 0.8s all;
                text-align: center;
            }

        
        </style>
    </head>

    <body>        
        <img id="img_fundo" src="https://static.pexels.com/photos/327540/pexels-photo-327540.jpeg">
        <div class="box bg-3">
            <a href="login.php">
                <button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Login</button>	
            </a>
        </div>
        <div class="box_login">
<!--            <img id="error" src="http://pizzarialukas.com.br/app/webroot/img/erro.png">-->
            <h2>Registrar como:</h2>
                
            <a id="erro" href="registro-pro.php">
                <input type="submit" value="Profissional" id="Logar" >
            </a>
            <a id="erro" href="registro.php">
                <input type="submit" value="Cliente" id="Logar" >
            </a>
        </div>  
    </body>
</html>