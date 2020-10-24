    <?php
        $paginas = ['dashboard'=>'dashboard',
                    'funcionarios'=>'funcionarios',
                    'rotas'=>'rotas',
                    'manutencao'=>'clientes',
                    'inspecao'=>'inspecao',
                    'veiculos'=>'veiculos'];
    
                
        $documentacao= ['relatorios'=>'relatorios',
                        'laudos'=>'laudos',
                        'requisições'=>'requisições'];
    
    ?>
    <!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <meta name="theme-color" content="#000000"/>
    
        <link  href=<?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio-main/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >

        <title>Pagina Supervisor</title>
    
    </head>
    <body class="text-gray-800 antialiased">
          
        <!-- MENU -->
        <?php
            include "../template/menu.php";
        ?>
      
        <div class="relative md:ml-64 bg-gray-100">
         <!-- Area onde os eventos do MENU acontecem  -->
            <?php
    
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'dashboard';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'rotas';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'manutencao';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'funcionarios';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'inspecao';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'veiculos';
                }
    
                switch($requisicao) {
                    case "funcionarios":
                        include(__DIR__."/funcionario.php");
                        break;
                    case "dashboard":
                        include(__DIR__."/dashboard.php");
                        break;
                    case "rotas":
                        include(__DIR__."/rotas.php");
                        break;   
                    case "manutencao":
                        include(__DIR__."/manutencao.php");
                        break;         
                    case "inspecao":
                        include(__DIR__."/inspecao.php");
                        break;  
                    case "veiculos":
                        include(__DIR__."/veiculos.php");
                        break;              
                    default:
                    include(__DIR__."/404.php");
                }
            ?>
        </div>
    </body>  
</html>