<?php
require ("connect.php");

//obtem os valores digitador
$login = $_POST["login"];
$senha = $_POST["passwd"];

	$veriflogin = mysql_query("SELECT * FROM administradores WHERE admlogin='".$login."' AND admsenha='".$senha."'");

	$sql2 = mysql_fetch_row($veriflogin);
	$linhas = mysql_num_rows($veriflogin);

if ($linhas ==1)//testa se a consulta retornou algum registro
{
	    session_start();
		
		$_SESSION['admid'] = $sql2[0];
		$_SESSION['admnome'] =  $sql2[1];
		
 		    echo "Olá ".$_SESSION["admnome"].", Id ".$_SESSION["admid"];
			echo" <script>document.location.href='../adm/homeAdm.php'</script>"; 
			   }
			  else
			   {
			echo "Olá ".$_SESSION["admnome"].", você não foi identificado e será deslogado...";
			echo" <script>document.location.href='../administrativo.php'</script>"; 
			   } 
?>