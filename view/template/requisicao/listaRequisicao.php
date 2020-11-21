<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link  href=<?php echo "\"http://" . $_SERVER['SERVER_NAME'] . "/TCC-Estacio/styles/style.css\"" ?> rel="stylesheet" type="text/css" media="screen"  >

	
	<style type="text/css">
		#pesquisaCliente{
			width:400px;
		}
		#form_pesquisa{
			margin-top:50px;
		}
	</style>
	

<script type="text/javascript">
	$(document).ready(function(){

    
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
		              loading_show();
				},
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
			        $(div).html(data).fadeIn();				
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisaRequisicao.php', '#MostraPesq');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){
        
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 1)
        {
            load_dados(valores, 'pesquisaRequisicao.php', '#MostraPesq');
        }else
        {
            load_dados(null, 'pesquisaRequisicao.php', '#MostraPesq');
        }
    });

	});
	</script>	






<?php include "C:\laragon\www\TCC-Estacio\banco\conexao.php"; ?>




<style>
		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
</style>

	
				<!--Body-->
                    <form name="form_pesquisa" id="form_pesquisa" method="post" action="">
                            <fieldset>
						
                                    <div class="input-prepend">
										<span class="add-on"><i class="icon-search"></i></span>
										
                                        <input class=" text-Black font-bold py-2 px-2 rounded focus:outline-none focus:shadow-outline" type="text" name="pesquisaCliente" id="pesquisaCliente" value="" tabindex="1" placeholder="Pesquisar cliente..." />
									</div>
									
                            </fieldset>
                    </form>
                        <div id="contentLoading">
                            <div id="loading"></div>
                        </div>
                        <section class="jumbotron">
                            <div id="MostraPesq"></div>
                        </section>
                    <span id="status"></span>
			