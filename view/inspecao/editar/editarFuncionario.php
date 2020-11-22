<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);


$funcionarionome      = $_POST["nome"];
$funcionariomatricula = $_POST["matricula"];
$funcionariosetor     = $_POST["setor"];
$funcionariocpf       = $_POST["cpf"];
$funcionariofuncao    = $_POST["funcao"];
$funcionarioidade    = $_POST["idade"];


$sql = "UPDATE funcionario SET nome='$funcionarionome' ,setor='$funcionariosetor' , cpf='$funcionariocpf' , funcao='$funcionariofuncao', idade='$funcionarioidade' WHERE matricula='$funcionariomatricula'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=funcionarios");
?>




