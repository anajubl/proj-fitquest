                                        
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
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="checkbox">
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
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox2" type="checkbox" checked>
						  							  	<label for="checkbox2"></label>
					  						  		</div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox3" type="checkbox">
						  							  	<label for="checkbox3"></label>
					  						  		</div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox4" type="checkbox" checked>
						  							  	<label for="checkbox4"></label>
					  						  		</div>
                                                </td>
                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox5" type="checkbox">
						  							  	<label for="checkbox5"></label>
					  						  		</div>
                                                </td>
                                                <td>Read "Following makes Medium better"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox6" type="checkbox" checked>
						  							  	<label for="checkbox6"></label>
					  						  		</div>
                                                </td>
                                                <td>Unfollow 5 enemies from twitter</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
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
