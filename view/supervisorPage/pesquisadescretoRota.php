

<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap  table-striped relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Registro</th>";

	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Nome da rota</th>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>inciso</th>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Data</th>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>portaria</th>";
	$msg .="			<th class='bg-gray-500  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>descrisao</th>";

	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
                //requerimos a classe de conexão
                
					try {
						
						

					    $resultado = $conn->query("SELECT * FROM decretos,rotas where rotas_id_Rotas = id_Rotas and id_Rotas >=1 and nome_Rota  LIKE '$parametro%' " );
							
					   
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado){
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['idDecreto']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['nome_Rota']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['inciso']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['data_Dec']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['portaria']."</td>";
    $msg .="					<td class='bg-gray-200  px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['descricao']."</td>";
                         
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