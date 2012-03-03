<?php
include "validarAdm.php";
include "connect.php";

   $arqdesc = $_POST['arqdesc'];
   $arqcid = $_POST['arqcid'];

// Prepara a variável do arquivo
$arquivo = isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;

// Tamanho máximo do arquivo (em bytes)
$config["tamanho"] = 1068830000;

// Formulário postado... executa as ações
if($arquivo)
{  
        // Verifica tamanho do arquivo
        if($arquivo["size"] > $config["tamanho"])
        {
            $erro[] = "Arquivo em tamanho muito grande! 
		A imagem deve ser de no máximo " . $config["tamanho"] . " bytes. 
		Envie outro arquivo";
        }
    
        // Pega extensão do arquivo
        preg_match("/\.(gif|bmp|png|jpg|jpeg|txt|doc|docx|ppt|pptx|pdf|wma|mp3|mp4){1}$/i", $arquivo["name"], $ext);

        // Gera um nome único para a imagem
        $imagem_nome = date("dmYHis").".".$ext[1];

        // Caminho de onde a imagem ficará
        $imagem_dir = "../arquivos/" . $imagem_nome;
		$imga = "../arquivos/" . $imagem_nome;
        // Faz o upload da imagem
        move_uploaded_file($arquivo["tmp_name"], $imagem_dir);

$query = "INSERT INTO arquivos(arqdesc, arqcid, arqcaminho, arqdata) VALUES ('$arqdesc', '$arqcid', '$imga', NOW())";
      mysql_query($query) or die ("nao foi possivel gravar...".mysql_error());
echo" <script>document.location.href='../adm/arquivos.php'</script>"; 
    }

?>
