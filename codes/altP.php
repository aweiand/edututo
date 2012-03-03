<?php
include "validarAdm.php";
include "connect.php";

   $pid = $_POST['pid'];
   $pergunta = $_POST['pergunta'];
   
$query = "UPDATE perguntas set ppergunta='$pergunta' where pid='$pid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/perguntas.php'</script>"; 

?>
