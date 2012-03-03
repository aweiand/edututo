<?php
include "validarAdm.php";
include "connect.php";

   $resposta = $_POST['resposta'];
   
$query = "INSERT INTO respostas(rresposta) VALUES ('$resposta')";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/respostas.php'</script>"; 

?>
