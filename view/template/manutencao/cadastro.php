<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$funcao = $_POST["funcao"];
$cpf = $_POST["cpf"];
$setor = $_POST["setor"];

$sql = "INSERT  funcionario  nome='$nome' , cpf='$cpf' WHERE matricula='$matricula'";

if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>



