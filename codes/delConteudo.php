<?php
include "validarAdm.php";
include "connect.php";

   $conid = $_GET['conid'];
   
$query = "delete from conteudos where conid='$conid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/conteudos.php'</script>"; 

?>
