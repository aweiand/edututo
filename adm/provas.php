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
<form name="insereCurso" action="../codes/insProva.php" method="post">
<tr>
  <td>Prova ddo Curso:</td><td colspan="3"><?php
$query_recordPrdts = 'SELECT * FROM cursos';
$recordPrdts = mysql_query($query_recordPrdts) or die('algo de ruim aconteceu...');
$row_recordPrdts = mysql_fetch_assoc($recordPrdts);
$totalRows_recordPrdts = mysql_num_rows($recordPrdts);
?>
    <select name="cid" id="cid">
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
    </select></td>
  <td align="right">Questão:</td><td><?php
$query_recordPrdts = 'SELECT * FROM perguntas';
$recordPrdts = mysql_query($query_recordPrdts) or die('algo de ruim aconteceu...');
$row_recordPrdts = mysql_fetch_assoc($recordPrdts);
$totalRows_recordPrdts = mysql_num_rows($recordPrdts);
?>
    <select name="pid" id="pid">
      <option value="">Selecione a Pergunta</option>
      <?php
do {  
?>
      <option value="<?php echo $row_recordPrdts['pid'] ?>"> <?php echo ($row_recordPrdts['ppergunta']) ?></option>
      <?php
} while ($row_recordPrdts = mysql_fetch_assoc($recordPrdts));
  $rows = mysql_num_rows($recordPrdts);
  if($rows > 0) {
      mysql_data_seek($recordPrdts, 0);
	  $row_recordPrdts = mysql_fetch_assoc($recordPrdts);
  }
?>
    </select></td><td colspan="3"><input type="checkbox" name="pcerta" id="pcerta" />
      Resposta Certa?</td></tr>
    <tr><td colspan="5" align="right">Resposta:</td><td colspan="6"><?php
$query_recordPrdts = 'SELECT * FROM respostas';
$recordPrdts = mysql_query($query_recordPrdts) or die('algo de ruim aconteceu...');
$row_recordPrdts = mysql_fetch_assoc($recordPrdts);
$totalRows_recordPrdts = mysql_num_rows($recordPrdts);
?>
        <select name="rid" id="rid">
          <option value="">Selecione a Resposta</option>
          <?php
do {  
?>
          <option value="<?php echo $row_recordPrdts['rid'] ?>"> <?php echo ($row_recordPrdts['rresposta']) ?></option>
          <?php
} while ($row_recordPrdts = mysql_fetch_assoc($recordPrdts));
  $rows = mysql_num_rows($recordPrdts);
  if($rows > 0) {
      mysql_data_seek($recordPrdts, 0);
	  $row_recordPrdts = mysql_fetch_assoc($recordPrdts);
  }
?>
        </select></td><td><input type="submit" value="Inserir" name="insPerg" /></td>
        </tr>
        <tr><td colspan="7">&nbsp;</td></tr>
</form>
<?php 
$sql = "select * from provas inner join perguntas on (ppid=pid) inner join respostas on (prid=rid) inner join cursos on (pcid=cid) order by cdesc asc";
$query = mysql_query($sql);

while ($linha = mysql_fetch_assoc($query)){
?>
<tr>
<td colspan="5"><?php echo "Curso - ".$linha['cdesc']." | Pergunta - ".$linha['ppergunta']." | Resposta - ".$linha['rresposta']." | Certa. - ".$linha['pcerta'] ?></td>
<td>
<form action="provas.php" name="altProva">
<input type="hidden" name="pcid" value="<?php echo $linha['pcid'] ?>" />
<input type="hidden" name="ppid" value="<?php echo $linha['ppid'] ?>" />
<input type="hidden" name="prid" value="<?php echo $linha['prid'] ?>" />
<input type="submit" value="Alterar" disabled="disabled"/>
</form>
</td>
<td>
<form name="delProva" action="../codes/delProva.php" method="get">
<input type="hidden" name="pcid" value="<?php echo $linha['pcid'] ?>" />
<input type="hidden" name="ppid" value="<?php echo $linha['ppid'] ?>" />
<input type="hidden" name="prid" value="<?php echo $linha['prid'] ?>" />
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