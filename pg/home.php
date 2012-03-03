<?php include ("../codes/validar.php");
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
<?php include ("menu-log.html") ?>
</div>
<div id="centro">
<table width="100%">
<tr><td><?php 
echo '<strong>Ola '.$_SESSION['nome'].'</strong>';
?>
</td></tr>
<tr><td align="center" colspan="10"><big><strong>Lista dos Cursos EduTuto</strong></big></td></tr>
<tr><td><strong>Curso</strong></td><td><strong>Data de Início</strong></td><td><strong>Data da Prova</strong></td><td><strong>Resultado</strong></td><td><strong>Tentativas</td><td>&nbsp;</td>
<?php
$sql = "select * from cursos";
$query = mysql_query($sql) or die ("Erro na query".mysql_error());
while ($linha = mysql_fetch_assoc($query)){
  $sql2 = "select * from alunos_cursos where acaid=".$_SESSION['usuid']." and accid=".$linha['cid'];
  $query2 = mysql_query($sql2) or die ("Erro na query".mysql_error());
  $linha2 = mysql_fetch_assoc($query2);

	?>
    <tr><td><?php echo $linha['cdesc'] ?></td><td><?php echo $linha2['acdatainicio'] ?></td><td><?php echo $linha2['acdataprova'] ?></td><td><?php echo $linha2['acnotafinal'] ?></td><td><?php echo $linha2['acnumprovas'] ?></td>
    <?php if (!isset($linha2['acnumprovas'])) { ?>
    <td><form name="cursar" method="get" action="../codes/cursar.php">
    <input type="hidden" value="<?php echo $linha['cid'] ?>"    name="cid" /><input type="submit" value="Cursar"  /></form></td>
	<?php } 
	if ($linha2['acnumprovas']<3) { ?>
    <td><form name="cursar" method="get" action="aulas.php">
    <input type="hidden" value="<?php echo $linha['cid'] ?>"    name="cid" /><input type="submit" value="Continuar Curso"  /></form></td><?php }
	if ($linha2['acnotafinal']!=NULL) { ?>
    <td><form name="certificado" method="get" action="../codes/certificado.php">
    <input type="hidden" value="<?php echo $linha['cid'] ?>"  name="cid" />
    <input type="hidden" value="<?php echo $_SESSION['usuid']; ?>" name="usuid" />
    <input type="submit" value="Emitir Certificado"  /></form></td>
    <?php } ?>
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