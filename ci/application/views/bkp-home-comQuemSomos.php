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
					  		<br>
					  		<button type="button" class="btn btn-default btn-lg"><a href="#cadastro" style="color: black">Não tenho conta</a></button>
					  		<!--<span class="glyphicon glyphicon-ok" aria-hidden="true">	  </span>-->
						</form>					
					</div><!-- /col-lg-6 -->
					<div class="col-lg-6">
						<img class="img-responsive" src="<?= base_url('assets/img/fq1.png') ?>" alt=""> 
					</div><!-- /col-lg-6 -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /headerwrap -->
		<!---- FIM DA AREA DE LOGIN ---->
	
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
					<h4>1 - Objetivo</h4>
					<p>No cadastro, você informa qual é seu <strong>objetivo</strong> com a prática de exercícios:
					força, emagrecimento ou condicionamento físico.</p>
				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="<?= base_url('assets/img/ser02.png') ?>" width="180" alt=""> 
					<h4>2 - Exercícios de acordo com objetivo</h4>
					<p> Você terá sugestões de <strong>exercícios</strong> de acordo com o seu objetivo e seu nível.</p>
				</div><!--/col-lg-4 -->

				<div class="col-lg-4">
					<img src="<?= base_url('assets/img/ser03.png') ?>" width="180" alt="">
					<h4>3 - Dificuldade dos exercícios aumenta gradativamente</h4>
					<p>Os exercícios propostos vão <strong>aumentando</strong> de dificuldade conforme você vai concluindo.</p>
				</div><!--/col-lg-4 -->
			</div><!-- /row -->
		</div><!-- /container -->
		<!---- FIM DA AREA COMO FUNCIONA ---->
	
		<hr>
	
		<!---- AREA QUEM SOMOS ---->
		
		<div class="container" id="sobre">
			<div class="row mt centered">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>Conheça o FitQuest!</h1>
					<h3>Um novo jeito de praticar exercícios.</h3> 
					<h4>Simples e divertido.</h4>
					<p>O FitQuest é para você que sente muita dificuldade em manter uma rotina de exercícios e não sabe nem por onde começar.</p>
				</div>
			</div><!-- /row -->
	
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
			</div><!--/container QUEM SOMOS-->
			
			
			<hr>

			<!-- CADASTRE-SE -->
			<div class="container" id="cadastro">
				<div class="row mt centered">
					<div class="col-lg-6 col-lg-offset-3">
						<h1>Crie sua conta   
							<br>no FitQuest <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
						<br>
						<h3>Cadastre-se e participe do FitQuest.</h3>
					</div><!-- col-->
				</div><!-- /row -->
				<div class="row mt centered">
					<div class="col-lg-6">
						
						<form class="form-inline" role="form" action="/ci/index.php/usuario/cadastrar" method="post">
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
						<span style="font-size: 20px">Sexo</span>
						<fieldset style="" id="genero" required>
				  			<input type="radio" name="genero" value="true" id="m" checked> Masculino<br>
  							<input type="radio" name="genero" value="false" id="f"> Feminino<br>
						</fieldset>
				   		<br>
						<span style="font-size: 20px">Objetivo</span>
						<fieldset class="centered" id="foco" required>
				       		<input type="radio" name="foco" value="1" id="forca"> Força
				       		<br>
				       		<input type="radio" name="foco" value="2" id="emagrecimento"> Emagrecimento
				       		<br>
				       		<input type="radio" name="foco" value="3" id="condicionamento"> Condicionamento
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
		
		<!-- FORM DE CONTATO-->
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
								<button class="btn btn-primary dropdown-toggle center-block" type="button" data-toggle="dropdown">Selecione o assunto<span class="caret"></span></button>
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
	  		</div><!--col-lg-6 contato-->
	  	</div><!--row contato-->
	
	</body>
</html>