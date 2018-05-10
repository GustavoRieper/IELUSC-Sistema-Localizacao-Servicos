<?php
$con = mysqli_connect("localhost", "root", "") or die ("Sem conexão com o Servidor!");
$select = mysqli_select_db($con , 'find') or die ("Sem acesso ao banco de Dados");
?>