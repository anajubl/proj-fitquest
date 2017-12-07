<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.ico') ?>"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>FitQuest</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!--Bootstrap core CSS     -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />  

     <!--Animation library for notifications   -->
    <link href="<?= base_url('assets/css/animate.min.css') ?>" rel="stylesheet"/> 

      <!--Light Bootstrap Table core CSS    -->
    <link href="<?= base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>" rel="stylesheet"/> 


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet" /> 


    <!--     Fonts and icons     -->
    <link href="<?= base_url('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') ?>" rel="stylesheet"> 
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> 
    <link href="<?= base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="<?= base_url('assets/img/sidebar-4.jpg') ?>"> 

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

        <!-- TROCAR LOGO -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text"><!--LINK PARA HOME-->
                    FitQuest
                </a>
            </div>
            <!--FIM DO HEADER FIXO-->

            <ul class="nav">
                <li>
                    <a href="/ci/index.php/painel/dashboard"> 
                        <i class="pe-7s-graph"></i>
                        <p>Painel</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/ci/index.php/lista/table"> 
                        <i class="pe-7s-gym"></i>
                        <p>Minhas Atividades</p>
                    </a>
                </li>
                <li>
                    <a href="/ci/index.php/perfil/dash"> 
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>


    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Minhas Atividades</a>
                </div>
                
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/ci/index.php/logout/">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fim do header VARIAVEL-->
        
       <!-- ATIV NA PAG MINHAS ATIV-->
        <div class="col-md-12">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Minhas Atividades</h4>
                    <p class="category">Atividades a realizar</p>
                </div>
                <form action="ci/index.php/usuario/verAtividade" method="POST">
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
		  			           <?php foreach($vetor as $atividade){ ?>
                               <tr>
                                    <td> <?php echo $atividade->getNomeativ() ?></td>
									<td>
    		  						  	    <label class="" data-toggle="modal" data-target="#exampleModal" data-whatever=" atividade realizada">
    							    	        <input type="button" id="<?php echo $atividade->getCdativ()?>" name="check" class="botao" value="ver  >">
    					        		    </label>
                                    </td>   
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!--TABLE-FULL-->
                </div><!--CONTENT-->
                </form>
                
            </div><!--CARD-->
        </div> <!--col-md-12 era md-6-->

<div class="col-md-12">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Atividades Concluídas</h4><!-- MARCAR COMO disabled-->
                    <p class="category"></p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
										<div class="checkbox"> <!-- ENVIA ATIV PARA TABELA ABAIXO OU MARCA ELA COMO CLASS DISABLED -->
			  							  	<input id="checkbox1" type="checkbox">
			  							  	<label for="checkbox1"></label>
		  						  		</div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
         <!--                       <tr>-->
         <!--                           <td>-->
									<!--	<div class="checkbox">-->
			  				<!--			  	<input id="checkbox2" type="checkbox" checked>-->
			  				<!--			  	<label for="checkbox2"></label>-->
		  					<!--	  		</div>-->
         <!--                           </td>-->
         <!--                           <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>-->
         <!--                           <td class="td-actions text-right">-->
         <!--                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-edit"></i>-->
         <!--                               </button>-->
         <!--                               <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-times"></i>-->
         <!--                               </button>-->
         <!--                           </td>-->
         <!--                       </tr>-->
         <!--                       <tr>-->
         <!--                           <td>-->
									<!--	<div class="checkbox">-->
			  				<!--			  	<input id="checkbox3" type="checkbox">-->
			  				<!--			  	<label for="checkbox3"></label>-->
		  					<!--	  		</div>-->
         <!--                           </td>-->
         <!--                           <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit-->
									<!--</td>-->
         <!--                           <td class="td-actions text-right">-->
         <!--                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-edit"></i>-->
         <!--                               </button>-->
         <!--                               <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-times"></i>-->
         <!--                               </button>-->
         <!--                           </td>-->
         <!--                       </tr>-->
         <!--                       <tr>-->
         <!--                           <td>-->
									<!--	<div class="checkbox">-->
			  				<!--			  	<input id="checkbox4" type="checkbox" checked>-->
			  				<!--			  	<label for="checkbox4"></label>-->
		  					<!--	  		</div>-->
         <!--                           </td>-->
         <!--                           <td>Create 4 Invisible User Experiences you Never Knew About</td>-->
         <!--                           <td class="td-actions text-right">-->
         <!--                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-edit"></i>-->
         <!--                               </button>-->
         <!--                               <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-times"></i>-->
         <!--                               </button>-->
         <!--                           </td>-->
         <!--                       </tr>-->
         <!--                       <tr>-->
         <!--                           <td>-->
									<!--	<div class="checkbox">-->
			  				<!--			  	<input id="checkbox5" type="checkbox">-->
			  				<!--			  	<label for="checkbox5"></label>-->
		  					<!--	  		</div>-->
         <!--                           </td>-->
         <!--                           <td>Read "Following makes Medium better"</td>-->
         <!--                           <td class="td-actions text-right">-->
         <!--                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-edit"></i>-->
         <!--                               </button>-->
         <!--                               <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-times"></i>-->
         <!--                               </button>-->
         <!--                           </td>-->
         <!--                       </tr>-->
         <!--                       <tr>-->
         <!--                           <td>-->
									<!--	<div class="checkbox">-->
			  				<!--			  	<input id="checkbox6" type="checkbox" checked>-->
			  				<!--			  	<label for="checkbox6"></label>-->
		  					<!--	  		</div>-->
         <!--                           </td>-->
         <!--                           <td>Unfollow 5 enemies from twitter</td>-->
         <!--                           <td class="td-actions text-right">-->
         <!--                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-edit"></i>-->
         <!--                               </button>-->
         <!--                               <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">-->
         <!--                                   <i class="fa fa-times"></i>-->
         <!--                               </button>-->
         <!--                           </td>-->
         <!--                       </tr>-->
                            </tbody>
                        </table>
                    </div><!--TABLE-FULL-->
                </div><!--CONTENT-->
            </div><!--CARD-->
        </div> <!--col-md-12 era md-6-->   

    
        <!-- LISTA 1 
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    -->

                    <!-- LISTA 2
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    -->

        <!--        </div>-->
        <!--    </div>-->
        </div> <!-- MAIN PAINEL -->
        </div> <!--WRAPPER-->
        
        
        <!-- MODAL -->
	  			<div id="exampleModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--modal check atividade-->
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

    
  <!--INICIO DO FOOTER-->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

<!--    </div><!-- INICIO DA DIV??-->
<!--</div><!-- INICIO DA DIV??-->


</body>

    <!--   Core JS Files   -->
    <!--<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>-->
	
	<!--<script src="assets/js/bootstrap.min.js"></script> -->

	<!--  Charts Plugin -->
	<!--<script src="assets/js/chartist.min.js"></script>-->

    <!--  Notifications Plugin    -->
    <!--<script src="assets/js/bootstrap-notify.js"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<!--<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>-->

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<!--<script src="assets/js/demo.js"></script>-->
	
	
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

</html>