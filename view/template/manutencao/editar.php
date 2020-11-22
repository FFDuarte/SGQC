<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>

<style>
		.animated {
			-webkit-animation-duration: 0;
			animation-duration: 0;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 0ms;
			animation-duration: 0ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 0;
			}
		}

		@keyframes fadeOut {
			from {
				opacity:0;
			}

			to {
				opacity: 0;
			}
		}
	</style>
 <!-- modal div -->
 <div   x-data="{ open: false } ">

<!-- Button (blue), duh! -->
	<button class="rounded-lg absolute top-0 right-0  bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-4 mr-24  " @click="open = true"  >Editar</button>

	<!-- Dialog (full screen) -->
	<div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"  x-show="open"  >

		<!-- A basic modal dialog with title, body and one button to close -->
		<div class="main-modal2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content2 py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Finforme o registro e os dados que deseja alterar</p>
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
				

			
				<form id="form1" name="form1" method="post" action="editar/editarManutencao.php">
					
					
                        <div class="flex flex-wrap -mx-3 mb-6">
						    <div class="w-full md:w-1/2 px-3">
							    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="registro" id="registro"  placeholder ="Registro" /><br>
							</div>
							<div class="w-full md:w-1/2 px-3">
							    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="placa" id="placa"  placeholder ="Placa" /><br>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="descricao" id="descricao" placeholder ="Descrição"  /><br>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="tempo" id="tempo" placeholder ="Tempo Decorrido"   /><br>
							</div>
							
					    </div>
						
                      
					<input type="submit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />
					<span id="status"></span>

				</form>
			</div>
		</div>
	</div>
	</div>
</div>




