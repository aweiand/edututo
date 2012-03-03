<?php
include "validarAdm.php";
include "connect.php";

   $conid = $_POST['conid'];
   $condes = $_POST['condes'];
   $contipo = $_POST['contipo'];
   $conteudo = $_POST['conteudo']; 
   
$query = "UPDATE conteudos set condes='$condes', contipo='$contipo', contxt='$conteudo', condata=NOW() where conid='$conid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/conteudos.php'</script>"; 

?>
