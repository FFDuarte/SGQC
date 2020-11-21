<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>

 <!-- modal div -->

<div   x-data="{ open: false }" >

<!-- Button (blue), duh! -->
   
	<button class="rounded-lg absolute top-0 right-0  bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-4 mr-56 md:px-4  " @click="open = true"  >Excluir</button>
	

	<!-- Dialog (full screen) -->
		<div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"  x-show="open"  >

			<!-- A basic modal dialog with title, body and one button to close -->
			<div class="main-modal2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
			style="background: rgba(0,0,0,.7);">
			<div
				class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
				<div class="modal2-content py-4 text-left px-8">
					<!--Title-->
					<div class="flex justify-between items-center pb-3">
						<p class="text-xl font-bold text-gray-600">Excluir Veiculo</p>
						<div class="modal-close2 cursor-pointer z-50" @click="open = false">
							<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
								viewBox="0 0 18 18">
								<path
									d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
								</path>
							</svg>
						</div>
					</div>
					<!--Body-->
					
				    <form id="form1" name="form1" method="post" action="excluirVeiculos.php">
						<Label class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"> Insira a placa do veiculo que deseja  excluir. </label>
						<input type="text"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="placa" id="placa" placeholde="placa"><br>
								
						<input type="submit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onClick="return confirm('Deseja realmente excluir  ?');" name="Submit" value="excluir" id="button-form" />
						<span id="status"></span>

				    </form>
				</div>
			</div>
		</div>
</div>
</div>



