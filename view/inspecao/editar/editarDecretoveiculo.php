<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);




$id              = $_POST["id"];
$placa       = $_POST["placa"];
$inc          = $_POST["inciso"];
$dat        = $_POST["data"];
$port      = $_POST["portaria"];
$desc     = $_POST["descricao"];

$sqlrota = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$idrota= mysqli_fetch_array($sqlrota);
$rota=$idrota['idVec'];


$query = "UPDATE decretos SET Veiculo_idVec = '$rota' , inciso = '$inc' , data_Dec = '$dat' , portaria = '$port' , descricao = '$desc'  WHERE idDecreto = '$id' ";

if ($conn->query($query) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=decreto");

?>




