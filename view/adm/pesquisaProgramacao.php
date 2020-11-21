<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap   relative bg-gray-200  ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Registro</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>matricula:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900 font-bold  uppercase text-xs'>Veiculo:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 py-2 text-gray-900 font-bold  uppercase text-xs'>Rota</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 py-2 text-gray-900 font-bold  uppercase text-xs'>Data da programação</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 py-2 text-gray-900 font-bold  uppercase text-xs'>Prev Saida</th>";
	$msg .="			<th class='bg-gray-500   py-2 text-gray-900 font-bold  uppercase text-xs'>Prev Retorno</th>";

	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
                //requerimos a classe de conexão
                
					try {
						
						$resultado = $conn->query("SELECT * FROM rotas,funcionario,motorista,veiculo,incremento WHERE Motorista_Funcionario_idFuncionario = Funcionario_idFuncionario  and Funcionario_idFuncionario = idFuncionario and Veiculo_idVec = idVec and rotas_id_Rotas = id_Rotas  and matricula   LIKE '$parametro%' ");
					    
						
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado)
						{
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['id_Incremento']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['matricula']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['placa']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['nome_Rota']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['data_Incremento']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['previsao_Saida']."</td>";
	$msg .="					<td class='bg-gray-200  border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['previsao_Retorno']."</td>";

	
	                   
	$msg .="				</tr>";
							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";
	//retorna a msg concatenada
	echo $msg;
?>