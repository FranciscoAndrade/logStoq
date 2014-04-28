<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Compra</title>
</head>

<body>


<?php
include "../conexao/conexao.php";

$quantidade = $_POST ["quantidade"];
$valorUnitario = $_POST ["valorUnitario"];
$valorTotal = $_POST ["valorTotal"];
$data = $_POST ["data"];
$idProduto = $_POST ["idProduto"];



$query = "INSERT INTO `compra` 
(`quantidade`, `valorUnitario` , `valorTotal` , `data`, `idProduto`) VALUES 
('$quantidade', '$valorUnitario' , '$valorTotal' , '$data', '$idProduto')";

$result = mysql_query($query, $conecta);

if (!$result)
    die('Invalid query: ' . mysql_error());
else 
header("Location: listar_compra.php");

//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</p>
</body>
</html>