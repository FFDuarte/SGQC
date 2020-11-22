<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap   relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Placa:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold  uppercase text-xs'>moto:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold  uppercase text-xs'>ano:</th>";
    $msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>chassi:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold  uppercase text-xs'>cor:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold  uppercase text-xs'>suspenssão:</th>";
    $msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>status:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600 px-2 py-2 text-gray-900 font-bold  uppercase text-xs'>restrição:</th>";
	$msg .="			<th class='bg-gray-500  px-2  py-2 text-gray-900 font-bold  uppercase text-xs'>Registro</th>";

	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
                //requerimos a classe de conexão
                
					try {
						
						$resultado = $conn->query("SELECT * FROM veiculo WHERE placa LIKE '$parametro%' ");
					    
						
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado)
						{
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['placa']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['motor']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['ano']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['chassi']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['cor']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['suspensao']."</td>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['status_Vec']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['restricao_deuso']."</td>";
	$msg .="					<td class='bg-gray-200  px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['registro_Veicular']."</td>";
	
	                   
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