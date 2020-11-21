<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$funcao = $_POST["funcao"];
$cpf = $_POST["cpf"];
$setor = $_POST["setor"];
$idade = $_POST["idade"];


$query = "INSERT into `funcionario` (`nome`, `matricula`,`setor`,`funcao`,`cpf`,`idade`) values ('$nome', '$matricula','$setor','$funcao','$cpf','$idade')";

mysqli_query($conn, $query) or die(mysqli_error($conn));


?>


