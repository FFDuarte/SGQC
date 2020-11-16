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
			<div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
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
					$sql = "SELECT * from veiculo where idVec = $id";
					$query = $conn->query($sql);
					while ($dados = $query->fetch_assoc()) {
					$id        = $dados["idVec"];
					$placa     = $dados["placa"];
					$registro  = $dados["registro_Veicular"];
					$chassi    = $dados["chassi"];
					$ano       = $dados["ano"];
					$cor       = $dados["cor"];
					$motor     = $dados["motor"];
					$suspensao = $dados["suspensao"];
					$status    = $dados["status_Vec"];
					}


					?>
					<form id="form1" name="form1" method="post" action="editar/editarVeiculo.php">

						<div class="flex flex-wrap -mx-3 mb-2">
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
									ID
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="number"  name="id"         id="id"          value="<?php echo $id;?>" readonly /><br>
							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
									placa
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="placa"      id="placa"       value="<?php echo $placa;?>" /><br>

							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
								Registro
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="number"  name="registro"   id="registro"    value="<?php echo $registro;?>" /><br>
							</div>
						</div>
						<div class="flex flex-wrap -mx-3 mb-2">
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
									chassi
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="chassi"     id="chassi"      value="<?php echo $chassi;?>" /><br>
							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
									ano
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="number"  name="ano"        id="ano"         value="<?php echo $ano;?>" /><br>

							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
								ano
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="cor"        id="cor"         value="<?php echo $cor;?>" /><br>
							</div>
						</div>

						<div class="flex flex-wrap -mx-3 mb-2">
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
									motor
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="motor"      id="motor"       value="<?php echo $motor;?>" /><br>
							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
									Suspensao
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="suspensao"  id="suspensao"   value="<?php echo $suspensao;?>" /><br>

							</div>
							<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
								status
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text"    name="status"     id="status"      value="<?php echo $status;?>" /><br>
							</div>
						</div>

							<input  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />
					</form>
				</div>
		   </div>
	    </div>
	</div>
</div>





  


