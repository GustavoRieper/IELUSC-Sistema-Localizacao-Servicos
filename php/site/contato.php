<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../../logo_tcc/ico.png">
        <link rel="stylesheet" type="text/css" href="../../css/site_novo.css">
        <title>FIND</title>
        <style>
            #menu_contato{
                color: chartreuse;
            }
        </style>
    </head>

    <body>
        <?php include 'site_menu.php' ?>
        <div class="conteudo_contato">            
            <div class="contato">
                <h2>SOBRE</h2>
                <hr>
                <p id="sobre">
                    A FIND visa facilitar a comunicação entre contratante e contratado, administrando o tempo e<br> disponibilidade para outros negócios.<br><br>
                    Para mais informações sobre o projeto entre em contato com o fundador:
                </p>
                <br><br>
                <h2>EQUIPE</h2>
                <hr>
                <div class="conteudo_equipe">
                    <img src="../../imagens/site/gustavo.jpg">
                    <h3>Gustavo Rieper</h3>
                    <h4>Desenvolvedor</h4>
                    <p id="sobre_gus">
                    Cursando Sistemas para Internet na Faculdade IELUSC de Joinville.
                        Criativo, curioso e autodidata, busco auxiliar a comunidade com os conhecimentos que possuo na área da tecnologia.
                    </p>
                </div>
                <h2>CONTATO</h2>
                <hr>
                <div class="contact">
                    <img src="../../imagens/site/duvida_contato.PNG">
                    <form action="#" method="post">
                        <input type="text" name="nome" id="nome" placeholder="Nome Completo*" required>
                        <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required>
                        </textarea><br>
                        <input type="email" name="email" id="email" placeholder="Email*" required><br>
                        <input type="text" name="assunto" id="assunto" placeholder="Assunto*" required><br>
                        <input type="submit" value="Enviar">                    
                    </form>                    
                </div>
            </div>
        </div>
        <?php include 'site_rodape.php' ?>        
    </body>

</html>