<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$descricao = $_POST["descricao"];
$veiculo = $_POST["veiculo"];
$tempo = $_POST["tempo"];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$veiculo' ");
$idveiculo= mysqli_fetch_array($sqlveiculo);
$veiculo=$idveiculo['idVec'];




$query = "INSERT into `reparo` (`Veiculo_idVec`, `descricaorep`,`tempo_decorrido` ) values ( '$veiculo' , '$descricao' , '$tempo' )";

mysqli_query($conn, $query) or die(mysqli_error($conn));


?>


