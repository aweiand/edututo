<?php
//configurações de sql

//SQL Inject
$badwords = array("*","$"," union "," insert "," update "," drop "," select ");
foreach($_POST as $value)
foreach($badwords as $word)
if(substr_count($value, $word) > 0) die ("<br><center>Símbolo não permitido, remova-o e tente novamente. ($word)");
foreach($_GET as $value)
foreach($badwords as $word)
if(substr_count($value, $word) > 0) die ("<br><center>Símbolo não permitido, remova-o e tente novamente. ($word)");

	$host      = "localhost";
	$usuario   = "config";
	$senha     = "config";
	if (@mysql_connect($host,$usuario,$senha)) {
	   $banco = mysql_connect($host,$usuario,$senha) or die ("Não foi possivel connectar ao servidor principal");
	} else if (@mysql_connect($host,"root","")) {
	   $banco = mysql_connect($host,"root","") or die ("Não foi possivel connectar ao servidor secundario");
	}
	 
	mysql_select_db("edututo",$banco) or die ("Não foi possivel se connectar com o banco de dados")?>