<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

           

	

<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

?>




<div class="container mx-auto py-6 px-10" >
    
    



        <div class="relative  md:pt-4 pb-4 ml-20">
          <div class=" md:px-10 mx-auto w-full">
            <div>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-gray-500 uppercase font-bold text-xs">
                            Ativos
                          </h5>
                          <span class="font-semibold text-xl text-gray-800">
                            250
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-gray-500 uppercase font-bold text-xs">
                            Ferias
                          </h5>
                          <span class="font-semibold text-xl text-gray-800">
                            22
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                          <h5 class="text-gray-500 uppercase font-bold text-xs">
                            Folga
                          </h5>
                          <span class="font-semibold text-xl text-gray-800">
                            14
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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
			
			<?php
			    include "cadastrarFuncionario.php"
			?>

			
		</div>

		<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 500px;">
			<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative bg-gray-200">
				<thead>
					<tr class="text-left">
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Matricula
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Nome
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Função
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							CPF
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Setor
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							Status
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
							
							</th>
							<th class="bg-gray-500 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-900 font-bold tracking-wider uppercase text-xs">
						
							</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = $conn->query("SELECT * FROM funcionario");
					foreach ($query as $row) { 
					?>   
							<!--align=center funciona somente com o td-->            
							<tr >
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['matricula']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['nome']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['funcao']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['cpf']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"><?=$row['setor']?></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"></td>
								<td class="bg-gray-200 sticky top-0 border-b border-gray-200 px-4 py-2 text-gray-600  tracking-wider ">
								        <form action="" method="POST">
											<input type="hidden" name="id" value="
												<?=$row['id']?>">
											<button type="submit" class ="font-bold  uppercase text-xs" >Excluir</button>                      
										</form>
								</td> 
								<td class="bg-gray-200 ">
								 <?php include "editar.php"; ?>
             					</td>
							</tr>
							<?php
						}
						?>
				</tbody>
			</table>
		</div>
	
</div>

