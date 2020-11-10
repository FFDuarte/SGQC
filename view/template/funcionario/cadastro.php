<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$funcao = $_POST["funcao"];
$cpf = $_POST["cpf"];
$setor = $_POST["setor"];

$sql = "INSERT INTO funcionario (nome, matricula,cpf,funcao,setor)  VALUES ('$nome', '$matricula','$cpf','$funcao','$setor') ";

if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>



