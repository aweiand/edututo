<?php
include "validarAdm.php";
include "connect.php";

   $rid = $_POST['rid'];
   $resposta = $_POST['resposta'];
   
$query = "UPDATE respostas set rresposta='$resposta' where rid='$rid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/respostas.php'</script>"; 

?>
