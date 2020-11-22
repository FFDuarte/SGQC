<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$registro = $_POST["registro"];


$sql = "DELETE FROM incremento WHERE id_Incremento = '$registro' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=programacao");
?>