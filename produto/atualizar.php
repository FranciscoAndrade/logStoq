<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$nome = $_POST ["nome"];
$descricao = $_POST ["descricao"];
$quantidade = $_POST ["quantidade"];
$precoCusto = $_POST ["precoCusto"];
$precoVenda = $_POST ["precoVenda"];
$grupo = $_POST ["grupo"];
$idFornecedor = $_POST ["idFornecedor"];
$idProduto = $_POST ["idProduto"];
	
	$alter = mysql_query("UPDATE produto SET nome = '$nome', descricao = '$descricao', quantidade = '$quantidade', precoCusto = '$precoCusto' , precoVenda = '$precoVenda', grupo = '$grupo', idFornecedor = '$idFornecedor' where idProduto = '$idProduto'") or die(mysql_error());
	
	header("Location: listar_produto.php");
?>
</body>
</html>