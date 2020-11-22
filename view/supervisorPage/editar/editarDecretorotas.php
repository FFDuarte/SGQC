<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);




$id              = $_POST["id"];
$nome       = $_POST["nomerota"];
$inc          = $_POST["inciso"];
$dat        = $_POST["data"];
$port      = $_POST["portaria"];
$desc     = $_POST["descricao"];

$sqlrota = $conn ->query("SELECT id_Rotas FROM rotas where nome_Rota = '$nome' ");
$idrota= mysqli_fetch_array($sqlrota);
$rota=$idrota['id_Rotas'];


$query = "UPDATE decretos SET rotas_id_Rotas = '$rota' , inciso = '$inc' , data_Dec = '$dat' , portaria = '$port' , descricao = '$desc'  WHERE idDecreto = '$id' ";

if ($conn->query($query) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=decreto%20rotas");

?>




