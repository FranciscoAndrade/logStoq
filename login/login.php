<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>

<body>
<?php

	
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('127.0.0.1','root','root');
    $db = mysql_select_db('pi_logstoq');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
					window.location.href='login.html';</script>";
                    die();
                }else{
                    setcookie("login",$login);
                    header("Location:../index/index.html");
                }
        }



?>
</body>
</html>