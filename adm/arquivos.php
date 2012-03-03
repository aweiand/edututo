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
<form name="insereArq" action="../codes/insArq.php" method="post" enctype="multipart/form-data">
<tr><td colspan="1">Arquivos:</td><td colspan="8"><?php
$query_recordPrdts = 'SELECT * FROM cursos';
$recordPrdts = mysql_query($query_recordPrdts) or die('algo de ruim aconteceu...');
$row_recordPrdts = mysql_fetch_assoc($recordPrdts);
$totalRows_recordPrdts = mysql_num_rows($recordPrdts);
?>
    <select name="arqcid" id="arqcid">
      <option value="">Selecione o Curso</option>
      <?php
do {  
?>
      <option value="<?php echo $row_recordPrdts['cid'] ?>"> <?php echo ($row_recordPrdts['cdesc']) ?></option>
      <?php
} while ($row_recordPrdts = mysql_fetch_assoc($recordPrdts));
  $rows = mysql_num_rows($recordPrdts);
  if($rows > 0) {
      mysql_data_seek($recordPrdts, 0);
	  $row_recordPrdts = mysql_fetch_assoc($recordPrdts);
  }
?>
    </select></td></tr>
<tr>
  <td>Descrição:</td><td colspan="3"><input type="text" name="arqdesc" id="arqdesc" /></td><td>Arquivo:</td><td><input type="file" name="foto" id="foto"  /></td><td><input type="submit" value="Inserir" name="insPerg" /></td></tr>
</form>
<?php 
$sql = "select * from arquivos inner join cursos on (arqcid=cid)";
$query = mysql_query($sql);

while ($linha = mysql_fetch_assoc($query)){
	$arqid = $linha['arqid'];
?>
<tr>
<td colspan="6"><?php echo "ArqId - ".$arqid." | Curso - ".$linha['cdesc']." | Descrição. - ".$linha['arqdesc'] ?></td>
<td>
<form name="delArq" action="../codes/delArq.php" method="get">
<input type="hidden" name="arqid" value="<?php echo $arqid ?>" />
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