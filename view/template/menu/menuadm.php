<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";
?>
<?php
$conta = ['perfil' => 'perfil',
          'sair' => 'sair' ];





             
?>

<nav class="bg-white md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl  flex flex-wrap items-center justify-between relative md:w-48 z-10 py-4 px-4">
        <div class="flex w-full max-w-xs   ">
                <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                        <div class="  divide-gray-400 p-2 ">
                            <div class="rounded-full w-full text-gray-900  inline-block text-2xl uppercase font-bold p-6mr-6 ">
                             AUTOROAD 
                            </div>
                            <a class="rounded-full w-full text-gray-600  inline-block text-xl uppercase py-6 font-bold px-2">
                            <!-- Nome do Usuario -->
                            <?php 
                            $sqlrota = $conn ->query("SELECT nome FROM funcionario where funcao = 'adm' ");
                            $idrota= mysqli_fetch_array($sqlrota);
                            $adm=$idrota['nome'];    
                             echo $adm;
                             
                             ?>
                            </a>
                        </div>
                        <?php
                            foreach ($paginas as $key => $value) {
                                
                                 echo '<a href="?page='.$key.'" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">'.ucfirst($key).' </a>';
                            }
                        ?>
                          <br>  
                      
                          <br><br><br><br>
                        <br>
                        <span class="flex font-medium text-x text-gray-600 px-1 my-4 uppercase">conta</span>

                        <?php
                                foreach ($conta as $key => $value) {
                                
                                echo '<a href="?page='.$key.'" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100 ">'.ucfirst($key).' </a>';
                                }
                        ?>
		       
                </div>            
        </div>  
</nav>