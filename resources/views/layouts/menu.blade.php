<div class="row">
		<div class="col-md-12">
			<nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
				<div class="container"><div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Universidad de la Guajira</a>
				</div>
				<div id="w0-collapse" class="collapse navbar-collapse">
					<ul id="w1" class="navbar-nav navbar-right nav">
						<li><a href="{{ route('inicio')}}">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Peliculas<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('movie.index')}}">Listar</a>
								</li>
								<li>
									<a href="{{ route('movie.create')}}">Adicionar</a>
								</li>
								<li>
									<a href="#">Actualizar</a>
								</li>
								<li>
									<a href="#">Eliminar</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="{{ route('report1')}}">Reporte Basico</a>
								</li>
							</ul>
						</li>
						<li><a href="{{ route('user.index')}}">Usuarios</a></li>
						<li><a href="{{ route('loan.index')}}">Prestamos</a></li>
						<li><a href="{{ route('login')}}">Login</a>
						</li>
					</ul>
				</div>
					</div>
				</nav>
		</div>
	</div>
