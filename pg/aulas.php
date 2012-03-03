<?php include ("../codes/validar.php");
		include ("../codes/connect.php");
		
	if (isset($_GET['conidp']))
	   $pagi = $_GET['conidp'];
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

  if (!isset($_GET['conidp'])){
  $sql = "select conteudos.conid, cursos.cid, condes,
            contipo, contxt, conarq, condata, cdesc,
            cnivel from conteudos inner join cursos 
            on (conteudos.cid=cursos.cid) where 
            conteudos.cid=".$_GET['cid']." order by conteudos.conid ASC";
  $numRowsSQL = mysql_num_rows(mysql_query($sql));
  }
  else {
    $sql = "select cursos.cid, condes, contipo, contxt,
            conarq, condata, cdesc, cnivel, conid from
            conteudos inner join cursos on (conteudos.cid=cursos.cid)
            where conid=".$_GET['conidp']." and conteudos.cid=".$_GET['cid'];
	$numRowsSQL = mysql_num_rows(mysql_query($sql));
  }
$query = mysql_query($sql) or die ("Erro na query ".mysql_error());
$linha = mysql_fetch_assoc($query) or die ("Erro no Assoc ".mysql_error());

$pagi = $linha['conid'];
$a = $linha['conid'];

?>
</td></tr>
<tr>
  <td align="center" colspan="10"><strong>Aulas sobre <?php 	
  echo $linha['cdesc']; ?>  </strong><br /><?php echo $linha['condes'] ?></td>
</tr>
<tr>
  <td colspan="10"><?php echo $linha['contxt'] ?></td>
</tr>
<?php 
$sql2 = "select * from arquivos where arqcid=".$_GET['cid']."";
$query2 = mysql_query($sql2);
while ($linha2 = mysql_fetch_assoc($query2)){
	
?>
<tr><td align="right" colspan="10">
<a href="<?php echo "..\/".$linha2['arqcaminho'] ?>"><?php echo $linha2['arqdesc'] ?></a>
</td></tr> 
<?php 
}
 ?>
<tr><td align="center"><form action="aulas.php" method="get">
<input type="hidden" value="<?php echo $linha['cid']  ?>" name="cid" />
<input type="hidden" value="<?php echo $pagi-1 ?>" name="conidp"/>
<?php
$a = $a-1;
$cmdSQL = "select cursos.cid, condes, contipo, contxt, conarq, 
             condata, cdesc, cnivel, conid from conteudos 
             inner join cursos on (conteudos.cid=cursos.cid) 
             where conid=$a and conteudos.cid=".$_GET['cid'];
$query = mysql_query($cmdSQL);
if (mysql_num_rows($query)!=0){
?>
<input type="submit" value="Anterior" />
<? } ?>
</form></td>
<td align="center">
<?php
if ($numRowsSQL>0){
	
	?>
<form action="aulas.php" method="get">
<input type="hidden" value="<?php echo $linha['cid']  ?>" name="cid" />
<input type="hidden" value="<?php echo $pagi+1 ?>" name="conidp"/>
<?php
$a = $a+2;
$cmdSQL = "select cursos.cid, condes, contipo, contxt, conarq, 
             condata, cdesc, cnivel, conid from conteudos 
             inner join cursos on (conteudos.cid=cursos.cid) 
             where conid=$a and conteudos.cid=".$_GET['cid'];
$query = mysql_query($cmdSQL);  
if (mysql_num_rows($query)!=0){
?>
<input type="submit" value="Próximo" />
<? } ?>
</form>
<?php
}
?>
</td>
<td><form action="prova.php" method="get">
<input type="hidden" value="<?php echo $linha['cid']  ?>" name="cid" />
<input type="submit" value="Ir para Prova" />
</form></td>
</tr>
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