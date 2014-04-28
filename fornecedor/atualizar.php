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
$cnpj = $_POST ["cnpj"];
$telefone = $_POST ["telefone"];
$endereco = $_POST ["endereco"];
$cep = $_POST ["cep"];
$cidade = $_POST ["cidade"];
$uf = $_POST ["uf"];
$bairro = $_POST ["bairro"];
$pais = $_POST ["pais"];
$email = $_POST ["email"];
$idFornecedor = $_POST ["idFornecedor"];
	
	$alter = mysql_query("UPDATE fornecedor SET nome = '$nome', cnpj = '$cnpj', telefone = '$telefone', endereco = '$endereco'
	, cep = '$cep', cidade = '$cidade', uf = '$uf', bairro = '$bairro', pais = '$pais', email = '$email'
	 where idFornecedor = '$idFornecedor'") or die(mysql_error());
	
	header("Location: listar_fornecedor.php");
?>
</body>
</html>