<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$matricula = $_POST["matricula"];
$habilitacao = $_POST["habilitacao"];


$sql = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula'");
$idFuncionario= mysqli_fetch_array($sql);
$resultado=$idFuncionario['idFuncionario'];



$query = "INSERT into motorista (`Funcionario_idFuncionario`, `categoria_habilitacao`) values ('$resultado', '$habilitacao')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

header("Location: index.php?page=funcionarios");
?>



