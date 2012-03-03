<?php
include "validarAdm.php";
include "connect.php";

   $cid = $_POST['cid'];
   $cdesc = $_POST['curso'];
   $nivel = $_POST['nivel'];
   
$query = "UPDATE cursos set cdesc='$cdesc' , cnivel='$nivel' where cid='$cid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/cursos.php'</script>"; 

?>
