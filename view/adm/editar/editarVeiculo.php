<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id        = $_POST["idVec"];
$placa     = $_POST["placa"];
$registro  = $_POST["registro"];
$chassi    = $_POST["chassi"];
$ano       = $_POST["ano"];
$cor       = $_POST["cor"];
$motor     = $_POST["motor"];
$suspensao = $_POST["suspensao"];
$status    = $_POST["status"];

$sql = "UPDATE veiculo SET placa='$placa' , registro_Veicular ='$registro' , chassi='$chassi' , ano='$ano' , cor='$cor' , motor='$motor' , suspensao = '$suspensao' , status_Vec ='$status' WHERE' idVec='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=veiculos");
?>




