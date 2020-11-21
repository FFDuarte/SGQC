<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$nomerota = $_POST["nomerota"];
$estado = $_POST["estado"];



$sql = "DELETE FROM rotas WHERE estado ='$estado' and nome_Rota = '$nomerota' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=rotas");
?>