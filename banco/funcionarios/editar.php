<?php

include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM funcionario where idFuncionario='$id' ";
foreach ($conn->query($sql) as $row) {
	echo "
		<form action=atualizar.php >  

		<input type=hidden name=id value=$id> 

		<p>Nome</p>
		<input type=text name=nome value=".$row['nome'].">
						
		<p>Data De Nascimento</p>
		<input type=number name=idade value=".$row['cpf'].">
											
		<p>Salario</p>
		<input type=number name=salario value=".$row['matricula'].">
		<br><br>
											
		<input type=submit value=Salvar>
		</form>";
		echo "<a href=index.php>Voltar</a></p>";
}
?>