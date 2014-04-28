<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluir</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$tabela = "venda";

mysql_select_db("pi_logstoq",$conecta);

$idVenda = $_GET['idVenda'];

$consulta = mysql_query("delete from venda where idVenda = '".$idVenda."'");

if($consulta) {
	$msg = urlencode("Usuário excluido com Sucesso!");
	header("Location: listar_venda.php?.msg=$msg");
	exit;
	 
} else {
    $erro = urlencode("Não foi possivel excluir este Usuário");
    header("Location: listar_venda.php?.erro=$erro");
    exit;
}
	
?>
</body>
</html>