<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>compara</title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

        
            $imc = $altura / ($peso^2);
            $imc = $imc*10;
            
            $imc = number_format($imc, 2, ',', ' ');
            
        
            echo("IMC de $nome é $imc");            

        
            if($imc < 14.5){
                echo("<br>Desnutrido");
            }
            else if($imc >= 14.5 && $imc < 20){
                echo("<br>Peso abaixo do normal");
            }
            else if($imc > 20 && $imc <= 24.9){
                echo("<br>Peso normal");
            } 
            else if($imc >= 25 && $imc <= 29.9){
                    echo("<br>Sobrepeso");
            }
            else if($imc >= 30 && $imc <= 39.9){
                    echo("<br>Obesidade");
            }
            else if($imc > 40){
                    echo("<br>Obesidade Móbida");
            }
        ?>        
        </form>
    </body>
</html>