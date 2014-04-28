<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$quantidade = $_POST ["quantidade"];
$valorUnitario = $_POST ["valorUnitario"];
$valorTotal = $_POST ["valorTotal"];
$data = $_POST ["data"];
$idProduto = $_POST ["idProduto"];
$idCompra = $_POST ["idCompra"];
	
	$alter = mysql_query("UPDATE compra SET quantidade = '$quantidade', valorUnitario = '$valorUnitario' , valorTotal = '$valorTotal', data = '$data', idProduto = '$idProduto' where idCompra = '$idCompra'") or die(mysql_error());
	
	header("Location: listar_compra.php");
?>
</body>
</html>