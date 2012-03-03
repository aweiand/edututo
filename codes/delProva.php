<?php
include "validarAdm.php";
include "connect.php";

   $pcid = $_GET['pcid'];
   $ppid = $_GET['ppid'];
   $prid = $_GET['prid'];      
   
$query = "delete from provas where pcid='$pcid' and	ppid='$ppid' and prid='$prid'";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/provas.php'</script>"; 

?>
