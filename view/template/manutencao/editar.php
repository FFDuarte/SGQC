<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>

 <!-- modal div -->
 <div   x-data="{ open: false }">

<!-- Button (blue), duh! -->
	<button class="sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs" @click="open = true"  >Editar</button>

	<!-- Dialog (full screen) -->
	<div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"  x-show="open"  >

		<!-- A basic modal dialog with title, body and one button to close -->
		<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Editar Funcionario</p>
					<div class="modal-close cursor-pointer z-50" @click="open = false">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<?php
				// Aqui você se conecta ao banco
				// Excuta uma consulta 
				$sql = "SELECT * from funcionario where idFuncionario = $id";
				$query = $conn->query($sql);
				while ($dados = $query->fetch_assoc()) {
				$id        = $dados["idFuncionario"];
				$nome      = $dados["nome"];
				$cpf       = $dados["cpf"];
				$setor     = $dados["setor"];
				$matricula = $dados["matricula"];
				$funcao    = $dados["funcao"];
			    }


				?>
				<form id="form1" name="form1" method="post" action="editar/editarFuncionario.php">
					<input type="number" readonly name="id" id="id" value="<?php echo $id;?>" /><br>
					<input type="text" name="nome" id="nome" value="<?php echo $nome;?>" /><br>
					<input type="text" name="setor" id="setor" value="<?php echo $setor;?>" /><br>
					<input type="number" name="cpf" id="cpf" value="<?php echo $cpf;?>" /><br>
					<input type="text"  name="funcao" id="funcao" value="<?php echo $funcao;?>" /><br>
					<input type="number" name="matricula" id="matricula" value="<?php echo $matricula;?>" /><br>

					<input type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />
				</form>
			</div>
		</div>
	</div>
	</div>
</div>



