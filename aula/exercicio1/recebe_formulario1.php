<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>compara</title>
    </head>
    <body>
        <?php
            $a = $_POST["a"];
            
            if($a < 0){
                echo("Valor A é Negativo : $a");
                echo("<br>");                
            }
            else if($a > 0){
                echo("Valor A é Positivo : $a");
                echo("<br>");
            }  
            else if($a == 0){
                echo("Valor A é Zero : $a");
                echo("<br>");
            }
        ?>        
        </form>
    </body>
</html>