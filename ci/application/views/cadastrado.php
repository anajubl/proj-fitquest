<!DOCTYPE html>
<html lang="pt-BR">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<link rel="stylesheet" href="<?= base_url('assets/img/favicon.png') ?>">
	    
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
	</head>
	<body>
	    <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      	<div class="container">
	        	<div class="navbar-header">
	          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            		<span class="icon-bar"></span> 
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</button>
	          		<a class="navbar-brand" href="#headerwrap"><b>FitQuest</b></a>
	        	</div>
	        	<div class="navbar-collapse collapse">
	          		<ul class="nav navbar-nav navbar-right">
	            		<li><a href="#explic">Como Funciona</a></li>
	            		<li><a href="#sobre">Quem Somos</a></li>
						<li><a href="#contato">Contato</a></li>
						<li><a style="font-weight: bold" href="#cadastro">Cadastre-se</a></li>
	          		</ul>
	        	</div><!--/.nav-collapse -->
	      	</div>
	    </div>
		<!----FIM DO HEADER PADRAO-->

	

		<div id="headerwrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6"><!---- AREA DE LOGIN ---->
						<h1>Acesse sua conta
							<br>no FitQuest <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
						<!-- AREA DE LOGIN -->
						<form class="form-inline" role="form" action="/ci/index.php/usuario/auth" method="post">
					  		<div class="form-group">
					    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu e-mail" name="email">
					    		<br>
					    		<input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
					    		<br>
					  		</div>
					  		<button type="submit" class="btn btn-warning btn-lg">Login</button>
					  		<br>
					  		<!--<span class="glyphicon glyphicon-ok" aria-hidden="true">	  </span>-->
						</form>					
					</div><!-- /col-lg-6 -->
					<div class="col-lg-6">
						<!-- ADICIONAR WRAPER PARA SLIDES AQUI -->
						<img class="img-responsive" src="<?= base_url('assets/img/fq1.png') ?>" alt="">
					</div><!-- /col-lg-6 -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /headerwrap --><!---- FIM DA AREA DE LOGIN ---->
	
		<!-- AREA COMO FUNCIONA -->
		<div class="container" id="explic">
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>Entenda como o FitQuest funciona</h1>
					<h3>Crie seu perfil e comece a jogar agora mesmo</h3>
				</div>
			</div><!-- /row -->
		
			<div class="row mt centered">
				<div class="col-lg-4">
					<img src="<?= base_url('assets/img/ser01.png') ?>" width="180" alt="">
					<h4>1 - Crie seu avatar</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="<?= base_url('assets/img/ser03.png') ?>" width="180" alt="">
					<h4>2 - Adicione suas tarefas</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="<?= base_url('assets/img/ser02.png') ?>" width="180" alt="">
					<h4>3 - Ganhe pontos ao cumprir as tarefas e troque por recompensas</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div><!--/col-lg-4 -->
			</div><!-- /row -->
		</div><!-- /container --><!---- FIM DA AREA COMO FUNCIONA ---->
	
		<!-- APAGAR DIV ABAIXO ---------------------------------------------------------->
		<div class="container">
			<hr>
			<div class="row centered">
				<div class="col-lg-6 col-lg-offset-3">
					<form class="form-inline" role="form">
				  		<div class="form-group">
				    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu e-mail">
				  		</div>
				  		<button type="submit" class="btn btn-warning btn-lg">Eu Quero!</button>
					</form>					
				</div>
				<div class="col-lg-3"></div>
			</div><!-- /row -->
			<hr>
		</div><!-- /container -->
	
		<!---- AREA QUEM SOMOS ---->
		<div class="container" id="sobre">
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>Conheça o FitQuest!</h1>
					<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</h3>
				</div>
			</div><!-- /row -->
	
			<!-- CAROUSEL -->
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  		<!-- Indicators -->
				  		<ol class="carousel-indicators">
				    		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				   			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  		</ol>
				
				  		<!-- Wrapper for slides -->
				  		<div class="carousel-inner">
				    		<div class="item active">
				      			<img src="<?= base_url('assets/img/p01.png') ?>" alt="">
				    		</div>
				    		<div class="item">
				      			<img src="<?= base_url('assets/img/p02.png') ?>" alt="">
				    		</div>
				    		<div class="item">
				      			<img src="<?= base_url('assets/img/p03.png') ?>" alt="">
				    		</div>
						</div>			
					</div><!-- /col-lg-8 -->
				</div><!-- /row -->
			</div><!--/container -->

			<div class="container">
				<hr>
				<div class="row centered">
					<div class="col-lg-6 col-lg-offset-3">
						<form class="form-inline" role="form">
					  		<div class="form-group">
					    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu e-mail">
					  		</div>
					  		<button type="submit" class="btn btn-warning btn-lg">Quero participar!</button>
						</form>					
					</div>
					<div class="col-lg-3"></div>
				</div><!-- /row -->
				<hr>
			</div><!-- /container -->
			<!---- FIM DA AREA QUEM SOMOS ---->

			<!-- CADASTRE-SE -->
			<div class="container" id="cadastro">
				<div class="row mt centered">
					<div class="col-lg-6 col-lg-offset-3">
						<h1>Crie sua conta   
							<br>no FitQuest <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
						<br>
						<h3>Informe seus dados de cadastro e participe do FitQuest.</h3>
					</div><!-- col-->
				</div><!-- /row -->
				<div class="row mt centered">
					<div class="col-lg-6">
						<p> <?php echo $msg;?></p>
						<form class="form-inline" role="form" action="/ci/index.php/usuario/cadastro" method="post">
				  			<div class="form-group">
				   				Nome &nbsp
				   				<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
				    			<br>
				   				<br>
				    			Email &nbsp
				    			<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
				    			<br>
				    			<br>
				    			Senha &nbsp
				    			<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
				    			<br>
				    			<br>					
					  			<!--<span class="glyphicon glyphicon-ok" aria-hidden="true">	  </span>-->
	
							</div><!-- /form-->
						
					</div><!-- /col-lg-6 -->
				
				
					<div class="col-lg-6">
						Sexo
						<fieldset style="" id="genero" required>
				  			<input type="radio" name="genero" value="true" id="m" checked> Masculino<br>
  							<input type="radio" name="genero" value="false" id="f"> Feminino<br>
						</fieldset>
				   		<br>
						Objetivo
						<fieldset class="centered" id="foco" required>
				       		<input type="radio" name="foco" value="1" id="forca">Força
				       		<input type="radio" name="foco" value="2" id="emagrecimento">Emagrecimento
				       		<input type="radio" name="foco" value="3" id="condicionamento">Condicionamento
				   		</fieldset>
				   		<br>
					</div><!--/col-lg-6 -->
				</div><!-- /row -->
			</div><!-- /container -->
		
			<div class="row centered">
				<div class="col-lg-6 col-lg-offset-3">
					<button type="submit" class="btn btn-warning btn-lg"  name="cadastrar" value="Cadastrar">Cadastrar!</button>  
				</div>
			</div>
		</form><!---- FIM DA AREA DE CADASTRO ---->
		
		<!-- FORM DE CONTATO php.mailer -->
		<div class="container" id="contato">
			<hr>
			<div class="row centered">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>Fale Conosco</h1>
					<form class="form-inline" role="form" action="" method="post">
						<div class="form-group">
							Nome &nbsp
							<input type="text" class="form-control" name="nome" id="nome"  placeholder="Digite seu nome" required>
							<br>
							<br>
							Email &nbsp<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
							<br>
							<br>
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Selecione o assunto<span class="caret"></span></button>
								<ul class="dropdown-menu">
							    	<li><a href="#">Cadastro</a></li>
						    		<li><a href="#">Login</a></li>
						    		<li><a href="#">Atividades propostas</a></li>
						    		<li><a href="#">Outros</a></li>
						  		</ul>
							</div><!-- /dropdown -->
							<br>
							<br>
						</div><!-- /form-group-->
						<br>
					</form>
				</div>
					<!----FOOTER PADRAO---->
				<div class="col-lg-3"></div>
			</div><!-- /row -->
			<hr>
			<p class="centered">Created by BlackTie.co & Edited by BrodsHackers - Attribution License 3.0 - 2017</p>
		</div><!-- /container -->
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
	</body>
</html>