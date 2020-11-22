<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$categoria        = $_POST["categoria"];
$matricula       = $_POST["matricula"];

$sqlfuncionario = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sqlfuncionario);
$funcionario=$idFuncionario['idFuncionario'];










$sql = "UPDATE motorista SET categoria_habilitacao='$categoria'   WHERE Funcionario_idFuncionario='$funcionario' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=motorista");
?>




