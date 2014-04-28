<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atualizar</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$quantidade = $_POST ["quantidade"];
$valorUnitario = $_POST ["valorUnitario"];
$valorTotal = $_POST ["valorTotal"];
$data = $_POST ["data"];
$idProduto = $_POST ["idProduto"];
$idVenda = $_POST ["idVenda"];
	
	$alter = mysql_query("UPDATE venda SET quantidade = '$quantidade', valorUnitario = '$valorUnitario' , valorTotal = '$valorTotal', data = '$data', idProduto = '$idProduto' where idVenda = '$idVenda'") or die(mysql_error());
	
	header("Location: listar_venda.php");
?>
</body>
</html>