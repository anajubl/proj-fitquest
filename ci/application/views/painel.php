<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="assets/img/favicon.png">
	
	    <title>FitQuest</title>
	
	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
	    
	    <!-- Custom styles for this template -->
	    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
	     
	    <!-- Fonts from Google Fonts -->
		<link rel="stylesheet" href="<?= base_url('http://fonts.googleapis.com/css?family=Lato:300,400,900') ?>">

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	    
	    <!--CSS personalizado-->
	    <link href="<?= base_url('assets/css/main2.css') ?>" rel='stylesheet' type='text/css'>
	</head>
    <body>
        <div class="row mt centered">
            <h1>BEM-VINDO <?= ucwords($nome) ?> !!</h1> 
            <br>
            <!-- <button  type="button" class="btn btn-outline-info"><a href="/ci/index.php/login/sair">Logout</a></button>-->
            <br>
            <br>
	  		<div class="col-lg-6 lateral-esquerda red">
	  			<div class="foto-perfil">
	  				<img width="80" id="foto-user" src="<?= base_url('assets/img/'.$nome.'.jpg') ?>" alt=""></img>
	  			</div><!--img-->
	  			<br>
	  			
	  				<p style="font-weight: bold">Nome: <span style="font-weight: normal" class="dados"><?= ucwords($nome) ?></span></p>
					<p style="font-weight: bold">Foco: <span style="font-weight: normal" class="dados"><?= ucwords($foco) ?></span></p>
					<p style="font-weight: bold">Nível: <span style="font-weight: normal" class="dados"><?= ucwords($nivel) ?></span></p>
	  		    <br>
	  		    <button  type="button" class="btn btn-outline-info"><a href="/ci/index.php/usuario/sair">Logout</a></button>
                <br>
                <br>
	  		
	  		</div><!--col-lg-6-->
	  		<div class=" col-lg-6 Atividades">
	  			
	  			<form action="ci/index.php/usuario/verAtividade" method="POST">
		  			<table width="90%">
		  			    <caption style="font-weight: bold">Minhas Atividades</caption>
		  			    
		  			    <?php foreach($vetor as $atividade){ ?>
		  				<tr class="list-group">
							<td class="list-group-item">
							    <?php echo $atividade->getNomeativ() ?>
							</td>
							
							<td>
		
							</td>
		  				</tr>
		  				<?php } ?>
		  			</table>
		  		</form>
	  			
	  			<div id="exampleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--modal check atividade-->
                    <div class="modal-dialog">
                        <div class="modal-content">
							<form>
                            	<div class="modal-header">
                                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                	<h4 class="modal-title" id="exampleModalLabel">Confirmação de Atividade Realizada</h4>
                            	</div>
                            	<div class="modal-body">
                            		<h2 id="titulo"></h2>
                            		
                            		<p id="ds"></p>
                            		
	                                <p>Você já realizou essa atividade?</p>
		                            <label>    
		                                <input type="radio" id="sim" name="fez" value="sim" checked>Sim</input>
		                            </label>
		                            <label>
		                                <input type="radio" id="nao" name="fez" value="não">Não</input>
	                                </label>
	                                <label>
		                                <p class="text-warning"><small>Como foi?</small></p>
		                                <input type="textarea" name="descricao" id="descricao"/></input>
	                            	</label>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="button" class="btn btn-default" data-dismiss="modal" id="enviar_ok">Ok</button>	
	                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                            	</div>
                            </form>
                        </div>
                        
                    </div>
                </div><!-- FIM modal check atividade-->
	  			
	  		</div><!--col-lg-6 atividades-->
	  	</div><!--row-->
	
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
    	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script> 
    	
    	<script type="text/javascript">
    		
    		var atividades = [];
    		
    		$(".botao").click(function(){
		    	var id = $(this)[0].id;
			    const xhr = new XMLHttpRequest();
			    xhr.open("POST", "verAtividade");
			    xhr.onreadystatechange = function() {
			        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
			            var resp = JSON.parse(xhr.responseText);
			            atividades[0]=resp;
			        	document.getElementById("ds").innerHTML=resp.ds;
			            document.getElementById("titulo").innerHTML=resp.nome;
			        }
			    }
			    var fd = new FormData();
			    fd.append('id', id);
			    xhr.send(fd);
    		});
    		
    		$("#enviar_ok").click(function(){
    			
    			var cd_usuario = ;
    			var cd_atividade = atividades[0].id;
    			var ds_exercicio = ;
    			var qt_series = ;
    			var qt_repeticoes = ;
    			var ic_feito = ;
    			
    			alert(cd_atividade);
    			
			    const xhr = new XMLHttpRequest();
			    xhr.open("POST", "verAtividade");
			    xhr.onreadystatechange = function() {
			        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
			            var resp = JSON.parse(xhr.responseText);
			            
			        	document.getElementById("ds").innerHTML=resp.ds;
			            document.getElementById("titulo").innerHTML=resp.nome;
			        }
			    }
			    var fd = new FormData();
			    fd.append('id', id);
			    xhr.send(fd);
    		});
    		
        	$('#exampleModal').on('show.bs.modal', function (event) {
              var label = $(event.relatedTarget) 
              var recipient = label.data('whatever')
              var modal = $(this)
              modal.find('.modal-title').text('Confirmação de ' + recipient)
            });

        	
        </script>
    	
    </body>
</html>
