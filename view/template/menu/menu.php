

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
                                
                                 echo '<a href="?page='.$key.'" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100 ">'.ucfirst($key).' </a>';
                            }
                        ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="flex w-full max-w-xs mt-48 bg-white">
                                <ul class="flex flex-col w-full">
                                        <li class="my-px">
                                                <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Conta</span>
                                        </li>
                                        <li class="my-px">
                                                <a href="#"
                                                class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                                                        <span class="flex items-center justify-center text-lg text-gray-400">
                                                                <svg fill="none"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor"
                                                                        class="h-6 w-6">
                                                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                                </svg>
                                                        </span>
                                                        <span class="ml-3">Perfil</span>
                                                </a>
                                        </li>

                                        <li class="my-px">
                                                <a href="#"
                                                class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                                                        <span class="flex items-center justify-center text-lg text-gray-400">
                                                                <svg fill="none"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor"
                                                                        class="h-6 w-6">
                                                                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                </svg>
                                                        </span>
                                                        <span class="ml-3">Settings</span>
                                                </a>
                                        </li>
                                        <li class="my-px">
                                                <a href="#"
                                                class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                                                        <span class="flex items-center justify-center text-lg text-red-400">
                                                                <svg fill="none"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor"
                                                                        class="h-6 w-6">
                                                                        <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                                                </svg>
                                                        </span>
                                                        <span class="ml-3">Logout</span>
                                                </a>
                                        </li>
			        </ul>
		        </div>
                </div>            
        </div>  
</nav>