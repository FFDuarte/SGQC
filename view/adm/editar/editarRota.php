<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id        = $_POST["id"];
$nome      = $_POST["nome"];
$distancia = $_POST["distancia"];
$estado     = $_POST["estado"];

$sql = "UPDATE rotas SET nome_rota = '$nome' , distancia ='$distancia' , estado ='$estado'  WHERE id_Rotas='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: http://localhost/TCC-Estacio/view/adm/index.php?page=rotas");
?>




