<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Inicial</title>

</head>

<body>
<?php
$login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie <br>";
            echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
			        }
?>
</body>
</html>