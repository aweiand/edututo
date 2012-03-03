<?php
include "validarAdm.php";
include "connect.php";

   $resposta = $_GET['rid'];
   
$query = "delete from respostas where rid='$resposta'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/respostas.php'</script>"; 

?>
