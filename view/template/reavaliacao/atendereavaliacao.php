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

<div   x-data="{ open: false }" >

<!-- Button (blue), duh! -->
   
	<button class="rounded-lg absolute top-0 right-0  bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-4  md:px-4  " @click="open = true"  >Atender reavaliação</button>
	

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
						<p class="text-xl font-bold text-gray-600">Informate a matricula.<br>  Informe os dados da requisição.</p>
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
					
				    <form id="form1" name="form1" method="post" action="excluirFuncionario.php">
					    
                        <div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Matricula </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="Matricula" name="matricula" required>
							</div>
							<div class="w-full md:w-1/2 px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Tarefa </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Tarefa" name="tarefa" required>
							</div>
							<div class="w-full md:w-1/2 px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Data </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Data" name="data" required>
							</div>
							<div class="w-full md:w-1/2 px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Detalhe </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Detalhe" name="detalhe" required>
							</div>
					    </div>
						<input type="submit" class="py-4 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onClick="return confirm('Os dados estão corretos ?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />

				    </form>
				</div>
			</div>
		</div>
</div>
</div>


