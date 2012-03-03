<?php
require ("connect.php");

//obtem os valores digitador
$login = $_POST["login"];
$senha = $_POST["passwd"];

	$veriflogin = mysql_query("SELECT * FROM alunos WHERE alogin='".$login."' AND asenha='".$senha."'");

	$sql2 = mysql_fetch_row($veriflogin);
	$linhas = mysql_num_rows($veriflogin);

if ($linhas ==1)//testa se a consulta retornou algum registro
{
	    session_start();
		
		$_SESSION['usuid'] = $sql2[0];
		$_SESSION['nome'] =  $sql2[1];
		
 		    echo "Olá ".$_SESSION["nome"].", Id ".$_SESSION["usuid"];
			echo" <script>document.location.href='../pg/home.php'</script>";    }  else {
			echo "Olá ".$_SESSION["nome"].", você não foi identificado e será deslogado...";
			echo" <script>document.location.href='../index.php'</script>";    } 
?>