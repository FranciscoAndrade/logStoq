<?php

include "../conexao/conexao.php";


$consulta = mysql_query("select * from fornecedor") or die (mysql_error());;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Fornecedor</title>

</head>

<body>
<form action="" method="post" enctype="multipart/form-data">

    <h2>Total de Fornecedor</h2>
   <?php
	
	$num_fornecedor = mysql_num_rows($consulta);
	$total_fornecedor = $num_fornecedor;
	echo $total_fornecedor;
	       
    ?>
  
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="6" valign="top"><table width="85%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="257" height="24" align="center" valign="middle" ><span class="style3">Nome:</span></td>
        <td width="183" align="center" valign="middle"  >CNPJ</td>
        <td width="160" align="center" valign="middle"  >Telefone</td>
        <td width="141" align="center" valign="middle"  >Codigo</td>
        <td width="100" align="center" valign="middle" >Alterar</td>
          <td width="91" align="center" valign="middle" >Excluir</td>
          </tr>
  <?php
while($linhas = mysql_fetch_object($consulta)) {
?>
      <tr>
        <td height="24" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Nome;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->CNPJ;?>&nbsp;</td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->Telefone;?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><?php echo $linhas->idFornecedor;?></td>
        <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="alterar_fornecedor.php?idFornecedor=<?php echo $linhas->idFornecedor;?>">Alterar</a></td>
          <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="excluir_fornecedor.php?idFornecedor=<?php echo $linhas->idFornecedor;?>" class="style2">X</a></td>
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