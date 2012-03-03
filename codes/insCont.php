<?php
include "validarAdm.php";
include "connect.php";

   $cid = $_POST['cid'];
   $condes = $_POST['condes'];
   $contipo = $_POST['contipo'];
   $conteudo = $_POST['conteudo'];      
   
$query = "INSERT INTO conteudos(cid, condes, contipo, contxt, condata ) VALUES ('$cid', '$condes', '$contipo', '$conteudo', NOW())";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/conteudos.php'</script>"; 

?>
