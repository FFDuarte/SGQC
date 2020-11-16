<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$registro = $_POST["registro"];
$placa = $_POST["placa"];
$ano = $_POST["ano"];
$status = $_POST["status"];
$suspensao = $_POST["suspensao"];
$chassi = $_POST["chassi"];
$motor = $_POST["motor"];
$cor = $_POST["cor"];




$query = "INSERT into `veiculo` (`registro_Veicular`, `placa`, `ano`, `suspensao`, `chassi`, `motor` , `cor` , `status_Vec` ) values ('$registro', '$placa', '$ano', '$motor','$chassi', '$suspensao' , '$cor' , '$status')";
mysqli_query($conn, $query) or die(mysqli_error($conn));

header("Location: index.php?page=funcionarios");
?>


