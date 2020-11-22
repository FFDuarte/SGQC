<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";
?>
    <?php
       $paginas = ['dashboard'=>'dashboard',
       'transporte'=>'transporte',
       'manutencao'=>'clientes',
       'inspecao'=>'inspecao',
       'decreto' => 'decreto'];

$transporte = ['rotas'=>'rotas',
      'veiculos' => 'veiculos',
      'motorista' => 'motorista',
      'programacao' => 'programacao'];
   

$manutencao = ['manutencoes' => 'manutencoes',
          'requisicoes' => 'requisicoes'];

$decretos = ['decreto rotas' => 'rotas',
          'decreto veiculos' => 'veiculos'];
$inspec = ['inspecao' => 'inspecao' , 'reavaliacao' => 'reavaliacao'] ;

                    
    
    ?>
    <?php     
              


              $sql = $conn ->query("SELECT * FROM funcionario where funcao = 'supervisor' ");
              $idFuncionario= mysqli_fetch_array($sql);
              $nome=$idFuncionario['nome'];
              $matricula=$idFuncionario['matricula'];
              $idade=$idFuncionario['idade'];
              $funcao=$idFuncionario['funcao'];
              $setor=$idFuncionario['setor'];
              $cpf=$idFuncionario['cpf'];
          
          ?>
    
    <!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <meta name="theme-color" content="#000000"/>
    
        <link  href=<?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >

        <title>Pagina Supervisor</title>
    
    </head>
    <body class="text-gray-800 bg-gradient-to-r from-gray-200 via-gray-400 to-gray-500 px-2 antialiased">
          
        <!-- MENU -->
        <?php
            include "../template/menu/menu.php";
        ?>
      
        <div class="relative md:ml-48">
         <!-- Area onde os eventos do MENU acontecem  -->
            <?php
    
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'dashboard';
                }
                
               
                switch($requisicao) {
                    case "dashboard":
                        include   "../template/dashboard/dashboard.php" ;
                        break;
                    case "rotas":
                        include   "../template/rotas/rotas.php" ;
                        break;   
                    case "manutencao":
                        include   "../template/manutencao/manutencao.php" ;
                        break;         
                    case "inspecao":
                        include   "../template/inspecao/inspecao.php" ;
                        break;  
                    case "veiculos":
                        include   "../template/veiculos/veiculos.php" ;
                        break;  
                    case "decreto":
                        include   "../template/decreto/veiculo/decretosVeiculos.php" ;
                         break;
                    case "transporte":
                        include   "../template/rotas/rotas.php" ;
                        break;
                    case "motorista":
                        include   "../template/motorista/motorista.php" ;
                        break;
                    case "incremento":
                        include   "../template/programacao/programacao.php" ;
                        break; 
                    case "manutencoes":
                        include   "../template/manutencao/manutencao.php" ;
                        break;     
                    case "requisicoes":
                        include   "../template/requisicao/requisicao.php" ;
                        break;  
                    case "programacao":
                        include   "../template/programacao/programacao.php" ;
                        break; 
                    case "perfil":
                            include "../template/perfil/perfil.php";
                            break; 
                    case "decreto veiculos":
                        include "../template/decreto/veiculo/decretosVeiculos.php";
                        break;
                    case "decreto rotas":
                        include "../template/decreto/rota/decretosRotas.php";
                        break;  
                    case "reavaliacao":
                        include "../template/reavaliacao/reavaliacao.php";
                        break;      
                        
                        
                    case "sair":
              
                            
                                 header("Location: ../login/index.php");
                             
                            
    
                             break;                                   
                    default:
                    include(__DIR__."/404.php");
                }
            ?>
        </div>

    </body>  
</html>