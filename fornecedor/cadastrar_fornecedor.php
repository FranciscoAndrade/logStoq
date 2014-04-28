<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Fornecedor</title>
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


$query = "INSERT INTO `fornecedor` 
(`nome`, `cnpj` , `telefone` , `endereco`, `cep`, `cidade`, `uf`, `bairro`, `pais` ,`email`) VALUES 
('$nome', '$cnpj' , '$telefone' , '$endereco', '$cep', '$cidade', '$uf', '$bairro', '$pais', '$email')";

$result = mysql_query($query, $conecta);

if (!$result)
    die('Invalid query: ' . mysql_error());
else 
header("Location: listar_fornecedor.php");

//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</p>
</body>
</html>