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
            <h1>BEM-VINDO <?= $nome ?> !!</h1> 
            <br>
            <!-- <button  type="button" class="btn btn-outline-info"><a href="/ci/index.php/login/sair">Logout</a></button>-->
            <br>
            <br>
	  		<div class="col-lg-6 lateral-esquerda red">
	  			<div class="foto-perfil">
	  				<img width="80" id="foto-user" src="<?= base_url('assets/img/'.$nome.'.jpg') ?>" alt=""></img>
	  			</div><!--img-->
	  			<br>
	  			
	  				<p style="font-weight: bold">Nome: <span style="font-weight: normal" class="dados"><?= $nome ?></span></p>
					<p style="font-weight: bold">Foco: <span style="font-weight: normal" class="dados"><?= $foco ?></span></p>
					<p style="font-weight: bold">Nível: <span style="font-weight: normal" class="dados"><?= $nivel ?></span></p>
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
							    
							    <label class="checkbox-inline"  ><input type="checkbox" id="<?php echo $atividade->getCdativ()?>" name="check" value="<?php echo $atividade->getCdativ()?>"></label>
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
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="exampleModalLabel">Confirmação de Atividade Realizada</h4>
                            </div>
                            <div class="modal-body">
                                <p>Tem certeza que deseja marcar essa atividade como feita?</p>
                                <p class="text-warning"><small>Se você marcá-la como realizada, ela será excluída da sua lista de atividades.</small></p>
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-default" data-dismiss="modal" >OK!</button><!-- DELETA ATIVIDADE-->
                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                        </div>
                    </div>
                </div><!-- FIM modal check atividade-->
	  			
	  		</div><!--col-lg-6 atividades-->
	  	</div><!--row-->

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
    	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script> 
    	
    	<script type="text/javascript">
        /*
        $(document).ready(function(){
        		$("#myModal").modal('show');
        	});
       */ 	
        	$('#exampleModal').on('show.bs.modal', function (event) {
              var label = $(event.relatedTarget) // Button that triggered the modal
              var recipient = label.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text('Confirmação de ' + recipient)
              modal.find('.modal-body input').val(recipient)
            });

        	
        </script>
    	
    </body>
</html>
