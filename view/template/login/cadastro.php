<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$matricula = $_POST["matricula"];
$senha = $_POST["senha"];


$sql = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula'");
$idFuncionario= mysqli_fetch_array($sql);
$resultado=$idFuncionario['idFuncionario'];



$query = "INSERT into login (`Funcionario_idFuncionario`, `senha`) values ('$resultado', '$senha')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

header("Location: index.php?page=funcionarios");
?>


