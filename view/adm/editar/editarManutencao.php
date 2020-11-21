<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$registro    = $_POST["registro"];
$placa       =$_POST["placa"];
$tempo        = $_POST["tempo"];
$descricao       = $_POST["descricao"];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$idveiculo= mysqli_fetch_array($sqlveiculo);
$veiculo=$idveiculo['idVec'];










$sql = "UPDATE reparo SET Veiculo_idVec = '$veiculo' , descricaorep = '$descricao' , tempo_decorrido = '$tempo'   WHERE codReparo = '$registro' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=manutencao");
?>




