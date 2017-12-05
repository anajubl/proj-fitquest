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
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	
	    <!-- Custom styles for this template -->
	    <link href="assets/css/main.css" rel="stylesheet">
	
	    <!-- Fonts from Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	    
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	    
	    <!--CSS VITÃO-->
	    <link href="<?= base_url('assets/css/main2.css') ?>" rel='stylesheet' type='text/css'>
	</head>
    <body>
        <h1>BEM-VINDO <?= $nome ?> !!</h1>
    
    	<div class="container">
	  		<div class="lateral-esquerda col-md-4 red">
	  			<div class="foto-perfil">
	  				<img id="foto-user" src="<?= base_url('assets/img/'.$nome.'.jpg') ?>" alt=""></img>
	  			</div>
	  			<ul>
	  				<li>Nome: <span class="dados"><?= $nome ?></span></li>
					<li>Foco: <span class="dados"><?= $foco ?></span></li>
					<li>Nivel: <span class="dados"><?= $nivel ?></span></li>
	  			</ul>
                <a href="/ci/index.php/login/sair">Logout</a>
	  		</div>
	  		<div class="Atividades">
	  			<table>
	  			    <?php foreach($vetor as $atividade){ ?>
	  				<tr>
						<td>
						    <?php echo $atividade->getNomeativ() ?>
						</td>
						<td>
						    <a href="ci/index.php/usuario/ver-atividade"> Excluir X </a>
						</td>
						<td>
						    <a href="ci/index.php/usuario/ver-atividade"> Ver > </a>
						</td>
	  				</tr>
	  				<?php } ?>
	  			</table>
	  		</div>
	  	</div>

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
