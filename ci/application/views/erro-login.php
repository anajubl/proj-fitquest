<!DOCTYPE html>
<html lang="pt-BR">
	
		<div id="headerwrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6"><!---- AREA DE LOGIN ---->
						
							<p style="color: white"><?php echo $errol;?></p>

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
		<hr>

			<!-- CADASTRE-SE -->
			<div class="container" id="cadastro">
				<div class="row mt centered">
					<div class="col-lg-6 col-lg-offset-3">
						<h1>Crie sua conta   
							<br> aqui <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
						<br>
						<h3>Faça parte do FitQuest.</h3>
					</div><!-- col-->
				</div><!-- /row -->
				<div class="row mt centered">
					<div class="col-lg-6">
						
						<form class="form-inline" role="form" action="/ci/index.php/usuario/cadastrar" method="post">
				  			<div class="form-group">
				   				<label>Nome &nbsp</label>
				   				<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
				    			<br>
				   				<br>
				    			<label>Email &nbsp</label>
				    			<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
				    			<br>
				    			<br>
				    			<label>Senha &nbsp</label>
				    			<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
				    			<br>
				    			<br>					
					  			<!--<span class="glyphicon glyphicon-ok" aria-hidden="true">	  </span>-->
	
							</div><!-- /form-->
						
					</div><!-- /col-lg-6 -->
				
					<div class="col-lg-6">
						<label>Sexo</label>
						<fieldset style="" id="genero" required>
				  			<input type="radio" name="genero" value="true" id="m" checked> Masculino<br>
  							<input type="radio" name="genero" value="false" id="f"> Feminino<br>
						</fieldset>
				   		<br>
						<label>Objetivo</label>
						<fieldset class="centered" id="foco" required>
				       		<input type="radio" name="foco" value="1" id="forca" checked> Força
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
					<h1>Fale Conosco <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
						</h1>
							<h3>Dúvidas? Sugestões?</h3>
					<br>
					<form class="form-inline" role="form" action="" method="post">
						<div class="form-group">
							<label>Nome &nbsp</label>
							<input type="text" class="form-control" name="nome" id="nome"  placeholder="Digite seu nome" required>
							<br>
							<br>
							<label>Email &nbsp</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
							<br>
							<br>
							<label>Assunto &nbsp</label>
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
							<label>Mensagem </label>
							<textarea class="form-control" rows="4" name="msg-contato" id="msg-cont"></textarea>
							
							<br>
						</div><!-- /form-group-->
						<br>
					</form>
				</div>
	  		</div><!--col-lg-6 contato-->
	  	</div><!--row contato-->
	
	</body>
</html>