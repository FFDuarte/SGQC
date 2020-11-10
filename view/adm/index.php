<?php
        $paginas = ['dashboard'=>'dashboard',
                    'funcionarios'=>'funcionarios',
                    'transporte'=>'transporte',
                    'manutencao'=>'clientes',
                    'inspecao'=>'inspecao'];

        $transporte = ['rotas'=>'rotas',
                   'veiculos' => 'veiculos',
                   'decretos' => 'decretos',
                   'motorista' => 'motorista',
                   'incremento' => 'incremento'];
                
        $documentacao= ['relatorios'=>'relatorios'];

        
    
    ?>
    <!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <meta name="theme-color" content="#000000"/>
    
        <link  href=<?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >

        <title>ADM</title>
    
    </head>
    <body class="text-gray-800 antialiased">
          
        <!-- MENU -->
        <?php
            include "../template/menu/menuadm.php";
            
        ?>
        

      
        <div class="relative md:ml-48  px-2" style = " background: linear-gradient(90deg, rgba(143,176,186,1) 0%, rgba(158,214,242,1) 45%, rgba(137,235,255,1) 100%);">
   
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
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'decretos';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'transporte';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'motorista';
                }
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'motorista';
                }
               
                switch($requisicao) {
                    case "funcionarios":
                        include   "../template/funcionario/funcionarioadm.php" ;
                        break;
                    case "dashboard":
                        include   "../template/dashboard/dashboard.php" ;
                        break;
                    case "rotas":
                        include "../template/rotas/rotas.php";
                        break;   
                    case "manutencao":
                        include "../template/manutencao/manutencao.php";
                        break;         
                    case "inspecao":
                        include  "../template/inspecao/inspecao.php";
                        break;  
                    case "veiculos":
                        include "../template/veiculos/veiculos.php";
                        break;  
                    case "decretos":
                        include   "../template/decreto/decretos.php" ;
                         break;
                    case "transporte":
                        include "../template/rotas/rotas.php";
                        break;
                    case "motorista":
                        include   "../template/motorista/motorista.php" ;
                        break;
                    case "incremento":
                        include "../template/incremento/incremento.php";
                        break;    
                    default:
                    include(__DIR__."/404.php");
                }
            ?>
        </div>

    </body>  
</html>