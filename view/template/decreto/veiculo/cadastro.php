<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);





$placa       =$_POST["placa"];
$inciso        = $_POST["inciso"];
$datadec       = $_POST["data"];
$portaria        = $_POST["portaria"];
$descricao       = $_POST["descricao"];

$sqlrota = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$idrota= mysqli_fetch_array($sqlrota);
$rota=$idrota['idVec'];



$query = "INSERT INTO `decretos` (`Veiculo_idVec`, `inciso`,`data_Dec`,`portaria`,`descricao` ) values ('$rota', '$inciso','$datadec','$portaria','$descricao')";

if ($conn->query($query) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=decreto");
?>




