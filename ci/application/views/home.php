<!DOCTYPE html>
<html lang="pt-BR">
	
		<div id="headerwrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6"><!---- AREA DE LOGIN ---->
						<h1>Acesse sua conta
							<br>no FitQuest <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
						<!-- AREA DE LOGIN -->
						<form class="form-inline" action="/ci/index.php/usuario/auth" method="post" role="form">
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
						<img class="img-responsive" src="assets/img/fq1.png" alt="">
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
					<img src="assets/img/ser01.png" width="180" alt="">
					<h4>1 - Crie seu avatar</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="assets/img/ser03.png" width="180" alt="">
					<h4>2 - Adicione suas tarefas</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="assets/img/ser02.png" width="180" alt="">
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
					<form class="form-inline" action="" role="form">
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
				      			<img src="assets/img/p01.png" alt="">
				    		</div>
				    		<div class="item">
				      			<img src="assets/img/p02.png" alt="">
				    		</div>
				    		<div class="item">
				      			<img src="assets/img/p03.png" alt="">
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
						
						<form class="form-inline" role="form" action="/ci/index.php/usuario/cadastro" method="post">
				  			<div class="form-group">
				   				<span style="font-size: 20px">Nome &nbsp</span>
				   				<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
				    			<br>
				   				<br>
				    			<span style="font-size: 20px">Email &nbsp</span>
				    			<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
				    			<br>
				    			<br>
				    			<span style="font-size: 20px">Senha &nbsp</span>
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
		
		<!-- FORM DE CONTATO -->
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
	</body>
</html>