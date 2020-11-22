<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$registro = $_POST["registro"];
echo $matricula;



$delete = "DELETE FROM reparo WHERE codReparo='$registro' ";

if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=manutencoes");
?>