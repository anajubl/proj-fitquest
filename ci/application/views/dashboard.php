                                        
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
                                <p>Sair</p>
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
                                    <img class="avatar border-gray" src="<?= base_url('assets/img/faces/face-3.jpg') ?>" alt="..."/>  

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
													<div class="checkbox">
						  							  	<input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label>
					  						  		</div>
                                                </td>
                                                <td><?php echo $atividade->getNomeativ() ?></td>
                                               
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div><!--col-md-8-->
               
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
    	</script>


</html>
