<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<?php
				include "../template/menu/menuTransporte.php"
	?>

	<script>
	var closemodal = document.querySelectorAll('.modal-close')
	for (var i = 0; i < closemodal.length; i++) {
		closemodal[i].addEventListener('click', toggleModal)
	}
	onClick="window.print()"
	</script>

	<?php
	include "C:\laragon\www\TCC-Estacio\banco\conexao.php";

	?>

	<style type="text/css">
		#pesquisaCliente{
			width:500px;
		}
		#form_pesquisa{
			margin-top:50px;
		}
	</style>
	

	<script type="text/javascript">
	$(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
		$('#loading').html("").fadeIn('fast');
    }
    
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
    load_dados(null, 'pesquisaRota.php', '#MostraPesq');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){
        
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 1)
        {
            load_dados(valores, 'pesquisaRota.php', '#MostraPesq');
        }else
        {
            load_dados(null, 'pesquisaRota.php', '#MostraPesq');
        }
    });

	});
	</script>	


<div class="container mx-auto py-6 px-10 relative" >
    


		<div class="mb-4 relative">
		   
			<div class=" pr-2">
		
			</div>

			<?php
			    include "excluir.php"
			?>
			
			<?php
			    include "editar.php"
			?>
			

			<?php
			    include "cadastroRotas.php"
			?>

			
		</div>
	

		<div class="" style="height: 700px;">
		<?php
			    include "listaRotas.php"
			?>
				
		</div>
		<buttom onclick="javascript:window.print();" class="print"> imprimir</buttom>

</div>

