<?php/*
$host='localhost';
&user='root';
&pass='';
$db='find';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo 'Conectado com sucesso ao Banco de Dados da FIND';

$



*/
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../logo_tcc/find.png" sizes="192x192">
        <link rel="stylesheet" type="text/css" href="../css/registro.css">
        
        <title>Registrar - FIND</title>
        
        
        <!-- Adicionando JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous">
        </script>
        
        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            $(document).ready(function() {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
                    $("#ibge").val("");
                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#ibge").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });

        </script>
        
    </head>
    
    <body>
        <a href="login.php">
            <img id="voltar" src="../imagens/ico/voltar.png"> 
        </a>
        <div class="box_login">
            <form action="conexao.php" id="login_box" autocomplete="off" method="post">
                <img id="logo" src="../logo_tcc/find.png">
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="text" id="input-4" required/>
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Nome</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="text" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Sobrenome</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="email" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Email</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="password" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Senha</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="password" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="">
                            <span id="place">Repitir Senha</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="date" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="dt_usuario">
                            <span id="place">Data de Nascimento</span>
                        </span>
                    </label>                        
                </span>
                <span class="input input--hoshi">
                    <input name="cep" id="cep" class="input__field input__field--hoshi" type="number" id="input-4" required min="8" maxlength="8" />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="cep">CEP</span>
                        </span>
                    </label>                       
                </span>
                <span class="input input--hoshi">
                    <input name="rua" id="rua" class="input__field input__field--hoshi" type="text" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="rua">Rua</span>
                        </span>
                    </label> 
                </span>
                <span class="input input--hoshi">
                    <input name="bairro" id="bairro" class="input__field input__field--hoshi" type="text" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="bairro">Bairro</span>
                        </span>
                    </label> 
                </span>
                <span class="input input--hoshi">
                    <input name="cidade" id="cidade" class="input__field input__field--hoshi" type="text" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="cidade">Cidade</span>
                        </span>
                    </label> 
                </span>
                <span class="input input--hoshi">
                    <input name="uf" id="uf" class="input__field input__field--hoshi" type="text" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="uf">Estado (UF)</span>
                        </span>
                    </label> 
                </span> 
                    <input type="submit" value="Registrar" name="registro" id="registrar"> 
            </form>        
        </div>  
        
        
    </body>

</html>