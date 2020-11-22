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




