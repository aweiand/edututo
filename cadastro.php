<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.....::EduTuto::...</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Comic Sans MS, cursive;
	font-size: 10px;
}
.center {
	text-align: center;
}
.center {
	font-size: 36px;
	text-align: left;
	color: #00C;
}
.center em {
	font-size: 16px;
	font-family: "Arial Black", Gadget, sans-serif;
	color: #000;
}
body p {
	text-align: center;
}
.ll {
	text-align: left;
}
-->
</style>
<link href="style/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style/animated-menu.css"/>
<script type="text/javascript" src="codes/funcs.js"></script>
<script type="text/javascript" src="codes/jquery-1.5.js"></script>
<script type="text/javascript" src="codes/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="codes/animated-menu.js"></script>
</head>
<body>
<div id="pagina">
<div id="box">
<div id="box2">
<div id="topo">
<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<BR />&nbsp;<br />&nbsp;
</div>
<div id="menu">
	<?php require "menu.php" ?>
</div>

<div id="centro">
<form name="Logando" id="logando" method="post" action="codes/inserir.php">
<table width="50%">
<tr><td align="center" colspan="2"><strong>Cadastro de Alunos</strong></td></tr>
<tr><td>Nome</td><td>Login</td></tr>
<tr><td><input type="text" id="nome" name="nome" /></td><td><input type="text" id="login" name="login"  /></td></tr>
<tr><td>Email</td><td>Senha</td></tr>
<tr><td><input type="text" id="email" name="email" /></td><td><input type="password" id="passwd" name="passwd"  /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Cadastrar" name="Cadastrar" id="Cadastrar" /></td></tr>
</table>
</form>
</div>
<div id="Rodape">
<p><br /><strong><i>Rua 24 de Maio, 141-Centro-Osório/RS (3ºAndar, Laboratório 8)<br />
    <i><strong>Fone / Fax.: +55(51)3663-1763 - E-mail.: <a href="mailto:edututo@facos.com.br">edututo@facos.com.br</a> </strong> </i></p></p>
</div>
</div>
</div>
</div>
</body>
</html>