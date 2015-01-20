<!DOCTYPE html>
<html>
<head>
	<title>Simple rejilla con boostrap</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	#container{
		margin-top: 100px;
	}
	footer 
	{
		background-color: #1b1b1b;
		background-image: -moz-linear-gradient(top, #222222, #111111);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#222222), to(#111111));
		background-image: -webkit-linear-gradient(top, #222222, #111111);
		background-image: -o-linear-gradient(top, #222222, #111111);
		background-image: linear-gradient(to bottom, #222222, #111111);
		background-repeat: repeat-x;
		border-color: #252525;
		color: #fff;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);
	}
	@media (max-width: 768px){
		.navbar-nav li{
			text-align: center;
		}
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navitagion"><!-- .nav -->
		<div class="container"><!-- .container -->
			<div class="navbar-header"><!-- .navbar-header -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span style="color: #fff">Pulsa para ver menú</span>
				</button>
			</div><!-- /.navbar-header -->

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Visita el blog</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Cursos de desarrollo web
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">PHP</a></li>
							<li><a href="#">Codeigniter</a></li>
							<li><a href="#">Laravel</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container -->
	</nav><!-- /.nav -->

	<div class="container" id="container"><!-- .container -->

		<div class="row"><!-- .row -->
			<div class="col-lg-8"><!-- .col-lg-8 -->
				<h1><a href="#">Plantilla para crear un blog con Boostrap 3</a></h1>
				<p>
					<span class="glyphicon glyphicon-time"></span> Escrito el 11-05-2014 a las 11:45</p>
				</p>
				<hr>
				<img src="http://placehold.it/900x300" class="img-responsive">
				<hr>
				<p>
					Este es el contenido de la entrada
				</p>
				<hr>
				<h1><a href="#">Otro post</a></h1>
				<p>
					<span class="glyphicon glyphicon-time"></span> Escrito el 11-05-2014 a las 11:45</p>
				</p>
				<hr>
				<img src="http://placehold.it/900x300" class="img-responsive">
				<hr>
				<p>
					Este es el contenido de la entrada
				</p>
			</div><!-- /.col-lg-8 -->

			<div class="col-lg-4"><!-- .col-lg-4 -->
				<div class="well"><!-- well -->
					<h4>Buscador</h4>
					<div class="input-group"><!-- input-group -->
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div><!-- /input-group --> 
				</div>
				<div class="well"><!-- well -->
					<h4>Entradas populares</h4>
					<div class="row"> <!-- well -->
						<div class="col-lg-6"><!-- col-lg-6 -->
							<ul class="list-unstyled">
								<li><a href="#codeigniter">Login codeigniter</a>
								</li>
								<li><a href="#phalcon">Login phalcon</a>
								</li>
								<li><a href="#laravel">Login laravel</a>
								</li>
								<li><a href="#php">Login php</a>
								</li>
							</ul>
						</div><!-- /col-lg-6 -->
						<div class="col-lg-6"><!-- col-lg-6 -->
							<ul class="list-unstyled">
								<li><a href="#codeigniter">Registro codeigniter</a>
								</li>
								<li><a href="#phalcon">Registro phalcon</a>
								</li>
								<li><a href="#laravel">Registro laravel</a>
								</li>
								<li><a href="#php">Registro php</a>
								</li>
							</ul>
						</div><!-- /col-lg-6 -->
					</div> <!-- /row -->
				</div> <!-- /well -->	
				<div class="well"><!-- well -->
					<h4>Sidebar con noticias</h4>
					<p>Aquí podemos mostrar una sección de noticias, seguidores de redes sociales y todo lo que necesitemos.</p>
				</div><!-- /well -->
			</div><!-- /.col-lg-4 -->

		</div><!-- /.row -->

	</div><!-- /.container -->

	<footer><!-- footer -->
		<div class="container-fluid">
			<div class="col-lg-12">
				<p class="text-center">Copyright &copy; Nombre de la empresa 2014</p>
			</div>
		</div>
	</footer><!-- /footer -->
</body>
</html>