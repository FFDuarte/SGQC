<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$placa = $_POST["veiculo"];
$observacoes = $_POST["observacoes"];
$nota = $_POST["nota"];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa' ");
$veiculo= mysqli_fetch_array($sqlveiculo);
$idveiculo=$veiculo['idVec'];



$query = "INSERT INTO `inspecao` (`Veiculo_idVec` , `observacoes` , `nota_Inspecao`) values ('$idveiculo' , '$observacoes' , '$nota')";
 
if ($conn->query($query) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header("Location: index.php?page=inspecao");

?>



