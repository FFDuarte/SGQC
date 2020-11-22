<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$matricula = $_POST["matricula"];

$sqlfuncionario = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sqlfuncionario);
$funcionario=$idFuncionario['idFuncionario'];

$sql = "DELETE FROM motorista WHERE Funcionario_idFuncionario = '$funcionario' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=motorista");
?>