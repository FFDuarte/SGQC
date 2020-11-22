<?php
               $paginas = ['rotas'=>'rotas',
               'veiculos' => 'veiculos',
               'decretos' => 'decretos',
               'motoristas' => 'motoristas',
               'programacao' => 'programacao'];

               $decretos = ['decreto rotas' => 'rotas',
               'decreto veiculos' => 'veiculos'];

               

    ?>
<?php
include "C:\laragon\www\TCC-Estacio\banco\conexao.php";
?>
<?php     
              


              $sql = $conn ->query("SELECT * FROM funcionario where funcao = 'assrota' ");
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

        <title>Manutencão</title>
    
    </head>
    <body class="text-gray-800 bg-gradient-to-r from-gray-200 via-gray-400 to-gray-500 px-2 antialiased">
          
        <!-- MENU -->
        <?php
            include "../template/menu/menu.php";
        ?>
      
        <div class="relative md:ml-48 ">
         <!-- Area onde os eventos do MENU acontecem  -->
           <?php
                if (isset($_GET['page'])) {
                    $requisicao = $_GET['page'];
                } else {
                    $requisicao = 'veiculos';
                }


                switch($requisicao) {
                    case "veiculos":
                        include   "../template/veiculos/veiculo.php" ;
                        break;
                    case "programacao":
                        include   "../template/programacao/programacoes.php" ;
                        break;
                    case "motoristas":
                        include "../template/motorista/motoristas.php";
                        break;   
                    case "rotas":
                        include "../template/rotas/rota.php";
                        break;         
                    case "decretos":
                        include  "../template/decreto/rota/decretosRotas.php";
                        break;  
                    case "decreto rotas":
                        include  "../template/decreto/rota/decretosRotas.php";
                        break;  
                    case "decreto veiculos":
                        include  "../template/decreto/veiculo/decretosVeiculos.php";
                        break;  
                    case "perfil":
                        include "../template/perfil/perfil.php";
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

