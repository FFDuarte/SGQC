

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<div class="relative md:ml-30 bg-gray-100 ">
   
    <div class="">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 pr-8 lg:px-6 w-left">
            <div class="flex">
                <div class="mr-6 w-1/2 mt-8 py-2 flex-shrink-0 flex flex-col bg-white dark:bg-gray-600 rounded-lg">
                    <!-- Card list container -->
                    <div class="align-middle inline-block min-w-full  overflow-hidden bg-white  px-6 pt-3 rounded-bl-lg rounded-br-lg ">
                    <table class="min-w-full">
                        <thead>
                            <tr class="">
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Nº Inspeção</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Data</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Avaliador</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Nota</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Veiculo</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Status</th>
                                <th class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">Placa</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                <tr>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#00001020</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">
                                        <div class="text-sm leading-5 text-blue-900">3-troca-pneu</div>
                                    </td>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">20170105</td>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">20170105</td>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">20170105</td>
                                    <td class="px24 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">20170105</td>
                                    <td class="px-2 py-2 whitespace-no-wrap  border-b border-gray-500 text-sm ">20170105</td>
                                   
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
                                        
                                    <div class="max-w-lg mx-auto py-10">
                                       
                                            <div class="md:flex md:justify-between md:items-center">
                                            <div>
                                                <h2 class="text-xl text-gray-800 font-bold leading-tight">Veiculos Reprovados</h2>
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
                                    <div class="max-w-lg mx-auto py-10">
                                        <div class="shadow p-6 rounded-lg bg-white">
                                            <div class="md:flex md:justify-between md:items-center">
                                            <div>
                                                <h2 class="text-xl text-gray-800 font-bold leading-tight">Veiculos Aprovados</h2>
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
