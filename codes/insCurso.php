<?php
include "validarAdm.php";
include "connect.php";

   $curso = $_POST['curso'];
   $nivel = $_POST['nivel'];
   
$query = "INSERT INTO cursos(cdesc, cnivel) VALUES ('$curso', '$nivel')";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/cursos.php'</script>"; 

?>
