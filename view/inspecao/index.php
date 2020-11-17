<?php
          
    
    ?>
    <!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <meta name="theme-color" content="#000000"/>
    
        <link  href=<?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >

        <title>Manutencão</title>
    
    </head>
    <body class="text-gray-800 antialiased">
          
        <!-- MENU -->
        <?php

$conta = ['perfil' => 'perfil',
         'configuracoes' => 'configuracoes',
          'sair' => 'sair' ];

?>


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
                       <br>
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
        <div class="relative md:ml-48 bg-gradient-to-r from-gray-200 via-gray-400 to-gray-700 px-2">
         <!-- Area onde os eventos do MENU acontecem  -->
           <?php
          
                        include   "../template/inspecao/inspecao.php" ;
                      
                
                ?>
        </div>
        
    </body>  
</html>

