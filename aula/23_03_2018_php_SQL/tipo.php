<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Seleção no banco de Dados</title>
    </head>
    
    <body>
        <form>
            <select name="opcoes">
                <option>Selecione um tipo...</option>
                <?php 
                    include 'conexao.php';   
                
                ?>
            
            </select>
        </form>
    </body>
</html>