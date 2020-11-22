<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";



$matricula = $_POST["matricula"];
$placa = $_POST["placa"];
$nomerota = $_POST["rota"];
$dataprog = $_POST["dataprog"];
$estado = $_POST["estado"];
$prevsaida = $_POST["prevsaida"];
$prevretorno = $_POST["prevretorno"];

$sqlfuncionario = $conn ->query("SELECT idFuncionario FROM funcionario where matricula = '$matricula' ");
$idFuncionario= mysqli_fetch_array($sqlfuncionario);
$funcionario=$idFuncionario['idFuncionario'];

$sqlmotorista = $conn ->query("SELECT Funcionario_idFuncionario FROM motorista where Funcionario_idFuncionario = '$funcionario' ");
$idmotorista= mysqli_fetch_array($sqlmotorista);
$motorista=$idmotorista['Funcionario_idFuncionario'];

$sqlveiculo = $conn ->query("SELECT idVec FROM veiculo where placa = '$placa'  " );
$idveiculo= mysqli_fetch_array($sqlveiculo);
$veiculo=$idveiculo['idVec'];

$sqlrotas = $conn ->query("SELECT id_Rotas FROM rotas where nome_Rota = '$nomerota' and estado= '$estado' ");
$idrotas= mysqli_fetch_array($sqlrotas);
$rotas=$idrotas['id_Rotas'];




$query = "INSERT INTO `incremento` ( `Motorista_Funcionario_idFuncionario`, `Veiculo_idVec` , `rotas_id_Rotas` , `data_Incremento` , `previsao_Saida` , `previsao_Retorno` ) values ('$motorista', '$veiculo' , '$rotas' , '$dataprog' , '$prevsaida' , '$prevretorno'  )";

if ($conn->query($query) === TRUE) {
  header("Location: index.php?page=programacao");

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

 

?>



