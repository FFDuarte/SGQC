<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='border-collapse table-auto w-full whitespace-no-wrap   relative bg-gray-200 ' >";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th class='bg-gray-500  top-0 border-b border-gray-200  py-2 text-gray-900 font-bold tracking-wider uppercase text-xs'>Matricula:</th>";
	$msg .="			<th class='bg-gray-500  top-0 border-b border-gray-200  py-2 text-gray-900 font-bold  uppercase text-xs'>Nome:</th>";
	$msg .="			<th class='bg-gray-500  top-0 border-b border-gray-200 py-2 text-gray-900 font-bold  uppercase text-xs'>Função:</th>";
	$msg .="			<th class='bg-gray-500  top-0 border-b border-gray-200  py-2 text-gray-900 font-bold  uppercase text-xs'>Cpf:</th>";
	$msg .="			<th class='bg-gray-500  top- border-b border-gray-200  py-2 text-gray-900 font-bold  uppercase text-xs'>idade:</th>";
	$msg .="			<th class='bg-gray-500  top-0 border-b border-gray-200 py-2 text-gray-900 font-bold  uppercase text-xs'>Setor:</th>";
	
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
                //requerimos a classe de conexão
                
					try {
						
						$resultado = $conn->query("SELECT * FROM funcionario WHERE matricula  LIKE '$parametro%' ");
					    
						
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if($resultado)
						{
							foreach ($resultado as $res) {
								
	$msg .="				<tr>";
    $msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['matricula']."</td>";
    $msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['nome']."</td>";
	$msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['funcao']."</td>";
	$msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['cpf']."</td>";
    $msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['idade']."</td>";
    $msg .="					<td class='bg-gray-200 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs'>".$res['setor']."</td>";
	
	                   
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