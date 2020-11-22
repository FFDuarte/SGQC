<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);





$nomerota       =$_POST["nomerota"];
$inciso        = $_POST["inciso"];
$datadec       = $_POST["data"];
$portaria        = $_POST["portaria"];
$descricao       = $_POST["descricao"];

$sqlrota = $conn ->query("SELECT id_Rotas FROM rotas where nome_Rota = '$nomerota' ");
$idrota= mysqli_fetch_array($sqlrota);
$rota=$idrota['id_Rotas'];



$query = "INSERT INTO `decretos` (`rotas_id_Rotas`, `inciso`,`data_Dec`,`portaria`,`descricao` ) values ('$rota', '$inciso','$datadec','$portaria','$descricao')";

if ($conn->query($query) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=decreto%20rotas");
?>




