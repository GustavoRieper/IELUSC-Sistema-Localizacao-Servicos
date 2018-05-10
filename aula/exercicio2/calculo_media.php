<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>compara</title>
    </head>
    <body>
        <?php
            $nome = $_POST["aluno"];
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            $n4 = $_POST["n4"];
        
            $media = ($n1 + $n2 + $n3 + $n4) / 4;
            
            echo("Aluno: $nome recebeu média: $media");
        
            if($media >= 7){
                echo("<br>Aprovado");
            }
            else if($media < 5){
                echo("<br>Reprovado");
            }
            else if($media >= 5 && $media < 7){
                    echo("<br>Exame");
            }            
        ?>        
        </form>
    </body>
</html>