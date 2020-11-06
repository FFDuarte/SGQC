<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

            <?php
			   include "../template/menu/menuTransporte.php"
			?>
      
	  <div class="container mx-auto py-6 px-10" x-data="datatables()" x-cloak>
    
    

	<div class="mb-4 flex justify-between items-center">
		<div class="flex-1 pr-4">
			<div class="relative md:w-1/3">
				<input type="search"class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
				<div class="absolute top-0 left-0 inline-flex items-center p-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
						stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
						stroke-linejoin="round">
						<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
						<circle cx="10" cy="10" r="7" />
						<line x1="21" y1="21" x2="15" y2="15" />
					</svg>
				</div>
			</div>
		</div>
		
		
			<div class="shadow rounded-lg flex">
					<button class="rounded-lg inline-flex items-center bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4">			
					Cadastrar
					</button>
			</div>

	</div>

	<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 500px;">
		<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
			<thead>
				<tr class="text-left">
			
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Matricula
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Nome
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Função
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						CPF
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Setor
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Status
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						Veiculos Operados
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						ED
						</th>
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
						EX
						</th>

				</tr>
			</thead>
			<tbody>
				<template >
					<tr>
						
						<td class="border-dashed border-t border-gray-200 userId">
						</td>
						<td class="border-dashed border-t border-gray-200 firstName">
						</td>
						<td class="border-dashed border-t border-gray-200 lastName">
						</td>
						<td class="border-dashed border-t border-gray-200 emailAddress">
							
						</td>
						<td class="border-dashed border-t border-gray-200 gender">
							
						</td>
						<td class="border-dashed border-t border-gray-200 phoneNumber">
							
						</td>
					</tr>
				</template>
			</tbody>
		</table>
	</div>
</div>

</div>