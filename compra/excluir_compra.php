<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluir</title>
</head>

<body>
<?php

include "../conexao/conexao.php";

$tabela = "compra";

mysql_select_db("pi_logstoq",$conecta);

$idCompra = $_GET['idCompra'];

$consulta = mysql_query("delete from compra where idCompra = '".$idCompra."'");

if($consulta) {
	$msg = urlencode("Usuário excluido com Sucesso!");
	header("Location: listar_compra.php?.msg=$msg");
	exit;
	 
} else {
    $erro = urlencode("Não foi possivel excluir este Usuário");
    header("Location: listar_compra.php?.erro=$erro");
    exit;
}
	
?>
</body>
</html>