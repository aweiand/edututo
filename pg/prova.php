<?php include ("../codes/validar.php");
		include ("../codes/connect.php");
		
	if (isset($_GET['conidp']))
	   $pagi = $_GET['conidp'];
	   else { 
	   $pagi = 0;
	   
	$pr = "select * from alunos_cursos where acaid=".$_SESSION['usuid']." and accid=".$_GET['cid'];
	$qq = mysql_query($pr) or die (mysql_error());
	$as = mysql_fetch_assoc($qq);
	$provas = $as['acnumprovas']+1;
	$pr = "update alunos_cursos set acnumprovas=".$provas." where acaid=".$_SESSION['usuid']." and accid=".$_GET['cid'];    $qq = mysql_query($pr) or die (mysql_error());
	   }
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
<form name="verificaProva" action="../codes/verifProva.php" method="post">
<table width="100%">
<tr><td><?php 
echo '<strong>Ola '.$_SESSION['nome'].'</strong>';

  $cid = $_GET['cid'];
  $sql = "select * from provas inner join perguntas on (ppid=pid) inner join respostas on (prid=rid) inner join cursos on (pcid=cid) where pcid=".$cid." group by ppid ";

$query = mysql_query($sql) or die ("Erro na query ".mysql_error());
$linha = mysql_fetch_assoc($query) or die ("Erro no Assoc ".mysql_error());

?>
</td></tr>
<tr>
  <td align="center" colspan="10"><strong>PROVA SOBRE <?php 	
  echo $linha['cdesc']; ?></strong></td>
</tr>
<?php 
	$numLinha = 0;
	
$que = mysql_query($sql);
while ($li = mysql_fetch_assoc($que)){
$ppid = $li['ppid']
?>
<tr>
  <td>Pergunta: <?php echo $li['ppergunta'] ?></td>
</tr>
<?php 
$sq = "select rresposta, pcerta from provas inner join respostas on (prid=rid) where pcid=".$cid." and ppid=".$ppid;
$q = mysql_query($sq);
while ($lina = mysql_fetch_assoc($q)){
 ?>
 <tr>
<td align="right">
<input type="radio" value="<?php echo $lina['pcerta'] ?>" name="<?php echo $numLinha ?>" />&nbsp;<?php echo $lina['rresposta'] ?></td>
</tr>
<?php 
 } ?>
<tr><td>&nbsp;</td></tr>
<?php $numLinha = $numLinha+1; } 
?>
<tr>
<td align="center">
<input type="hidden" name="cid" value="<?php echo $cid ?>" />
<input type="hidden" name="numlinha" value="<?php echo $numLinha ?>" />
<input type="submit" name="finaliza_porva" value="Finalizar Prova" /></td>
</tr>
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