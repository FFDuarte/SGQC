       <?php
			   include "../template/menu/menuManutencao.php"
			?>
      
	<div class="container mx-auto py-6 px-10" x-data="datatables()" x-cloak>
    
    
		<div class="mt-8 flex justify-between items-center">
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
				<?php include "realizarManutencao.php"?>
		</div>


		<div class="overflow-x-auto  rounded-lg shadow overflow-y-auto relative  bg-gray-300 mt-4" style="height: 500px;">
							   <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
								   <thead>
									   <tr class="text-left">
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
												   Tarefa
												   </th>
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
												   Detalhes
												   </th>
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
												   Data da pedido
												   </th>
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
												   Responsavel
												   </th>
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
											       Status
												   </th>
												  
												   <th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
											       Atender Requisicao
												   </th>
								   </tr>
								   </thead>
								   <tbody>
								   <tr >
													<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
													<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
													<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
													<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
													<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
													
													
													<td class="bg-gray-200 ">
														
												
												</tr>
								   </tbody>	
							   </table>
						   </div> 
   
		   
	   </div>
	   
   </div>      
</div>
</div>




