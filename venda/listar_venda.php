<?php

include "../conexao/conexao.php";


$consulta = mysql_query("select * from venda") or die (mysql_error());;


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Venda</title>


</head>

<body>
<form action="" method="post" enctype="multipart/form-data">

    <h2>Total de Venda</h2>
   <?php
	
	$num_venda = mysql_num_rows($consulta);
	$total_venda = $num_venda;
	echo $total_venda;
	       
    ?>
  
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="6" valign="top"><table width="85%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="257" height="24" align="center" valign="middle" ><span class="style3">Quantidade:</span></td>
        <td width="183" align="center" valign="middle"  >Valor Unitário</td>
        <td width="160" align="center" valign="middle"  >Valor Total</td>
        <td width="141" align="center" valign="middle"  >Data</td>
        <td width="100" align="center" valign="middle" >ID Produto</td>
        <td width="100" align="center" valign="middle" >ID Venda</td>
        <td width="100" align="center" valign="middle" >Alterar</td>
          <td width="91" align="center" valign="middle" >Excluir</td>
          </tr>
  <?php
while($linhas = mysql_fetch_object($consulta)) {
?>
      <tr>
        <td height="24" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Quantidade;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->ValorUnitario;?>&nbsp;</td>
		<td align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->ValorTotal;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Data;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" ><?php echo $linhas->idProduto;?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->idVenda?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC"><a href="alterar_venda.php?idVenda=<?php echo $linhas->idVenda;?>">Alterar</a></td>
          <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="excluir_venda.php?idVenda=<?php echo $linhas->idVenda;?>" >X</a></td>
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