<?php

include "../conexao/conexao.php";

$idProduto = $_GET["idProduto"];

$consulta = mysql_query("select * from produto where idProduto = '$idProduto'") or die (mysql_error());

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Produto</title>
</head>

<body>

<form id="alterar" name="alterar" method="post" action="atualizar.php">

<?php
         while ($dados = mysql_fetch_object($consulta)) {
?>

<p><label>ID: </label> <input type="text" name="idProduto" id="idProduto" value="<?php echo $dados->idProduto;?>" /></p>
<p><label>Nome: </label> <input type="text" name="nome" id="nome" value="<?php echo $dados->Nome;?>" /></p>
<p><label>Descrição: </label> <input type="text" name="descricao" id="descricao" value="<?php echo $dados->Descricao;?>"/></p>
<p><label>Quantidade: </label> <input type="text" name="quantidade" id="quantidade" value="<?php echo $dados->Quantidade;?>"/></p>
<p><label>Preço Custo: </label> <input type="text" name="precoCusto" id="precoCusto" value="<?php echo $dados->PrecoCusto;?>" /></p>
<p><label>Preço Venda: </label> <input type="text" name="precoVenda" id="precoVenda" value="<?php echo $dados->PrecoVenda;?>"/></p>
<p><label>Grupo: </label> <input type="text" name="grupo" id="grupo" value="<?php echo $dados->Grupo;?>" /></p>
<p><label>ID Fornecedor: </label> <input type="text" name="idFornecedor" id="idFornecedor" value="<?php echo $dados->idFornecedor;?>" /></p>
<p> <input type="submit" value="Atualizar" /></p>

<?php
}
?>
</form>

</body>
</html>