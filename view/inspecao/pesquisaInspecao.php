<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap   relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900  font-bold  uppercase text-xs'>Registro</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900  font-bold  uppercase text-xs'>Veiculo</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900 font-bold  uppercase text-xs'>Observação</th>";
	$msg .="			<th class='bg-gray-500 py-2 text-gray-900 font-bold  uppercase text-xs'>Nota</th>";

	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody ";
				
                //requerimos a classe de conexão
                
					try {
						
						$resultado = $conn->query("SELECT * FROM veiculo,inspecao    WHERE Veiculo_idVec = idVec and placa  LIKE '$parametro%' ");
					    
						
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado)
						{
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
	$msg .="					<td class='bg-gray-200 sticky border-r-2 border-gray-600 px-20 m-20  py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['id_Inspecao']."</td>";
    $msg .="					<td class='bg-gray-200 sticky border-r-2 border-gray-600 px-20 m-20  py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['placa']."</td>";
    $msg .="					<td class='bg-gray-200 sticky border-r-2 border-gray-600 px-20 m-20  py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['observacoes']."</td>";
	$msg .="					<td class='bg-gray-200 text-gray-600 px-20 m-20 font-bold tracking-wider uppercase text-xs'>".$res['nota_Inspecao']."</td>";
	
	                   
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