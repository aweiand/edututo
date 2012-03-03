<?php
include "validar.php";
include "connect.php";

   $login = $_POST['login'];
   $nome  = $_POST['nome'];
   $email = $_POST['email'];   
   $passwd = $_POST['passwd'];
   
$query = "INSERT INTO alunos(anome, alogin, asenha, aemail) VALUES ('$nome','$login','$passwd' ,'$email')";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
   echo( "OK...!!! Gravado com Sucesso...!" );

?>
