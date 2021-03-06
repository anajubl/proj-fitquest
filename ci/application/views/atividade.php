<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
    </head>

	<body>
		<div class="container">
	  		<div class="lateral-esquerda col-md-4">
	  			<div class="foto-perfil">
	  				<img id="foto-user" src="" alt=""></img>
	  			</div>
	  			<ul>
	  				<li>Nome:<span id="nome"></spam></li>
					<li>Foco:<span id="foco"></spam></li>
					<li>Nivel:<span id="nivel"></spam></li>
	  			</ul>
	  			<a href="" id="sair" class="sair">Sair</a>
	  		</div>
	  		<div id="Atividade">
	  			<h1 id="nome-atividade"><?php echo $atividade->getNomeativ() ?></h1>
	  			<p id="ds_atividade"></p>
	  			<form id="form-fiz">
	  			Fiz?
	  			<label>
	  				<input type="radio" name="fiz" value="sim"> Sim
	  			</label>
	  			<label>
	  				<input type="radio" name="fiz" value="nao"> Não
	  			</label>
	  			<div class="lateral-direita">
	  				Por que e como foi?
	  				<input type="textarea" name="ds_exercicio" id="ds_exercicio"/>
	  			</div>
	  		</div>
  		</div>
  		
    
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>
  
	</body>
</html>