
            <ul class="nav">
                <li>
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
                <li class="active">
                    <a href="/ci/index.php/perfil/dash"> 
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
            </ul>
    	</div><!--SIDEBAR-WRAPER-->
    </div><!--SIDEBAR-->


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
                    <a class="navbar-brand" href="#">Perfil do Usuário</a>
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
                </div><!--collapse navbar-collapse-->
            </div><!--container fluid-->
        </nav>
        
        
        <!-- fim do header VARIAVEL-->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Alterar Email</h4>
                            </div>
                            <div class="content">
                                <form action="/ci/index.php/usuario/AlteraPerfil" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Anterior</label>
                                                <input type="text" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Novo Email</label>
                                                <input type="text" class="form-control" placeholder="Email" name="novoemail">
                                            </div>
                                        </div>
                                    </div><!--row-->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control" placeholder="Senha" name="senha">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirme a senha</label>
                                                <input type="password" class="form-control" placeholder="Senha" name="Confirmar senha">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-4">
                                      <button type="submit" class="btn btn-info btn-fill">Alterar email</button>
                                          </div><!--col-md-4-->
                                    <div class="clearfix"></div>
                                </form>
                                    </div>
                            </div>
                    </div>
                  </div><!--col md-8-->
                  
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

                                      <h4 class="title"> <?= $nome ?> </h4>
                                    </a>
                                    
                                    <p style="font-weight: bold">Foco:  <span><?= $foco ?></span> </p> 
                                    
                                    <p style="font-weight: bold">Nível: <span><?= $nivel ?></span> </p>
                                    
                                    <p style="font-weight: bold">Email:  <span><?= $ds_email ?></span> </p>
                                    
                                </div>
                                
                                <p class="description text-center"> "Procurando uma vida <br>
                                                    mais saudável" <br>
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div><!-- FIM md-4 PERFIL CARD-->
                 </div><!--row-->
                </div>
		
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Excluir Conta</h4>
                            </div>
                            <div class="content">
                                <form action="/ci/index.php/usuario/DeletaUsuario" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control" placeholder="Senha" name="senha">
                                            </div>
                                        </div>
                                    </div><!--row-->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirme a senha</label>
                                                <input type="password" class="form-control" placeholder="Senha" name="Confirmar senha">
                                            </div>
                                        </div>
                                        
                                    <div class="col-md-4">
                                      <button type="submit" class="btn btn-danger btn-fill pull-right">Excluir Conta</button>
                                    </div><!--col-md-4-->
                                    <div class="clearfix">
                                    </div>
                                    </div><!--row-->
                                </div> <!--row-->   
                                </form>
                            </div><!--row escluir conta 2 -->
                        </div><!--content-->
                    </div><!--CARD-->
                </div><!--col-md-8-->
		</div><!--row escluir conta 1 -->
</div><!--contaeir fluid-->
</div><!--content-->

</div><!--CONTENT-->
		
	

</div><!--MAIN PAINEL-->



</body>

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


    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>