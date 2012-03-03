<?php include ("../codes/validarAdm.php");
		include ("../codes/connect.php")
 ?>
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
<link href="../style/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../codes/funcs.js">
</script>
<script type="text/javascript" src="../codes/jquery-1.5.js">
</script>
</head>
<body>
<div id="pagina">
<div id="box">
<div id="box2">
<div id="topo">
  <div align="right"><img src="../imgs/topo.png" width="950" height="150" hspace="1" vspace="0" />
    </div>
<div id="menu">
<?php include ("menu-adm.html") ?>
</div>
<div id="centro">
<table width="100%">
<tr><td align="center" colspan="10">Cadastro Administrativo de Perguntas  EduTuto</td></tr>
<tr><td colspan="10">&nbsp;</td></tr>
<form name="inserePergunta" action="../codes/insPeg.php" method="post">
<tr><td>Pergunta:</td><td colspan="3"><input type="text" name="pergunta" id="pergunta" /></td><td colspan="3"><input type="submit" value="Inserir" name="insPerg" /></td></tr>
</form>
<?php 
$sql = "select * from perguntas";
$query = mysql_query($sql);

while ($linha = mysql_fetch_assoc($query)){
	$pid = $linha['pid'];
?>
<tr>
<td colspan="5"><?php echo "Pid - ".$pid." | Perg. - ".$linha['ppergunta'] ?></td>
<td>
<form action="altperg.php" name="altPerg" method="POST">
<input type="hidden" name="pid" value="<?php echo $pid ?>" />
<input type="submit" value="Alterar" />
</form>
</td>
<td>
<form name="delPerg" action="../codes/delPerg.php" method="get">
<input type="hidden" name="pid" value="<?php echo $pid ?>" />
<input type="submit" value="Deletar" />
</form>
</td>
</tr>
<?php 
}
?>
</table>
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