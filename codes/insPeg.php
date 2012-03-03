<?php
include "validarAdm.php";
include "connect.php";

   $pergunta = $_POST['pergunta'];
   
$query = "INSERT INTO perguntas(ppergunta) VALUES ('$pergunta')";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/perguntas.php'</script>"; 

?>
