<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluir</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$tabela = "produto";

mysql_select_db("pi_logstoq",$conecta);

$idProduto = $_GET['idProduto'];

$consulta = mysql_query("delete from produto where idProduto = '".$idProduto."'");

if($consulta) {
	$msg = urlencode("Usuário excluido com Sucesso!");
	header("Location: listar_produto.php?.msg=$msg");
	exit;
	 
} else {
    $erro = urlencode("Não foi possivel excluir este Usuário");
    header("Location: listar_produto.php?.erro=$erro");
    exit;
}
	
?>
</body>
</html>