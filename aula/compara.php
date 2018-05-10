<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>compara</title>
    </head>
    <body>
        <?php
            $valora = $_GET["valora"];
            $valorb = $_GET["valorb"];
            
            if($valora > $valorb){
                echo("Valor A é maior : $valora");
                echo("<br>");
                echo("Valor B é menor : $valorb");
                
            }
            else{
            echo("Valor B é maior : $valorb");
            echo("<br>");
            echo("Valor A é menor : $valora");            
        }
        
        ?>        
        </form>
    </body>
</html>