<?php

include "../conexao/conexao.php";

$idVenda = $_GET["idVenda"];

$consulta = mysql_query("select * from venda where idVenda = '$idVenda'") or die (mysql_error());

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Venda</title>
</head>

<body>

<form id="alterar" name="alterar" method="post" action="atualizar.php">

<?php
         while ($dados = mysql_fetch_object($consulta)) {
?>

<p><label>ID: </label> <input type="text" name="idVenda" id="idVenda" value="<?php echo $dados->idVenda;?>" /></p>
<p><label>Quantidade: </label> <input type="text" name="quantidade" id="quantidade" value="<?php echo $dados->Quantidade;?>" /></p>
<p><label>Valor Unitário: </label> <input type="text" name="valorUnitario" id="valorUnitario" value="<?php echo $dados->ValorUnitario;?>"/></p>
<p><label>Valor Total: </label> <input type="text" name="valorTotal" id="valorTotal" value="<?php echo $dados->ValorTotal;?>"/></p>
<p><label>Data: </label> <input type="text" name="data" id="data" value="<?php echo $dados->Data;?>" /></p>
<p><label>ID Produto: </label> <input type="text" name="idProduto" id="idProduto" value="<?php echo $dados->idProduto;?>"/></p>
<p> <input type="submit" value="Atualizar" /></p>

<?php
}
?>
</form>

</body>
</html>