<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Produto</title>
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



$query = "INSERT INTO `produto` 
(`nome`, `descricao` , `quantidade` , `precoCusto`, `precoVenda`, `grupo` ,`idFornecedor`) VALUES 
('$nome', '$descricao' , '$quantidade' , '$precoCusto', '$precoVenda', '$grupo', '$idFornecedor')";

$result = mysql_query($query, $conecta);

if (!$result)
    die('Invalid query: ' . mysql_error());
else 
header("Location: listar_produto.php");

//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</p>
</body>
</html>