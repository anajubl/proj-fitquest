                                        
            <ul class="nav">
                <li class="active">
                    <a href="/ci/index.php/painel/dashboard"> 
                        <i class="pe-7s-graph"></i>
                        <p>Painel</p>
                    </a>
                </li>
                <li>
                    <a href="/ci/index.php/lista/table"> 
                        <i class="pe-7s-gym"></i>
                        <p>Minhas Atividades</p>
                    </a>
                </li>
                 <li>
                    <a href="/ci/index.php/perfil/desempe"> 
                        <i class="pe-7s-user"></i>
                        <p>Meu Desempenho</p>
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
                    <a class="navbar-brand" href="#">Painel</a>
                </div>
                
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/ci/index.php/logout/">
                                <p>Logout</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fim do header VARIAVEL-->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!--PERFIL CARD-->
                    <div class="col-md-4">
                        <div class="card card-user">
                            <!-- 
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            -->
                            <div class="content">
                                <div class="author">
                                    <br><br><br><br>
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?= base_url('assets/img/faces/dybala.png') ?>" alt="..."/>  

                                      <h4 class="title"> <?= $nome ?> </h4>  <!--NOME AQUI-->
                                    </a>
                                    
                                    <p style="font-weight: bold">Foco:  <span><?= $foco ?></span> </p> <!--FOCO AQUI-->
                                    
                                    <p style="font-weight: bold">Nível: <span><?= $nivel ?></span> </p> <!--NIVEL AQUI-->
                                    
                                </div>
                                <p class="description text-center"> "Procurando uma vida <br>
                                                    mais saudável" <br>
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div><!-- FIM md-4 PERFIL CARD-->

                   <!-- PROXIMAS ATIV-->
                    <div class="col-md-8">
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
                                                <td>
                                                    <?php echo $atividade->getNomeativ() ?>
                                                </td>
                                                <td>
                                                    <label class="" data-toggle="modal" data-target="#exampleModal" data-whatever=" atividade realizada">
							    	                    <input type="button" id="<?php echo $atividade->getCdativ()?>" name="check" class="botao" value="ver  >">
							                        </label>
							                     </td>
							                     <td>
							                         
							                     </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div><!--col-md-8-->
                    <div id="exampleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999"><!--modal check atividade-->
                            <div class="modal-dialog" style="z-index:99999";>
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
                    </div>
               
<!--INICIO DO FOOTER-->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div><!-- INICIO DA DIV??-->
</div><!-- INICIO DA DIV??-->

</body>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/jquery.3.2.1.min.js') ?>" type="text/javascript"></script> 
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script> 

	<!--  Charts Plugin -->
	<script src="<?= base_url('assets/js/chartist.min.js') ?>"></script> 

    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets/js/bootstrap-notify.js') ?>"></script> 

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src"<?= base_url('assets/js/light-bootstrap-dashboard.js?v=1.4.0') ?>"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?= base_url('assets/js/demo.js') ?>"></script>  

    	<script type="text/javascript">
    	
        	$(document).ready(function(){
            	demo.initChartist();
            	$.notify({
                	icon: 'pe-7s-gym',
                	message: "Bem-vindo ao seu perfil no <b>FitQuest</b> navegue pelo menu lateral e veja suas sugestões de atividades."
                },{
                    type: 'info',
                    timer: 4000
                });
        	});
        	
        	
        	var atividades = [];
    		
    		$(".botao").click(function(){
		    	var id = $(this)[0].id;
			    const xhr = new XMLHttpRequest();
			    xhr.open("POST", "verAtividade");
			    xhr.onreadystatechange = function() {
			        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
			            var resp = JSON.parse(xhr.responseText);
			            atividades[0]=resp;
			            alert(atividades);
			        	document.getElementById("ds").innerHTML=resp.ds;
			            document.getElementById("titulo").innerHTML=resp.nome;
			        }
			    }
			    var fd = new FormData();
			    fd.append('id', id);
			    xhr.send(fd);
    		});
    		
    		$("#enviar_ok").click(function(){
    			
    			var cd_usuario = "";
    			var cd_atividade = atividades[0].id;
    			var ds_exercicio = "";
    			var qt_series = "";
    			var qt_repeticoes = "";
    			var ic_feito = "";
    			
    			alert(cd_atividade); return "";
    			
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
