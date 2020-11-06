
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<div class="relative md:ml-30 bg-gray-100 ">
    <nav class="relative flex flex-wrap items-center justify-between px-4 py-4 navbar-expand-lg mb-4">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                 <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Manutenções</a>  
                 <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Requisitar Manutenções</a>
                 <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Requisoções</a>

                </div>
                <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden px-24">
                    <div class="flex justify-between">
                        <div class="inline-flex border rounded w-4/12 px-2 lg:px-6 h-10 bg-transparent">
                            <div class="flex flex-wrap items-stretch w-full h-full mb-4 relative">
                                <div class="flex">
                                    <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                 </div>
                                <input type="text" class="flex-shrink flex-grow leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs  text-black-500 font-thin" placeholder="Search">
                             </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav> 
    <div class="">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 pr-8 lg:px-6 w-left">
            <div class="flex">
                <div class="mr-6 w-1/2 mt-8 py-2 flex-shrink-0 flex flex-col bg-white dark:bg-gray-600 rounded-lg">
                    <!-- Card list container -->
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-6 pt-3 rounded-bl-lg rounded-br-lg ">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-6 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Codigo Reparo</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Aplicantes</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Data da manutenção</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Excluir</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Editar</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">20170105</td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">EX</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <button class="px-2  border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ED</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                        <div>
                            <p class="text-sm leading-5 text-blue-700">
                                Mostrando
                                <span class="font-medium">1</span>
                                de
                                <span class="font-medium">5</span>
                                de
                                <span class="font-medium">5</span>
                                resultados
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex shadow-sm">
                                <div	>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                        1
                                    </a>        
                                </div>
                                <div v-if="pagination.current_page < pagination.last_page">
                                    <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mr-6 w-1/2 mt-8 py-2 flex-shrink-0 flex flex-col bg-white rounded-lg text-white">
                    <div>
                        <div class="antialiased sans-serif bg-white- w-lg min-h-screen  ">
                        <div x-data="app()" x-cloak class="px-4">
                        <div class="max-w-lg mx-auto py-10">
                        <div class="shadow p-6 rounded-lg bg-white">
                            <div class="md:flex md:justify-between md:items-center">
                            <div>
                                <h2 class="text-xl text-gray-800 font-bold leading-tight">Manutenções rezalizadas</h2>
                                <p class="mb-2 text-gray-600 text-sm">Mensal</p>
                            </div>
                            </div>


                            <div class="line my-8 relative">
                            <!-- Tooltip -->
                            <template x-if="tooltipOpen == true">
                                <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                                    :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
                                    >
                                <div class="shadow-xs rounded-lg bg-white p-2">
                                    <div class="flex items-center justify-between text-sm">
                                    <div>Manutencoes:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </template>

                            <!-- Bar Chart -->
                            <div class="flex -mx-2 items-end mb-2">
                                <template x-for="data in chartData">

                                <div class="px-2 w-1/6">
                                    <div :style="`height: ${data}px`" 
                                        class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                                        @mouseenter="showTooltip($event); tooltipOpen = true" 
                                        @mouseleave="hideTooltip($event)"
                                        >
                                    <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                    </div>
                                </div>

                                </template>
                            </div>

                            <!-- Labels -->
                            <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                            <div class="flex -mx-2 items-end">
                                <template x-for="data in labels">
                                <div class="px-2 w-1/6">
                                    <div class="bg-red-600 relative">
                                    <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                    <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                    </div>
                                </div>
                                </template>	
                            </div>

                            </div>
                        </div>
                        </div>
                    </div>
                    <script>
                        function app() {
                        return {
                            chartData: [21, 35, 30, 20, 15, 8, 22, 20, 30,25,20,25],
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Out','Nov','Dez'],

                            tooltipContent: '',
                            tooltipOpen: false,
                            tooltipX: 0,
                            tooltipY: 0,
                          }
                        }
                    </script>
            </div>
        </div>    
	</div>      
</div>
