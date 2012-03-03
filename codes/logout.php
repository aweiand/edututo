<?php
session_start();
$_SESSION = array();
session_destroy();
	echo "Efetuando LogOff....";
	echo " <script>document.location.href='../index.php'</script>";
?>