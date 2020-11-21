<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$matricula = $_POST["matricula"];


$sql = "DELETE FROM funcionario WHERE matricula=$matricula";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=funcionarios");
?>