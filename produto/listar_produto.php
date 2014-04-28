<?php

include "../conexao/conexao.php";


$consulta = mysql_query("select * from produto") or die (mysql_error());;


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Produto</title>


</head>

<body>
<form action="" method="post" enctype="multipart/form-data">

    <h2>Total de Fornecedor</h2>
   <?php
	
	$num_produto = mysql_num_rows($consulta);
	$total_produto = $num_produto;
	echo $total_produto;
	       
    ?>
  
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="6" valign="top"><table width="85%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="257" height="24" align="center" valign="middle" ><span class="style3">Nome:</span></td>
        <td width="183" align="center" valign="middle"  >Descrição</td>
        <td width="160" align="center" valign="middle"  >ID Produto</td>
        <td width="141" align="center" valign="middle"  >Grupo</td>
        <td width="100" align="center" valign="middle" >Alterar</td>
          <td width="91" align="center" valign="middle" >Excluir</td>
          </tr>
  <?php
while($linhas = mysql_fetch_object($consulta)) {
?>
      <tr>
        <td height="24" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Nome;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->Descricao;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->idProduto;?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->Grupo?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="alterar_produto.php?idProduto=<?php echo $linhas->idProduto;?>">Alterar</a></td>
          <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="excluir_produto.php?idProduto=<?php echo $linhas->idProduto;?>" class="style2">X</a></td>
          </tr>
      
  <?php
}
?>
      
      
      
      
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="136">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>