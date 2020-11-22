<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$matricula = $_POST["matricula"];
echo $matricula;

$sql = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sql);
$resultado=$idFuncionario['idFuncionario'];


$delete = "DELETE FROM login WHERE Funcionario_idFuncionario='$resultado' ";

if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=login");
?>