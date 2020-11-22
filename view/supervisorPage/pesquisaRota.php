<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap   relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900  font-bold  uppercase text-xs'>Distancia:</th>";
	$msg .="			<th class='bg-gray-500  border-r-2 border-gray-600  py-2 text-gray-900 font-bold  uppercase text-xs'>Estado:</th>";
	$msg .="			<th class='bg-gray-500 py-2 text-gray-900 font-bold  uppercase text-xs'>Nome Da Rota:</th>";

	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody ";
				
                //requerimos a classe de conexão
                
					try {
						
						$resultado = $conn->query("SELECT * FROM rotas WHERE nome_Rota  LIKE '$parametro%' ");
					    
						
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado)
						{
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
    $msg .="					<td class='bg-gray-200 sticky border-r-2 border-gray-600 px-20 m-20  py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['distancia']."</td>";
    $msg .="					<td class='bg-gray-200 sticky border-r-2 border-gray-600 px-20 m-20  py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['estado']."</td>";
	$msg .="					<td class='bg-gray-200 text-gray-600 px-20 m-20 font-bold tracking-wider uppercase text-xs'>".$res['nome_Rota']."</td>";
	
	                   
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