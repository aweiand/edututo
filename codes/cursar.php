<?php
include "validar.php";
include "connect.php";

   $cid = $_GET['cid'];
   $aid = $_SESSION['usuid'];   
   
$query = "INSERT INTO alunos_cursos(acaid, accid, acdatainicio) VALUES ('$aid','$cid',NOW())";
      mysql_query($query) or die ("nao foi possivel cadastrar voce neste curso...".mysql_error());
   echo( "Pronto...!!! Vcoe esta cursando agora...!" );
   echo" <script>document.location.href='../pg/aulas.php?cid=$cid'</script>"; 

?>
