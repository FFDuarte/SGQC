

<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap  table-striped relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600  px-4  py-2 text-gray-900 font-bold  uppercase text-xs'>Registro:</th>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600 px-4  py-2 text-gray-900 font-bold  uppercase text-xs'>Veiculo:</th>";
	$msg .="			<th class='bg-gray-500 border-r-2 border-gray-600   px-4  py-2text-gray-900 font-bold  uppercase text-xs'>Descrição</th>";
	$msg .="			<th class='bg-gray-500  px-4  py-2 text-gray-900 font-bold uppercase text-xs'>Tempo Decorrido</th>";
	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
                //requerimos a classe de conexão
                
					try {
						
						

					    $resultado = $conn->query("SELECT * FROM reparo,veiculo  where Veiculo_idVec = idVec and placa  LIKE '$parametro%' " );
							
					   
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado){
							foreach ($resultado as $res) {

	$msg .="				<tr class=''>";
	$msg .="					<td class='bg-gray-200 border-r-2 border-gray-600  px-2  text-gray-600 font-bold   uppercase text-xs'>".$res['codReparo']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600  px-2  text-gray-600 font-bold   uppercase text-xs'>".$res['placa']."</td>";
    $msg .="					<td class='bg-gray-200 border-r-2 border-gray-600  px-2  text-gray-600 font-bold   uppercase text-xs'>".$res['descricaorep']."</td>";
    $msg .="					<td class='bg-gray-200               px-2               text-gray-600 font-bold   uppercase text-xs'>".$res['tempo_decorrido']."</td>";

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