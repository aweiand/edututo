<?php
include "validarAdm.php";
include "connect.php";

   $arqid = $_GET['arqid'];
$sql ="select * from arquivos where arqid='$arqid'";
$qu = mysql_query($sql) or die (mysql_error());
$q =  mysql_fetch_assoc($qu);

unlink($q['arqcaminho']);
   
$query = "delete from arquivos where arqid='$arqid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/arquivos.php'</script>"; 

?>
