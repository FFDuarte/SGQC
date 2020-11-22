<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$id = $_POST["id"];


$sql = "DELETE FROM inspecao WHERE id_Inspecao=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=inspecao");
?>