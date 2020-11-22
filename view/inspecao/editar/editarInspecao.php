<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);




$id    = $_POST["id"];
$placa       =$_POST["veiculo"];
$observacao        = $_POST["observacao"];
$nota       = $_POST["nota"];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$idveiculo= mysqli_fetch_array($sqlveiculo);
$veiculo=$idveiculo['idVec'];



$sql = "UPDATE inspecao SET Veiculo_idVec = '$veiculo' , observacoes = '$observacao' , nota_Inspecao = '$nota'   WHERE id_Inspecao = '$id' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=inspecao");
?>




