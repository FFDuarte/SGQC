<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>

    <link  href= <?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >
    
  </head>
  <body class="text-gray-800 antialiased">
    <main>
      <section class="absolute w-full h-full">
        <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">
        </div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <div class="text-gray-500 text-center mb-3 font-bold">
                    <small>NETCONTABLE</small>
                  </div>
                      <form class="col s4" action="login.php"   method="post">
                         <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                              
                              <label for="matricula" class="block text-xl font-medium text-gray-700">Matricula: </label>
                              <input type="matricula" name="matricula"  class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 px-2 py-1 rounded-md" placeholder="Matricula" value="" required><br>
                              <label for="password" class="block text-xl font-medium text-gray-700">Senha: </label>
                             <input type="senha" name="senha" value=""  class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 px-2 py-1  rounded-md" placeholder="Senha"  required><br>
                            </div>
                        </div>
                      
                        
                      

                        <div class="wrapper">
                            <span class="group-btn">     
                                <input class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-200 text-gray-900 px-2 py-1 uppercase rounded-md" type="submit" name="submit" value="Entrar">
                            </span>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
          <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-gray-700" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-white font-semibold py-1">
                  Copyright © 2020
                  <a href="" class="text-white hover:text-gray-400 text-sm  font-semibold py-1" >NETCONTABLE</a >
                </div>
              </div>
              <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center" >
                  <li>
                    <a href="" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3" >NETCONTABLE</a>
                  </li>
                  <li>
                    <a href="" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3" >Suporte</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </section>
   </main>
  </body>
  
</html>
