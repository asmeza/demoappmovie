<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Aplicacion XYZ</title>

    @include('layouts.meta')
    @include('layouts.estilos')
    @include('layouts.scripts')

  </head>
  <body>

 <div class="container-fluid">
    @include('layouts.menu')
    @include('layouts.encabezado')
	<div class="row">
		<div class="col-md-12">
			@yield('content')
		</div>
	</div>

  @include('layouts.pie')
</div>


  </body>

</html>
