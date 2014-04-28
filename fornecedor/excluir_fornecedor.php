<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluir</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$tabela = "fornecedor";

mysql_select_db("pi_logstoq",$conecta);

$idFornecedor = $_GET['idFornecedor'];

$consulta = mysql_query("delete from fornecedor where idFornecedor = '".$idFornecedor."'");

if($consulta) {
	$msg = urlencode("Usuário excluido com Sucesso!");
	header("Location: listar_fornecedor.php?.msg=$msg");
	exit;
	 
} else {
    $erro = urlencode("Não foi possivel excluir este Usuário");
    header("Location: listar_fornecedor.php?.erro=$erro");
    exit;
}
	
?>
</body>
</html>