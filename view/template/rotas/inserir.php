<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$distancia = $_POST["distancia"];
$estado = $_POST["estado"];
$nome_rota = $_POST["nome_Rota"];


$query = "INSERT into `rotas` (`nome_Rota`, `estado`,`distancia`) values ('$nome_rota', '$estado','$distancia')";



mysqli_query($conn, $query) or die(mysqli_error($conn));

?>


