<?php
$banco = "127.0.0.1:3306";//local do banco de dados
$usuario = "root";
$senha = "root";
$basedados = "pi_logstoq";

$conecta = mysql_connect ($banco, $usuario, $senha) or die (mysql_error());
@mysql_select_db($basedados, $conecta) or die ("Erro ao conectar com o banco de dados");
?>