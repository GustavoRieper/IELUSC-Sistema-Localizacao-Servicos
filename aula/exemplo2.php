<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aula 2 de PHP</title>
    </head>
    <body>
        <table border="1" cellspacing="0">
            <?php         
            for($NUM=1;$NUM<=10;$NUM++){
                if($NUM%2==1){
                    echo("
                        <tr bgcolor='#CCC'><td>2 x $NUM</td><td>" . 2 * $NUM . "</td><tr>                        
                    ");
                }
                else{
                    echo("
                        <tr bgcolor='#FFF'><td>2 x $NUM</td><td>" . 2 * $NUM . "</td><tr>
                    ");
                }
            }
            
            ?>
        </table>
    </body>
</html>