<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Usuario</title>
</head>

<body>
<?php
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$email = $_POST['email'];
$connect = mysql_connect('127.0.0.1:3306','root','root');
$db = mysql_select_db('pi_logstoq');
$query_select = "SELECT login FROM usuario WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='PaginaCadastro.html';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='PaginaCadastro.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuario (nome,login,senha, email) VALUES ('$nome','$login','$senha','$email')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='PaginaCadastro.html'</script>";
                }
            }
        }


?>

</body>
</html>