<?php

include "../conexao/conexao.php";

$idFornecedor = $_GET["idFornecedor"];

$consulta = mysql_query("select * from fornecedor where idFornecedor = '$idFornecedor'") or die (mysql_error());

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Fornecedor</title>
</head>

<body>

<form id="alterar" name="alterar" method="post" action="atualizar.php">

<?php
         while ($dados = mysql_fetch_object($consulta)) {
?>

<p><label>ID: </label> <input type="text" name="idFornecedor" id="idFornecedor" value="<?php echo $dados->idFornecedor;?>" /></p>
<p><label>Nome: </label> <input type="text" name="nome" id="nome" value="<?php echo $dados->Nome;?>" /></p>
<p><label>CNPJ: </label> <input type="text" name="cnpj" id="cnpj" value="<?php echo $dados->CNPJ;?>"/></p>
<p><label>Telefone: </label> <input type="text" name="telefone" id="telefone" value="<?php echo $dados->Telefone;?>"/></p>
<p><label>Endereço: </label> <input type="text" name="endereco" id="endereco" value="<?php echo $dados->Endereco;?>" /></p>
<p><label>CEP: </label> <input type="text" name="cep" id="cep" value="<?php echo $dados->CEP;?>"/></p>
<p><label>Cidade: </label> <input type="text" name="cidade" id="cidade" value="<?php echo $dados->Cidade;?>" /></p>
<p><label>Estado: </label> <input type="text" name="uf" id="uf" value="<?php echo $dados->Uf;?>" /></p>
<p><label>Bairro: </label> <input type="text" name="bairro" id="bairro" value="<?php echo $dados->Bairro;?>"/></p>
<p><label>País: </label> <input type="text" name="pais" id="pais" value="<?php echo $dados->Pais;?>"/></p>
<p><label>Email: </label> <input type="text" name="email" id="email" value="<?php echo $dados->Email;?>" /></p>
<p> <input type="submit" value="Atualizar" /></p>

<?php
}
?>
</form>

</body>
</html>