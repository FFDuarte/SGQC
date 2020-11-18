           


            <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden shadow-lg px-12">
                <div  class=" flex flex-row px-4  ">
                    <div class="p-2 items-center justify-between " >
                        <?php
                            foreach ($funcionario as $key => $value) {
                                                
                                echo '<a href="?page='.$key.'" class="            px-6 py-2  text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline ">'.ucfirst($key).' </a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
          
