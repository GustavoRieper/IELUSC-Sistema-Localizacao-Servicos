<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "find";
$conexao = mysqli_connect($host, $user) or die (mysql_error());
mysqli_select_db($conexao, $db) or die (mysql_error());
?>