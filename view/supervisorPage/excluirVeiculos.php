<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$placa = $_POST["placa"];


$sql = "DELETE FROM veiculo WHERE placa = '$placa' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=veiculos");
?>