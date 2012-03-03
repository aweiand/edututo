<?php
include "validarAdm.php";
include "connect.php";

   $pcid = $_POST['cid'];
   $ppid = $_POST['pid'];
   $prid = $_POST['rid'];
  if (isset($_POST['pcerta'])) {
	  $pcerta = 1;
  } else {
	  $pcerta = 0;
  }
   
$query = "INSERT INTO provas(pcid, ppid, prid, pcerta) VALUES ('$pcid', '$ppid', '$prid', '$pcerta')";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/provas.php'</script>"; 

?>
