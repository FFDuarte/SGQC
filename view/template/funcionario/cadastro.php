<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$funcao = $_POST["funcao"];
$cpf = $_POST["cpf"];
$setor = $_POST["setor"];

$query = "INSERT into `funcionario` (`nome`, `matricula`,`setor`,`funcao`,`cpf`) values ('$nome', '$matricula','$setor','$cpf','$funcao')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

header("Location: index.php?page=funcionarios");
?>


