<?php
session_start();

if (!isset($_SESSION["nome"])) {
	echo "Voce não tem permissão de acesso a esta página...";
	echo " <script>document.location.href='../index.php'</script>";
}
?>
