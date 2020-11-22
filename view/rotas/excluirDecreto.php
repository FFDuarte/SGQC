<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$id = $_POST["id"];
echo $matricula;

$delete = "DELETE FROM decretos WHERE idDecreto ='$id' ";

if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=login");
?>