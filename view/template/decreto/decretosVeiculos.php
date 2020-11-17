<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

            <?php
			   include "../template/menu/menuDecretos.php"
			?>
<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

           
<script>
  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }

</script>
	

<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>




<div class="container mx-auto py-6 px-10" >
    
    



		<div class="mb-4 flex justify-between items-center">
			<div class="flex-1 pr-4">
			    <form method="POST">
					<div class="relative text-gray-600 focus-within:text-gray-400">
					<span class="absolute inset-y-0 left-0 flex items-center pl-2">
						<button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
						<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
						</button>
					</span>
					<input type="search" name="q" class="py-2 text-sm  rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
					</div>
			    </form>
			</div>
			
			
		</div>

		<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 700px;">
			<table class="border-collapse table-auto w-full whitespace-no-wrap  table-striped relative bg-gray-200">
				<thead>
					<tr class="text-left">
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Placa
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Inciso
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Data de Criação
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							portaria
							</th>
							
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							descrição
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
						
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
						
							</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = $conn->query("SELECT * FROM decretos , veiculo  WHERE idVec = Veiculo_idVec ");
					foreach ($query as $row) { 
				
					?>   
							<!--align=center funciona somente com o td-->            
							<tr >
							    <td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['placa']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['inciso']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['data_Dec']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['portaria']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['descricao']?></td>



							</tr>
							<?php
						}
						?>	
				</tbody>
			</table>
		</div>
	
</div>

