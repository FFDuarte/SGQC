
<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>


<div class="m-40">
  <div class="md:grid md:grid-cols-3 md:gap-6 px-48">
    <div class="mt-5 md:mt-0 md:col-span-2">
          

      <form  method="POST" action="editar/editarPerfil.php">
            <div class="shadow overflow-hidden sm:rounded-md">
               <div class="px-4 py-5 bg-white sm:p-6">

                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">Nome</label>
                          <input value="<?php echo $nome; ?>" name="nome" class="uppercase" type="text" id="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Cpf</label>
                          <input value="<?php echo $cpf; ?>" name="cpf"  class="uppercase" type="text" id="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Data nascimento</label>
                          <input value="<?php echo  date('Y-m-d', $idade) ?>" name="idade"  class="uppercase" type="text"  id="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">Matricula</label>
                          <input readonly value="<?php echo $matricula; ?>" name="matricula"  class="uppercase" type="text" id="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Função</label>
                          <input readonly value="<?php echo $funcao; ?>" name="funcao" class="uppercase" type="text" id="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">Setor</label>
                          <input readonly value="<?php echo $setor; ?>" name="setor"  class="uppercase" type="text" id="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        
                      </div>
                  </div>

                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" onClick="return confirm('Deseja atualizar o registro?');" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Salvar
                    </button>
                  </div>
            </div>
      </form>
    </div>
  </div>
</div>
