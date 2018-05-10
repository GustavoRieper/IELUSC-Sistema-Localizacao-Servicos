<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recebe</title>
    </head>
    <body>
        <?php
            $x = $_GET["valor"];
            $x2 = $_GET["valor2"];
            
            echo("<h4>Resultado:");
            echo($x * $x2);
            echo("</h4><br>");
            
            
            if($x<10){
                echo("Numero menor que 10");
            }
            if($x>10){
                echo("Numero Maior que 10");
            }
            if($x==10){
                    echo("Numero Maior é 10");
                }
        
        ?>        
        </form>
    </body>
</html>