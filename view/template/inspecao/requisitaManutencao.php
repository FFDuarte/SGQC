<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

@ini_set('display_errors', '1');
error_reporting(E_ALL);




$matricula              = $_POST["matricula"];
$tarefa       = $_POST["tarefa"];
$data          = $_POST["data"];
$detalhe        = $_POST["detalhe"];


$sqlfun = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sqlfun);
$funcionari=$idFuncionario['idFuncionario'];

$sqlmot = $conn ->query("SELECT Funcionario_idFuncionario FROM aux_qualidade where Funcionario_idFuncionario = '$funcionari' ");
$idmotorista= mysqli_fetch_array($sqlmot);
$motorist=$idmotorista['Funcionario_idFuncionario'];



$query = "INSERT into `requisicao_manutencao` (`Ass_Qualidade_Funcionario_idFuncionario`, `tarefa`,`detalhes` ,`data_req`) values ( '$motorist' , '$tarefa' , '$detalhe' , '$data' )";

if (mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



?>




