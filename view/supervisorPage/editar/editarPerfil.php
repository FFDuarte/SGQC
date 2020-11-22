<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);


$nome      = $_POST["nome"];
$matricula = $_POST["matricula"];
$setor     = $_POST["setor"];
$cpf       = $_POST["cpf"];
$funcao    = $_POST["funcao"];
$idade    = $_POST["idade"];


$sql = "UPDATE funcionario SET nome='$nome' ,setor='$setor' , cpf='$cpf' , funcao='$funcao', idade='$idade' WHERE matricula='$matricula'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=perfil");
?>




<?php

$imagem = $_FILES["imagem"];

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

		mysql_connect($host,$username,$password) or die("Impossível Conectar");

		@mysql_select_db($db) or die("Impossível Conectar");

		mysql_query("INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')") or
		die("O sistema não foi capaz de executar a query");

		unlink($nomeFinal);

		header("location:exibir.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>