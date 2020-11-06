

<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl  flex flex-wrap items-center justify-between relative md:w-48 z-10 py-4 px-4">
        <div class="flex w-full max-w-xs   ">
                <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                        <div class="grid grid-cols-3  divide-gray-400 p-2 ">
                            <div class="rounded-full h-16 w-16 flex items-left  justify-left border ">
                            <!-- Foto do Usuario -->
                            </div>
                            <a class="md:block text-right md:pb-2 text-gray-700  inline-block text-sm uppercase font-bold p-6 px-8 ">
                            <!-- Nome do Usuario -->
                            Fabricio
                            </a>
                        </div>
                        <?php
                            foreach ($paginas as $key => $value) {
                                
                                 echo '<a href="?page='.$key.'" class="flex flex-row items-center h-12 px-4 rounded-lg text-black ">'.ucfirst($key).' </a>';
                            }
                        ?>
                        <span class="flex font-medium text-x text-gray-600 px-1 my-4 uppercase">Documentação</span>
                        <?php
                                foreach ($documentacao as $key => $value) {
                                
                                echo '<a href="?page='.$key.'" class="flex flex-row items-center h-12 px-4 rounded-lg text-black ">'.ucfirst($key).' </a>';
                                }
                        ?>
                </div>            
        </div>  
</nav>