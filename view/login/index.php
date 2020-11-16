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
                  <form>
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-gray-700 text-xs font-bold mb-2"for="grid-password">
                        Login
                      </label>
                      <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Login" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">
                      Password
                      </label>
                      <input type="password"class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Password" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    <div>
                      <label class="inline-flex items-center cursor-pointer">
                        <input id="customCheckLogin"type="checkbox"class="form-checkbox text-gray-800 ml-1 w-5 h-5"style="transition: all 0.15s ease 0s;"/>
                        <span class="ml-2 text-sm font-semibold text-gray-700">
                              Remember me
                        </span>
                      </label>
                    </div>
                    <div class="text-center mt-6">
                      <button class="bg-gray-800 text-white active:bg-gray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="button" style="transition: all 0.15s ease 0s;">
                        Sign In
                      </button>
                    </div>
                    <div class="text-center mt-6">
                      <button class="bg-gray-400 text-white active:bg-gray-400 text-sm font-bold uppercase px-1 py-1 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="button" style="transition: all 0.15s ease 0s;">
                        Esqueceu a senha?
                      </button>
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