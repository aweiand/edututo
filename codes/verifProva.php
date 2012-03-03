<?php
include "validar.php";
include "connect.php";

$numLinha = $_POST['numlinha'];
$cid      = $_POST['cid'];
$acaid    = $_SESSION['usuid'];
$nota     = 0;   
$n = 0;

while ($n<$numLinha)
{
	$nota = $nota + $_POST[$n];
	$n++;
}

$query = "UPDATE alunos_cursos set acnotafinal=".$nota.", acdataprova=NOW() where acaid=".$acaid." and accid=".$cid." ";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
   echo("<br /> OK...!!! Gravado com Sucesso...!" );
   echo" <script>document.location.href='../pg/home.php'</script>";
?>
