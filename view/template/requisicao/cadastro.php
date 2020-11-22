<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$registro = $_POST["registro"];
$placa = $_POST["placa"];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$dadosveiculo= mysqli_fetch_array($sqlveiculo);
$veiculo=$dadosveiculo['idVec'];

$sqlrequisicao = $conn ->query("SELECT * FROM requisicao_manutencao where codrec = '$registro' ");
$dadosrequisicao= mysqli_fetch_array($sqlrequisicao);
$idrequisicao = $dadosrequisicao['codrec'];
$tarefa       = $dadosrequisicao['tarefa'];


$query = "INSERT into `reparo` (`Veiculo_idVec`, `Requisicao_Manutencao_codrec`,`descricaorep`  ) values ('$veiculo', '$idrequisicao','$tarefa')";

mysqli_query($conn, $query) or die(mysqli_error($conn));
header("Location: index.php?page=manutencao");


?>


