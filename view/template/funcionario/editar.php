 <!-- modal div -->
 <div   x-data="{ open: false }">

<!-- Button (blue), duh! -->
	<button class="sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs" @click="open = true">Editar</button>

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
				<form class="w-full max-w-lg pt-6">
					<div class="flex flex-wrap -mx-3 mb-4">

						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
								Nome
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="nome">
						</div>

						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
								cpf
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="cpf">
						</div>				
					</div>
					<div class="flex flex-wrap -mx-3 mb-6">

						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
								Matricula
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="Matricula">
						</div>

						<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
							Função
						</label>
						<div class="relative">
							<select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
							<option>Aux Rotas</option>
							<option>Aux Manutenção</option>
							<option>Inspetor </option>
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							</div>
						</div>
						</div>

					</div>
					
					<div class="flex flex-wrap -mx-3 mb-6">
						<div class="w-full px-3">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
							Password
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
						<p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
						</div>
					</div>
				</form>
				<!--Footer-->
				<div class="flex justify-end pt-6">
					<button
						class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300" @click="open = false">Cancelar</button>
					<button
						class="focus:outline-none modal-close px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" @click="open = false">Confimar</button>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>




