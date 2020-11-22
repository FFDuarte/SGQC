<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$nome      = $_POST["nome"];
$distancia = $_POST["distancia"];
$estado     = $_POST["estado"];

$sql = "UPDATE rotas SET distancia ='$distancia'  WHERE nome_Rota = '$nome' and estado = '$estado' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=rotas");
?>




