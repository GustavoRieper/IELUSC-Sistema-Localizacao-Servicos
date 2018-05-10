<?php

// ARQUIVO DE CONEXÃO COM O MySQL. 
// Crie através do PhpMyAdmin uma base de dados chamada base_dados e em seguida crie 
// uma tabela chamada clientes com 2 colunas: cpf e nome. Insira algumas pessoas na tabela.
// Ao final, clique no nome da base de dados e vá em PRIVILÉGIOS, clique em ADD USER ACCOUNT:
// USER NAME: digite 'usuario'
// HOST NAME: escolha a opção 'local'
// PALAVRA PASSE: digite a seguinte senha ->  'senha', confirme em seguida.
// Não preencha os próximos campos poque não queremos gerar uma senha.
// Clique em PRIVILÉGIOS GLOBAIS para dar acesso total a este usuário.
// Finalize a criação deste usuário clicando em EXECUTAR.
// Agora que temos a BASE, o USUÁRIO e a SENHA podemos fazer a conexão com o PHP:

$conecta = mysqli_connect("localhost", "usuario", "senha", "base_dados") or print(mysqli_error());

?>