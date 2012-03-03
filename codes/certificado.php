<?php
include "validar.php";
include "connect.php";

$usuid = $_GET['usuid'];
$cid   = $_GET['cid'];

$sql = "SELECT * FROM alunos_cursos 
		INNER JOIN alunos ON (alunos_cursos.acaid=alunos.aid)
		INNER JOIN cursos ON (alunos_cursos.accid=cursos.cid)
		WHERE alunos_cursos.acaid=$usuid AND alunos_cursos.accid=$cid";
$query = mysql_query($sql);
$linha = mysql_fetch_assoc($query) or die (mysql_error());
?>
<div align="center" style="position:absolute; top:50px; left:200px; width:950px; height:auto; background-color:#CCC; font-size:20px;">
<img src="../imgs/topo.png" width="950"/>
<p style="font-size:30px; font-stretch:ultra-expanded; font-style:oblique;"><strong>Certificado de Conclusão de Curso EAD - EduTuto</strong></p>
<p>O aluno <strong><?php echo $linha['anome']; ?></strong>, conlcuiu co exito o curso de</p>
<p><strong><?php echo $linha['cdesc']; ?></strong>, e realizou a prova em <?php echo $linha['acdataprova']; ?></p>
<p>o qual teve início de seus estudos em <?php echo $linha['acdatainicio']; ?>, obtendo a nota <strong><?php echo $linha['acnotafinal']; ?></strong>.</p>
<p>&nbsp;</p>
</div>