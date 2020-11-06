<?php
        $paginas = ['manutencoes' => 'manutencoes',
                    'requicoes'=>'requicoes'];
   
                    
    
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
            include "../template/menu/menu.php";
        ?>
      
        <div class="relative md:ml-48 bg-gradient-to-r from-gray-200 via-gray-400 to-gray-700 px-2">
         <!-- Area onde os eventos do MENU acontecem  -->
           <?php
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'manutencoes';
                }

                switch($requisicao) {
                    case "manutencoes":
                        include   "../template/manutencao/manutencao.php" ;
                        break;
                    default:
                    include(__DIR__."/404.php");
                }
                ?>
        </div>
        
    </body>  
</html>

