<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$matricula = $_POST["matricula"];
$dat = $_POST["datasoli"];
$desc = $_POST["descricao"];

$sqlfun = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sqlfun);
$funcionari=$idFuncionario['idFuncionario'];

$sqlmot = $conn ->query("SELECT Funcionario_idFuncionario FROM motorista where Funcionario_idFuncionario = '$funcionari' ");
$idmotorista= mysqli_fetch_array($sqlmot);
$motorist=$idmotorista['Funcionario_idFuncionario'];


$query = "INSERT into `solicitacao_reavaliacao` (`Manutencao_Funcionario_idFuncionario`, `dataSolicitacao`,`Descricao_Reavaliacao` ) values ( '$motorist' , '$dat' , '$desc' )";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php?page=manutencao");

?>