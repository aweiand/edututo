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
<form name="alteraConteudo" action="../codes/altCon.php" method="post">
<?php 
$conid = $_POST['conid'];
$sql = "select * from conteudos where conid=".$conid."";
$linha = mysql_fetch_assoc(mysql_query($sql));
 ?>
<tr><td colspan="2">Cadastro de Conteudo:</td>
  <td colspan="10">Curso:<?php
echo $linha['cid'];
?>
</td></tr>
<tr>
  <td>Descrição:</td><td><input type="text" name="condes" id="condes" value="<?php echo $linha['condes'] ?>"/></td>
  <td>Tipo:</td><td><input type="text" name="contipo" id="contipo" value="<?php echo $linha['contipo'] ?>"/></td>
<td>Conteudo:</td><td><textarea name="conteudo" cols="50" rows="5" id="conteudo" ><?php echo $linha['contxt'] ?></textarea></td>  
  <td>
  <input type="hidden" name="conid" value="<?php echo $linha['conid'] ?>" id="conid"  />
  <input type="submit" value="Alterar" name="altCont" /></td>
</form>
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