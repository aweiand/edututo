<?php
include "validarAdm.php";
include "connect.php";

   $pergunta = $_GET['pid'];
   
$query = "delete from perguntas where pid='$pergunta'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/perguntas.php'</script>"; 

?>
