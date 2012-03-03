<?php
include "validarAdm.php";
include "connect.php";

   $curso = $_GET['cid'];
   
$query = "delete from cursos where cid='$curso'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/cursos.php'</script>"; 

?>
